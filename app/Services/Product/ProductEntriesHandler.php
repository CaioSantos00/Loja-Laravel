<?php
    namespace App\Services\Product;

    use Illuminate\Support\Facades\Storage;
    use App\Traits\Utils\ErrorsHandler;
    use App\Http\Requests\StoreProductRequest;
    use App\Services\Product\{
        Store,ValidateEntries,
        SanitizeEntries
    };
    use App\Interfaces\{
        Builder,
        DataSaver
    };
    /**
     * @uses ErrorHandler
     * @package App\Services\Product
    */
    class ProductEntriesHandler implements Builder
    {
        use ErrorsHandler;
        private function __construct(
            private array $productData,
            private array $colors,
            private array $sizes,
            private array $pictures,
            private DataSaver $dataSaver = new Store
        ){}
        public static function getProductEntriesHandler (StoreProductRequest $request): Builder|\stdClass
        {
            return (new self(
                [$request->name, $request->description, $request->availability ?? false],
                $request->cor, $request->tamanho, $request->file('pictures')
                ))->sanitize()->validate();
        }        
        public function sanitize () :Builder
        {
            $this->colors = SanitizeEntries::implementsNonSentedAvailabilities($this->colors);
            $this->sizes  = SanitizeEntries::implementsNonSentedAvailabilities($this->sizes);
            return $this;
        }
        public function validate () :Builder|\stdClass
        {
            $validatedEntries = ValidateEntries::validateSizesInputs(
                array_column($this->sizes,"tamanho"),
                array_column($this->sizes,"preco"),
                array_column($this->sizes,"check")
            );
            $entriesMissed = array_filter($validatedEntries, fn($val) => !$val["validated"]);
            if(count($entriesMissed) != 0){
                $this->setError("validation",$entriesMissed);
            }
            return $this->hasErrors()
                ? $this->getErrors()
                : $this;
        }
        public function storeProduct () :Builder
        {
            $this->dataSaver->saveProduct(...array_values($this->productData));
            return $this;
        }
        public function storeSizes () :Builder
        {
            array_walk(
                $this->sizes,
                fn(&$sizeInformation, $index) => $this->dataSaver->saveSize(...array_values($sizeInformation))
            );
            $this->dataSaver->dispatchSizes();
            return $this;
        }
        public function storeColors () :Builder
        {
            array_walk(
                $this->colors,
                fn(&$colorInformation, $index) => $this->dataSaver->saveColor(...array_values($colorInformation))
            );
            $this->dataSaver->dispatchColors();
            return $this;
        }
        public function storeFiles (){
            Storage::disk('product')->makeDirectory($this->dataSaver->productStoragePath);
            array_map(
                function($pictureObject){
                    Storage::disk('product')
                        ->putFileAs($this->dataSaver->productStoragePath, $pictureObject, $pictureObject->hashName());
                },
                $this->pictures
            );
        }
    }
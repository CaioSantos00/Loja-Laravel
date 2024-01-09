<?php
    namespace App\Services\Product;

    use App\Traits\Product\PrepareArgsSendToDatabase;
    use App\Interfaces\DataSaver;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    /**
     * @package App\Services\Product
     * @mixin CheckIfAllArraysHaveSameLength
     * @mixin PrepareArgsSendToDatabase
     * @api
     */
    class Store implements DataSaver
    {
        use PrepareArgsSendToDatabase;
        public string $productId;
        public string $productStoragePath = "imgs/";
        private \stdClass $itemsToSave;
        function __construct(){
            $this->itemsToSave = new \stdClass;
            $this->itemsToSave->colors  =
            $this->itemsToSave->sizes   = [];
        }        
        public function saveProduct(string $name, string $description, bool $availability) {
            $this->productStoragePath .=
            $this->productId =
                DB::table('product')
                    ->insertGetId([
                        'name' => $name,
                        'description' => $description,
                        'availability' => $availability
                    ]);            
        }

        public function saveSize(string $size, string $price, bool $availability){
            $this->itemsToSave->sizes[] = $this->prepareArgsSizes($size, $price, $availability);
        }
        public function dispatchSizes(){
            DB::table('sizes')->insert($this->itemsToSave->sizes);
        }

        public function saveColor(string $color, string $colorHex, bool $availability){
            $this->itemsToSave->colors[] = $this->prepareArgsColors($color, $colorHex, $availability);
        }
        public function dispatchColors(){
            DB::table('colors')->insert($this->itemsToSave->colors);
        }
    }

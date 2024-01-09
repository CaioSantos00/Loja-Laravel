<?php
    namespace App\Http\Controllers\Products;

    use App\Http\Controllers\Controller;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
    use Illuminate\View\View;
    use Illuminate\Support\Facades\{
        DB,
        Storage
    };
    use Illuminate\Http\{
        Request,
        RedirectResponse
    };
    use App\Models\Product;
    use App\Interfaces\Builder;
    use App\Http\Requests\StoreProductRequest;    
    use App\Services\Product\{
        ProductEntriesHandler,
        RedirectHandler
    };

    class ProductController extends Controller
    {
        public function __construct (){
            $this->middleware(
                ['auth','permission:admin'])
                ->except(['index','show']);
        }

        public function index() :View
        {
            $products = Product::where('availability',1)
                ->orderBy('id')
                ->cursorPaginate(4);
            dd($products);
            return view('produtos')->with('products',$products);
        
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create() :View{
            return view('adm.produto.cadastro');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(StoreProductRequest $request): RedirectResponse
        {
            try{
                $handler = ProductEntriesHandler::getProductEntriesHandler($request);
                    
                if(!$handler instanceof Builder)
                    return RedirectHandler::handleValidationFailure($handler);
                
                return DB::transaction(
                    function () use ($request, $handler) {
                        try{
                            $handler
                                ->storeProduct()
                                ->storeSizes()
                                ->storeColors()
                                ->storeFiles();
                            return RedirectHandler::successfulRedirect();
                        }
                        catch(\Exception $e){
                            return RedirectHandler::failureRedirect();
                        }
                    });                    
            }
            catch(\Exception $e){
                return RedirectHandler::failureRedirect();
            }
        }
        /**
         * Display the specified resource.
         */
        public function show(string $id) :View
        {
            try {
                $product = Product::findOrFail($id);

                $view = view('visualiProduto')->with([
                    'founded' => true,
                    'product' => (object) [
                        'data' => $product,
                        'colors' => $product->colors->where('availability',1),
                        'sizes' => $product->sizes->where('availability',1),
                        'pictures'=> Storage::disk("product")->files($id)
                    ]
                ]);
            }
            catch (ModelNotFoundException $e) {
                $view = view('visualiProduto')->with('founded', false);
            }
            finally{
                return $view ?? view('visualiProduto')->with('founded', false);
            }
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id) :View
        {
            try {
                $product = Product::findOrFail($id);

                $view = view('adm.produto.cadastro', [
                    'founded' => true,
                    'product' => $product,
                    'colors' => $product->colors,
                    'sizes' => $product->sizes,
                ]);
            }
            catch (ModelNotFoundException) {
                $view = view('adm.produto.cadastro', [
                    'founded' => false,
                ]);
            }
            finally{
                return $view;
            }
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            //
        }
    }

<?php
    namespace App\Services\Product;
    
    use Illuminate\Http\RedirectResponse;
    
    class RedirectHandler{
        public static function successfulRedirect(): RedirectResponse
        {
            return redirect()->route('product.create')->with('status', (object) ['ok' => true]);
        }
        
        public static function failureRedirect(): RedirectResponse
        {            
            return redirect()
                ->route('product.create')
                ->withInput()
                ->with('status', (object)[
                    'ok' => false,
                    'errorType' => 'internalError',
                ]);
        }
        public static function handleValidationFailure(\stdClass $handler): RedirectResponse
        {
            return redirect()
                ->route('product.create')
                ->withInput()
                ->with('status', (object) [
                    'ok' => false,
                    'errorType' => 'validation',
                    'validation' => $handler,
                ]);
        }        
    }
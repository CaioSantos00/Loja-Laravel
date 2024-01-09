<?php
    namespace App\Services\Product;

    use App\Traits\Product\ValidateInputs;

    /**
     * @package \App\Services\Product
     * @uses \App\Traits\Product\ValidateInputs
     * @mixin ValidateInputs
     * @api
    */
    class ValidateEntries{
        use ValidateInputs;
        private static function validateSizes(array $sizes) :array
        {
            return self::validateInputs($sizes,"there is a invalid size",
                function($sizesArray){
                    $wrongs = array_filter($sizesArray,
                        fn($size): bool => !preg_match("/^[a-zÀ-ú0-9\s]+$/ui", $size) === 1);
                    return count($wrongs) != 0
                        ? $wrongs
                        : false;
                });
        }
        private static function validateAvailabilities (array $availabilities) :array
        {
            return self::validateInputs($availabilities, "The provided availabilities array are invalid; it should be an array containing boolean values.",
                function($availabilitiesArray){
                    $wrongs = array_filter($availabilitiesArray,fn($availability): bool => !is_bool($availability));
                    return count($wrongs) != 0
                        ? $wrongs
                        : false;            
                });
        }
        private static function validatePrices (array $prices) :array
        {
            return self::validateInputs($prices, "The provided Prices array are invalid; it should have the money format I.E: xxxx,xx",
                function(array $pricesArray){
                    $wrongs = array_filter($pricesArray, fn($price): bool => !(is_numeric($price) or preg_match("/^\d{1,4}(\.\d{1,2})?$/", $price)));
                    return count($wrongs) != 0
                        ? $wrongs
                        : false;
                });
        }
        /**
         * @api
         * @acess public
         * @static
         * @param String[] Sizes Sizes to validate
         * @param String[] Prices Prices to validate
         * @param Boolean[] Availabilities Availabilities to validate
        */
        static function validateSizesInputs(array $sizes, array $prices, bool|array $availabilities)
        :array{                            
            return array_filter([
                "sizes" => self::validateSizes($sizes),
                "prices" => self::validatePrices($prices),
                "availabilities" => self::validateAvailabilities(is_bool($availabilities) ? [$availabilities] : $availabilities)
            ],fn($validation) => !$validation["validated"]);
        }
    }
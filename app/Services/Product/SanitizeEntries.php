<?php
    namespace App\Services\Product;

    class SanitizeEntries{                
        public static function implementsNonSentedAvailabilities(array $rawTable) :array{
            foreach($rawTable as $rawRowIndex => $rawRow){
                $rawTable[$rawRowIndex]["check"] = array_key_exists("check",$rawRow);
            }
            return $rawTable;
        }
        public static function convertPriceStringToDouble (array $rawTable) :array
        {
            $converter = function ($rawRow, $index){
                $rawRow['preco'] = (float) $rawRow['preco'];
                return $rawRow;
            };
            return array_map($converter, $rawTable);
        }
    }
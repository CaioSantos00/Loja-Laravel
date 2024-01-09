<?php
    namespace App\Traits\Product;
    
    trait PrepareArgsSendToDatabase{            
        private function prepareArgsSizes(string $size, string $price, bool $availability): array
          {
              return [
                  'product_id' => $this->productId,
                  'size' => $size,
                  'price' => $price,
                  'availability' => $availability
              ];
          }
      
          private function prepareArgsColors(string $color,string $colorHex ,bool $availability): array
          {
              return [
                  'product_id' => $this->productId,
                  'colorHex' => $colorHex,
                  'color' => $color,
                  'availability' => $availability
              ];
          }
        
    }
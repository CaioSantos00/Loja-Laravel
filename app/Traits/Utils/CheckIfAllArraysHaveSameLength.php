<?php
    namespace App\Traits\Utils;
    
    trait CheckIfAllArraysHaveSameLength{
        private function checkIfAllArraysHaveSameLength(): bool {
            $args = func_get_args();
            $lengthCounts = array_count_values(array_map('count', $args));

            return count($lengthCounts) === 1;
        }		
	}
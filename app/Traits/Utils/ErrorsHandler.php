<?php
    namespace App\Traits\Utils;
    
    trait ErrorsHandler{
        private \stdClass $errors;
        private function setError (string $type, array|string $error){
            if(empty($this->errors))
                $this->errors = new \stdClass;
            $this->errors->hasError = true;
            $this->errors->errorType = $type;
            $this->errors->error = $error;
        }
        
        public function hasErrors() :bool{
            return $this->errors->hasErrors ?? false;
        }
        public function getErrors() :\stdClass
        {
            return (object) [
                "errorType" => $this->errors->errorType,
                "error" => $this->errors->error
            ];
        }
    }
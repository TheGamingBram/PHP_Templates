<?php 

    class Person
    {
        //Properties and Methods goes here
        protected $Name;
        protected $EyeColor;
        protected $Age;

        public function __construct($Name, $EyeColor, $Age){
            $this->Name = $Name;
            $this->EyeColor = $EyeColor;
            $this->Age = $Age;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
?>
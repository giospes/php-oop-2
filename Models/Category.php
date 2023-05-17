<?php
    class Category{
        protected
        $category_id, $category_name;

        public function __construct(int $category_id, string $category_name){
            $this ->category_id = $category_id;
            $this ->category_name = $category_name;
        }

        public function setcategory_id(int $category_id){
            $this->category_id = $category_id;
        }

        public function getcategory_id(){
            return $this->category_id ;
        }

        public function setcategory_name(string $category_name){
            $this->category_name = $category_name;
        }

        public function getcategory_name(){
            return $this->category_name;
        }


    }



    
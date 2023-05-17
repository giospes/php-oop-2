<?php
    include __DIR__. '/Category.php';

    class Product extends Category{
        protected 
        $product_id, $product_name, $price, $img;

        public function __construct(int $product_id, string $product_name, int $price, string $img, $category_id, $category_name ){
            $this ->product_id = $product_id;
            $this ->product_name = $product_name;
            $this ->price = $price;
            $this ->img = $img;
            parent::__construct($category_id, $category_name);
        }


        public function setproduct_id($product_id){
            $this->product_id = $product_id;
        }

        public function getproduct_id(){
            return $this->product_id ;
        }

        public function setproduct_name($product_name){
            $this->product_name = $product_name;
        }

        public function getproduct_name(){
            return $this->product_name;
        }

        public function setprice($price){
            $this->price = $price;
        }

        public function getprice(){
            return $this->price;
        }

        public function setImg($img){
            $this->img = $img;
        }

        public function getImg(){
            return $this->img;
        }
    }

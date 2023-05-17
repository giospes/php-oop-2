<?php
    include __DIR__. '/Category.php';
    class Type extends category{
        protected 
        $type_id, $type_name;

        public function __construct(int $type_id, string $type_name, $category_id, $category_name ){
            $this ->type_id = $type_id;
            $this ->type_name = $type_name;
            parent::__construct($category_id, $category_name);
        }

    }
<?php
    include __DIR__.'/../Models/Product.php';

    $products = [];
    try{
        $products[] = new Product('1', 'cior', 26, 'hslwdjl', 1 ,'cibo', '1', 'cane');
        $products[count($products) - 1]->setWeight(80, 'kg');
    } catch (TypeError $e){
        echo  $e->getMessage();
    } catch (Exception $e){
        echo  $e->getMessage();
    }
    // new Product(2, 'crior', 26, 'hslwdjl', 2 ,'giocattoli', '1', 'cane'),
    // new Product(3, 'cio', 267, 'hslwdjl', 1 ,'cibo', '2', 'gatto'),
    // new Product(4, 'or', 2, 'hslwdjl', 2 ,'giocattoli', '1', 'cane'),
    // new Product(5, 'cor', 6, 'hslwdjl',12 ,'cibo', '1', 'cane')

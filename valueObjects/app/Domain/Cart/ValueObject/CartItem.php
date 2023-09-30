<?php

class CartItem
{
    private $id;
    private $items;

    

    public function addItem(Product $product, int $quantity)
    {
        $this->items[] = $items;
    }
}
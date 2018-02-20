<?php

namespace App;
use Session;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    /**Se restaura el carro anterior en el constructor para que no se pierdan los datos */


    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){
        /**Se establece el item con sus valores */
        $storedItem = ['qty' => 0,'price' => $item->price, 'item' => $item];
        if($this->items){
            /**Si el carro ya tiene el item, no se añade */
            if(array_key_exists($id, $this->items)){
                /**En caso de existir el item en el carro, se sobreescribe el item */
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        /**Se crea una nueva entrada en el array con el objeto */
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function deleteCart(){

        $this->totalQty = 0;
        $this->totalPrice = 0;
        $this->items = null;
    }

}

<?php
    namespace Classes;

    class Basket  implements \ArrayAccess
    {
        private $itemsList = [];
        
        public function offsetSet($i, $product)
        {
            /*if (!empty($product->getPrice())) {*/
                if(is_null($i)) {
                    $this->itemsList[] = $product;
                } else {
                   $this->itemsList[$i] = $product; 
                }
            /*}*/
        }

        public function offsetGet($i)
        {
            return isset($this->itemsList[$i]) ? $this->itemsList[$i] : null;
        }

        public function offsetExists($i)
        {            
            return isset($this->itemsList[$i]);
        }

        public function offsetUnset($i)
        {
            unset($this->itemsList[$i]);
        }

        public function getBasketPrice()
        {
            $total = 0;
            foreach ($this->itemsList as $item) {
                $total += $item->getTotalPrice();
            }
            return $total;
        }

        public function showInfo()
        {
            echo '<p><em><strong>Всего товаров в корзине: </strong></em>'.count($this->itemsList).'</p>';
            echo '<p><em><strong>Общая сумма заказа: </strong></em>'.$this->getBasketPrice().'</p>';
        }
    }
?>
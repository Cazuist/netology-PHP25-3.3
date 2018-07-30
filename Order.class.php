<?php
    namespace Classes;

    class Order 
    {
        private $orderList;
        
        public function __constarct($item)
        {
            $this->orderList = $item;
        }

        public function showOrderInfo()
        {
            foreach($this->order->itemsList as $num => $item) {
                echo '<h3>Товар: </strong></em>'.$item->getName().'. Цена: '. $item->getTotalPrice().'</p>';
            }

            echo '<p><em><strong>Всего товаров заказано: </strong></em>'.count($this->orderList).'</p>';
            echo '<p><em><strong>На сумму: </strong></em>'.$this->orderList->getBasketPrice().'</p>';
        }
    }
?>
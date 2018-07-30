<?php
    namespace Classes;

    abstract class Product implements \Core\infoInterface, \Core\constructInterface
    {
        protected $category;
        private $name;
        private $price;
        protected $discount = 0;
        
        public function __construct($category, $name, $price)
        {
            $this->category = $category;
            $this->name = $name;
            $this->price = $price; 
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }


        public function setDiscount($discount)
        {
            $this->discount = $discount;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function getDiscount()
        {
            return $this->discount;
        }

        public function getTotalPrice()
        {
            if ($this->discount) {
                return $this->price * (1 - $this->discount / 100);
            } else {
                return $this->price;
            }
        } 

        public function getName()
        {
            return $this->name;
        }       

        public function showFullInfo()
        {
            echo '<p><em><strong>Категория: </strong></em>'.$this->category.'</p>';
            echo '<p><em><strong>Наименование: </strong></em>'.$this->name.'</p>';
            echo '<p><em><strong>Цена: </strong></em>'.$this->getTotalPrice().'</p><hr>';
            $this->showInfo();
        }

        abstract public function showInfo();
    }
?>
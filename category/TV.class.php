<?php
    namespace Classes\Category;
    use Classes\Product;

    final class TV extends Product implements \Core\TVInterface
    {
        private $isColor = true;
        private $width;
        private $height;

        public function setColor($color)
        {
            $this->isColor = $color;
        }

        public function setParams($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }

        public function getColorInfo()
        {
            return $isColor ? 'цветной' : 'черно-белый';
        }

        public function getDiagonal()
        {   
            $diagonal = ceil(sqrt(pow($this->width, 2) + pow($this->height, 2)));
            return $diagonal ? $diagonal : 'Нет данных о размере';      
        }

        public function showInfo()
        {
            echo '<p><em><strong>Цветность: </strong></em>'.$this->getColorInfo().'</p>';
            echo '<p><em><strong>Диагональ телевизора: </strong></em>'.$this->getDiagonal().'</p>';
        }
    }
?>
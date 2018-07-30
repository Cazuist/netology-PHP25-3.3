<?PHP    
    namespace Classes\Category;
    use Classes\Product;

    final class Car extends Product
    {
        private $color;
        private $year;

        public function setColor($color) 
        {
            $this->color = $color;
        }

        public function setYear($year) 
        {
            $this->year = $year;
        }

        public function showInfo()
        {
            echo '<p><em><strong>Цвет товара: </strong></em>'.$this->color.'</p>';
            echo '<p><em><strong>Год выпуска: </strong></em>'.$this->year.'</p>';
        }
    }
?>
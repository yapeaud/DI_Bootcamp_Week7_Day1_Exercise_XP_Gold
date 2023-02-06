<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
        class MyCalculator {
        private $_fval, $_sval;
        public function  __construct( $fval, $sval ) {
        $this->_fval = $fval;
        $this->_sval = $sval;
        }
        public function add() {
        return $this->_fval + $this->_sval;
        }
        public function subtract() {
        return $this->_fval - $this->_sval;
        }
        public function multiply() {
        return $this->_fval * $this->_sval;
        }
        public function divide() {
        return $this->_fval / $this->_sval;
        }
        }
        $mycalc = new MyCalculator(12, 6); 
        echo $mycalc-> add()."<br>";  
        echo $mycalc-> multiply()."<br>"; 
        echo $mycalc-> subtract()."<br>";
        echo $mycalc-> divide()."<br>"
        ;     ?>
    <hr>
    <h1>Exercise 2</h1>
        <?php
            class Product{
                // Properties
                public $name;
                public $description;
                public $price;
            }
                // Create new instance
                $product1 = new Product;
                $product2 = new Product;

                // Set instance property name
                $product1->name = 'iPhone 14';
                $product2->name = 'iPhone 14 Pro';

                // Display on screen
                echo $product1->name;
                echo"<br>";
                echo $product2->name;
        ?>
    <hr>
    <h1>Exercise 3</h1>
        <?php
            class Products{
                // Properties
                public $name;
                public $description;
                public $price;

                //Methods
                function __construct($name, $description, $price){
                    $this->name = $name;
                    $this->description = $description;
                    $this->price = $price;
                }
                
            }
                // Create new instance
                $product1 = new Products('iPhone 12', 'This is a great iPhone', 799.99);
                $product2 = new Products('iPhone 12 Pro', 'This is a great Pro iPhone', 999.99);
        
                // Display on screen
                $product1->__construct('iPhone 12', 'This is a great iPhone', 799.99);
                echo $product1->name . " " . $product1->description . " " . $product1->price;
        ?>
    <hr>
</body>
</html>
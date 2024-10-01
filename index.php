<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <?php

    class Animals {
    protected $weight; 
    protected $age; 
    protected $color; 

    public function __construct($weight, $age, $color) {
        $this-> weight = $weight;
        $this-> age = $age;
        $this-> color = $color;

    }

    public function getInfo() {
        return "Вес: {$this->weight} килотонн блин, Возраст: {$this->age} лет, Окрасочка: {$this->color}";
    }
}
class Lion extends Animals {
    private $dance; 

    public function __construct($weight, $age, $color, $dance) {
        parent::__construct($weight, $age, $color);
        $this->dance = $dance;
    }

    public function dan() {
        return "Лев жестко танцует лезгинку: {$this->dance}";
    }

    public function getInfo() {
        return parent::getInfo() . ", Столько лвов денсят: {$this->dance}";
    }
}

class Rabbit extends Animals {
    private $eat; 

    public function __construct($weight, $age, $color, $eat) {
        parent::__construct($weight, $age, $color);
        $this->eat = $eat;
    }

    public function havat() {
        return "Кролики едят детей: {$this->eat} молодых";
    }

    public function getInfo() {
        return parent::getInfo() . ", Столько кролики съели детей: {$this->eat} карапузов";
    }
}
// Аскар Хусаинов это сделал
class Wolf extends Animals {
    private $cat; 

    public function __construct($weight, $age, $color, $cat) {
        parent::__construct($weight, $age, $color);
        $this->cat = $cat;
    }

    public function cat() {
        return "Волк на самом деле кот: {$this->cat}";
    }

    public function getInfo() {
        return parent::getInfo() . ", Столько волков коты: {$this->cat}";
    }
}$lion = new Lion(1000, 20, 'сИНИЙ', 10);
$rabbit = new Rabbit(204024, 800, 'Париж', 10);
$wolf = new Wolf(20002442, 2, 'Колбаса', 'мяумяумяу');
echo "Информация о льве: " . $lion->getInfo() . "\n";
echo $lion->dan() . "\n\n";
echo "Информация о кролике: " . $rabbit->getInfo() . "\n";
echo $rabbit->havat() . "\n\n";
echo "Информация о волке: " . $wolf->getInfo() . "\n";
echo $wolf->cat() . "\n";
    ?>

</body>
</html>
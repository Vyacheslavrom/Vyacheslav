<?php
    interface Draw {

      public function draw();
    }


    abstract class Shape implements Draw{

        protected $x;
        protected $y;


        public function __toString(){
          return print_r($this, true);
        }
    }

    class Circle extends Shape{

        private $r;

        public function __construct($x, $y, $r){
            $this->x = $x;
            $this->y = $y;
            $this->r = $r;
        }

         public function draw(){
           echo'Рисуем окружность с координатами центра'.$this->x.' и '.$this->y;
           echo '<br/>Радиус'.$this->r;
         }
    }
    class Rectangle extends Shape{

        private $w;
        private $h;

        public function __construct($x, $y, $w, $h){
            $this->x = $x;
            $this->y = $y;
            $this->w = $w;
            $this->h = $h;
          }
        public function draw(){
            echo'Рисуем прямоугольник  с координатами левого верхнего угла'.$this->x.' и '.$this->y;
            echo'<br/>Ширина;'.$this->w.'Высота'.$this->h;
              }
    }
    $circle = new Circle(5, 8, 10);
    $rect = new Rectangle(20, 20, 40, 10);
    $r = new Rectangle(210, 210, 320, 192);
    $list = [$circle, $rect, $r];
    foreach ($list as $i){
      //if ($i instanceof Circle) $i->drawCircle();
      //elseif ($i instanceof Rectangle) $i->drawRect();
      $i->draw();
      echo'<br/>';
    }
?>

<?php
    class Test{
        public $x = 5;
    }
    class Request{

      public $t;
      private $data;

      public function __construct(Test $t){
           $this->t = $t;
           $this->data = $_REQUEST;

      }

      public function __get($name){
        if (isset($this->data[$name])) return $this->data[$name];
        return null;
      }

      public function __set($name, $value){
        $this->data[$name] = $value;
      }

      public function __isset($name){
        return isset($this->data[$name]);
      }

      public function __unset($name){
        unset($this->data[$name]);
      }
      public function __toString(){
        $s = '';
        foreach ($this->data as $k => $v) $s .= "$k = $v;";
         return $s;
      }
      public function __clone(){
         $this->t = clone $this->t;
      }
      public function __call($method, $args){
          echo "$method не cуществует,  поэтому реализовать его нельзя".'<br/>';
          echo "Переданные параметры:".print_r($args, true).'<br/>';
      }
    }

    $request = new Request(new Test());
    print_r($request);

    echo $request->a.'<br/>';

    $request->a = 5;
    echo $request->a.'<br/>';

    echo isset($request->a).'<br/>';

    echo $request.'<br/>';

    $r = $request;
    $request->a =8;
    echo $r->a.'<br/>';

    $r = clone $request;
    $request->a = 10;
    echo $r->a.'<br/>';

    echo '----------------'.'<br/>';

    echo $request->t->x.'<br/>';
    $request->t->x = 15;
    echo $r->t->x.'<br/>';
    echo '----------------'.'<br/>';
    echo $request->notfound(5, 9, -7);

    unset($request->a);
        echo $request->a.'<br/>';
echo $request->b.'<br/>';

 ?>

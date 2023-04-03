<?php
    abstract class BangunDatar{
    
    abstract protected function area();
    abstract protected function circumference();
    abstract static protected function enlerge();
    abstract static protected function shrink();
    abstract static protected function describtor();

  }
 


  class Persegi extends BangunDatar{
     private float $sisi;

    public function area(){
      return pow($this->sisi,2);
    }
    public function circumference(){
      return pow($this->sisi,4);
    }
    public static function enlerge(){
       echo "memperbesar";
    }
    public static function shrink(){
       echo "memperkecil";
    }
    public static function describtor(){
        echo "Bangun datar ini adalah persegi. yang memiliki luas $persegi->area() dan keliling $persegi->circumference";
   }
  }
 
  class PersegiPanjang extends BangunDatar{
        private float $panjang;
        private float $lebar;

    public function area(){
      return ($this->panjang * $this->lebar);
    }
    public function circumference(){
      return (2*($this->panjang + $this->lebar));
    }
    public static function enlerge(){
       echo "memperbesar";
    }
    public static function shrink(){
       echo "memperkecil";
    }
    public static function describtor(){
        echo "Bangun datar ini adalah persegi panjang. yang memiliki luas $persegipanjang->area() dan keliling $persegipanjang->circumference";
   }
  }
  
  class Lingkaran extends BangunDatar{
    protected $jarijari = 7;
    
    public function area(){
      return (3.14 * pow($this->jarijari,2));
    }
    public function circumference(){
      return (3.14 *2 * $jarijari + $jarijari);
    }
    public static function enlerge(){
       echo "memperbesar";
    }
    public static function shrink(){
       echo "memperkecil";
    }
    public static function describtor(){
       echo "Bangun datar ini adalah Lingkaran. yang memiliki luas $lingkaran->area() dan keliling $lingkaran->circumference";
   }
  }

  class Describe {
    public static function describtor(){
        $persegi = new Persegi();
        echo "Bangun datar ini adalah persegi. yang memiliki luas $persegi->area() dan keliling $persegi->circumference";
        $persegipanjang = new PersegiPanjang();
        echo "Bangun datar ini adalah persegi panjang. yang memiliki luas $persegipanjang->area() dan keliling $persegipanjang->circumference";
        $lingkaran = new Lingkaran();
        echo "Bangun datar ini adalah Lingkaran. yang memiliki luas $lingkaran->area() dan keliling $lingkaran->circumference";
    }
 }
         $describe = new Describe();


?>
<?php

class MyCripty {

    public $chave = 3;

    public $add_text = "LifHeal*123";

    function enc($word){
       $word .= $this->add_text;
       $s = strlen($word)+1;
       $nw = "";
       $n = $this->chave;
       for ($x = 1; $x < $s; $x++){
           $m = $x*$n;
           if ($m > $s){
               $nindex = $m % $s;
           }
           else if ($m < $s){
               $nindex = $m;
           }
           if ($m % $s == 0){
               $nindex = $x;
           }
           $nw = $nw.$word[$nindex-1];
       }
       return $nw;
    }

    function dec($word){
       $s = strlen($word)+1;
       $nw = "";
       $n = $this->chave;
       for ($y = 1; $y < $s; $y++){
           $m = $y*$n;
           if ($m % $s == 1){
               $n = $y;
               break;
           }
       }
       for ($x = 1; $x < $s; $x++){
           $m = $x*$n;
           if ($m > $s){
               $nindex = $m % $s;
           }
           else if ($m < $s){
               $nindex = $m;
           }
           if ($m % $s == 0){
               $nindex = $x;
           }
           $nw = $nw.$word[$nindex-1];
       }
       $t = strlen($nw) - strlen($this->add_text);
       return substr($nw, 0, $t);
    }

}
/*
$mc = new MyCripty();
$mc -> chave = 97;
$mc -> add_text = md5(sha1("texto chave aqui"));
$enc = $mc -> enc("Exemplo de criptografia.");
$dec = $mc -> dec($enc);
echo "<p>Criptografia: $enc</p>
        <p>Reversa: $dec</p>";
*/
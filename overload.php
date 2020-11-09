<?php
class MathComplex {
    public $re, $im;
    function __construct($im = 5, $re = 3)
    {
        $a = func_get_args();
        $i = func_num_args();
            switch ($i){
                case 1:
                    if ($a[0] instanceof MathComplex){
                        $this->re = $a[0]->re;
                        $this->im = $a[0]->im;
                    }
                    else{
                        $this->re = $re;
                        $this->im = $im;
                    }
                    break;
                case 2:
                    if (floatval($a[0]) !== false && floatval($a[1]) !== false){
                        $this->re = $a[0];
                        $this->im = $a[1];
                    }
                    else{
                        $this->re = $re;
                        $this->im = $im;
                    }
                    break;
                default:
                    $this->re = $re;
                    $this->im = $im;
            }
    }
    public function __toString()
    {
        return "im = $this->im; re = $this->re";
    }
}
$mc1 = new MathComplex(4, 6);
$mc2 = new MathComplex($mc1);
$mc3 = new MathComplex();

echo $mc1."\n";
echo $mc2."\n";
echo $mc3."\n";


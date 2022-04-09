<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 function is_prime($number) 
 {
    if($number==1){
        return false;
    }
    if ($number==2) {
        return true;
        # code...
    }
    
    $x=sqrt($number);
    $x = floor($x);

    for($i=2 ; $i <= $x; ++$i){
        if ($number % $i ==0) {
            break;
        }
    }

    if ($x==$i-1){
        return true;
    }else {
        return false;
    }
 } 
 
 function cekPrima($n,$m){
     $jumlah = 0;
     for ($i =$n; $i <=$m ; $i++){
         if(is_prime($i)){
             echo $i.', ';
             $jumlah++;
         }
     }
 
 echo "<br> jumlah bilangan prima ".$jumlah."<br>";
    }
cekPrima(0,100);
?>
</body>
</html>
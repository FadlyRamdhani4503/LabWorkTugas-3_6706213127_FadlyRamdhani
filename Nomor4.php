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
function cekPrima($n,$m){
    if($n >= $m){
        echo "Batasan Nilai salah";
        
    }else {
        $jumlah=0;
        for($n;$n<=$m;$n++){
        $counter=0;
        for($i=1; $i <=$m; $i++){
            if($n % $i==0){
                $counter++;
            }
        }
    if ($counter==2) {
        echo "$n, ";
        $jumlah++;
    
    }
    }
 echo 'ditemukan' .$jumlah.' bilangan Prima<br>';
}
}
cekPrima(1,11);
?>
</body>
</html>
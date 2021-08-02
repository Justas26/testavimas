<?php
echo '<br>';
echo '1 uzdavinys';
echo '<br>';
foreach(range(0,100) as $i){
    $masyvas[$i]=rand(0,100);
}
foreach($masyvas as $index){
    if($index %10==0){
        $masyvas[$index]='A';
    }else if($index %10!=0){
        $masyvas[$index]='B'; 
    }
}
echo '<pre>';
print_r($masyvas);
echo '<br>';
echo '2 uzdavinys';
echo '<br>';
$komoda=[];
foreach(range(0,100)as $stalcius){
    foreach(range(rand(3,10),rand(3,10))as $skyrelis){
        $komoda[$stalcius][$skyrelis]=chr(rand(65,66));
       
    }
}
print_r($komoda);
echo '<br>';
echo '3 uzdavinys';
echo '<br>';
foreach(range(0,100)as $stalcius){
    foreach(range(rand(3,20),rand(3,20))as $skyrelis){
        foreach($komoda as $index){
            if ($index==10){
                echo 'tokio masyvo kurti nereikia';
        }else {   
        $komoda[$stalcius][$skyrelis]=chr(rand(65,67));
       
    }
}
    }
 }
 print_r($komoda);


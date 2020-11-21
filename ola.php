<?php
    global $ten,$fifty,$hun;
    $pickup=$_REQUEST["pickup"];
    $drop=$_REQUEST["drop"];
    $cartype=$_REQUEST["cartype"];
    $weight=$_REQUEST["weight"];
     $location = array(
        array(
            "Charbagh"=>0,
            "IndraNagar"=>10,
            "BBD"=>30,
            "Barabanki"=>60,
            "Faizabad"=>100,
            "Basti"=>150,
            "Gorakhpur"=>210,
        )
    );
    foreach($location as $key1=>$tab){
        if($key1==$pickup){
            $pickupkm=$tab[$pickup];
        }
        if($key1==$drop){
            $dropkm= $tab[$drop];
        }
    }
    $totaldistance=abs($pickupkm-$dropkm);
    echo "Total Distance : ".$totaldistance."KM"."\n";
    if($cartype=="Micro"){
        $fare=50;
        if($totaldistance<=10){
            $firstten=$totaldistance*13.5;
            $fare=$fare+$firstten;
            echo "Total Fare :  $".$fare;
        }
        if($totaldistance>10 && $totaldistance<=50){
            $ten=10*13.5;
            $dis=$totaldistance-10;
            $nextfifty=$dis*12;
            $fare=$fare+$nextfifty+$ten;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>50 && $totaldistance<=100){
            $ten=10*13.5;
            $fifty=50*12;
            $dis=$totaldistance-60;
            $nexthun=$dis*10.20;
            $fare=$fare+$nexthun+$ten+$fifty;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>100){
            $ten=10*13.5;
            $fifty=50*12;
            $hun=100*10.2;
            $dis=$totaldistance-160;
            $above=$dis*8.50;
            $fare=$fare+$hun+$ten+$fifty+$above;
            echo "Total Fare : $".$fare;
        }
    }
    if($cartype=="Mini"){
        $fare=150;
        if($weight == "")
        {
            $fare=$fare+0;
        }
        if($weight<=10){
            $fare=$fare+50;
        }
        if($weight>10 && $weight<=20){
            $fare=$fare+100;
        }
        if($weight>20){
            $fare=$fare+200;
        }
        if($totaldistance<=10){
            $firstten=$totaldistance*14.5;
            $fare=$fare+$firstten;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>10 && $totaldistance<=50){
            $ten=10*14.5;
            $dis=$totaldistance-10;
            $nextfifty=$dis*13;
            $fare=$fare+$nextfifty+$ten;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>50 && $totaldistance<=100){
            $ten=10*14.5;
            $fifty=50*13;
            $dis=$totaldistance-60;
            $nexthun=$dis*11.20;
            $fare=$fare+$nexthun+$ten+$fifty;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>100){
            $ten=10*14.5;
            $fifty=50*13;
            $hun=100*11.2;
            $dis=$totaldistance-160;
            $above=$dis*9.50;
            $fare=$fare+$hun+$ten+$fifty+$above;
            echo "Total Fare : $".$fare;
        }
    } 
    if($cartype=="Sedan"){
        $fare=200;
        if($weight<=10){
            $fare=$fare+50;
        }
        if($weight>10 && $weight<=20){
            $fare=$fare+100;
        }
        if($weight>20){
            $fare=$fare+200;
        }
        if($totaldistance<=10){
            $firstten=$totaldistance*15.5;
            $fare=$fare+$firstten;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>10 && $totaldistance<=50){
            $ten=10*15.5;
            $dis=$totaldistance-10;
            $nextfifty=$dis*14;
            $fare=$fare+$nextfifty+$ten;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>50 && $totaldistance<=100){
            $ten=10*15.5;
            $fifty=50*14;
            $dis=$totaldistance-60;
            $nexthun=$dis*12.20;
            $fare=$fare+$nexthun+$ten+$fifty;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>100){
            $ten=10*15.5;
            $fifty=50*14;
            $hun=100*12.20;
            $dis=$totaldistance-160;
            $above=$dis*10.50;
            $fare=$fare+$hun+$ten+$fifty+$above;
            echo "Total Fare : $".$fare;
        }
    }
    if($cartype=="Suv"){
        $fare=250;
        if($weight<=10){
            $fare=$fare+100;
        }
        if($weight>10 && $weight<=20){
            $fare=$fare+200;
        }
        if($weight>20){
            $fare=$fare+400;
        }
        if($totaldistance<=10){
            $firstten=$totaldistance*16.5;
            $fare=$fare+$firstten;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>10 && $totaldistance<=50){
            $ten=10*16.5;
            $dis=$totaldistance-10;
            $nextfifty=$dis*15;
            $fare=$fare+$nextfifty+$ten;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>50 && $totaldistance<=100){
            $ten=10*16.5;
            $fifty=50*15;
            $dis=$totaldistance-60;
            $nexthun=$dis*13.20;
            $fare=$fare+$nexthun+$ten+$fifty;
            echo "Total Fare : $".$fare;
        }
        if($totaldistance>100){
            $ten=10*16.5;
            $fifty=50*15;
            $hun=100*13.20;
            $dis=$totaldistance-160;
            $above=$dis*11.50;
            $fare=$fare+$hun+$ten+$fifty+$above;
            echo "Total Fare : $".$fare;
        }
    }
    
?>
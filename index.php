<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>First Lesson</title>
</head>
<body>
    <?php 
        // echo "hello";
        // $a=5;
        // $b=6.4;
        // $c=$a+$b;
        // echo " .$c";
        // echo " <br>"; 
        // echo 'kq' .$c;
        // //'' chi la ky tu ko nhan dien duoc bien nhu ""
        // echo "<hr>";

        // hang : define
       // define("PI", "3.14");
     
        //echo " <h3> diện tích hình tròn là: $s </h3>";
        /**  TÍNH DIỆN TÍCH HÌNH TRÒN 
         * @param $r ban kinh hinh tron
         * @return diện tích hình tròn
         */
        function dientich($r){
            //$s =PI*$r*$r;
            $s= M_PI*pow($r,2);
            return $s;
        }
       
        $r = 5;
        $s =dientich($r);
        echo "<h3> BÀI 1: diện tích với r=$r là : $s </h3><br>";
        //--------------------------------------------------
        function sum($sn){
            $s=0;
            for ($i=1;$i<=$sn;$i++) { 
                $s=$s+$i;
            }
            return $s;
        }
        $n=5;
        $tong =sum($n);
        echo "<h3>BÀI 2: Với N= $n Ta có từ 1 đến $n  là : $tong</h3>";

        //------------------------------------------------------
        
        function  displayToday(){
            //w: lay ngay trong tuan
            $dayofweek =[
                "CHỦ NHẬT",
                "THỨ HAI",
                "THỨ BA",
                "THỨ TƯ",
                "THỨ NĂM",
                "THỨ SÁU",
                "THỨ BẢY"
            ];
            $day = date("w"); //w =[0,1,2,3,4,5,6,7]
            var_dump($day);
            return $dayofweek[$day];
        }
        $h= displayToday();
        echo "<h3>BÀI 3: Hôm nay là thứ mấy ? chắc chắn là thứ : $h</h3>";
    ?>
    
   
</body>
</html>

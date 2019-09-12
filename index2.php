<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form> 
        <fieldset>
        <!-- ?? toan tu 3 ngoi  -->
        <input placeholder="Số thứ nhất :" type="text" name="num1" value="<?php echo $_GET["num1"]?? ""; ?>">
        <input placeholder="Số thứ hai :" type="text" name="num2" value="<?php echo $_GET["num2"] ?? ""; ?>">
    
        <select name="toanhang">
            <option value="none">Hãy Chọn Phép Tính</option>
            <option <?php echo $_GET["toanhang"]=="add" ? "selected" : ""; ?> value="add">+</option>
            <option <?php echo $_GET["toanhang"]=="sub" ? "selected" : ""; ?> value="sub">-</option>
            <option <?php echo $_GET["toanhang"]=="mul" ? "selected" : ""; ?> value="mul">*</option>
            <option <?php echo $_GET["toanhang"]=="div" ? "selected" : ""; ?> value="div">/</option>
           
        </select>
        <button name="btnTinh" type="submit" value="1">Tính</button>

        <?php 
            if(isset($_GET["btnTinh"])){
                $num1=$_GET["num1"];
                $num2=$_GET["num2"];
                $toanhang = $_GET["toanhang"];
                $sign = "";


                switch($toanhang){
                    case 'add':
                    $kq= $num1+$num2;
                    $sign = "+";
                    break;

                    case 'sub':
                    $kq= $num1-$num2;
                    $sign = "-";
                    break;

                    case 'mul':
                    $kq= $num1*$num2;
                    $sign = "*";
                    break;

                    case 'div':
                    $kq= $num1/$num2;
                    $sign = "/";
                    break;

                    default:
                        $kq=" Vui lòng chọn phép tính trước !";

                }


             
                echo "<h3> ket qua = $kq </h3>";
            }
        ?>
        </fieldset>
    </form>
</body>
</html>
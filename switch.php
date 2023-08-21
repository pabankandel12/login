<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case</title>
    <style>
    .ouput{
        color: #000;
        font-size : 14px;
    }
   </style>
</head>
<body>
    <?php
$l=4;
$b= 23;
$choice = "p";
switch ($choice) {
    case 'a':
        $area = $l*$b;
        echo "Area of rectangle:" .$area;
        break;

         case 'p':
        $peri = 2*($l+$b);
        echo "Area of perimeter:" .$peri;
        break;
    
    default:
        # code...
        break;
}

   ?>


   <form action="switch.php" method="POST" >
    <div class="inputnumber">
        <span>Enter first number :</span>
        <input type="number" name="num1" required>
    </div>
        <div class="inputnumber">
        <span>Enter second number :</span>
        <input type="number" name="num2" required>
    <div class="inputnumber">
        <button type="submit" name="submit">Calculate</button>
        <?php
   if (isset($_POST['submit'])) {
    $num1= $_POST['num1'];
    $num2 = $_POST['num2'];
    echo "<div class = 'output'>";
    echo "Sum of two number".($num1+$num2);
    echo "</div>";
   }
   ?>
    </div>
    </div>
   </form>
</body>
</html>
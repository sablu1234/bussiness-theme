<?php

// $count= 1;
// while ($count<=5) {
// echo "hello, $count<br>";
// $count+=2;
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#">
<select name="" id="">





<?php
$year= 2000;
while($year<2005){
   echo "<option value='$year'>$year</option>";
    $year++;
}

?>


</select>

</form>


</body>
</html>
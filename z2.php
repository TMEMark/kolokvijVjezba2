<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>
<body>
    <form method="post">
        Prvi broj: <input name="br1" value="Prvi broj" type="number">
        Drugi broj: <input name="br2" value="Prvi broj" type="number">
        <input type="submit" name="submit" value="Prikaži">
    </form>
    <?php
        $br1 = $_POST["br1"];
        $br2 = $_POST["br2"];
        if(isset($_POST["submit"]) && $_POST["submit"]=="Prikaži"){
            for ($i=$br1+1;($i > $br1) && ($i < $br2); $i++) { 
                if($i % 2 == 1){
                    echo $i . "<br/>";
                }
            }
        }
    ?>
</body>
</html>

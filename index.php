<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
        <div align="center">
            <h1>Введите год.</h1> <br>
            <input type="number" maxlength="4" minlength="4" min="1900" max="2100" name="year">
            <button type="submit">Submit</button>

        </div>
    <div align="center">
        <?php
        if(isset($_POST['year'])!=false){
            if($_POST['year']%4==0){
                $days = 366;
                $hour = 24*$days;
                $minutes = $hour * 60;
                $seconds = $minutes *60;
                echo '<br>'.$_POST['year'].' высокосный год! Количество секунд в году '.$seconds.' Результат задания - '. $seconds%2;
            }else{
                $days = 365;
                $hour = 24*$days;
                $minutes = $hour * 60;
                $seconds = $minutes *60;
                echo '<br>'.$_POST['year'].' не высокосный год! Количество секунд в году '.$seconds.' Результат задания - '. $seconds%2;
            }
            ;

        }

        ?>
    </div>
</form>
</body>
</html>


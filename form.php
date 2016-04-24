<?php
/**
 * Created by PhpStorm.
 * User: olexa
 * Date: 24.04.2016
 * Time: 20:34
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div align="center">
        <form action="#" method="POST">
            <input type="text" name="username" placeholder="username" required/><br><br>
            <input type="text" name="email" placeholder="email" required/><br><br>
            <input type="text" name="message" placeholder="message" required/><br><br>
            <button>Submit</button>
            <!--name, email, phone -->
        </form>
    </div>
    <div>
        <?php
            if(isset($_POST['username'])!=false){
                echo $str  = serialize($_POST);
                        }
        ;?>
    </div>
</body>
</html>
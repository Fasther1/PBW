<?php
    if(isset($_GET["submit"])) {
        $var1 = $_GET["input_1"];
        echo $var1;
    }
?>

<html>
    <header>
        <title></title>
    </header>
    <body>
        <form action="" method="GET">
            <input type="text" name="input_1" value="">
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </body>
</html>
<?php
session_start();
?>
<!Doctype html>
<html>
    <head>

    </head>

    <body>
        <form action="login_script.php" method="POST">
        <input type="mail" name="email" required><br>
        <input type="password" name="passwort" required><br>
        
        <?php if(isset($_SESSION['fehlermeldung'])){
            echo "<p>". $_SESSION['fehlermeldung']. "</p>";
            unset($_SESSION['fehlermeldung']);
        } ?>
        <input type="submit" name="submit" value="Abschicken">
        </form>
        
    </body>
</html>
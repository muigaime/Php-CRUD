<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="save_div">
    <form action="updateprocess.php" method="POST">
        <?php
        if(isset($_GET['jina_yetu'])){
            $id = $_GET['id_yetu'];
            $name = $_GET['jina_yetu'];
            $email = $_GET['arafa_yetu'];
            $password = $_GET['pass_yetu'];
        }
        ?>
        <input type="text" name="x" class="input" value="<?php echo $id; ?>" hidden><br>
        <input type="text" name="y" class="input" value="<?php echo $name; ?>"><br>
        <input type="text" name="z" class="input" value="<?php echo $email; ?>"><br>
        <input type="password" class="input" name="pwd" value="<?php echo $password; ?>"><br>
        <input type="submit" class="save" value="Update" name="btn_update"><br>
        <a href="saveUser.php" class="vlink">Back</a>

    </form>
</div>
</body>
</html>
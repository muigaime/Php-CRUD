<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="save_div">
       <form action="saveUserProcess.php" method="GET" class="form"><br>
           <input type="text" name="name" placeholder="Name here" class="input" required><br>
           <input type="email" name="email" placeholder="Email here" class="input" required><br>
           <input type="password" name="pwd" placeholder="Password" class="input" required><brname>
           <input type="submit" name="btn_save" class="save"  placeholder="Save"><br>
           <a href="viewUsers.php" class="vlink">View Users</a><br>
       </form>
   </div>
</body>
</html>
<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <?php if((empty($_POST['name']) || empty($_POST['email']))):?>
        <form action="" method="post">
            <p>Name: <input type="text" name="name" id="name" placeholder="Name" required></p>
            <?php if(isset($_POST['login_form']) && empty($_POST['name'])):?><p>Вы не заполнили поле Name</p><?php endif;?>
            <p>Email: <input type="text" name="email" id="name" placeholder="Email" required></p> 
            <?php if(isset($_POST['login_form']) && empty($_POST['email'])):?><p>Вы не заполнили поле Email</p><?php endif;?>
            <button name="login_form">Send</button>
        </form>
    <?php  else: ?>
        <p>Ваш Имя: <?php echo htmlspecialchars($_POST['name'])?></p>
        <p>Ваш Email: <?php echo htmlspecialchars($_POST['email']) ?></p>
    <?php endif; ?>
   
</body>
</html>
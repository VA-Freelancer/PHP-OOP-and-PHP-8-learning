<?php error_reporting(-1);

if(!empty($_POST['agree'])){
    print_r($_POST);
    foreach($_POST['lang'] as $lang){
        var_dump($lang);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <p>
        Name
        <input type="text" name="name" id="">
    </p>
    <p>
        Email
        <input type="email" name="email" id="">
    </p>
    <p>
        Message
        <textarea name="message" cols="30" rows="10"></textarea>
    </p>
    <p>
        <select name="lang[]" id="lang" multiple>
            <option value="ru" selected>Russian</option>
            <option value="en" selected>English</option>
            <option value="fr" selected>France</option>
        </select>
    </p>
    <p>
        Agree?
        <input type="checkbox" name="agree" id="agree">
    </p>
    <p>
        <button type="submit" name="send_form">Send</button>
    </p>
    </form>
    <br><br>
    <form action="index.php" method="get">
    <p>
        Search
        <input type="text" name="s" id="search">
    </p>

    <p>
        <button type="submit" name="search_form">Search</button>
    </p>
    </form>
</body>
</html>
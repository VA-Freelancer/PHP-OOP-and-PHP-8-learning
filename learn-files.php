<?php error_reporting(-1); 
// phpinfo();
?>
<?php 

var_dump($_COOKIE);
if(!empty($_FILES)){
$upload_dir = __DIR__ . '/uploads/';
if( !is_dir( $upload_dir ) ) mkdir( $upload_dir, 0777 );
$upload_dir = $upload_dir . basename($_FILES['file']['name']);


if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
   
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
    <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="file">
    <button type="submit">Send</button>

    </form>
</body>
</html>
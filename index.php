<?php 
// $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
// preg_match($pattern, $email)
include_once __DIR__ . '/function.php';

if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
    $result = controlEmail($mail);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <div class="mb-3 text-center mt-5">
            <form action="index.php" method="POST">
                <label for="mail" class="form-label">Email address</label>
                <input type="text" class="form-control" name="mail" id="mail" value="<?php echo !empty($_POST['mail']) ? $_POST['mail'] : ''?>">
                <?php if(!isset($result)) { ?>
                    <h3>Inserire Email</h3>
                <?php } else {?>
                    <h3 class="mt-2 alert <?php echo $result ? 'alert-success' : 'alert-danger' ?>">Email <?php echo $result ? 'Valida' : 'non valida' ?></h3> 
                <?php } ?>
                <button type="submit" class="btn btn-primary mt-3">Invia</button>
            </form>
            
        </div>
    </div>
    

    
</body>
</html>
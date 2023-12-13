<?php 

if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
} else {
    $mail = '';
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
                <input type="text" class="form-control" name="mail" id="mail" placeholder="<?php echo $mail ?>">
                <?php include './function.php' ?>
                <button type="submit" class="btn btn-primary mt-3">Invia</button>
            </form>
            
        </div>
    </div>
    

    
</body>
</html>
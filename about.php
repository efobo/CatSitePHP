<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="icon" href="img/logo.jpg" type="image/jpg">
        <title>Contact form</title>
    </head>
    <body>
        <?php
            require "blocks/header.php";
        ?>
        <div class="container mt-5">
            <h3>Contact form</h3><br>
            <form action="check.php" method="post">
                <input type="email" name="email" placeholder="Enter the Email"
                    class="form-control"><br>
                <textarea name="message" class="form-control" 
                    placeholder="Enter your message"></textarea><br>
                <button type="submit" name="send" class="btn btn-success">Send</button>
            </form>
        </div>
        
       <?php
            require "blocks/footer.php";
        ?>
    </body>
</html>
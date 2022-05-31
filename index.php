<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="icon" href="img/logo.jpg" type="image/jpg">
        <title>CatSite</title>
    </head>
    <body>
        <?php
            require "blocks/header.php";
        ?>

        <div class="container mt-5">
            <h3 class="mb-5">Articles</h3>
            <div class="d-flex flex-wrap">

                <?php
                    for ($i = 1; $i <= 5; $i++):
                ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Title</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/<?php echo $i; ?>.jpg" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 jokes for free</li>
                            <li>The funniest cats ever!</li>
                            <li>༼ づ｡ ◕‿‿◕｡ ༽づ</li>
                        </ul>
                        <Sign type="button" class="btn btn-lg btn-block btn-outline-primary">
                             More
                        </button>
                    </div>
                </div>
                <?php endfor;
                ?>
            </div>
        </div>
        
        <?php
            require "blocks/footer.php";
        ?>
    </body>
</html>
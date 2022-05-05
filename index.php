<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/spotify-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>vue-dischi-ajax</title>
</head>

<body>
    <header>
        <img class="p-1 " src="img/spotify-logo.png" alt="logo">
    </header>
    <main class="pt-4">
        <div class="container d-flex flex-wrap justify-content-center gap-4 pt-2">
            <?php
            include('dischi.php');
            //var_dump($Dischi);


            foreach ($dischi as $disco => $item) { ?>
                <div class="card-song text-center">
                    <img src="<?php echo $item['poster']; ?>">
                    <h6 class="text-uppercase pt-2 text-white"> <?php echo $item['title']; ?></h6>
                    <p class="lv-color m-0"> <?php echo $item['author']; ?></p>
                    <p class="lv-color m-0"> <?php echo $item['year']; ?></p>

                </div>
            <?php
            } ?>
        </div>
    </main>
</body>

</html>
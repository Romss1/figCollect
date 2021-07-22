
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <title>Document</title>
</head>
<body>
<main>
    <form class="container" method="post" action="">

        <div class="row">
            <h1>ADMIN</h1>
        </div>


        <div class="row">
            <div class="mb-3 col-12 col-md-6">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" id="Inputimage" aria-describedby="imageHelp" name="image">

                <?php if ($errorimage!=null):?>
                    <div class="text-danger"><?= $form["email"][$errorimage] ?></div>
                <?php endif?>
            </div>

            <div class="mb-3 col-12 col-md-6">

                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">

                <?php if ($errorpassword!=null):?>
                    <div class="text-danger"><?= $form["password"][$errorpassword] ?></div>
                <?php endif?>


            </div>


            <div class="mb-3 col-12 col-md-6">
                <label class="comfirm" for="password">Confirm</label>
                <input type="password" class="form-control" id="Comfirm" name="comfirm">

                <?php if ($errorcomfirm!=null):?>
                    <div class="text-danger">  <?= $form["comfirm"][$errorcomfirm] ?> </div>
                <?php endif?>


            </div>

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <?=  $userexist ?>
    </form>
</main>
</body>
</html>
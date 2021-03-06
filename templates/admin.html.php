<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">


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

                <?php if ($errorimage != null): ?>
                    <div class="text-danger"><?= $form["Image"][$errorimage] ?></div>
                <?php endif ?>
            </div>

            <div class="mb-3 col-12 col-md-6">

                <label for="price" class="form-label">Price</label>
                <input type="price" class="form-control" id="examplePrice" name="price">

                <?php if ($errorPrice != null): ?>
                    <div class="text-danger"><?= $form["Price"][$errorPrice] ?></div>
                <?php endif ?>


            </div>


            <div class="mb-3 col-12 col-md-6">
                <label class="dimension" for="password">Dimension</label>
                <input type="dimension" class="form-control" id="dimension" name="dimension">

                <?php if ($errorDimension != null): ?>
                    <div class="text-danger">  <?= $form["Dimension"][$errorDimension] ?> </div>
                <?php endif ?>
            </div>

            <div class="mb-3 col-12 col-md-6">
                <label class="description" for="password">Description</label>
                <input type="description" class="form-control" id="description" name="description">

                <?php if ($errorDescription != null): ?>
                    <div class="text-danger">  <?= $form["Description"][$errorDescription] ?> </div>
                <?php endif ?>
            </div>

            <div class="mb-3 col-12 col-md-6">
                <label class="name" for="password">Name</label>
                <input type="name" class="form-control" id="name" name="name">

                <?php if ($errorDescription != null): ?>
                    <div class="text-danger">  <?= $form["name"][$errorDescription] ?> </div>
                <?php endif ?>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <?= $userexist ?>
    </form>
</main>
</body>
</html>
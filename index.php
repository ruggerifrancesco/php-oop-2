<?php
    include_once __DIR__ . '/data/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1 class="text-center">Products List</h1>

        <div class="row">
            <div class="col">
                <?php foreach ($productsList as $product): ?>
                    <div class="card border-info mb-3">
                        <div class="card-header">
                            <?php echo $product->category->category; ?>
                        </div>
                            <img src="..." class="card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->title; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $product->description; ?>
                            </p>
                            <p class="card-text">
                                Price: $<?php echo $product->price; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        
</div>
</body>
</html>
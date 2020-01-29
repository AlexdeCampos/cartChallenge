<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">

</head>
<body>

<header class="navbar navbar-center">
  <section class="navbar-section">
    <a href="..." class="navbar-brand mr-2">Spectre.css</a>
    <a href="..." class="btn btn-link">Docs</a>
    <a href="..." class="btn btn-link">GitHub</a>
  </section>
  <section class="navbar-section">
    <div class="input-group input-inline">
      <input class="form-input" type="text" placeholder="search">
      <button class="btn btn-primary input-group-btn">Search</button>
    </div>
  </section>
</header>
<div class="container grid-xl">
  <div class="columns">
  <?php foreach($products as $product):?>
    <div class="card col-3 m-3">
        <div class="card-image">
        <img src="assets/images/<?=$product["sku"]?>.jpg" class="img-responsive">
    </div>
    <div class="card-header">
        <div class="card-title h5"><?=$product["name"]?></div>
        <div class="card-subtitle text-gray"><?=$product["description"]?></div>
    </div>
    <div class="card-body">
        R$ <?=number_format($product["price"],2,',','.')?>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary">Comprar</button>
    </div>
    </div>

  <?endforeach;?>
  </div>

</div>






</body>
</html>
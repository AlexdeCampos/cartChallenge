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

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <header class="navbar">
    <section class="navbar-section">
      <a href="#" class="navbar-brand mr-2">Início</a>
    </section>


    <section class="navbar-section">
      <div class="dropdown" style="width: 200px">
        <div class="btn-group ">
          <a href="#" class="btn btn-link dropdown-toggle" tabindex="0">
            R$ 0,00
          </a>

          <!-- menu component -->
          <ul class="menu">
            Carrinho vazio
          </ul>
        </div>
      </div>
    </section>

  </header>
  <div class="container grid-xl">
    <div class="docs-demo columns">
      <?php foreach ($products as $product) : ?>
        <div class="collumn col-3">
          <div class="card">
            <div class="card-image ">
              <img style="max-height: 340px" src="assets/images/<?= $product["sku"] ?>.jpg" class="img-responsive m-3">
            </div>
            <div class=" card-header">
              <div class="card-title h5"><?= $product["name"] ?></div>
              <div class="card-subtitle text-gray"><?= substr($product["description"], 0, 100) ?></div>
            </div>
            <div class="card-body">
              R$ <?= number_format($product["price"], 2, ',', '.') ?>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary">Adicionar ao carrinho</button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>

</body>

</html>
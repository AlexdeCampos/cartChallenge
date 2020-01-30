<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="stylesheet" href="assets/css/spectre.min.css">
  <link rel="stylesheet" href="assets/css/spectre-exp.min.css">
  <link rel="stylesheet" href="assets/css/spectre-icons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <script src="assets/js/jquery.js"></script>
</head>
<body>
  <header class="navbar">
    <section ></section>
    <section class="navbar-section">
      <div class="dropdown">
        <div class="btn-group float-right">
          <a class="btn btn-link dropdown-toggle cart-total" tabindex="0">
            R$ 0,00
          </a>
          <!-- menu component -->
          <ul class="menu">
            <div class="panel">
              <div class="panel-header">
                <div class="panel-title h6">Itens no carinho</div>
              </div>
              <div class="panel-body">
                <?php foreach ($products as $product) : ?>
                  <div class="tile">
                    <div class="tile-icon">
                      <figure class="avatar">
                        <img src="assets/images/<?= $product["sku"] ?>.jpg" alt="Avatar">
                      </figure>
                    </div>
                    <div class="tile-content">
                      <p class="tile-title text-bold">
                        <?= $product["name"] ?>
                        <i class="icon icon-cross float-right"></i>
                      </p>
                      <p class="tile-subtitle">
                        Qdt: 10
                      </p>
                    </div>
                  </div>
                <?php endforeach;?>   
              </div>
            </div>
          </ul>
        </div>
      </div>
    </section>
  </header>
  <div class="container grid-xl">
    <div class="docs-demo columns">
      <?php foreach ($products as $product) : ?>
        <div class="collumn col-3 col-xl-4 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image ">
              <img style="max-height: 340px" src="assets/images/<?= $product["sku"] ?>.jpg" class="img-responsive m-3">
            </div>
            <div class=" card-header">
              <div class="card-title h5"><?= $product["name"] ?></div>
            </div>
            <div class="card-body">
              R$ <?= number_format($product["price"], 2, ',', '.') ?>
            </div>
            <div class="card-footer">
              <button class="btn " onclick="openModal('<?= $product['sku'] ?>')">Adicionar ao carrinho</button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="modal" id="modal-products">
    <a href="#close" class="modal-overlay" aria-label="Close"></a>
    <div class="modal-container">
      <div class="modal-header">
        <a onclick="closeModal()" class="btn btn-clear float-right" aria-label="Close"></a>
        <div class="modal-title h5"></div>
      </div>
      <div class="modal-body">
        <div class="columns">
          <div class="collumn col-8 col-xl-8 col-md-8 col-sm-12">
            <img class='product-image img-responsive' src="">
            <hr>
            <br>
            <p class="product-description"></p>
          </div>
          <div class="collumn col-4 col-xl-4 col-md-4 col-sm-12">
            Valor do Produto:<br>
            <p class="product-price"></p>

            Quantidade:
            <input type="number" name="" class="product-qty" min="1">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn confirm">Confirmar</button>
      </div>
    </div>
  </div>
</body>
</html>

<script>
  function openModal(sku){
    let productList = '<?=json_encode($products)?>';
    productList = JSON.parse(productList)
    
    let product = productList[sku]
    
    $('.modal-title').html(product.name)
    $('.product-image').attr("src","assets/images/" +sku+".jpg")
    $('.product-description').html(product.description)
    let price = parseFloat(product.price)
    $('.product-price').html(price.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}))
    $('.product-qty').val(1)
    
    $('.confirm').attr('onclick','addToCart("'+sku+'")')
    $("#modal-products").addClass('active')
  }

  function closeModal(){
      $("#modal-products").removeClass('active')
  }

  function addToCart(sku){
    let qty = $('.product-qty').val()

    $.post( "ajax/addToCart", { sku: sku, qty: qty })
    .done(function() {
      location.reload()
    });
  }

  function removeToCart(sku){
    $.post( "ajax/removeToCart", { sku: sku })
    .done(function() {
      location.reload()
    });
  }

  function getCart(){
    let session = '<?=json_encode($_SESSION)?>'
    session = JSON.parse(session)
    if('cart' in session){
      let {itens,total} = session.cart
      $('.panel-body').html('')

      let itemList = ''
      for(let key of Object.keys(itens)){
        item = itens[key]

        itemList += '<div class="tile">'
        itemList += ' <div class="tile-icon">'
        itemList += '   <figure class="avatar">'
        itemList += '      <img src="assets/images/'+item.sku+'.jpg" alt="Avatar">'
        itemList += '   </figure>'
        itemList += ' </div>'
        itemList += ' <div class="tile-content">'
        itemList += '   <p class="tile-title text-bold">'
        itemList += '     '+item.name
        itemList += '     <i class="icon icon-cross float-right" onClick="removeToCart('+"'"+item.sku+"'"+')"></i>'
        itemList += '   </p>'
        itemList += '   <p class="tile-subtitle">'
        itemList += '     Qdt: '+item.qty
        itemList += '   </p>'
        itemList += ' </div>'
        itemList += '</div>'
      }

      $('.panel-body').html(itemList)

      total = parseFloat(total)
      $('.cart-total').html(total.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}))
    }
  }

  $(document).ready(function(){
    getCart()
  })
</script>

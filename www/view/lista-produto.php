<?php include "view/header.php"; ?>

<div class="jumbotron pt-3"  style="background: #fafafa">

  <h1 class="display-4 d-flex justify-content-center" style="color: #ff0000"><i class="fas fa-cart-plus" style="color: #ff0000;"></i>  Produtos</h1>
  <hr   style="background-color: red; ">


  <div class="row mt-3">
    <ul class="list-group list-group-flush w-25">
      <li class="list-group-item"><i class="fas fa-tshirt"></i> Roupa</li>
      <li class="list-group-item"><i class="fas fa-gamepad"></i> Brinquedos</li>
      <li class="list-group-item"><i class="fas fa-laptop-code"></i>Informatica</li>
      <li class="list-group-item"><i class="fas fa-sticky-note"></i> Acessorios</li>
    </ul>

    <?php foreach ($lista as $produto) {
      $addCarrinho = BASEURL."carrinho/adicionar/" . $produto['id'];
      ?>

      <div class="col-sm-3 col-md-2 mb-3">
        <div class="card h-100 ">
          <a href="#"><img class="card-img-top" src="<?php echo BASEURL . "view/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"></a>
            </h4>
            <h3><?php echo $produto['nome'] ?></h3>
            <h5>R$: <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
            </p>
          </div>
         
          <a type="button" class="btn btn-primary" href="<?php echo $addCarrinho; ?>">Comprar
            <!-- <button type="button" class="btn btn-primary">Comprar</button> -->
          </a>


        </div>
      </div>
    <?php } ?>

  </div>


</div>
<?php include "view/footer.php"; ?>
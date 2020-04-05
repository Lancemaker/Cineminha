  <!--Header 
  se liga nesse site. To usando como base do layout https://vimeo.com/ondemand
  -->
  <?php
  
  /* 
  Todos os links do menu sao requests de pagina que vao ser carregados no Main Content dinamicamente.
  Assim o Header (o menu e as configuracoes do bootstrap) e o footer nao mudam.

  */
  if(isset($_GET['page']) && $_GET['page'] != '' ){ //se houver um request e este request de pagina nao for vazio   
    $page = $_GET['page']; //set a variavel o nome do arquivo a ser servido.
  }else{
    $page = 'main';
  }

  include 'view/templates/header.php';
  ?>
  <!--Header end-->

  <!--Main content-->
  <?php
  include 'view/templates/'.$page.'.php'; //aqui nos montamos o caminho do arquivo a ser servido. 
  ?>
  <!--Main content End-->

  <!--Footer-->
  <?php
  include 'view/templates/footer.php';
  ?>
  <!--Footer End-->
  

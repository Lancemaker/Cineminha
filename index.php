  <?php
  include_once 'controller/LoginController.php';
  use controllers\LoginController as Login;
  /* 
  Todos os links do menu sao requests de pagina que vao ser carregados no Main Content dinamicamente.
  Assim o Header (o menu e as configuracoes do bootstrap) e o footer nao mudam.
  */

  session_start(); 
  //echo "<pre>".print_r($_POST,1)."</pre>";
  if($_POST['metodo']){
    if($_POST['metodo']=='cadastro'){    
      $login = new Login();    
    }
    if($_POST['metodo']=='login'){;
      $_SESSION['logado'] = Login::checaLogin($_POST['login'],$_POST['pass']);         
    }
    if($_POST['metodo']=='logout'){;
      $_SESSION['logado']=0;         
    }
  }
 
  

  if(isset($_GET['page'])){
  $rota=($_GET['page']);
  }

  if(isset($rota) && $rota != '' ){ //se houver um request e este request de pagina nao for vazio   
    $page = $rota; //set a variavel o nome do arquivo a ser servido.
  }else{
    $page = 'templates/main';
  }
  
  function trataRota($input){
    if (strpos($input, 'templates')!== false)return "view/".$input;
    return $input;
  }
  $page=trataRota($page);
  
  

  include 'view/templates/header.php';
  ?>
  <!--Header end-->

  <!--Main content-->
  <?php
  include $page.'.php'; //aqui nos montamos o caminho do arquivo a ser servido. 
  ?>
  <!--Main content End-->

  <!--Footer-->
  <?php
  include 'view/templates/footer.php';
  ?>
  <!--Footer End-->
  

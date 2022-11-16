<?php
    include 'carrinho.class.php';
    session_start();

    $cod = $_POST['cod'];
    $qtde = $_POST['qtde'];

    if($cod==1){

        $c = new Carrinho;
        $c->Produto="Monitor";
        $c->Preco=1148.57;
        $c->Quantidade=$_SESSION['carrinho'][0]->Quantidade + $qtde;
        $c->Imagem="monitor";
        $_SESSION['carrinho'][0] = $c;
    };
    if($cod==2){

        $c = new Carrinho;
        $c->Produto="Gabinete";
        $c->Preco=229.99;
        $c->Quantidade=$_SESSION['carrinho'][1]->Quantidade + $qtde;
        $c->Imagem="gabinete";
        $_SESSION['carrinho'][1] = $c;
    };
    if($cod==3){

        $c = new Carrinho;
        $c->Produto="HyperX_Cloud_Core";
        $c->Preco=741.57;
        $c->Quantidade=$_SESSION['carrinho'][2]->Quantidade + $qtde;
        $c->Imagem="headset";
        $_SESSION['carrinho'][2] = $c;
    };
    if($cod==4){

        $c = new Carrinho;
        $c->Produto="Logitech_G_PRO";
        $c->Preco=882.24;
        $c->Quantidade=$_SESSION['carrinho'][3]->Quantidade + $qtde;
        $c->Imagem="teclado";
        $_SESSION['carrinho'][3] = $c;
    };
    if($cod==5){

        $c = new Carrinho;
        $c->Produto="Mouse_Razer_Cyberpunk_2077";
        $c->Preco=1829.89;
        $c->Quantidade=$_SESSION['carrinho'][4]->Quantidade + $qtde;
        $c->Imagem="mouse";
        $_SESSION['carrinho'][4] = $c;
    };
    if($cod==6){

        $c = new Carrinho;
        $c->Produto="Cadeira_Corsair_T3_Rush";
        $c->Preco=2039.99;
        $c->Quantidade=$_SESSION['carrinho'][5]->Quantidade + $qtde;
        $c->Imagem="cadeira";
        $_SESSION['carrinho'][5] = $c;
    };

    header("Location: carrinho.php");
?>
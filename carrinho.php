<?php
    include 'header.php';
    include 'carrinho.class.php';
    session_start();
    if (isset($_SESSION['carrinho'])){
        $produtos = $_SESSION['carrinho'];
    }
    
?>
<div class="container">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col"><center></center></th>
          <th scope="col"><center>Produto</center></th>
          <th scope="col"><center>Valor unitário</center></th>
          <th scope="col"><center>Valor Total</center></th>
          <th scope="col"><center>Quantidade</center></th>
          <th scope="col"><center></center></th>
        </tr>
      </thead>
      <tbody>
        <?php 
            $prectotal = 0;
            if (isset($_SESSION['carrinho'])){
                foreach ($produtos as $key => $p) {
                    $prec = floatval($p->Preco);
                    $quant = floatval($p->Quantidade);
                    $prectotal += $prec * $quant;
            ?>
                
                <tr>
                <td><center><img style="max-width:150px" src="<?php echo "img/".$p->Imagem.".png"; ?>" alt=""></center></td>
                <td><center><?php echo $p->Produto; ?></center></td>
                <td><center><?php echo "R$".$p->Preco; ?></center></td>
                <td><center><?php echo "R$".$prec * $quant;?></center></td>
                <td><center><a class="btn btn-danger" href="alterar.php?cod=<?php echo $key; ?>&op=2">-</a>ㅤ<?php echo $p->Quantidade; ?>ㅤ<a class="btn btn-success" href="alterar.php?cod=<?php echo $key; ?>&op=1">+</a></center></td>
                <td><center><button style="background:none; border: none; color: white;" data-bs-toggle="modal" data-bs-target="#modalremover" onclick="alterarId(<?php echo $key; ?>)"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></button></center></td>
                </tr>
        <?php } ?>
        <tr>
            
            <td><center></center></td>
            <td><center></center></td>
            <td><center><b>Valor Total</b></center></td>
            <td><center><?php echo "R$".$prectotal;// valor total ?></center></td>
            <td><center></center></td>
            <td><center><?php if (isset($_SESSION['carrinho'])){ ?><a data-bs-toggle="modal" data-bs-target="#modallimpar" class="btn btn-danger">Esvaziar Carrinho</a><?php } ?></center></td> 
        </tr> 
        <?php } else { // Sessão vazia?>

            <tr>
            <td><center></center></td>
            <td><center>-</center></td>
            <td><center>-</center></td>
            <td><center>-</center></td>
            <td><center>-</center></td>
            <td><center>-</center></td>
            </tr>
        <?php } ?>
            
      </tbody>
        
    </table>
    <a href="index.php" class="btn btn-light">Continuar comprando</a>
    

    <!-- Modal remover -->
    <div class="modal fade" id="modalremover" tabindex="-1" aria-labelledby="modalremover" aria-hidden="true">
        <div class="modal-dialog">
            <form action="remover.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalremover">Confirmação</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    Deseja realmente remover este item?
                    <input type="hidden" name="cod" id="idProduto">
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <button type="submit" class="btn btn-primary">Sim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal limpar a sessão -->
    <div class="modal fade" id="modallimpar" tabindex="-1" aria-labelledby="modallimpar" aria-hidden="true">
        <div class="modal-dialog">
            <form action="limpar.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modallimpar">Confirmação</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    Deseja realmente seu carrinho?
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <button type="submit" class="btn btn-primary">Sim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>
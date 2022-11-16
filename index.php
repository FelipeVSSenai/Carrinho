<?php
    include 'header.php';
    include 'carrinho.class.php';
?>
<br>
<div class="container offset-2">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <br>
            <div class="card" style="width: 18rem;">
                <center>
                    <img src="img/monitor.png" class="card-img-top" alt="Monitor gamer">
                </center>
                <div class="card-body">
                    <h5 class="card-title">Monitor Gamer</h5>
                    <p class="card-text">Samsung 24' IPS, 75 Hz, Full HD, FreeSync, HDMI</p>
                    <p class="card-text">R$ 1.148,57</p>
                    <form action="adicionar.php" method="post">
                        <label for="qtde">Quantidade:</label>
                        <select class="form-select" name="qtde" id="qtde" aria-label="Default select example">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input type="hidden" name="cod" value="1">
                        <br>
                        <button class="btn btn-dark">Adicionar ao carrinho</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <center>
                    <img src="img/gabinete.png" class="card-img-top" alt="gabinete">
                </center>
                <div class="card-body">
                    <h5 class="card-title">Gabinete Gamer Bluecase</h5>
                    <p class="card-text">Mid Tower, Lateral em Vidro - BG032GCASE</p>
                    <p class="card-text">R$ 229,99</p>
                    <form action="adicionar.php" method="post">
                        <label for="qtde">Quantidade:</label>
                        <select class="form-select" name="qtde" id="qtde" aria-label="Default select example">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input type="hidden" name="cod" value="2">
                        <br>
                        <button class="btn btn-dark">Adicionar ao carrinho</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <br>
            <div class="card" style="width: 18rem;">
                <center>
                    <img src="img/headset.png" class="card-img-top" alt="headset">
                </center>                    
                <div class="card-body">
                    <h5 class="card-title">HyperX Cloud Core</h5>
                    <p class="card-text">Som Surround 7.1, Drivers 53mm, USB e P3 - HX-HSCC-2-BK/WW</p>
                    <p class="card-text">R$ 741,57</p>
                    <form action="adicionar.php" method="post">
                        <label for="qtde">Quantidade:</label>
                        <select class="form-select" name="qtde" id="qtde" aria-label="Default select example">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input type="hidden" name="cod" value="3">
                        <br>
                        <button class="btn btn-dark">Adicionar ao carrinho</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <center>
                    <img src="img/teclado.png" class="card-img-top" alt="teclado">
                </center>
                <div class="card-body">
                    <h5 class="card-title">Logitech G PRO</h5>
                    <p class="card-text">RGB, Design TKL, Cabo Destacável e Switch Exclusivo GX Blue Clicky</p>
                    <p class="card-text">R$ 882,24</p>
                    <form action="adicionar.php" method="post">
                        <label for="qtde">Quantidade:</label>
                        <select class="form-select" name="qtde" id="qtde" aria-label="Default select example">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input type="hidden" name="cod" value="4">
                        <br>
                        <button class="btn btn-dark">Adicionar ao carrinho</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <br>
            <div class="card" style="width: 18rem;">
                <center>
                    <img src="img/mouse.png" class="card-img-top" alt="mouse">
                </center>
                <div class="card-body">
                    <h5 class="card-title">Razer Viper Ultimate Cyberpunk 2077 Edition</h5>
                    <p class="card-text">Sem Fio, 20.000 DPI, 8 Botões</p>
                    <p class="card-text">R$  1.829,89</p>
                    <form action="adicionar.php" method="post">
                        <label for="qtde">Quantidade:</label>
                        <select class="form-select" name="qtde" id="qtde" aria-label="Default select example">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input type="hidden" name="cod" value="5">
                        <br>
                        <button class="btn btn-dark">Adicionar ao carrinho</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <center>
                    <img src="img/cadeira.png" class="card-img-top" alt="cadeira">
                </center>                    
                <div class="card-body">
                    <h5 class="card-title">Cadeira Corsair T3 Rush</h5>
                    <p class="card-text">Apoio de Braços 4D, Cilindro de Gás Classe 4, Carvão</p>
                    <p class="card-text">R$  2.039,99</p>
                    <form action="adicionar.php" method="post">
                        <label for="qtde">Quantidade:</label>
                        <select class="form-select" name="qtde" id="qtde" aria-label="Default select example">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input type="hidden" name="cod" value="6">
                        <br>
                        <button class="btn btn-dark">Adicionar ao carrinho</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
    include 'footer.php';

?>
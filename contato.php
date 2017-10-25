<?php require "header.php"; ?>

    <section id="contatos">
        <div class="container">
            <div class="row section-top">
                <div class="col-md-3 col-sm-12 section">
                    <div class="titulo-destaque-coracao titulo-destaque-grande">
                        <span class="titulo-destaque-coracao">Contato</span>
                    </div>
                </div>
            </div>

            <div class="row subserction">
                <div class="col-md-6 section-bottom">
                    <div class="borda-destaque">
                        <form name="contato">
                            <input class="input-custom" type="text" name="nome" placeholder="Nome">
                            <input class="input-custom" type="text" name="telefone" placeholder="Telefone">
                            <input class="input-custom" type="text" name="email" placeholder="E-mail">
                            <textarea class="input-custom" name="assunto" placeholder="Assunto"></textarea>
                        </form>
                        <br>
                        <div class="row" style="display: flex; align-items: center">
                            <div class="col-md-2 text-center">
                                <img src="img/coracao.png" style="width: 16px; left: 17px; top: -12px; position: absolute;">
                                <img src="img/carrinho_entrega.png" alt="" style="width: 32px;">
                            </div>
                            <div class="col-md-7" style="font-size: 12px;margin-left: -4%;">
                                <strong><span class="cor-primaria-2">Entregas somente na região de</span><br>
                                    <span class="cor-secundaria-1">Florianópolis, São José, Biguçu e Palhoça</span></strong>
                            </div>
                            <div class="botao-enviar-contato col-md-3">
                                <img src="img/coracao.png" style="width: 16px; right: -30px; top: -26px; position: absolute;">
                                <a id="enviar-comentario" class="btn btn-sm botao-destaque-verde tracejado-detalhe">Enviar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cor-terciaria-1 text-center" style="-webkit-backface-visibility: hidden;">
                    <div id="destaque-endereco" class="faixa-listrada-verde tracejado-detalhe sombra-simples">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-1 text-left">
                                <img src="img/icon_carta.png">
                            </div>
                            <div class="col-md-10">
                                <span>docaria@patriciagoedert.com.br</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-1 text-left">
                                <img src="img/icon_telefone.png">
                            </div>
                            <div class="col-md-10">
                                <span>(48) 3331 - 1800</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-1 text-left">
                                <img src="img/icon_gps.png">
                            </div>
                            <div class="col-md-10">
                                <span>Rod. José Carlos Daux, 6977 - Santo Antônio de Lisboa, Florianópolis - SC, 88050-000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require "footer.php"; ?>
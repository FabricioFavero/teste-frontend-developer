<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/js/javascript">
    <link rel="stylesheet" href="./style.css">
    <title>Gen Group</title>
</head>

<body>
    <div class="container-top">
        <div class="titulo">

            <div class="logo">
                <img class="img-logo" src="./img/logo-dev130px.png" alt="">
            </div>

            <h1>Somos uma empresa voltada a <br>Gamificação de WebApp's.</h1>
            <p> Aqui na Gen Group desenvolvemos WebApp's gamificados para seus<br> treinamentos de forma intuitiva e prática. </p>
        </div>

        <!-- formulário -->
        <form action=" ./sql.php" method="POST">
            <div class="form">
                <h5>(11) 94000-4026</h5>
                <div class="nome">
                    <input placeholder="NOME:" name="nome" type="text">
                </div>

                <div class="email">
                    <input placeholder="E-MAIL:" name="email" type="email" class="form-email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="tel">
                    <input placeholder="DDD+ TELEFONE:" type="tel" id="phone" name="telefone">
                </div>

                <div class="mb-3 form-txt">
                    <textarea placeholder="COMO PODEMOS AJUDAR?" name="ajudar" id="" cols="23" rows="2"><?php if (!empty($linha)) echo $linha['ajudar'] ?></textarea></textarea>
                </div>
                <div class="button">
                    <button type="submit" class="btn-btn-primary-enviar">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <!-- formulário -->


    <div class="container-quem-somos">

        <div class="quem-somos">
            <img src="./img/img-empresa.jpeg" class="img-fluid" alt="...">
        </div>

        <div class="titulo-qs">
            <h2>Quem Somos</h2>
            <p>Somos fechado com o comprometimento,<br> aqui na Gen Group fazemos o possível <br>e o impossível para que nosso cliente<br> sempre esteja satisfeito. Com o nosso<br> App Gamificado ajudamos a facilitar<br> seus treinamentos e negócios.</p>
        </div>
    </div>

    <div class="servicos">
        <h3>Com este serviço você:</h3>
    </div>

    <!-- icones loja benefícios -->
    <div class="icones">
        <div class="beneficios">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
            </svg>
            <p> <strong>Contrando nosso serviço, <br>seu treinamento será muito<br> mais prático e fácil.</strong></p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
            </svg>
            <p> <strong>Rapidez e eficiência para<br> treinamentos dinâmicos.</strong> </p>
        </div>


        <div class="beneficios-2">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
            </svg>
            <p><strong> Confiabilidade em resultados precisos.<br> Todos dísponiveis a um<br> clique de seu celular.</strong></p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
            </svg>
            <p><strong> Tenha todos os testes em suas mãos,<br> com todo suporte necessário.</strong></p>
        </div>
    </div>
    <!-- icone loja benefícios -->

    <div class="d-grid gap-3 col-6 mx-auto">
        <button class="contrate" type="button"><strong>Contrate<strong></button>
    </div>

    <!-- perguntas botão -->
    <div class="perguntas">
        <h2> FAQ - Perguntas Frequentes</h2>
        <div class="d-grid gap-2 col-7 mx-auto">
            <button class="btn-btn-second" type="button"><strong>Como posso criar meu próprio teste?</strong></button>
            <button class="btn-btn-second" type="button"><strong>Como posso acessar a plataforma no treinamento?</strong></button>
            <button class="btn-btn-second" type="button"><strong>Como faço para incluir novos usuários rapidamente?</strong></button>
            <button class="btn-btn-second" type="button"><strong>Como vejo o resultado após o teste ser realizado?</strong></button>
        </div>
    </div>
    <!-- perguntas botão -->


    <!-- Footer com bootstrap -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Nos conheça em nossas redes sociais</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: rede social -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Gen Group
                        </h6>
                        <p>
                            Faça um teste Grátis e obtenha o melhor resultado em seus treinamentos.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Produtos
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">5w2h</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">AIDA</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Teste Gamificado</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Diário de Bordo</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Nossos Links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Preço</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Sobre nós</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Fale conosco</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
                        <p><i class="fas fa-home me-3"></i> Rua Raquel 266. Vila Marari</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            fabriciofavero@hotmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +55 11 940004026</p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Todos os Direitos Reservados:
            <a class="text-reset fw-bold" href="#">Gengroup.com.br</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>
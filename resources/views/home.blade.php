<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=================================== FONTAWESOME ===================================-->
    <link rel="stylesheet" type="text/css"  href="{{asset('/fontawesome-free/css/all.min.css')}}"/>

    <!--=================================== BOOTSTRAP CSS ===================================-->
    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">

    <!--=================================== CSS ===================================-->
    <link href="{{asset('css/style-home2.css')}}" rel="stylesheet"/>

    <title>Perfil {{$user->name}}</title>
</head>

<body class="bg-light">

<!--=================================== HEADER - MENU ===================================-->
    <header>
        <nav class="navbar navbar-light shadow-sm nav-bg border-bottom fixed-top">
            <div class=" container">
                <a class="float-left navbar-brand fw-bold fs-4">{{$user->name}}</a>

                <div class="dropdown">
                    <a class="px-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#home">Home</a></li>
                        <li><a class="dropdown-item" href="#sobre">Sobre</a></li>
                        <li><a class="dropdown-item" href="#servicos">Serviços</a></li>
                        <li><a class="dropdown-item" href="#portfolio">Portfolio</a></li>
                        <li><a class="dropdown-item" href="#freelances">Freelances</a></li>
                        <li><a class="dropdown-item" href="#testimoniais">Relatos</a></li>
                        <li><a class="dropdown-item" href="#contato">Contatos</a></li>
                    </ul>
                    <a href="{{route('login.form')}}">Login</a>
                </div>
            </div>
        </nav>
    </header>
    
<!--=================================== MAIN ===================================-->
    <main class="bg-white">

<!--=================================== HOMER ===================================-->
        <section class="home" id="home" style="margin-top: 57px;">
            <div class="container-fluid curved bg-home">
                <div class="container flex-row align-items-center">
                    <div class="row min-vh-100 align-content-center align-items-center">

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="position: relative;">
                            <div class="home-img text-center align-content-center align-items-center">
                                <img src="{{asset('avatar/img_blum.jpg')}}" alt="foto_perfil" class="img-fluid img-circle elevation-2 rounded-circle mw-100 user-img mt-5" height="350" width="350">
                                <img src="{{asset('avatar/images/bg-user2.png')}}" class="user-bg">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 order-md-first">
                            <div class="home-text">
                                <p class="text-muted mb-1">Bem vindo! Eu sou</p>
                                <h1 class="text-muted fs-1 mb-1">{{$user->name}}</h1>
                                <h2 class="text-danger font-weight-bold text-uppercase mb-1">Desenvolvedor web</h2>
                                <p>
                                    Formado em desenvolvimento de sistemas para internet na universidade La Salle e
                                    minhas qualificações são:
                                    Desenvolvimento de aplicações Java e Php, banco de dados MySql, interfaces utilizando Frameworks, estilização com CSS5,
                                    comunicação remota e qualificação em engenharia de sistemas corporativos
                                    e domínio de conceitos à engenharia de usabilidade.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 133">
                <path fill-opacity="1" d="M0,0L80,0C160,0,320,0,480,32C640,64,800,128,960,133.3C1120,139,1280,85,1360,58.7L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
            </svg>
        </section>

<!--=================================== SOBRE ===================================-->
        <section class="sobre bg-white py-5" id="sobre">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="section-title text-center">
                            <h2 class="fw-bolt mb-5">Sobre</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="sobre-texto">
                            <h3 class="fs-4 mb-3">Lorem Ipsum is not simply random text.</h3>
                            <p class="text-muted">Translations: Can you help translate this site into a foreign language ? Please email us with details if you can help.
                                There are now a set of mock banners available here in three colours and in a range of standard banner sizes: BannersBannersBanners
                                Donate: If you use this site regularly and would like to help keep the site on the Internet</p>
                        </div>
                        <div class="row text-center text-uppercase my-3">
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="fact-item">
                                    <h4 class="fs-1 font-weight-bold">100</h4>
                                    <p>Projetos completos</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="fact-item">
                                    <h4 class="fs-1 font-weight-bold">90</h4>
                                    <p>Clientes realizados</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="fact-item">
                                    <h4 class="fs-1 font-weight-bold">95</h4>
                                    <p>Críticas positivas</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center">
                                <a href="#" class="btn btn-sm btn-outline-success px-3">Download CV</a>
                                <div class="link-social ml-5">
                                    <a class="text-dark ml-2" href="#"><i class="fab fa-facebook"></i></a>
                                    <a class="text-dark ml-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="text-dark ml-2" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="text-dark ml-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-md-0">
                        <div class="sobre-progress">
                            <div class="skill-item mb-4">
                                <h3 class="fa-1x">HTML</h3>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 55%;"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>
                            </div>
                            <div class="skill-item mb-4">
                                <h3 class="fa-1x">CSS</h3>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%;"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>
                            </div>
                            <div class="skill-item mb-4">
                                <h3 class="fa-1x">Bootstrap</h3>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>
                            </div>
                            <div class="skill-item mb-4">
                                <h3 class="fa-1x">JavaScript</h3>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--=================================== SERVICOS ===================================-->
        <section class="servicos py-5" id="servicos">
            <div class="container-fluid bg-light py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="section-title text-center">
                                <h2 class="fw-bolt mb-5">Serviços</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <div class="servicos-item shadow-sm p-4 rounded bg-white">
                                <div class="icon my-3 text-danger fa-2x">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h3 class="fa-2x py-2">Desenvolvimento</h3>
                                <p class="text-muted">Desenvolvimento de sistemas para internet na universidade La Salle</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <div class="servicos-item shadow-sm p-4 rounded bg-white">
                                <div class="icon my-3 text-danger fa-2x">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h3 class="fa-2x py-2">Desing criativo</h3>
                                <p class="text-muted">Desenvolvimento de sistemas para internet na universidade La Salle</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <div class="servicos-item shadow-sm p-4 rounded bg-white">
                                <div class="icon my-3 text-danger fa-2x">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3 class="fa-2x py-2">Segurança/SEO</h3>
                                <p class="text-muted">Desenvolvimento de sistemas para internet na universidade La Salle</p>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </section>
<!--=================================== PORTFOLIO ===================================-->
        <section class="portfolio py-5" id="portfolio">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="section-title text-center">
                            <h2 class="fw-bolt mb-5">Último trabalhos</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="portfolio-item">
                            <img src="{{asset('avatar/portfolios/work-1.jpg')}}" class="w-100 img-thumbnail shadow" alt="portfolio item">
                            <h3 class="text-capitalize mt-1 fa-1x">Intranet Social</h3>
                            <a href="#" class="text-danger text-decoration-none mb-3">Live demo</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="portfolio-item">
                            <img src="{{asset('avatar/portfolios/work-2.jpg')}}" class="w-100 img-thumbnail shadow" alt="portfolio item">
                            <h3 class="text-capitalize mt-1 fa-1x">PortFolio pessoal</h3>
                            <a href="#" class="text-danger text-decoration-none mb-3">Live demo</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="portfolio-item">
                            <img src="{{asset('avatar/portfolios/work-3.jpg')}}" class="w-100 img-thumbnail shadow" alt="portfolio item">
                            <h3 class="text-capitalize mt-1 fa-1x">E-commerce Carrinho</h3>
                            <a href="#" class="text-danger text-decoration-none mb-3">Live demo</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="portfolio-item">
                            <img src="{{asset('avatar/portfolios/work-1.jpg')}}" class="w-100 img-thumbnail shadow" alt="portfolio item">
                            <h3 class="text-capitalize mt-1 fa-1x">Intranet Social</h3>
                            <a href="#" class="text-danger text-decoration-none mb-3">Live demo</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="portfolio-item">
                            <img src="{{asset('avatar/portfolios/work-3.jpg')}}" class="w-100 img-thumbnail shadow" alt="portfolio item">
                            <h3 class="text-capitalize mt-1 fa-1x">E-commerce Carrinho</h3>
                            <a href="#" class="text-danger text-decoration-none mb-3">Live demo</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="portfolio-item">
                            <img src="{{asset('avatar/portfolios/work-2.jpg')}}" class="w-100 img-thumbnail shadow" alt="portfolio item">
                            <h3 class="text-capitalize mt-1 fa-1x">PortFolio pessoal</h3>
                            <a href="#" class="text-danger text-decoration-none mb-3">Live demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--=================================== FREELANCES ===================================-->
        <section class="freelances bg-danger py-5" id="freelances">
            <div class="container-fluid py-5">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        <p class="text-light fa-1x">Você precisa de algum projeto?</p>
                        <h2 class="text-light fa-2x mb-4">Podemos fazer avaliação do seu projeto sem custo agora!</h2>
                        <a href="#contato" class="btn btn-outline-light">Contate agora</a>
                    </div>
                </div>
            </div>
        </section>

<!--=================================== TESTEMUNHOS ===================================-->
        <section class="testimoniais py-5" id="testimoniais">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <div class="section-title text-center">
                            <h2 class="fw-bolt mb-5">Relatos</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <div id="carousel1" class="carousel slide card-img-overlay" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel1" data-slide-to="0" class="active bg-danger"></li>
                                <li data-target="#carousel1" data-slide-to="1" class="bg-danger"></li>
                                <li data-target="#carousel1" data-slide-to="2" class="bg-danger"></li>
                            </ol>
                            <div class="carousel-inner p-1">
                                {{-- ITENS --}}
                                <div class="testimoniais-item mb-5 bg-light shadow-sm rounded p-4 carousel-item active">
                                    <div class="autor-item d-flex align-items-center">
                                        <img src="{{asset('avatar/burke.jpg')}}" class="w-25 img-thumbnail rounded-circle" alt="autor relato">
                                        <div class="autor m-sm-3">
                                            <h3 class="fa-1x mb-1">Carl Burkes</h3>
                                            <p class="text-muted m-0">Gerende de projetos</p>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">you help translate this site into a foreign language, please email us with details if you can help.
                                        There are now a set of mock banners available here</p>
                                    <div class="rating text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testimoniais-item mb-5 bg-light shadow-sm rounded p-4 carousel-item">
                                    <div class="autor-item d-flex align-items-center">
                                        <img src="{{asset('avatar/Bishop.jpg')}}" class="w-25 img-thumbnail rounded-circle" alt="autor relato">
                                        <div class="autor m-sm-3">
                                            <h3 class="fa-1x mb-1">Bishop</h3>
                                            <p class="text-muted m-0">Desenvolvedor front-end</p>
                                        </div>
                                    </div>
                                    <p class="text-muted m-sm-3">you help translate this site into a foreign language, please email us with details if you can help.
                                        There are now a set of mock banners available here</p>
                                    <div class="rating text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>

                                    </div>
                                </div>
                                <div class="testimoniais-item mb-5 bg-light shadow-sm rounded p-4 carousel-item">
                                    <div class="autor-item d-flex align-items-center">
                                        <img src="{{asset('avatar/apone.jpg')}}" class="w-25 img-thumbnail rounded-circle" alt="autor relato">
                                        <div class="autor m-sm-3">
                                            <h3 class="fa-1x mb-1">Richard Apone</h3>
                                            <p class="text-muted m-0">Desenvolvedor back-end</p>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">you help translate this site into a foreign language, please email us with details if you can help.
                                        There are now a set of mock banners available here</p>
                                    <div class="rating text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                {{-- FIM ITENS --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--=================================== CONTATO ===================================-->
        <section class="contato bg-white py-5" id="contato">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="section-title text-center">
                            <h2 class="fw-bolt mb-5">Contato</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                        <div class="contato-item d-flex mb-3">
                            <div class="icon fa-2x text-danger">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text">
                                <h3 class="fa-1x m-sm-3">E-mail</h3>
                                <p class="text-muted">{{$user->email}}</p>
                            </div>
                        </div>
                        <div class="contato-item d-flex mb-3">
                            <div class="icon fa-2x text-danger">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="text">
                                <h3 class="fa-1x m-sm-3">Telefone</h3>
                                <p class="text-muted">(51)986124404</p>
                            </div>
                        </div>
                        <div class="contato-item d-flex mb-3">
                            <div class="icon fa-2x text-danger">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="text">
                                <h3 class="fa-1x m-sm-3">Visite-nos</h3>
                                <p class="text-muted">Rua João Pinto, 185, Porto Alegre/RS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                        <div class="contato-form m-1 p-2">
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-lg-4 mb-4">
                                        <input type="text" class="form-control form-control-plaintext  border-0 shadow"
                                               placeholder="Seu nome" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                                        <input type="email" class="form-control form-control-plaintext  border-0 shadow"
                                               placeholder="Seu e-mail" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                                        <input type="text" class="form-control form-control-plaintext  border-0 shadow"
                                               placeholder="Titulo"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                                        <textarea aria-expanded="false" placeholder="Mensagem..." rows="7" cols="7" type="text" class="form-control form-control-plaintext  border-0 shadow"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                                        <button type="submit" class="btn btn-success">Enviar mensagem</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--=================================== FOOTER ===================================-->
        <footer class="bg-light p-5" id="footer">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 text-center">
                    <p class="fa-2x mt-2 text-bold">Where does it come from</p>
                    <p class="text-muted fa-1x mb-2">There are now a set of mock banners available here in three
                        colours and in a range of standard banner sizes</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 text-center">
                    <div class="social-icons d-flex justify-content-center">
                        <a class="p-3 fa-2x" href="#"><i class="fab fa-facebook"></i></a>
                        <a class="p-3 fa-2x" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="p-3 fa-2x" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="p-3 fa-2x" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="p-3 fa-2x" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 text-center">
                    <p class="copy">Todos direitos reservados <code>{{$user->name}}</code> - {{date('Y')}}</p>
                </div>
            </div>
        </footer>
    </main>

<!--=================================== JQUERY ===================================-->
    <script type="text/javascript" src="{{asset('jquery/jquery.min.js')}}"></script>

<!--=================================== BOOTSTRAP BUNDLE ===================================-->
    <script src="{{asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
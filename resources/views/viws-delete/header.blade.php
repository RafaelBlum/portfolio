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
                        <h1 class="text-muted fs-1 mb-1">{{$name}}</h1>
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
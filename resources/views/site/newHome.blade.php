<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cims Farm">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('site/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

</head>
<body>
        <section class="mb-5" id="home">
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
       
        <div class="container">
            <a href="#" class="navbar-brand"><h1>CIMSFARM</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#quem-somos">QUEM SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">SERVIÇO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#planos">PREÇO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">CONTATO</a>
                    </li>
                    <li class="nav-item cadastro">
                        <a class="nav-link" href="#">CADASTRO</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>

    
        <div class="cims-video">
            <div class="cims-video-overlay"></div>
            <div class="row justify-content-center align-items-center cims-video-index">
                <h2 class="display-3 align-self-center">ENTRE PARA O MUNDO DAS CRYPTO MOEDAS COM A CIMS</h2>
                <a class="btn btn-primary py-3 px-4 text-uppercase mt-4">Junte-se a Cims!</a>
            </div>
            
            <video id="videobg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
                <source src="{{ asset('site/cims-farming-intro.mp4') }}">
                <source src="{{ asset('site/cims-farming-intro.webm') }}" type="video/webm">
                <source src="{{ asset('site/cims-farming-intro.ogv') }}" type="video/ogg">
            </video>

            
    
        </div>

    </section>

    <section id="quem-somos" class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <img src="{{ asset('site/images/quem-somos.png') }}" class="img-fluid" alt="img">
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="title-area">
                        <h2 class="tittle">A CIMS</h2>
                        <span class="tittle-line"></span>
                        <p>A CIMS é uma empresa voltada para o ramo de mineração, fundada em 2017, que tem por objetivo facilitar para que seus clientes e parceiros alcancem o sucesso que desejam.</p>
        
                        <p>Nossa empresa se sustenta em 3 pilares:</p>
                        <ul class="list-unstyled">
                            <li>- Aquisição de equipamentos
                                <ul>
                                    <li>- Disponibilizamos os melhores equipamentos para nossos clientes.</li>
                                    <li>- O equipamento é seu, não é um aluguel.</li>
                                </ul>
                            </li>
                            <li>- Estrutura operacional
                                <ul>
                                    <li>- Infra Estrutura preparada para a atividade proposta.</li>
                                    <li>- Toda a manutenção e acompanhamento para o funcionamento perfeito e eficiente.</li>
                                </ul>
                            </li>
                            
                            <li>- Assessoria
                                <ul>
                                    <li>- A ajuda necessária para você conseguir saber o que fazer do início ao fim.</li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-sm">
                    <div class="cims-box-content">
                        <div class="d-block text-center">
                            <span class="img-border"><img src="{{ asset('site/images/004-rack-servers.png') }}" title=""></span>
                        </div>
                        <h4 class="text-center pt-3 pb-3 font-weight-light text-uppercase">Hardware</h4>
                        <p class="text-center">Possibilidade de 3 tipos diferentes de Hardware, voltados para 3 das principais moedas do mercado</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="cims-box-content">
                        <div class="d-block text-center">
                            <span class="img-border"><img src="{{ asset('site/images/002-bitcoin.png') }}" title=""></span>
                        </div>
                        <h4 class="text-center pt-3 pb-3 font-weight-light text-uppercase">Economia</h4>
                        <p class="text-center">Com a Cims, você se preocupa apenas com o recebimento, gaste seu tempo com o que te interessa, deixe as preocupações com a gente</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="cims-box-content">
                        <div class="d-block text-center">
                            <span class="img-border"><img src="{{ asset('site/images/001-wallet-filled-money-tool.png') }}" title=""></span>
                        </div>
                        <h4 class="text-center pt-3 pb-3 font-weight-light text-uppercase">Carteira</h4>
                        <p class="text-center">Carteira própria totalmente integrada com o sistema, site e portal, para facilitar as visualização de informações sobre sua aquisição e lucratividade, além da segurança do armazenamento.</p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>

    <section id="service" class="service py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-container">
                        <div class="col-lg-12">
                            <div class="cims-container-title text-center mt-2 mb-5">
                                <h2 class="text-uppercase mb-3">Nossos Serviços</h2>
                                <span class="cims-title-line"></span>
                            </div>
                        </div>
                        
                        <div class="service-content">
                            <div class="row">
                                
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-service">
                                        <span class="fa fa-globe service-icon"></span>
                                        <h4 class="service-title py-2">Mineiração</h4>
                                        <p>Serviço de Mineiração com hardware avançado, para a máxima performance e retorno.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-service">
                                        <span class="fa fa-check service-icon"></span>
                                        <h4 class="service-title py-2">Consultoria</h4>
                                        <p>Consultoria para auxiliar do início ao fim, do esclarecimento de dúvidas a ajuda nas decisões.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-service">
                                        <span class="fa fa-desktop service-icon"></span>
                                        <h4 class="service-title py-2">Tecnologia</h4>
                                        <p>Todas as informações na sua tela, integrando, mineração, carteira, lucro, tudo em um só lugar.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-service">
                                        <span class="fa fa-bar-chart service-icon"></span>
                                        <h4 class="service-title py-2">Estatisticas</h4>
                                        <p>Informação em tempo real e projeção de pagamentos, valorização da moeda, entre outros. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    <section id="planos" class="planos py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="planos-container">
                        <div class="col-lg-12">
                            <div class="cims-container-title text-center mt-2 mb-5">
                                <h2 class="text-uppercase mb-3">Planos</h2>
                                <span class="cims-title-line"></span>
                                <div class="col-lg-8 offset-lg-2">
                                    <p class="text-center">A CIMs disponibiliza a aquisição de 3 tipos diferentes de equipamentos, cada um voltado para uma das principais moedas do mercado atual.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table class="planos-table table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="thead-blue">Moedas</th>
                                <th scope="col" class="thead-red">Bitcoin</th>
                                <th scope="col" class="thead-red">Litecoin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-blue">$ 6.050,00</td>
                                <td class="text-red">$ 5.990,00</td>
                                <td class="text-red">$ 5.990,00</td>
                            </tr>
                            <tr>
                                <td>195 mh/s</td>
                                <td>13.5 th/s</td>
                                <td>500 mh/s</td>
                            </tr>
                            <tr>
                                <td>10% fee</td>
                                <td>10% fee</td>
                                <td>10% fee</td>
                            </tr>
                            <tr>
                                <td>$99.00 mês</td>
                                <td>$145.00 mês</td>
                                <td>$89.00 mês</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://coingate.com/pay/cimsfarm-multimoedas" target="_blank" class="btn btn-cims btn-outline-primary rounded-0">Comprar</a>
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="ED6Z4CNFTF4SJ">
                                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </td>
                                <td><button class="btn btn-outline-danger rounded-0">Indisponível</button></td>
                                <td><button class="btn btn-outline-danger rounded-0">Indisponível</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="contact-form p-5">
                        <h2 class="mb-5">Enviar Mensagem</h2>
                        <form action="POST" class="contact-form">
                            <div class="form-group">                
                                <input type="text" name="nome" class="form-control" placeholder="Insira o Nome">
                            </div>
                            <div class="form-group">                
                                <input type="email" name="email" class="form-control" placeholder="Insira o Email">
                            </div>              
                            <div class="form-group">
                                <textarea name="descricao" class="form-control"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" data-text="ENVIAR" class="button button-default"><span>Enviar</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="text-center py-3">
        <span>© 2018 - Todos direitos Reservados.  <a href="#">CimsFarm</a></span>
    </footer>
    <a class="scrollToTop" href="#" style="display: inline;"><i class="fa fa-angle-double-up"></i></a>


    <script src="{{asset('site/js/manifest.js')}}"></script>
    <script src="{{asset('site/js/vendor.js')}}"></script>
    <script src="{{asset('site/js/app.js')}}"></script>

    <script>
        $(function($){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 300) {
                    $('.scrollToTop').fadeIn();
                } else {
                    $('.scrollToTop').fadeOut();
                }
            });
            
            //Click event to scroll to top

            $('.scrollToTop').on('click',function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });
        });

        $(document).on('click', 'a[href^="#"]', function(e) {
            // target element id
            var id = $(this).attr('href');

            // target element
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }

            // prevent standard hash navigation (avoid blinking in IE)
            e.preventDefault();

            // top position relative to the document
            var pos = $id.offset().top - 100;

            // animated top scrolling
            $('body, html').animate({scrollTop: pos}, 600);
        });

        $("section").mouseenter(function(){
            var id = $(this).attr('id');
            if( id == 'undefined' ){
                console.log("teste");
                $('a').closest('li').removeClass('active');
                $("a[href$='home']").closest('li').addClass('active');
            } else {
                $('a').closest('li').removeClass('active');
                $("a[href$="+id+"]").closest('li').addClass('active');
            }
        });
    </script>
</body>
</html>
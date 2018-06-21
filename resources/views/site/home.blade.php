@extends('homeLayout.app')
@section('content')
<!-- Start header section -->  
<header id="header">
    <div class="header-inner">
        <div class="cims-video">
            <video id="videobg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
                <source src="{{ asset('site/cims-farming-intro.mp4') }}">
                <source src="{{ asset('site/cims-farming-intro.webm') }}" type="video/webm">
                <source src="{{ asset('site/cims-farming-intro.ogv') }}" type="video/ogg">
            </video>
        </div>
        
        <div class="header-overlay">
            <div class="header-content">
                <!-- Start header content slider -->
                <h2 class="header-slide">Entre para o mundo das crypto moedas com a
                    CIMS</h2>
                <!-- End header content slider -->  
                <!-- Header btn area -->
                <div class="header-btn-area">
                    <a href="#about" class="scroll-about">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>      
    </div>
</header>
<!-- End header section -->

<!-- Start about section -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-area">
                    <div class="row">
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="about-left wow fadeInLeft">
                                <img src="{{ asset('site/images/quem-somos.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight">
                                <div class="title-area">
                                    <h2 class="tittle">A CIMS</h2>
                                    <span class="tittle-line"></span>
                                    <p>A CIMS é uma empresa voltada para o ramo de mineração, fundada em 2017, que tem por objetivo facilitar para que seus clientes e parceiros alcancem o sucesso que desejam.</p>

                                    <p>Nossa empresa se sustenta em 3 pilares:</p>
                                    <ul class="company-list">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Start welcome area -->
                <div class="welcome-area">
                    <!--<div class="title-area">
                      <h2 class="tittle">Welcome to <span>Nex</span></h2>
                      <span class="tittle-line"></span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniamo laboris nis</p>
                    </div>-->
                    <div class="welcome-content">
                        <div class="col-md-4">
                            <div class="single-wc-content">
                                <span><img src="{{ asset('site/images/004-rack-servers.png') }}" title=""></span>
                                <h4 class="wc-tittle">Hardware</h4>
                                <p>Possibilidade de 3 tipos diferentes de Hardware, voltados para 3 das principais moedas do mercado</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-wc-content">
                                <span><img src="{{ asset('site/images/002-bitcoin.png') }}" title=""></span>
                                <h4 class="wc-tittle">Economia</h4>
                                <p>Com a Cims, você se preocupa apenas com o recebimento, gaste seu tempo com o que te interessa, deixe as preocupações com a gente</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-wc-content">
                                <span><img src="{{ asset('site/images/001-wallet-filled-money-tool.png') }}" title=""></span>
                                <h4 class="wc-tittle">Carteira</h4>
                                <p>Carteira própria totalmente integrada com o sistema, site e portal, para facilitar as visualização de informações sobre sua aquisição e lucratividade, além da segurança do armazenamento.</p>
                            </div>
                        </div>								
                            
                    </div>
                </div>
                <!-- End welcome area -->
            </div>
        </div>
    </div>
</div> 
<!-- End about section -->

<!-- <div id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="team-area">
                    <div class="title-area">
                        <h2 class="tittle">EQUIPE</h2>
                        <span class="tittle-line"></span>
                        <p>Profissionais extremamente preparados para o mercado, com vasto conhecimento e bagagem para o desempenho e desenvolvimento máximo da empresa</p>
                    </div>

                    <div class="team-content">
                        <ul class="team-grid">
                            <li>
                                <div class="team-item team-img-4 wow fadeInUp">
                                    
                                </div>
                                <div class="team-address">
                                    <p>Adriano Martins</p>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="team-item team-img-2 wow fadeInUp">
                                    
                                </div>
                                <div class="team-address">
                                    <p>André Zimmermann</p>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="team-item team-img-1 wow fadeInUp">
                                    
                                </div>
                                <div class="team-address">
                                    <p>Angelo Ambrizzi</p>
                                </div>
                            </li>
                            <li>
                                <div class="team-item team-img-2 wow fadeInUp">
                                    
                                </div>
                                <div class="team-address">
                                    <p>Bruno duma</p>            
                                </div>
                            </li>
                            <li>
                                <div class="team-item team-img-3 wow fadeInUp">
                                    
                                </div>
                                <div class="team-address">
                                    <p>Cassio Devito</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Start service section -->
<div id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-area">
                    <div class="title-area">
                        <h2 class="tittle">NOSSOS SERVIÇOS</h2>
                        <span class="tittle-line"></span>
                    </div>
                    <!-- service content -->
                    <div class="service-content">
                        <ul class="service-table">
                            <li class="col-md-3 col-sm-6 mb-50">
                                <div class="single-service">
                                    <span class="fa fa-globe service-icon"></span>
                                    <h4 class="service-title">Mineiração</h4>
                                    <p>Serviço de Mineiração com hardware avançado, para a máxima performance e retorno.</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service">
                                    <span class="fa fa-check service-icon"></span>
                                    <h4 class="service-title">Consultoria</h4>
                                    <p>Consultoria para auxiliar do início ao fim, do esclarecimento de dúvidas a ajuda nas decisões.</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 mb-50">
                                <div class="single-service">
                                    <span class="fa fa-desktop service-icon"></span>
                                    <h4 class="service-title">Tecnologia</h4>
                                    <p>Todas as informações na sua tela, integrando, mineração, carteira, lucro, tudo em um só lugar.</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service">
                                    <span class="fa fa-bar-chart service-icon"></span>
                                    <h4 class="service-title">Estatisticas</h4>
                                    <p>Informação em tempo real e projeção de pagamentos, valorização da moeda, entre outros. </p>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End service section -->

<!-- Start Pricing Table section -->
<div id="pricing-table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pricing-table-area">
                    <div class="title-area">
                        <h2 class="tittle">Planos</h2>
                        <span class="tittle-line"></span>
                        <p>A CIMs disponibiliza a aquisição de 3 tipos diferentes de equipamentos, cada um voltado para uma das principais moedas do mercado atual.</p>
                    </div>
                    <!-- service content -->
                    <div class="pricing-table-content">
                        <ul class="price-table">
                            <li>
                                <div class="single-price">
                                    <h4 class="price-header">Multi Moedas</h4>
                                    <span class="price-amount">$ 5.690,00<br/></span>
                                    <p>195 mh/s</p>
                                    <p>10% fee</p>
                                    <p>$ 79.00 mês</p>
                                    <?php if( !isset( $_SESSION['user'] ) ){ ?>
                                    <a data-text="Cadastro/Login" class="button button-default" data-toggle="modal" data-target="#multimoedas" href="#contact"><span>Cadastro/Login</span></a>
                                    <?php } else { ?>
                                    <a data-text="COMPRAR" target="_blank" class="button button-default" href="//coingate.com/pay/cimsfarm-multimoedas"><span>COMPRAR</span></a>
                                    <?php }?>
                                </div>
                            </li>
                            <li>
                                <div class="single-price indisponivel">
                                    <h4 class="price-header">Bitcoin</h4>
                                    <span class="price-amount">$ 5.990,00<br/></span>
                                    <p>13.5 Th/s</p>
                                    <p>10% fee</p>
                                    <p>$ 145.00 mês</p>
                                    <a data-text="INDISPONIVEL" class="button" href="#contact"><span>Indisponível</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="single-price indisponivel">
                                    <h4 class="price-header">Litecoin</h4>
                                    <span class="price-amount">$ 5.990,00<br/></span>
                                    <p>500 mh/s</p>
                                    <p>10% fee</p>
                                    <p>$ 89.00 mês</p>
                                    <a data-text="INDISPONIVEL" class="button" href="#contact"><span>Indisponível</span></a>
                                </div>
                            </li>
                        </ul>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pricing Table section -->

<!-- Start Contact section -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!-- <div class="contact-left wow fadeInLeft">
                    <h2>Entre em contato</h2>
                    <div class="single-address">
                        <h4>Endereço</h4>
                        <p>Toledo OH, USA  - 43620</p>
                    </div>
                    <div class="single-address">
                        <h4>Contato</h4>
                        <p>Telefone: +(14) 99702-8622</p>
                    </div>
                    <div class="single-address">
                        <h4>E-Mail</h4>
                        <p>comercial@cimsfarm.com.br</p>
                    </div>
                </div> -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="contact-right wow fadeInRight">
                    <h2>Enviar Mensagem</h2>
                    <form class="contact-form">
                        <div class="form-group">                
                            <input type="text" name="nome" class="form-control" placeholder="Insira o Nome">
                        </div>
                        <div class="form-group">                
                            <input type="email" name="email" class="form-control" placeholder="Insira o Email">
                        </div>              
                        <div class="form-group">
                            <textarea name="descricao" class="form-control"></textarea>
                        </div>
                        <button type="submit" data-text="ENVIAR" class="button button-default"><span>Enviar</span></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="map-show">
            <div>
                <p>ENDEREÇO NO MAPA</p>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </div>
        </div> -->
    </div>
</div>
<!-- End Contact section -->
<!-- Start Google Map -->
<div id="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11922.281868942804!2d-83.56262860814432!3d41.66502164771293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b80d14eab1d55%3A0xc5f59e4bab15d531!2sToledo%2C+OH+43620%2C+USA!5e0!3m2!1sen!2sbr!4v1513106034563" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- End Google Map -->
@endsection
{include file='shared/header.tpl' title='Inicio :: Eventos Vale Verde' current='home'}

<div class="top-shadow"></div>
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <ul>
            <!-- THE FIRST SLIDE -->
            <li data-transition="slidedown" data-slotamount="15" data-masterspeed="300">
                <img src="assets/images/slides/slide1.jpg" alt="" />

                <div class="caption box-slide1 lfl ltl"
                     data-x="0"
                     data-y="150"
                     data-speed="300"
                     data-start="1000"
                     data-easing="easeOutExpo">
                    <h2>Eventos Vale Verde</h2>
                    <p>Um novo jeito de realizar o seu evento. Festas Infantis, Casamentos, Workshops e Confraternizações.</p>
                </div>
            </li>

            <!-- THE SECOND SLIDE -->
            <li data-transition="fade" data-slotamount="15" data-masterspeed="300">
                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                <img src="assets/images/slides/slide2.jpg" alt="" />

                <!-- THE CAPTIONS IN THIS SLDIE -->
                <div class="caption box-slide2 lft ltt"
                     data-x="770"
                     data-y="110"
                     data-speed="300"
                     data-start="500"
                     data-easing="easeOutExpo">
                    <h2>Harmonia entre Elegância e Natureza</h2>
                    <p>Faça seu evento conosco e conte com um lindo e elegante salão localizado em um espaço cercado por uma exuberante natuerza.</p><a class="button orange" href="<?php echo $siteName; ?>sobre">Saiba Mais</a>
                </div>
            </li>

            <!-- THE THIRD SLIDE -->
            <li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-link="/contato">
                <img src="assets/images/slides/slide3.jpg" alt="" />

                <div class="caption box-slide2 lft ltt"
                     data-x="770"
                     data-y="110"
                     data-speed="300"
                     data-start="500"
                     data-easing="easeOutExpo">
                    <h2>Estrutura, Comodidade e Segurança</h2>
                    <p>Um salão completamente equipado e pronto para você organizar facilmente seu evento com estacionamento privativo com tranquilidade e segurança.</p>
                    <a class="button orange" href="<?php echo $siteName; ?>contato">Fale Conosco</a>
                </div>
            </li>

        </ul>
        <!--enable slider timer
            <div class="tp-bannertimer"></div>
        -->
    </div>
</div><!--end slider-->


<div class="centered-wrapper">
    <section class="intro">
        <h2>EVENTOS VALE VERDE</h2>
        <h5>Um local elegante com uma natureza exuberante. Faça seu evento conosco. Ligue <?php echo $telefone; ?>.</h5>
    </section>

    <section class="homepage-grid">
        <div class="bgtitle"><h2>O HOTEL</h2></div>
        <section id="options">
            <ul id="filters" class="option-set clearfix" data-option-key="filter">
                <li><a href="#filter" data-option-value="*" class="selected active">Todos</a></li>
                <li><a href="#filter" data-option-value=".marketing">Exterior</a></li>
                <li><a href="#filter" data-option-value=".photography">Interior</a></li>
            </ul>
        </section>

        <section id="portfolio-wrapper">
            {include file='shared/isotopeAlbum.tpl'}
        </section>
    </section><!--end home-grid-->
    <div class="space"></div>

    <div class="clear"></div>
</div><!--end centered-wrapper-->

<div class="space"></div>

{include file='shared/footer.tpl'}

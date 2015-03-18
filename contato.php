<div class="top-shadow"></div>

<section class="page-title">
    <div class="page-background">
        <div class="pattern9"></div>
    </div>
    <div class="bottom-shadow"></div>
    <div class="title-wrapper">
        <div class="title-bg">
            <div class="title-content">
                <div class="two-third">
                    <h2>CONTATO</h2>
                </div>
                <div class="one-third column-last">
                </div>
                <div class="clear"></div>
            </div><!--end title-content-->
        </div>
    </div><!--end title-wrapper-->
</section>

<div class="centered-wrapper">
    <h6>Para mais informações fale conosco pelo telefone <?php echo $telefone; ?> ou pelo formulário de contato abaixo.</h6>
    <div class="one-fourth">
        <aside>
            <h6>Nosso Escritório:</h6>
            <p>
                <?php echo $endereco; ?><br />
                <?php echo $telefone; ?><br />
            </p>

            <div class="contact-info">
                <h6>CONTATO:</h6>
                <p><span>Telefone:</span> <?php echo $telefone; ?></p>
                <p><span>E-mail:</span> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a> </p>
            </div>
        </aside><!--end aside-->
    </div><!--end one-fourth-->

    <div class="three-fourth column-last">
        <h6>FALE CONOSCO:</h6>
        <div id="contactform">
            <div id="message"></div>
            <form method="post" action="php/contact.php" name="cform" id="cform">
                <fieldset class="percent-one-third">
                    <label>Nome <span>*</span></label>
                    <input id="name" type="text" name="name"/>
                </fieldset>
                <fieldset class="percent-one-third">
                    <label>E-mail <span>*</span></label>
                    <input type="text" name="email" id="email"/>
                </fieldset>
                <fieldset class="percent-one-third column-last">
                    <label>Telefone <span>*</span></label>
                    <input type="text" name="subject" id="subject" />
                </fieldset>
                <fieldset class="clear">
                    <label>Mensagem <span>*</span></label>
                    <textarea name="comments" id="comments"></textarea>
                </fieldset>
                <fieldset>
                    <input type="submit" name="send" value="Enviar" id="submit" class="button red"/>
                </fieldset>
            </form>
        </div><!--end contactform-->
    </div><!--three-fourth-->

    <div class="clear"></div>
</div><!--end centered-wrapper-->

<div class="space"></div>

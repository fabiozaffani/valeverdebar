<h6>FALE CONOSCO:</h6>
<div id="contactform">
    <div id="message"></div>
    <form method="post" action="{$siteName}contact" name="cform" id="cform">
        <fieldset class="percent-one-third">
            <label>Nome <span>*</span></label>
            <input id="name" type="text" name="name"/>
        </fieldset>
        <fieldset class="percent-one-third winnie">
            <label>Sobrenome <span>*</span></label>
            <input id="lastname" type="text" name="lastname" />
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

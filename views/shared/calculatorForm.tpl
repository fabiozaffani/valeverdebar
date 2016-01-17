<h3>Calculadora de Orçamento</h3>
<p>Abaixo faça uma estimativa de quanto ficará o custo para sua festa com tudo incluso</p>
<div id="calculatorForm">
    <div id="message"></div>
    <form method="post" action="{$siteName}calculator" name="calcForm" id="calcForm">
        <fieldset class="percent-one-third">
            <label>Dia da Semana</label>
            <select id="weekday" name="weekday" style="
                width: 95%;
                padding: 10px 15px;
                line-height: 20px;">
                <option value="saturday" selected>Sábado</option>
                <option value="weekend">Sexta ou Domingo</option>
                <option value="week">Segunda a Quinta</option>
            </select>
        </fieldset>
        <fieldset class="percent-one-third">
            <label>Número de Convidados <span>*</span></label>
            <input style="
                width: 95%;
                padding: 10px 15px;
                line-height: 20px"
                id="guests" type="text" name="guests"/>
        </fieldset>
        <fieldset class="percent-one-third winnie">
            <label>Tipo <span>*</span></label>
            <input id="tipo" type="text" name="tipo" />
        </fieldset>
        <fieldset style="height: 36px; padding-top: 30px" class="percent-one-third column-last">
            <input type="submit" name="send" value="Enviar" id="submit" class="button red"/>
        </fieldset>
    </form>
</div>


<footer id="footer">
    <div class="centered-wrapper">
        <div id="topfooter">

            <div class="one-half">
                <h3>Eventos Vale Verde</h3>
                <p>
                    O espaço para eventos Vale Verde oferece toda a comodidade e conforto em total harmonia com a natureza.
                    Você terá um salão de alto padrão, qualidade e segurança. Contamos ainda com estacionamento privativo em um espaço cercado por uma exuberante natureza onde você poderá realizar seu evento. Para mais informações ligue agora mesmo para <?php echo $telefone; ?>
                </p>
            </div><!--end percent-one-half-->

            <div class="one-half column-last">
                <h3>Fale conosco</h3>
                <ul>
                    <li>Endereço: <?php echo $endereco; ?></li>
                    <li>
                        <span>Telefone:</span> <?php echo $telefone; ?><br/>
                        <span>E-mail:</span> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br/>
                        <span>Site:</span> <a href="<?php echo $site['full']; ?>" target=" blank"><?php echo $site['basic']; ?></a>
                    </li>
                </ul>
            </div><!--end one-half-->

        </div><!--end topfooter-->
    </div><!--end centered-wrapper-->

    <div id="bottomfooter">
        <div class="centered-wrapper">
            <div class="one-half">
                <p>COPYRIGHT &copy; 2013 - <a href="http://www.plulz.com" target="_blank">PLULZ<a/> | TODOS OS DIREITOS RESERVADOS</p>
            </div><!--end one-half-->

            <div class="one-half column-last">
                <ul id="social">
                    <li><a class="rss" href="#">RSS Feed</a></li>
                    <li><a class="facebook" href="#">Facebook</a></li>
                    <li><a class="twitter" href="#">Twitter</a></li>
                    <li><a class="google" href="#">Google</a></li>

                    <!-- You can add social icons for forrst, dribbble, vimeo, linkedin and skype. Take the ones you need from the list and paste them above

                        <li><a class="flickr" href="#">Flickr</a></li>
                        <li><a class="forrst" href="#">Forrst</a></li>
                        <li><a class="dribbble" href="#">Dribbble</a></li>
                        <li><a class="vimeo" href="#">Vimeo</a></li>
                        <li><a class="linkedin" href="#">LinkedIn</a></li>
                        <li><a class="skype" href="#">Skype</a></li>
                    -->
                </ul>
            </div><!--end one-half-->
        </div><!--end centered-wrapper-->
    </div><!--end bottomfooter-->
</footer><!--end footer-->

</div><!--end wrapper-->
</body>
</html>
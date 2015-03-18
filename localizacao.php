

<div class="fullwidth-map">
    <div class="top-shadow"></div>
    <div class="bottom-shadow"></div>

    <div id="gmaps-border" class="location-page">
        <div id="gmaps-container"></div>
    </div> <!-- end #gmaps-border -->

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.1&sensor=false"></script>
    <script type="text/javascript">
        //<![CDATA[
        var map;
        var geocoder;

        initialize();

        function initialize() {
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                'address': "<?php echo $endereco; ?>",
                'partialmatch': true}, geocodeResult);
        }

        function geocodeResult(results, status) {

            if (status == 'OK' && results.length > 0) {

                var myCenter = new google.maps.LatLng(-23.236575, -46.840844);

                var latlng = new google.maps.LatLng(results[0].geometry.location.b,results[0].geometry.location.c);
                var myOptions = {
                    zoom: 17,
                    center: myCenter, //results[0].geometry.location,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                };

                map = new google.maps.Map(document.getElementById("gmaps-container"), myOptions);
                var marker = new google.maps.Marker({
                    position: myCenter, //results[0].geometry.location,
                    map: map
                });

                var contentString = '<div id="et-gmaps-content">'+
                    '<div id="bodyContent">'+
                    '<p><a target="_blank" href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q='+escape(results[0].formatted_address)+'&amp;ie=UTF8&amp;view=map">'+results[0].formatted_address+'</a>'+
                    '</p>'+
                    '</div>'+
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                    maxWidth: 900,
                    maxHeight: 300
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map,marker);
                });

                google.maps.event.trigger(marker, "click");

            } else {
                console.log("Geocode was not successful for the following reason: " + status);
            }
        }
        //]]>
    </script>


</div>

<div class="space"></div>

<div class="centered-wrapper">
    <div class="one-fourth">
        <aside>
            <h6>Nosso Escritório:</h6>
            <p>
                <?php echo $endereco; ?><br />
                <?php echo $telefone; ?><br />
                <a href="<?php echo $site['full']; ?>" target=" blank"><?php echo $site['basic']; ?></a><br />
            </p>

            <div class="contact-info">
                <h6>CONTATO:</h6>
                <p><span>Telefone:</span> <?php echo $telefone; ?></p>
                <p><span>E-mail:</span> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a> </p>
                <p><span>Site:</span> <a href="<?php echo $site['full']; ?>" target=" blank"><?php echo $site['basic']; ?></a> </p>
            </div>
        </aside><!--end aside-->
    </div><!--end one-fourth-->

    <div class="three-fourth column-last">
        <h6>FALE CONOSCO:</h6>
        <div id="contactform">
            <div id="message"></div>
            <form method="post" action="<?php echo $siteName; ?>php/contact.php" name="cform" id="cform">
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

{include file='shared/header.tpl' title='Localização :: Eventos Vale Verde' current='localizacao'}

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
                'address': "{$endereco}",
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
            {include file='shared/contactWidget.tpl'}
        </aside>
    </div>

    <div class="three-fourth column-last">
        {include file='shared/contactForm.tpl'}
    </div>

    <div class="clear"></div>
</div>

<div class="space"></div>

{include file='shared/footer.tpl'}

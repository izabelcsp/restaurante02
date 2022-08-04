<footer id="footer" class="small-12 columns no-padding">

<div class="global-page-container">

    <div class="small-11 small-centered large-12 columns footer-section">

        <div class="follow-us small-5 medium-3 small-offset-1 medium-offset-0 columns">
            <h4 class="footer-section-title">Siga-nos</h4>
            <a href="http://www.facebook.com"><img src="img/social-icons/facebook.svg" alt="facebook-icon"></a>
            <a href="http://www.twitter.com"><img src="img/social-icons/twitter.svg" alt="facebook-icon"></a>
            <a href="http://www.instagram.com"><img src="img/social-icons/instagram.svg" alt="facebook-icon"></a>
        </div>

        <div class="contato small-5 medium-3 small-offset-1 medium-offset-0 columns">
            <h4 class="footer-section-title">Contato</h4>
            <p>
                Rua São João , 204<br>
                São Paulo/SP<br>
                T. 2222-2222<br>
                contato@bistrobar.com.br
            </p>
        </div>

        <div class="horario small-5 medium-3 small-offset-1 medium-offset-0 columns">
            <h4 class="footer-section-title">Horários</h4>
            <?php
                $dia_semana = date("w");
                $agora = strtotime('now');
                $inicio_dia = strtotime('today');

                $hora_atual =  $agora  - $inicio_dia ;

                if($dia_semana >= 1 && $dia_semana <= 5){
                    if($hora_atual < 41400){
                    
                        $texto_horario = '(Aberto Agora)';
                        $classe_horario = 'horario-aberto';
                    }else{
                        $texto_horario = '(Fechado Agora)';
                        $classe_horario = 'horario-fechado';
                    }
                }else if($dia_semana == 6){
                    if($hora_atual < 41400 ){

                    }
                }
              
            
            ?>
            <
            <p><span class="<?php echo $classe_horario?>"><?php echo $texto_horario?></span><br>
                Seg-Sex: 11h30 - 24h00<br>
                Sábado 11h30 - 02h00<br>
                Domingo 11h30 - 18h</p>
        </div>

        <div class="como-chegar small-5 medium-3 small-offset-1 medium-offset-0 columns">
            <h4 class="footer-section-title">Como chegar</h4>
            <div id="map"></div>
        </div>

        <hr>
        </hr>

        <div class="copyright small-12 columns">

            2022 &copy; Todos os direitos reservados

        </div>
    </div>

</div>

</footer>


<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/foundation.min.js"></script>
<script>
function initMap() {
    var local = {
        lat: -22.971068,
        lng: -43.186851
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: local,
        styles: [{
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "poi",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "transit",
                "stylers": [{
                    "visibility": "off"
                }]
            }
        ]

    });
    var marker = new google.maps.Marker({
        position: local,
        map: map
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlo2Bml6zmqP1_xtT3aLybZdWZNP7l8CM&callback=initMap">
</script>
<script>
$(document).foundation();
</script>
</body>





</html>
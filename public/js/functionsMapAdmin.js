var map;
    /**
    Función que inicializa el mapa
    */
    function initMap() 
    {
        map = new google.maps.Map
        (
            document.getElementById('map'), 
            {
                center: {lat: 9.9060031, lng: -83.6905646},
                zoom: 13
            }
        );
    }
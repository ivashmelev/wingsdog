window.onload = function(){
    // function initMap() {
      
        // jQuery("#geo").text(ymaps.geolocation.city);
        // jQuery("#user-region").text(ymaps.geolocation.region);
        // jQuery("#user-country").text(ymaps.geolocation.country);
        // var g=ymaps.geolocation.region;
        
        // if (g=="Нижегородская область")
        // {
        //   var uluru = {lat: 56.300216, lng: 43.934316};
        // jQuery("#geo").text(" г. Нижний Новгород ул. Варварская д. 7, офис 9");
        // jQuery("#footer-num").text(" 8-831-235-01-73 ");
        // jQuery("#geo-mail").text("nn@1ditis.ru");
        // }
        // else if (g=="Республика Коми")
        // {
        //   var uluru = {lat: 61.6499039, lng: 50.8385643};
        //   jQuery("#geo").text(" г. Сыктывкар ул. Гаражная дом 9, офис 221");
        //   jQuery("#footer-num").text(" 8-8212-400-922 ");
        //   jQuery("#geo-mail").text("mail@1ditis.ru");
        // }
        // else
        // {
          //   jQuery("#geo").text(" г. Нижний Новгород ул. Варварская д. 7, офис 9 ");
          //   jQuery("#geo-2").text(" г. Сыктывкар ул. Гаражная дом 9, офис 221");
          //   jQuery("#footer-num").text(" 8-831-235-01-73 ");
          //   jQuery("#footer-num-2").text(" 8-8212-400-922 ");
          //   jQuery("#geo-mail").text(" nn@1ditis.ru ");
          //   jQuery("#geo-mail-2").text(" mail@1ditis.ru ");
          // }
          
          // 56.4048441,43.6863186,13.75z
        var uluru = {lat: 56.4048441, lng: 43.7193186};
        var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: uluru,
        styles:[
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#dadada"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#c9c9c9"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#4988f1"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            }
          ]
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon:"img/icon2.png"
        });
        marker.setMap(map);
        // });
    // }
    // console.log("script run");
}
// }
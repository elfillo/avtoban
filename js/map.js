$(document).ready(function () {
    var mapScript = $.getScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
    $.when(mapScript)
        .done(function () {

            ymaps.ready(init)
            function init() {

                var newMarkerCollection = new ymaps.GeoObjectCollection();
                var markerCollectio = [];
                var center = [52.275307, 104.321372];

                var myMap = new ymaps.Map("map", {
                    center: center,
                    zoom: 7,
                    controls: []
                });

                myMap.behaviors.disable('scrollZoom');

                var placemark = setPlacemark([52.275307, 104.321372]);
                var placemark_2 = setPlacemark([52.281803, 104.335996]);

                markerCollectio.push(placemark);
                markerCollectio.push(placemark_2);
                newMarkerCollection.add(placemark);
                newMarkerCollection.add(placemark_2);
                myMap.geoObjects.add(newMarkerCollection);

                setMapCenter(myMap, newMarkerCollection)
            }

            function setPlacemark(coords) {
                var placemark = new ymaps.Placemark(coords, {}, {
                    iconLayout: 'default#image',
                    iconImageHref: '/wp-content/uploads/2020/03/map-marker.png',
                    iconImageSize: [50, 50],
                });

                return placemark;
            }

            function setMapCenter(map, collection) {
                var centerAndZoom = ymaps.util.bounds.getCenterAndZoom(
                    collection.getBounds(),
                    map.container.getSize(),
                    map.options.get('projection')
                );

                map.setCenter(centerAndZoom.center, 13);
            }
        })
});
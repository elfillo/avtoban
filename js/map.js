$(document).ready(function () {

    console.log('before ajax');
    $.ajax({
        url: '/wp-admin/admin-ajax.php',
        data: {
            action: 'map',
        },
        type: 'GET',
        success: function (res) {
            let data = JSON.parse(res);
            drawMap(data);
        },
        error: function (res) {
            console.log(res, 'err')
        }
    });

    function drawMap(data) {
        var mapScript = $.getScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
        $.when(mapScript)
            .done(function () {

                ymaps.ready(init)
                function init() {

                    var newMarkerCollection = new ymaps.GeoObjectCollection();
                    var markerCollectio = [];
                    var center = [data.center];

                    var myMap = new ymaps.Map("map", {
                        center: center,
                        zoom: 7,
                        controls: []
                    });

                    myMap.behaviors.disable('scrollZoom');



                    data.markers.forEach((item) => {
                        //var pl = setPlacemark([item]);
                        //markerCollectio.push(pl);
                        console.log(newMarkerCollection, 'newMarkerCollection');
                        //newMarkerCollection.add(pl);

                        //markerCollectio.push();
                        //newMarkerCollection.add(setPlacemark([item]));
                        // var placemark = new ymaps.Placemark([item], {}, {
                        //     iconLayout: 'default#image',
                        //     iconImageHref: data.icon,
                        //     iconImageSize: [50, 50],
                        // });
                        //
                        // markerCollectio.push(placemark);
                        // newMarkerCollection.add(placemark);
                        // //this.setPlacemark([item]);
                    });


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
                        iconImageHref: data.icon,
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
    }
});
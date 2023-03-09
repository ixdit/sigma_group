jQuery(function($){



        ymaps.ready(init);
        function init() {
        var myMap = new ymaps.Map("map1", {
        center: [58.533464555537, 31.275122835832],
        zoom: 10,
        controls: ['zoomControl']
    }, {
        searchControlProvider: 'yandex#search'
    });

        data.forEach(function(row) {
        var myPlacemark = new ymaps.Placemark(row.cords.split(','), {
        balloonContentHeader: row.name,
        balloonContent: row.address,
        balloonContent: row.text
    }, {
        preset: 'islands#redDotIcon',
        iconColor: '#ff0000'
    });
        myMap.geoObjects.add(myPlacemark);
    });

        // myMap.container.fitToViewport();
        // myMap.setBounds(myMap.geoObjects.getBounds());

        myMap.setBounds(myMap.geoObjects.getBounds(),{checkZoomRange:true, zoomMargin:1});
        // myMap.setBounds(myMap.geoObjects.getBounds(), {checkZoomRange:false}).then(function(){
        //     if(myMap.getZoom() > 15) myMap.setZoom(15); // Если значение zoom превышает 15, то устанавливаем 15.
        // });
    }

});
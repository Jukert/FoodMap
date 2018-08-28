

$(document).ready(function () {

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('#video1').remove();
        $('.page').css({'background-image':'url(assets/image/bg.jpg)',
            'background-size': '100%',
            'background-repeat': 'no-repeat',
            'background-position': 'top'
        });
    }else{
        let videobackground = new $.backgroundVideo($('.page'), {
            "align": "centerXY",
            "width": 1280,
            "height": 720,
            "path": "videos/",
            "filename": "bg",
            "types": ["mp4", "ogg", "webm"],
            "preload": true,
            "autoplay": true,
            "loop": true
        });

    }

    /**
     * main
     */
    let type;
    let cost;
    let radius;
    let width = $('.page').width();

    $('.preloader').css('display','none');
    $('.page').css('display','block');

    $('#video1').css({'position':'absolute','z-index':'-500'});
    $('#video1').attr("width",width);



    $( "#slider-range" ).slider({
        range: false,
        min: 0,
        values:  0,
        slide: function( event, ui ) {
                let rad = ui.value;
                let persent = (parseFloat(rad)*200);
                $('.text__radius>p').css('left', (rad-2)+'%');
                $('.text__radius>p').text(parseInt(persent)+"м");
                radius = parseInt(persent);
        }
    });


    $('.typ').click(function (event) {
        if($(this).hasClass('active'))
            return;

        unactiveClass('.typ');

        $(this).addClass('active');
    })

    $('.but-cost').click(function (event) {
        if($(this).hasClass('active'))
            return;

        unactiveClass('.but-cost');

        $(this).addClass('active');
    })


    $('.button-accept').click(function (event) {
        let counter = 0;

        $('.categories').each(function (i,v) {
            if ($(v).hasClass('active'))
                counter++;
        });

        if (counter != 2) {
            $.notify("Выберите все пункты меню!!!", "error");
            return;
        }
        $('.categories').each(function (i, v) {
            if ($(v).hasClass("active")){
                if ($(v).hasClass("typ")){
                    type = v.classList.item(2);
                }
                if ($(v).hasClass("but-cost")){
                    cost = v.classList.item(2);
                }
            }

        })

        window.location.href = "/?page=map&type="+type+"&cost="+cost+"&radius="+radius;

    })

    function unactiveClass(c) {
        $(c).each(function (i,v) {
            $(v).removeClass('active');
        })
    }

    /**
     * acc
     */


    $('.adverting').click(function (event) {

        window.location.href = "?page=adverting";

        event.preventDefault();
    })

    $('.details').click(function (event) {

        if ($(this).hasClass('adverting'))
            return;

        $(this).each(function (i, v) {

            $.ajax({
                url: '../ajax/accountInsert.php',
                type: 'post',
                data:{'class':v.classList.item(1)},
                success: function (data) {
                    $(v).children().text(data);
                }
            })
        });
        event.preventDefault();
    })

    /**
     * change password
     */


    /**
     *likes
     */

    $('.heart').click(function (event) {

        if(!$('.heart').hasClass('active_h')) {
            $.ajax({
                url: '../ajax/likes.php',
                type: 'post',
                data: {'place': getUrlParameter('p')},
                success: function (like) {
                    $('.heart').addClass('active_h');
                }
            });
        }
        else{
            $.ajax({
                url: '../ajax/delLikes.php',
                type: 'post',
                data: {'place': getUrlParameter('p')},
                success: function (like) {
                    $('.heart').removeClass('active_h');
                }
            });
        }
        event.preventDefault();
    });


    /**
     * exit
     */
    $('.button__exit').click(function (event) {
        window.location.href = "/exit.php";
    })

    /**
     * auth
     */

    $('.button__accept--authorization>button').click(function (event) {

        let form = $('.auth').serializeArray();
         $.ajax({
             url: "../php/authorization.php",
             type: 'post',
             data: {'login':form[0].value, 'password':form[1].value},
             success: function (data) {
                 if (parseInt(data) != 1){
                     if (parseInt(data) == 3)
                        $('#auth-password').notify("Пароль введен неверно", "error")
                     if (parseInt(data) == 23) {
                         $('#auth-login').notify("Логин введен неверно", "error")
                         $('#auth-password').notify("Пароль введен неверно", "error")
                     }
                 }
                 else{
                     window.location.href = "/index.php";
                 }
             }
         });
        event.preventDefault();
    })

    /**
     * still
     */

    $('.still').click(function (event) {

        $.ajax({
            url: '../ajax/description.php',
            type: 'post',
            data: {'p': getUrlParameter('p')},
            success: function (data) {
                $('.description-information>p').text(data);
            }
        })

        event.preventDefault();
    })

    /**
     *scroll
     */

    let p = 0;
    let sort = 'id'
    function loadPlaces(item,condition = "null"){
        $.ajax({
            url: "../ajax/loadListPlaces.php",
            type: "post",
            data: {'p' : item, 'condition':condition},
            success: function (data) {
                $('.list__places').append(data);
            }
        });
    }

    loadPlaces(p,sort);
    $('.list__places').scroll(function (event) {

        let scroll = $('.list__places').scrollTop();
        let scrollFull = $(".list__places").get(0).scrollHeight;

        if (scroll > scrollFull*0.50){
            /**
             * подгружать блоки
             */
            p++;
            loadPlaces(p,sort);
            return false;
        }
    });



    getUrlParameter = function getUrlParameter(sParam) {
        let sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }
    
    function dependencies(type){
        let p = getRandomInt(0,999);
        if (p<=38){
            adverts("vid",type)
            return;
        }
        if (p>38 && p<=98){
            adverts("photo",type)
            return;
        }
        if (p>98 && p<=200){
            adverts("text",type)
            return;
        }
    }

    function adverts(name,type) {
        $.ajax({
            url: '../ajax/'+name+'Advert.php',
            type: 'post',
            data:{'type':type},
            success: function (data) {
                if(data == "0"){
                    return false;
                }
                $.featherlight(data);
            }
        })
    }

    (getUrlParameter('page') == "map") ? dependencies(getUrlParameter('type')) : null;

    $(document).on('click','.exit',function (event) {
        $('.menu__markers').remove();
        $('font').remove();
        $('br').remove();
        event.preventDefault();
    })

    /**
     * sort
     */

    $('.list').click(function (event) {
        $('.list__places').empty();
        p = 0;
        sort = 'id';
        loadPlaces(p,sort);
        event.preventDefault();
    })

    $('.rating').click(function (event) {
        $('.list__places').empty();
        p = 0;
        sort = 'rating';
        loadPlaces(p,sort);
        event.preventDefault();
    })

    $('.abc').click(function (event) {
        $('.list__places').empty();
        p = 0;
        sort = 'name';
        loadPlaces(p,sort);
        event.preventDefault();
    })


    $('.catering-choose>input').keyup(function (event) {

        $.ajax({
            url: '../ajax/getCatering.php',
            dataType: 'json',
            type: 'post',
            data: {'name': $('.catering-choose>input').val()},
            success: function (data) {
                $.each(data,function (index, value) {
                    $('.name-searcher>a').text(value['name']);
                    $('.name-searcher>a').attr('href',"?page=pagePlace&p="+value['id']);
                })
            }
        })
    })

    $('.advert-type>select').change(function () {
        $('.url-video').css('display','none');
        if ($('.advert-type>select>option:selected').val() == 3){
            $('.url-video').css('display','flex');
        }
    })


   $('.payAdvert').click(function (event) {
        let m = '77042';//id magaz
        let oa = 'null';//summ
        let o;//номер заказа
        let s;// подпись ajax create sign;
        let us_UsId;
        let us_CatId;
        let curseRus = 0.0309;

        let arrayForm;
        let catering;
        let typeAdvert;
        let video = "";
        let count;


        arrayForm = $('.adverting-form>form').serializeArray();
        $.each(arrayForm,function (index, value) {
            (value['name'] == 'catering') ? catering = $('.name-searcher>a>p').text() : "";
            (value['name'] == 'type') ? typeAdvert = value['value'] : "";
            (value['name'] == 'video') ? video = value['value'] : "";
            (value['name'] == 'count') ? count = value['value'] : "";
        });
        (typeAdvert == '1') ? oa = (parseFloat(count)*0.015/curseRus).toFixed(2) : "";
        (typeAdvert == '2') ? oa = (parseFloat(count)*0.01/curseRus).toFixed(2) : "";
        (typeAdvert == '3') ? oa = (parseFloat(count)*0.035/curseRus).toFixed(2) : "";


        $.ajax({
            url: '../ajax/getNumber.php',
            type: 'post',
            data: {'name':catering},
            success: function (data) {
                o = data;
            }
        });

         $.ajax({
            url: '../ajax/createSign.php',
            type: 'post',
            data: {
                'm':m,
                'oa':oa,
                'name':catering
            },
            success:  function (data) {
                s = data;
                location.href = 'http://www.free-kassa.ru/merchant/cash.php?m='+m+'&oa='+oa+'&s='+s+'&o='+o+'&us_UsId='+us_UsId+'&us_CatId='+us_CatId+'&us_video='+video;
            }
        });
        event.preventDefault();
    })

});


/**
 * map one place
 */

getUrlParameter = function getUrlParameter(sParam) {
    let sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};



let map;
async function detailsMap() {
    map = new google.maps.Map(document.getElementById('map-place'), {
        zoom: 12,
        scrollwheel: false
    });
let cost = null;
await $.ajax({
    url: '../ajax/getLatLng.php',
    type: 'post',
    dataType: ' json',
    data: {'p':getUrlParameter('p') },
    success: function (data) {
        map.setCenter(new google.maps.LatLng(data[0], data[1]));
        let marker = new google.maps.Marker({
            map: map,
            position: {lat: parseFloat(data[0]),lng:parseFloat(data[1])}
        });

        cost = data[2];
    }
});

    if (parseInt(cost) == 1){
        $('.color-progress').css("width",0);
        $('.color-progress').css("left", 0+'%');
        $('.block-cost').css("left", 100-10+0.3+'%');
        $('.block-cost>p').text('Большая стоимость');
    }

    if (parseInt(cost) == 2){
        $('.color-progress').css("width",50+'%');
        $('.color-progress').css("left", 50+'%');
        $('.block-cost').css("left", 50-10+0.3+'%');
        $('.block-cost>p').text('Средняя стоимость');
    }

    if (parseInt(cost) == 3){
        $('.color-progress').css("width",85+'%');
        $('.color-progress').css("left", 15+'%');
        $('.block-cost').css("left", 15-10+0.3+'%');
        $('.block-cost>p').text('Небольшая стоимость');
    }

}




async function initMap() {
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
         let pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };
        createMarker({
            position: pos,
            map: map,
            content: "Это ты",
            image: "../assets/image/geoloc.png"
        });
        map.setCenter(pos);
    }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
    });
} else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
}


    let markers =[];
    let myLatlng = new google.maps.LatLng(53.902075, 27.559854);
    map = new google.maps.Map(document.getElementById('map'), {
        center: myLatlng,
        zoom: 12,
        scrollwheel: false
    });


     getUrlParameter = function getUrlParameter(sParam) {
        let sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };

    await $.ajax({
        url: '../ajax/getJSONMarkers.php',
        type: 'post',
        dataType: 'json',
        data: {'type':getUrlParameter('type'), 'cost': getUrlParameter('cost')},
        success: function (data) {
            $.each( data, function( key, val ) {
                let pos = {};
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };


                        let distanse = google.maps.geometry.spherical.computeDistanceBetween(
                            new google.maps.LatLng(parseFloat(pos.lat), parseFloat(pos.lng)),
                            new google.maps.LatLng(parseFloat(val.lat), parseFloat(val.lng))
                        );
                        if (parseFloat(getUrlParameter('radius')) > parseFloat(distanse)) {
                            createMarker({
                                position: {lat: parseFloat(val.lat), lng: parseFloat(val.lng)},
                                map: map,
                                content: val.description,
                                image: "",
                                id: val.id
                            })
                        }
                    });
                }
            });
        }
    })

     function createMarker(place) {
        let marker = new google.maps.Marker({
            map: map,
            position: place.position,
            icon: place.image
        });
        google.maps.event.addListener(marker, 'click', function () {
            $.ajax({
                url: '../ajax/menuMarker.php',
                type: 'post',
                data: {'id': place.id},
                success: function (data) {
                    $('.menu__markers').remove();
                    $('#map').append(data);
                    $('font').remove();
                    $('br').remove();
                }
            });
        });
    }

}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
}











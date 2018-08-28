

    var videobackground = new $.backgroundVideo($('.page'), {
        "align": "centerXY",
        "width": 1280,
        "height": 720,
        "path": "../videos/",
        "filename": "bg",
        "types": ["mp4", "ogg", "webm"],
        "preload": true,
        "autoplay": true,
        "loop": true
    });



    let map;
    $(document).ready(function () {
            $('.preloader').css('display','none');
            $('.page').css('display','block');

            $('.selected-radius').slider();

            $('.selected-radius').slider({
                change: function (event,ui) {
                    let radius = $('.ui-state-default').css('left');
                    let width = $('.text__radius').css('width');
                    let persent = (parseFloat(radius)/parseFloat(width)*100000)+1;
                    $('.text__radius>p').css('left',radius);
                    $('.text__radius>p').text(parseInt(persent/10)+"м");
            }
            });

        $('.button__add').click(function (event) {
            let error = 0;
            let unFill = [];
            $.each($(".panel__add-catering>form>input"),function (i, v) {
                if ($(v).val() == ""){
                    if ($(v).attr('id') != 'src') {
                        error++;
                        unFill.push(v);
                    }
                }
            });

            if (error > 0) {
                $.each(unFill,function (index, value) {
                    $(value).notify("Заполните поле","error");
                });
                event.preventDefault();
                return false;
            }

        });


        $("#drop-area").dmUploader({
            url: 'php/uploadImg.php',
            maxFileSize: 3000000,
            allowedTypes: "image/*",
            onInit: function(){
                console.log('Callback: Plugin initialized');
            },
            onUploadSuccess: function (id,data) {
                $('.uploadsImg').html(' <img src="../../assets/temp/'+data+'" alt="">');
                $('.x').css('display','block');
                $('#drop-area').css('display','none');
                $('#src').val(data);
            }
        });

            $('.x').click(function (event) {
                $('.x').css('display','none');
                $('.uploadsImg').empty();
                $('#drop-area').css('display','block');
                event.preventDefault()
            })
        let marker = new google.maps.Marker();
        $('.check-marker').click(function (event) {
            if ((parseFloat($('#lat').val()) < 0) || (parseFloat($('#lat').val()) > 90)){
                $('#lat').notify('Введите правильный угол (0° > 90°)','error');
                return false;
            }

            if (parseFloat($('#lng').val()) < 0 || parseFloat($('#lng').val()) > 180){
                $('#lng').notify('Введите правильный угол (0° > 180°)','error');
                return false;
            }
             marker.setMap(null);
             marker = new google.maps.Marker({
                map: map,
                position:{lat: parseFloat($('#lat').val()), lng: parseFloat($('#lng').val())}
            });
             map.setCenter({lat: parseFloat($('#lat').val()), lng: parseFloat($('#lng').val())});
            return false;
            event.preventDefault();
        })

    });


    async function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            scrollwheel: false
        });
        map.setCenter(new google.maps.LatLng(53.902075, 27.559854));
    }





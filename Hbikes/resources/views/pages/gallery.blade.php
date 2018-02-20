@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <img id="mainImage" src="https://www.desktopbackground.org/download/1920x1080/2013/09/03/633281_mountain-bike-downhill-wallpapers-hd-free-desktop-backgrounds-2016_3000x2000_h.jpg" alt="" style="width:100%;">
        </div>
    </div>
    <hr>
    <section class="gallery">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="https://wallpaperscraft.com/image/sports_people_bmx_bike_81258_1920x1080.jpg" alt="" style="width:100%">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="http://colonybmx.com.au/news/wp-content/uploads/2016/03/nathan-tbog-desktop.jpg" alt="" style="width:100%">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="https://wallpaper.wiki/wp-content/uploads/2017/04/wallpaper.wiki-Bmx-Image-PIC-WPD0011437.jpg" alt="" style="width:100%">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="http://colonybmx.com.au/news/wp-content/uploads/2016/02/DESKTOP-CHRISC.jpg" alt="" style="width:100%">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="http://a.espncdn.com/media/motion/2016/0603/actn_160603_JAMIE_BESTWICK_GOLD_20161430/actn_160603_JAMIE_BESTWICK_GOLD_20161430.jpg" alt="" style="width:100%">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="http://dodskypict.com/D/Bmx-Wallpaper-On-Wallpaper-Hd-9-1920x1080.jpg" alt="" style="width:100%">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="http://s3.rockstarenergy.com/cache/1920x1080-FOCAL-75-center-center/2013/01/David.Herman_bmxrace_June2012_01409.jpg" alt="" style="width:100%">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <img src="https://wallpapercave.com/wp/5BrKujP.jpg" alt="" style="width:100%">
            </div>
        </div>
    </section>
@endsection
@section('script')
    $('.gallery').find('img').attr('onclick','show(this)');
    $('.row').find('img').css('border-radius','1.5em');
    var imagenCentral = $('#mainImage');
    var gallery = [];
    function show(x){

        imagenCentral.fadeOut(500, function(){
            imagenCentral.prop('src',x.src);
        });
        imagenCentral.fadeIn(500);
        clearInterval(animation);
    }

    var j = 0;

    var animation = setInterval(function(){
        imagenCentral.fadeOut(500, function(){
            imagenCentral.prop('src',gallery[j++ % gallery.length]);
        });
        imagenCentral.fadeIn(500);
    },5000);
    
    onload=function(){
        var images = $('.gallery').find('img');

        for(var i = 0; i < images.length; i++){
            gallery.push(images[i].src);
        }

    }

@endsection
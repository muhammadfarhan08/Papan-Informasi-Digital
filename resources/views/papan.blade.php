<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="{{asset ('img/digiclass logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>DIGICLASS</title>

</head>

<style>
    .overflow {
        position: inherit;
        overflow: hidden;
    }

    .container {
        width: 200px;
        margin-right: 10000px;
        padding-left: 0px;
    }

    h5 {
        margin-left: 100px;
        color: #282828;
    }

    a {
        margin-left: 20px;
    }

    body {
        background-image: url("{{asset ('img/wp1836699.jpg') }}");
        font-family: tahoma;
        color: #fff;
    }

    h1 {
        margin: 20px 10%;
        font-size: 60px;
        letter-spacing: 10px;
    }

    #watch {
        color: rgb(252, 150, 65);
        -webkit-text-stroke: 3px rgb(212, 93, 202);
        text-shadow: 4px 4px 10px rgba(165, 24, 170, 0.4),
            4px 4px 20px rgba(48, 11, 134, 0.4),
            4px 4px 30px rgba(114, 20, 72, 0.4),
            4px 4px 40px rgba(96, 1, 160, 0.4);
    }

    #clock {
        color: rgb(252, 150, 65);
        -webkit-text-stroke: 3px rgb(212, 93, 202);
        text-shadow: 4px 4px 10px rgba(165, 24, 170, 0.4),
            4px 4px 20px rgba(48, 11, 134, 0.4),
            4px 4px 30px rgba(114, 20, 72, 0.4),
            4px 4px 40px rgba(96, 1, 160, 0.4);
    }

    #header {
        color: #282828;
        background-color: aquamarine;
    }

    h5 {
        color: rgb(7, 51, 107);
        -webkit-text-stroke: 3px rgb(209, 117, 12);
        text-shadow: 4px 4px 10px rgba(245, 5, 77, 0.4),
            4px 4px 20px rgba(214, 3, 84, 0.4),
            4px 4px 30px rgb(111, 0, 255),
            4px 4px 40px rgba(90, 88, 92, 0.4);
    }

    .footer {
        margin-bottom: 0%;
    }

    iframe {
        height: 630px;
        margin-bottom: 0px;
        margin-top: 3px;
        padding-bottom: 0px;
    }
</style>
<section id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand h1" href="#"> <img src="{{asset ('img/digiclass logo.png') }}" alt="" width="40" height="38">Digiclass</a>
        <marquee behavior="--title--" direction="left">
            <h5>Visi
                Menjadi pusat rujukan bersertifikasi untuk pengembangan dan Pemasaran marketing digital yang Profesional, Kredibel dan  akuntabel 
                 
                Misi
                
                Menyelenggarakan Sertifikasi Di Bidang Digital Marketing yang di akui Kredibilitasnya baik di Dunia Pendidikan dan Dunia Industri
            </h5>
        </marquee>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#newsMenu" type="button" aria-controls="newsMenu" aria-expanded="false" aria-label="Toggler navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</section>
<!--Container-->
<div class="container">

    <!--Start slider news-->
    <div>
        <!--thumbnail img-->
        <iframe style="margin-right: 100px;" width="700" src="https://www.youtube.com/embed/MavEpJETfgI?autoplay=1&showinfo=0&loop=1&list=PLvNxGp1V1dOwpDBl7L3AJIlkKYdNDKUEs&rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="row">
        <div class="col-12 pb-5">
            <div id="featured" class="carousel slide carousel" data-ride="carousel">

            </div>
        </div>
    </div>

</div>
<!--End slider news-->
<!--end code-->
<div class="footer" style="margin-top: 0px;padding-top: 0px;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div id="clock"></div>
        <a class="navbar-brand h1" href="#" style="text-align: center;">
            <img src="{{asset ('img/digiclass logo.png') }}" alt="" width="30" height="24">Digiclass
            <div id="watch">
            </div>
        </a>


        <marquee behavior="--title--" direction="left">
            <h5>Jl. Rambutan No.46 Rt 003/001, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519</h5>
        </marquee>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#newsMenu" type="button" aria-controls="newsMenu" aria-expanded="false" aria-label="Toggler navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        function clock() {
            var now = new Date();
            var secs = ('0' + now.getSeconds()).slice(-2);
            var mins = ('0' + now.getMinutes()).slice(-2);
            var hr = now.getHours();
            var Time = hr + ":" + mins + ":" + secs;
            document.getElementById("watch").innerHTML = Time;
            requestAnimationFrame(clock);
        }

        requestAnimationFrame(clock);
    });
</script>
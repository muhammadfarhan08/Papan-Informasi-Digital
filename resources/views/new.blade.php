<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon" type="image/png" href="{{asset ('img/digiclass logo.png') }}">
<title>DIGICLASS</title>


<!------ Include the above in your HEAD tag ---------->

<style>
.b-0 {
    bottom: 0;
}
.bg-shadow {
    background: rgba(76, 76, 76, 0);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(179, 171, 171, 0)), color-stop(49%, rgba(48, 48, 48, 0.37)), color-stop(100%, rgba(19, 19, 19, 0.8)));
    background: linear-gradient(to bottom, rgba(179, 171, 171, 0) 0%, rgba(48, 48, 48, 0.71) 49%, rgba(19, 19, 19, 0.8) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
}
.top-indicator {
    right: 0;
    top: 1rem;
    bottom: inherit;
    left: inherit;
    margin-right: 1rem;
}
.overflow {
    position: relative;
    overflow: hidden;
}
.zoom img {
    transition: all 0.2s linear;
}
.zoom:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
.container{
    width: 1000px;
    margin-top: 1px;
    margin-right: 0px;
    margin-bottom: 0%;
}

h5{
   margin-left: 100px;
   color: #282828;
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

#clock{
    color: rgb(252, 150, 65);
  -webkit-text-stroke: 3px rgb(212, 93, 202);
  text-shadow: 4px 4px 10px rgba(165, 24, 170, 0.4),
               4px 4px 20px rgba(48, 11, 134, 0.4),
               4px 4px 30px rgba(114, 20, 72, 0.4),
               4px 4px 40px rgba(96, 1, 160, 0.4);
}

#header{
    color: #282828;
    background-color: aquamarine;
}
h5{
    color: rgb(7, 51, 107);
  -webkit-text-stroke: 3px rgb(209, 117, 12);
  text-shadow: 4px 4px 10px rgba(245, 5, 77, 0.4),
               4px 4px 20px rgba(214, 3, 84, 0.4),
               4px 4px 30px rgb(111, 0, 255),
               4px 4px 40px rgba(90, 88, 92, 0.4);
}

a{
    font-size: 20px;
    text-align: center;
    margin-left: 20px;
}
 body {
        overflow: hidden;
    }

.video{
    float: left;
    width: 5000px;
}

</style>

<section id="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand h1" href="#"> <img src="{{asset ('img/digiclass logo.png') }}" alt="" width="40" height="38">Digiclass</a>
    <marquee behavior="--title--" direction="left"><h5>Jl. Rambutan No.46 Rt 003/001, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519
    </h5></marquee>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#newsMenu" type="button" aria-controls="newsMenu" aria-expanded="false" aria-label="Toggler navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
</section>
<!--Container-->
<div class="container">
    <!--Start code-->
    <div class="row">
        <div class="col-12 pb-5">
            <div id="featured" class="carousel slide carousel" data-ride="carousel">
                <!--dots navigate-->
                <!-- <ol class="carousel-indicators top-indicator">
                    <li data-target="#featured" data-slide-to="0" class="active"></li>
                    <li data-target="#featured" data-slide-to="1"></li>
                    <li data-target="#featured" data-slide-to="2"></li>
                    <li data-target="#featured" data-slide-to="3"></li>
                </ol> -->

                <!--carousel inner-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <!--Start slider news-->
                            <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                       <div class="video">
                                        <iframe width="795" height="410" src="https://www.youtube.com/embed/4IAa1qjbSKg"
                                        frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <!-- <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <h2 class="h3 post-title text-white my-1">-</h2>
                                            </a> -->
                                            <!-- meta title -->
                                            <!-- <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="../category/author.html">Digiclas</a></span>
                                                <span class="news-date">Oct 22, 2029</span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End slider news-->

                            <!--Start box news-->
                            <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                                <div class="row">
                                    <!--news box-->
                                    <div class="col-6 pb-1 pt-0 pr-1">
                                        <div class="card border-0 rounded-0 text-white overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_right-cover-2 image-wrapper">
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <img class="img-fluid"
                                                             src="https://bootstrap.news/source/img8.jpg"
                                                             alt="Bootstrap blog theme">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!-- category -->
                                                    <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Day 1 - Day 2</a>

                                                    <!--title-->
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <h2 class="h5 text-white my-1">MINDSET & FUNDAMENTAL
                                                            BISNIS</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--news box-->
                                    <div class="col-6 pb-1 pl-1 pt-0">
                                        <div class="card border-0 rounded-0 text-white overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_right-cover-2 image-wrapper">
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <img class="img-fluid"
                                                             src="https://bootstrap.news/source/img7.jpg"
                                                             alt="Bootstrap 4 blog template">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!-- category -->
                                                    <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Day 3 - Day 5</a>
                                                    <!--title-->
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <h2 class="h5 text-white my-1">MARKET & PRODUK
                                                            RESEARCH</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--news box-->
                                    <div class="col-6 pb-1 pr-1 pt-1">
                                        <div class="card border-0 rounded-0 text-white overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_right-cover-2 image-wrapper">
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <img class="img-fluid"
                                                             src="https://bootstrap.news/source/img6.jpg"
                                                             alt="Bootstrap 4 news theme">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!-- category -->
                                                    <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Day 6 - Day 9</a>
                                                    <!--title-->
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <h2 class="h5 text-white my-1">LANDINGPAGE CREATION</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--news box-->
                                    <div class="col-6 pb-1 pl-1 pt-1">
                                        <div class="card border-0 rounded-0 text-white overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_right-cover-2 image-wrapper">
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <img class="img-fluid"
                                                             src="https://bootstrap.news/source/img5.jpg"
                                                             alt="Bootstrap 4 news template">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!-- category -->
                                                    <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Day 10 - Day 14</a>
                                                    <!--title-->
                                                    <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                        <h2 class="h5 text-white my-1">FACEBOOK ADVERTISING</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--end news box-->
                                </div>
                            </div>
                            <!--End box news-->
                        </div>
                    </div>
                </div>
                <!--end carousel inner-->

                <!-- navigation
                <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
        </div>
    </div>
</div>
    <!--end code-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div id="clock"></div>
        <a class="navbar-brand h1" href="#" style="text-align: center;">
             <img src="{{asset ('img/digiclass logo.png') }}" alt="" width="30" height="24">Digiclass
                <div id="watch">
                </div></a>
        <marquee behavior="--title--" direction="left"><h5>Visi
            Menjadi pusat rujukan bersertifikasi untuk pengembangan dan Pemasaran marketing digital yang Profesional, Kredibel dan  akuntabel 
             
            Misi
            
            Menyelenggarakan Sertifikasi Di Bidang Digital Marketing yang di akui Kredibilitasnya baik di Dunia Pendidikan dan Dunia Industri</h5></marquee>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#newsMenu" type="button" aria-controls="newsMenu" aria-expanded="false" aria-label="Toggler navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <script type="text/javascript">
        $(document).ready(function(){
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


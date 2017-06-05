<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Rafica | Welcome</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">RAFICA</a>
        <ul class="right hide-on-med-and-down">
            @if (Auth::check())
                <a class="waves-effect waves-light btn" href="{{ url('/dashboard') }}">Home</a>
            @else
                <a class="waves-effect waves-light btn" href="#modal1">Login</a>
                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4 class="black-text">Login</h4>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control black-text" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control black-text" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="test5" />
                                            <label for="test5">Remember Me</label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center gray-text">RAFICA</h1>
            <div class="row center">
                <h5 class="header col s12 light">Data Inputan dari Cabang tentang Kemajuan Jasa Marga</h5>
        </div>
            <div class="row center">
                <a href="{{ url('/dashboard') }}" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="{{ asset('img/jalantol1.jpg') }}" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s7 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons"><img src="{{ asset('img/note2.png') }}" width="30%" height="30%"></i></h2>
                    <h5 class="center">Data Input</h5>

                    <p class="light"> Data2 Tentang Kemajuan Dari Setiap Cabang</p>
                </div>
            </div>

            <div class="col s7 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons"><img src="{{ asset('img/chat.png') }}"  width="30%" height="30%"></i></h2>
                    <h5 class="center">Forum Diskusi</h5>

                    <p class="light">Membuat Forum Untuk Mengembangkan pendapatan dan perusahaan</p>
                </div>
            </div>

            <div class="col s7 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons"><img src="{{ asset('img/icon_chart.png') }}"  width="30%" height="30%"></i></h2>
                    <h5 class="center">Website Terintegrasi</h5>

                    <p class="light">Membuat Informasi tentang Majunya Jasamarga Sebagai Perusahaan terbaik seIndonesia</p>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="{{ asset('img/jalantol2.jpg') }}" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Contact Us!</h4>

                <br>

                <div class="col s12 left" style="width:400px;height:400px; margin:auto;" id="map"></div>
                <script>

                    function initMap() {
                        var myLatLng = {lat: -6.2908577, lng: 106.8787638};

                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 17,
                            center: myLatLng,
                            draggable: false,
                            scrollwheel: false,
                            navigationControl: false,
                            mapTypeControl: false,
                            scaleControl: false,
                            disableDoubleClickZoom: true
                        });

                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title: 'PT Jasamarga Persero (TBK)'
                        });
                    }

                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAlhwePUtgGGFH0V85vEog1VSeA7UoOzs&callback=initMap"
                        async defer></script>
                <div class="row panel-body">
                <h5 class="center-align light brown-text">Plaza Tol Taman Mini Indonesia Indah Jakarta,</h5>
                <h5 class="center-align light brown-text">13550 Indonesia</h5>
                <h5 class="center-align light brown-text">Telp +6221 841 3630, 841 3526</h5>
                <h5  class="center-align light brown-text">Fax. +6221 841 3540</h5> <br>

                <h4>Subscribe to Our News Letter</h4>
                    <div class="input-field col s7">
                        <i class="material-icons prefix">mode_edit</i>
                        <input id="icon_prefix2" placeholder="Enter Email.." class="email validate"></input>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="{{ asset('img/background3.jpg') }}" alt="Unsplashed background img 3"></div>
</div>

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Jasa Marga</h5>
                <p class="grey-text text-lighten-4">
                    Untuk mendukung gerak pertumbuhan ekonomi, Indonesia membutuhkan jaringan jalan yang handal.
                    Melalui Peraturan Pemerintah No. 04 Tahun 1978, pada tanggal 01 Maret 1978 Pemerintah mendirikan
                    PT Jasa Marga (Persero) Tbk.
                    Tugas utama Jasa Marga adalah merencanakan,
                    membangun, mengoperasikan dan memelihara jalan tol serta sarana kelengkapannya
                    agar jalan tol dapat berfungsi sebagai jalan bebas hambatan yang memberikan manfaat lebih tinggi
                    daripada jalan umum bukan tol.
                </p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Visi</h5>
                <ul>
                    <li><p class="white-text"> Menjadi Perusahaan Jalan Tol Nasional Terbesar, Terpercaya, dan Berkesinambungan.</p></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Misi</h5>
                <ul>
                    <li><p class="white-text">1. Pembangunan Jalan Tol di Indonesia, untuk Meningkatkan Konektivitas Nasional</p></li>
                    <li><p class="white-text">2. Menjalankan Usaha Jalan Tol di Seluruh Rantai Nilai, secara Profesional dan Berkesinambungan.</p></li>
                    <li><p class="white-text">3. Memaksimalkan Pengembangan Kawasan, untuk Meningkatkan Kemajuan Masyarakat dan Keuntungan Perusahaan.</p></li>
                    <li><p class="white-text">4. Meningkatkan Kepuasan Pelanggan dengan Pelayanan Prima.</p></li>

                </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">

            <a class="brown-text text-lighten-3">RAFICA Jasa Marga</a> , Copyright &copy; 2017, All Right Reserved.
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.modal').modal();
    });
</script>

</body>
</html>

<!DOCTYPE html> 
<html  lang="en">

      @include('home-elements.header')

<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title>Online Service Orchastration</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/icons/favicon.png">



    <link rel="stylesheet" type="text/css" href="assets-minified/admin-all-demo.css">

    <!-- JS Core -->

    <script type="text/javascript" src="assets-minified/js-core.js"></script>


    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>

</head>



    <body>
    <div id="sb-site">

    @include('home-elements.toggle-right')

     <div id="page-wrapper">

           @include('home-elements.header-navbar')


           @include('home-elements.side-navbar')

           @yield('content')

           

            </div>
        </div>

    <!-- JS Demo -->
<script type="text/javascript" src="assets-minified/admin-all-demo.js"></script>


</div>
</body>


</html>
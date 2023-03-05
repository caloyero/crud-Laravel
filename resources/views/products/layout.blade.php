<!DOCTYPE html>
<html>
<head>
    <title>My web.com</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    @yield('content')
    

</div>
@yield('js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
</body>
</html>
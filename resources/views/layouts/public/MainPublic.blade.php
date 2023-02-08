<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/assets/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/other/css/customeStyle.css">
</head>

<body>
  @include('layouts/public/NavbarPublic')

  @yield('content')

  <script src="/assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/other/js/jquery-3.5.1.js"></script>

  {{-- Show Password Login & Register--}}
  <script type="text/javascript">
    $(document).ready(function() {
      $('#show-password').click(function() {
        if ($(this).is(':checked')) {
          $('#inputPassword').attr('type', 'text');
      } else {
          $('#inputPassword').attr('type', 'password');
        }
      });

      $('#show-cpassword').click(function() {
        if ($(this).is(':checked')) {
          $('#inputCPassword').attr('type', 'text');
      } else {
          $('#inputCPassword').attr('type', 'password');
        }
      });
    });
  </script>

</body>

</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Project</title>
  </head>
  <body>
    <nav>
      <strong>Nav Bar:</strong>
      <a href="{{ route( 'home' ) }}">Home</a>
      <a href="{{ route( 'blog' ) }}">Blog</a>
    </nav>

    <hr/>

    @yield( 'content' )
  </body>
</html>

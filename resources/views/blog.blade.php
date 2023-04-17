<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
  </head>
  <body>
    <h1>Listado</h1>

    @foreach ( $posts as $post )
    <p>
      <strong>{{ $post[ 'id' ] }}</strong>
      <a href="/blog/{{ $post[ 'slug' ] }}">
        {{ $post[ 'title' ] }}
      </a>
    </p>
    @endforeach
  </body>
</html>

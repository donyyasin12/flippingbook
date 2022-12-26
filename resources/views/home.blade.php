@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Flipbook</title>
    <style type="text/css">

    .content {
        width: 100%;
        max-width: 900px;
        margin: 50px auto;
        padding: 0 2rem;
        box-sizing: border-box;
    }

    iframe {
        width: 100%;
        height: 500px;
        border: 1px solid white;
    }

    h1 {
      text-align: center;
      font-family: arial;
    }
</style>
  </head>
  <body>

    <div class="content">
      <h1>Flipbook with Heyzine API</h1>
      <!--GANTI LINK PDF 'https://www3.nd.edu/~rwilliam/stats1/x13.pdf'
       DENGAN URL LINK PDF YANG AKAN DIGUNAKAN -->
      <iframe allowfullscreen src="https://heyzine.com/api1?pdf=https://www3.nd.edu/~rwilliam/stats1/x13.pdf&k=df9f2d1331fbdf3d"></iframe>
    </div>

  </body>
</html>

@endsection

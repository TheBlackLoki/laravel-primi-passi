<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel-Primi Passi</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="header">
          <p>sono l'header</p>
        </div>
      </div>
      <div class="row">
        <div class="navbar">
          <ul>
            <li> <a href="http://localhost:8000/home">Home</a> </li>
            <li> <a href="http://localhost:8000/about">About</a> </li>
            <li> <a href="http://localhost:8000/contact">Contact</a> </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="content">
          @yield('content')
        </div>
      </div>
      <div class="row">
        <div class="footer">
          <p>sono il footer</p>
        </div>
      </div>
    </div>
  </body>
</html>

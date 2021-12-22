<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
    
        </style>
    </head>
    <body>
    
      <h2>Hello Laravel React </h2>
      <!-- component render inside this tag -->
      <div id="example">  
      </div>

      <!-- call app.js main component file -->
      <script src="{{ mix('js/app.js') }}"></script> 
    </body>
</html>

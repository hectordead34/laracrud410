<div>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom</title>
   </head>
   <body style="background-color: burlywood">
    <h1>Custon view</h1>
    <h2><?php echo $msj?></h2>
    <h2><?=$msj?></h2>
    <h2><?=$Identy?></h2>
    <h2>{{$A}}</h2>
    <h2>{{$msj}}{{$Identy}}{{$A}}</h2>
    <a href="/testView">test (sin nombre)</a>
   <h3> <a href="{{route('contact')}}">Contacto(Ruta con nombre)</a>
   </body>
   </html>
</div>

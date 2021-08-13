<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
   <body>
       <div class="container mx-auto">
           <x-alert class=" mb-4">
               <x-slot name="title">
                   Mensaje De Error
               </x-slot>
               
               <x-slot name="message">
                   A Ocurrido un Error!
               </x-slot>
           </x-alert>
       
           <x-alert>
                <x-slot name="title">
                    
                </x-slot>

                <x-slot name="message">
                    hola mundo
                </x-slot>

            </x-alert>

       
       </div>
   </body>
</html>

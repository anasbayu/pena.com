<!DOCTYPE html>
<html>
   <head>
      <title>
         @yield('title')
      </title>
      <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'> -->
      <style>
         body{
            font-family: 'Montserrat', sans-serif;
         }
         input{
            font-family: 'Montserrat', sans-serif;
         }
         textarea{
            font-family: 'Montserrat', sans-serif;
         }
         #header{
            font-family: 'Montserrat', sans-serif;
         }
         .areaKonten{
            margin: auto;
            width: 75%;
            min-height: 100px;
            /*background: red;*/
            font-family: 'Montserrat', sans-serif;

         }
         .marginTop100px{
            margin-top: 100px;
         }

         @media (max-width: 499px){
            .marginTop100px{
               margin-top: 50px;
            }
            .areaKonten{
               width: 95%;
            }
         }
      </style>
      @yield('script')
      @yield('style')
   </head>
   <body>
      @yield('body')
   </body>
</html>

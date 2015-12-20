<!DOCTYPE html>
<html>
   <head>
      <title>
         @yield('title')
      </title>
      <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'> -->
      <style>
         body, #main{
            font-family: 'Montserrat', sans-serif;
            background-image: url({{asset('public/images/seamless2.jpg')}});
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
            background: white;
            font-family: 'Montserrat', sans-serif;

         }
         .marginTop100px{
            margin-top: 100px;
         }
         .paddingLeft20px{
            padding-left: 20px;
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

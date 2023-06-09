<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
   
      
   
   
   
    <style>
        .login-form
        {
            justify-content:center;
        }
        .custom-login
        {
            height:500px;
            padding-top:100px; 
        }
        img.slider-img{
            height:400px !important;
        }
        .custom-product
        {
            height:600px;
        }
        .bg-items 
        {
            background-color: #35443585;   
        }
        .trending-image
        {
            height:100px;
        }
        .trending-item
        {
            float:left;
            width:25%;
        }
        .trending-wrapper
        {
            margin:30px;
        }
        .detail-img
        {
            height:200px;
        }
        .cart-list-devider
        {
            border-bottom:1px solid #ccc;
            margin-bottom:20px;
            padding-bottom:20px;
        }
    </style>
</head>
<body>
    {{View::make('header')}}

    @yield('content')

    {{View::make('footer')}}


</body>










{{--  <script>
    $(document).ready(function(){
        $("button").click(function(){
            alert("all set")
        })
    
    })
        
</script>  --}}
</html>
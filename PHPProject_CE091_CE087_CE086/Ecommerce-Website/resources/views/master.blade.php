<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 400px;
        margin:10px 400px;
        
    }
    .con2{
      padding-left: 10px;
    }
    .contact{
      background-image: url(/images/contact.png);
      height: 100%;
      padding-top: 60px;
      padding-bottom: 60px;
      border-radius: 0.5px;
      padding-left: 100px;

    }
    .back{
      background-image:url(/images/background.png);
      height: 100%;
      padding-top: 60px;
      padding-bottom: 60px;
      border-radius: 0.5px;
    }
    img.slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 500px;
    }
    .slider-text{
        background-color: ;
    }
    .detail-img{
        height: 200px;
    }
    body {
    background-color:whitesmoke;
    font-family: cursive;
    font-size: 20px;

}
 .maindiv {
    padding: 10px;
    border-radius: 2px;
}
div.maindiv {
    margin: 5px;
    border: 1px solid #ccc;
    float:left;
    width: 20%;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-bottom: 25px;
    width: 300px;
    height: 350px;
}
div.maindiv:hover {
  border: 1px solid rgb(93, 124, 219);
}
div.maindiv img {
  width: 100%;
  height: auto;
}
div.desc {
  padding: 10px 20px;
  text-align: center;
}
img {
  border-radius: 5px;
}
.main {
  margin-top: 60px;
  display:inline-flexbox;
} 
</style>
</html>
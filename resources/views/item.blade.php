<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Items Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">

    <style>
       .container {
    background-color: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 40%; /* Reduce width of the form */
    box-sizing: border-box;
    min-height: 300px;
}


    </style>
</head>
<body>
    <a href="{{url('/home')}}">Home</a> | Items |  <a href="{{url('/picture')}}">Picture</a>
   <center> <h1>Items Page</h1></center>

   <div class="container">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNIAjjoy5Z1git_Z1141MNOGrxPZOuFgvtUQ&s" alt="Off Repelent">
    <img src="https://cosmocosmetics.ae/cdn/shop/products/cherry-blossom.jpg?v=1681891814&width=533" alt="Cosmo Beauty Products">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqtvUxaIZFZg7Fg00Eh45PvUR3RQ89YF-1bw&s" alt="Alaska Crema">
   </div>

</body>
</html>

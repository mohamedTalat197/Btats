<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=========================== CSS ===========================-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Btates M7mra</title>
</head>
<body>

<base href="/public">
<header class="header" id="home" style="background:none; height:100px">
        <div class="header-view container-fluid">
            <a href="#" class="logo">BTATS</a>
           
        </div>
       
    </header>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 style="    text-align: center;
    margin-top: 50px;
    font-weight: bold;
    color: var(--main-color);
    font-size: 35px;
    text-decoration: underline;">The Orders</h3>
    </div>

    <div class="col-md-12">
    <table class="table table-hover" style="margin-top:50px">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Adress</th>
      <th scope="col">Order</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($data as $data)
    <tr>
      
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->number}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->order}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
    </div>
  </div>
</div>
<footer class="footer" id="footer" style="    height: auto;
    padding-bottom: 50px;
    bottom: 0px;
   
    width: 100%;">
      
        <p style="padding-top:30px">SOCIAL CONNECT</p>
        <div class="container">
            <div class="social-icons" style="padding-top: 0px;">
                <a href="#https://www.facebook.com/" class="fot-social-icons"><i class="fab fa-facebook-f"></i></a>
                <a href="#https://twitter.com/i/flow/login" class="fot-social-icons"><i class="fab fa-twitter"></i></a>
                <a href="#https://www.youtube.com/" class="fot-social-icons"><i class="fab fa-youtube"></i></a>
                <a href="#https://web.whatsapp.com/" class="fot-social-icons"><i class="fab fa-whatsapp"></i></a> 
            </div>
            <p class="copyright" style="padding:0px; margin:0px">&copy; 2022 <span>BTATS TEAM</span> All Right Reserved</p>
        </div>
</footer>


<script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/b81c67edda.js" crossorigin="anonymous"></script>
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #6661e8;
 
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #060318;
}
header img{
  width: 35px;
  height: 35px;

}
header{
    background-color: #4e1818;
}
header img{
  width: 35px;
  height: 35px;
}

header{
    text-transform: capitalize;
    text-size-adjust: 35px;
    text-decoration: aliceblue;
}
p{
    font-size: x-large;
    align-content: center;
    text-align: justify;
    font-style: italic;
    
}
div{
    background-color: #e6edf7;
}
div p{
    margin-left: 50px;
}
dl{
    font-size:large;
    align-content: center;
    text-align: justify;
    font-style: italic;
}
footer{
    background-color: #6661e8;
    color: white;
    
}
  </style>
   <style>
div{
    
        border: 1px solid rgb(20, 124, 51);
        padding: 50px;
       margin-top: 50px;
       margin-left: 500px;
        align-content: center;
        width: 500px;
       
}
label{
    font-size: large;
   
}
input[type=submit] {
  width: 100%;
  background-color: #7EC8E3
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input{
  width: 100%;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
select{
  width: 100%;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
    </style>
</head>
<body style="background-color: 	rgb(174,198,207);">
    <header><img src="logo.png" alt="" class="rounded"><p STYLE="color: #e6edf7;">ONLINE EXAM REGISTRATION</p> </header>
    <nav>
<ul>
<li><a class="active" href="/index">Home</a></li>
    <li><a href="/login">Login</a></li>
    <li><a href="/register">Register</a></li>

    

</ul>
</nav><br><br><br>
    <center> <h1>LOGIN</h1></center>
  <div style="background-color: white;">
    
    <form action="/loginaction" method="POST">@csrf
      
        <label>user name</label>
        <input type="text" name="uname" id="uname"><br><br>
        <label>password</label>
        <input type="text" name="pwd" id="pwd"><br><br>
       
     
        <input type="submit" name="register" id="register" value="Login"><br><br>
       
    </form>
  </div>  
</body>
</html>
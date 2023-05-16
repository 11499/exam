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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
</head>
<body>
    <header><img src="logo.png" alt="" class="rounded"><p STYLE="color: #e6edf7;">ONLINE EXAM REGISTRATION</p> </header>
    <nav>
<ul>
<li><a class="active" href="/index">Home</a></li>
    <li><a href="/profile">Profile</a></li>
    <li><a href="/status">Exam Status</a></li>
    <li><a href="/logout">Logout</a></li>
    

</ul>
</nav><br><br><br>
<center>


<table border="3px"  class="table table-bordered">
<tr><th>NAME</th>
<th>EMAIL</th>
<th>ADDRESS</th>
<th>CONTACT NUMBER</th>
<th>COURSE</th>
<th>USER NAME</th>
<th>PASSWORD</th>
<th>STATUS</th></tr>
<tr>
@foreach($result as $value)
    <td>{{$value->name}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->ad}}</td>
    <td>{{$value->cn}}</td>
    <td>{{$value->course}}</td>
    <td>{{$value->uname}}</td>
    <td>{{$value->pwd}}</td>
    <td>{{$value->status}}</td>
    @endforeach

</tr>

</table>


</center>
</body>
</html>
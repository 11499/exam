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

@foreach($result as $value) 
    <h1>{{$value->name}}</h1> <br><form action="/edit/{{$value->id}}" method="POST">@csrf
        <table>

      <tr> <td> <label>Name</label></td>
       <td> <input type="text" name="name" id="name" value="{{$value->name}}"><br><br></td></tr>
       <tr><td>  <label>Email</label></td> 
       <td> <input type="email" name="email" id="email" value="{{$value->email}}"><br><br></td></tr>
       <tr><td>   <label>Address</label></td> 
       <td>   <input type="text" name="ad" id="ad" value="{{$value->ad}}"><br><br></tr></td> 
       <tr><td>      <label>Contact Number</label>
       <td> <input type="text" name="cn" id="cn" value="{{$value->cn}}"><br><br>
        <tr><td>      <label>user name</label></td>
        <td><input type="text" name="uname" id="uname" value="{{$value->uname}}"><br><br></tr></td>
        <tr><td>      <label>password</label></td>
        <td> <input type="text" name="pwd" id="pwd" value="{{$value->pwd}}"><br><br></tr></td>
        <tr><td>      <label>course</label></td>
        <td><select name="course" id="course">
        <option >select</option>
            <option value="student">PHP</option>
            <option value="student">PYTHON</option>
            <option value="student">DS</option>
        </select><br></tr></td>
        <tr><td>  
       <br> <input type="submit" name="register" id="register" value="Edit"><br><br></tr></td>
        </table>
    </form>
  
    @endforeach
</center>
</body>
</html>
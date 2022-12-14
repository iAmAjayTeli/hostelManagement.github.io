<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(bgimage.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            
        }
        .box{
            position:absolute;
            width:100vh;
            text-align: center;
            margin-right:-500px;
            margin-left:px;
            top:40%;
            left:20%;
        }
        .header{
            font-size: 45px;
            color:yellowgreen;
            
}
.button{
padding:10px;
width:30%;
background: blue;
color:white;
border:1px solid black;
border-radius:10px;
font-size:15px;
}
.hero{
height: 100vh;
width:100%;


}
.nav{
    border-radius:30px;
    display:flex;
    align-items: center;
    justify-content: space-between;
    position:absolute; 
    top: -30px;
    width:100%;
    padding:10px;
    
}
ul,li,a{
    display:flex;
    padding:20px;
    font-size:27px;
    color:silver;
    text-decoration: none;   
}

ul{
    list-style-type:none;
    margin:0;
    padding:0;  
}
a:hover{
    padding:10px;
    color:green;
    opacity: 0.8;
}
.btn{
    margin-left:300px;
    width:100%;
}
    </style>
</head>
<body>
    <header>
        <h1></h1>
    </header>
    <div class="hero">
    <nav class="nav">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="about.html">About US</a></li>
            <li><a href="social.html">Social Media</a></li>
            <li><a href="home.html">Help</a></li>

        </ul>
    </nav>
</div>"
<img src="logo.png" width="150" height="150"/>
    <div class="box">
        <h1 class="header">Welcome to the Hostel Management System</h1>   
       <a href="index2.php" class="btn"><input type="button" value="Get Started"class="button"></a>
    </div>
</body>
</html>
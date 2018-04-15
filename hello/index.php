<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header {
    padding: 1em;
    color: white;
    
    clear: left;
    text-align: center;
}

nav {
    float: left;
	max-height:200px;
    max-width: 370px;
    margin: 0;
    padding: 1em;
}

nav  {
    list-style-type: none;
    padding: 0;
	background-image:a.jpg;
	background-repeat: no-repeat;
    background-size: cover;
}


article {
    margin-left: 600px;
    border-left: 0px solid gray;
    padding: 1em;
    overflow: hidden;

}
body{
	background-color:black;
}
input{
	height:30px;
	width:300px;
}
</style>
</head>
<body>

<div class="container">

<header>
   
</header>
  
<nav>
  <img src="a.jpg" alt="Rangasthalam" width="470" height="647">
</nav>

<article>
<br>
<h1 ><font size="+6" color="white">BOOK TICKETS</font></h1>
<br>
<br>
<br>
  <form action="process.php" method="post">
<font size="+3" color="white">Name: </font><br>
<input type="text" name="name" placeholder="Name" required>
<br>
<br>
<font size="+2" color="white">Phone No:</font> <br>
<input type="text" name="phone" placeholder="Phone" required>
<br>
<br>
<font size="+2" color="white">No. of tickets: </font><br>
<input type="number" name="tickets" placeholder="Tickets" required>
<br>
<br>
<br>
<button type="submit" value="submit"><font size="+2" color="green">Submit</font></button>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
</article>



</div>


</body>
</html>

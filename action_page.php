<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Home</title>
<link rel="stylesheet" href="cascadesheet.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
</head>

<body>
<div class="header">
	<h1>Sun and Moon Cafe</h1>
</div>
<!--Navbar-->
<div> 
<ul class="navbar">
<li><a href="index.html">HOME</a></li>
<li><a href="menu.html">MENU</a></li>
<li><a href="specials.html">SPECIALS</a></li>
<li><a href="about.html">ABOUT</a></li>
</ul>	

<div class="hero">
<div class="reviews">
<h1>You have successfully signed up to the Sun and Moon Cafe Weekly newsletter!
<br>
We have added the following information to our files regarding your interests:
</h1>
<h2>
Name: <?php echo $_POST["name"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
Product Interests : <?php foreach($_POST['productcheck'] as $checked){
        echo $checked.", ";
}
?><br>
Birthday: <?php echo $_POST["dob"]; ?>
<br>
</h2>
</div>
</div>

<div id="footer">
<ul class="footerlinks">
<h2 style="font-size:15px">Links</h2>
<li><a href="index.html">HOME</a></li>
<li><a href="menu.html">MENU</a></li>
<li><a href="specials.html">SPECIALS</a></li>
<li><a href="about.html">ABOUT</a></li>
</ul>



<ul class="footercontacts">
<h2 style="font-size:15px">Contacts</h2>
<li>Phone: 0455 9999 555</li>
<li>Catering: 0433 3333 999</li>
<li>Address: 223 Powell St, Bowen, QLD</li>
</ul>

</div>

</html>

<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="mystyle.css" />-->
<title>Welcome to eazzyrent</title>


<style type="text/css">
	table{
		width: 100%;

	}
	h{
		color: blue;
		font-size: 23px;
		padding-top: 60px;
	}
	a{
		text-decoration: none;
		color: white;
	}
	

	#e{
		background-color: gray;
		height: 60px;

	}
	#a{
        background-color: gray;
        height: 40px;
        
    }
    
	span {
		padding: 60px;
	}
	h2{
		font-size: 15px;
	}
	.nav{
	width: 1100px;
	height: 60px;
	margin: 0 auto;
	border-radius: 10px;
}
ul li {
	list-style: none;
	width: 200px;
	line-height: 60px;
	position: relative;
	background: #222;
	box-shadow: 0px 2px 5px 0px grey;
	text-align: center;
	float: left;
	background-color: skyblue;

}
ul li ul{
	position: absolute;
}
.nav > ul > li:nth-of-type(1){
	border-radius: 5px 0px 0px 5px;
}
.nav > ul > li:nth-of-type(5){
	border-radius: 0px 5px 5px 0px;
}
.nav > ul > li:nth-of-type(1){
	border-radius: 5px 0px 0px 5px;
}	
.nav > ul >li:nth-of-type(5){
	border-radius: 0px 5px 5px 0px;
}
ul li a{
	color: green;
	width: 155px;
	height: 58px;
	display: inline-block;
	text-decoration: none;
}
ul li a:hover{
	font-weight: bold;
	border-bottom: 8px solid #fff;
}
ul li ul{
	display: none;
	padding-left: 0px;

}
.nav ul li:hover ul{
	display: block;
}
.fa{
    margin-right: 5px;
}
.container{
	width: 300px;
	height: 50px;
	margin: 0 auto;
	padding:20px 20px;
}
@media screen and (max-width: 480px){
	header{
		width: 100%;
	}
	.nav{
		align-content: left;
		display: none;
		width: 100%;
		height: auto;
	}
	ul li{
		width: 100%;
		float: none;
	}
    ul li a{
    	width: 100%;
    	display: block;
    }
    ul li ul{
    	position: static;

    }
    ul li ul li a{
    	background: #222;
    	text-align: left;
    }
    .fa.list.modify{
    	display: block;
    }
    .container{
    	width: 100%;
    	height: 100%;
    }
    #back{
		border-radius: 10px;
	}
	.content
{
  position:static;
  padding-top: 0px;
  padding-left: 25%;
 width:50%;

}
</style>
<script type="text/javascript">
function myfunction()
{
alert("this page allow cookies");

 
	


}

</script>
</head>



<body onload=" myfunction()" bgcolor="white">
	
</body>

<br>
<img src="images.png" height="10%"><br>Eazzyrent
<nav class="nav">
<ul>
   <li><a href="homepagee.html"> Home </a></li>
	<li><a href="pricedraft1.html">prices</a>
      <ul>
      	<li><a href="pricedraft2.html">for noble class</a></li>
      	<li><a href="pricedraft3.html">for lower class</a></li>
      	

      </ul>
	</li>
	<li><a href="services.html">Services</a></li>
	<li><a href="contacts.html">Contact us</a></li>
	<li><a href="login2.html">Login</a>
     <ul>
     	<li><a href="login2.html">having reg number</a></li>
     	<li><a href="Login.html">new student</a></li>
     	<li><a href="Loginadmin.php">admin</a></li>
     </ul>
	</li>
	
</ul>
</nav>
	
<br>
<center>
<table id="back"  background="h13.jfif" width="75%" height="90%" style="background-size: cover;">
	<tr>
		<td align="center">
			<p style="color: blue; font-family: algerian; font-size:40px; ">Eazzyrent; the easy way to get houses for rent for ur-cst students </p>
			
		</td>
	</tr>
</table>
</center>
<br>
<table>
<tr>
	<td valign="top">
<h>Welcome to eazzyrent</h><br><br>
      <p>Our services is to help people<br>From different region of 
       country to get house for rent.<br><br>The rent are available in different regions of country<br>especially near the universities.<br></p><div><img src="c.jpeg"><br>
       	<a href="region.html"> <h2 style="color:green"><u>click here to see where rental houses are located:</u></h2></a></div>
   
   </td>
      <td>
		<body>


<div class="content">
 
<img class="mySlides" src="h1.jfif" style="width:100%">
<img class="mySlides" src="h2.jfif" style="width:100%">
<img class="mySlides" src="h3.jfif" style="width:100%">
<img class="mySlides" src="h4.jfif" style="width:100%">
<img class="mySlides" src="h5.jfif" style="width:100%">
<img class="mySlides" src="h6.jfif" style="width:100%">

</div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 9000); 
}
</script>

</body><br>Best rooms
      </td>
      <td>
		<body>


<div class="content">
 
<img class="mySlides" src="h1.jfif" style="width:100%">
<img class="mySlides" src="h2.jfif" style="width:100%">
<img class="mySlides" src="h3.jfif" style="width:100%">
<img class="mySlides" src="h4.jfif" style="width:100%">
<img class="mySlides" src="h5.jfif" style="width:100%">
<img class="mySlides" src="h6.jfif" style="width:100%">

</div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 9000); 
}
</script>

</body>
	  </td>
</tr>
<table>
	<tr id="aa" width=20% height=20%>
        <td colspan="2"><img src="h1.jfif" height="100%"  width="100%"><br>The best house with all needed materials</td>
        <td><img src="h6.jfif"></td>
        <td><img src="c.jpeg"></td>
        <td ><img src="d.jpeg"></td>
        <td ><img src="h4.jfif" width="400"  height="200" ></td>
        
		
    </tr>
    <tr id="aa" width=65% height=20%>
        <td colspan="2"><img src="e.jpeg"><br>The modern houses in kigali</td>
        <td><img src="f.jpeg"><br>the house of low cost</td>
        <td><img src="d.jpeg"></td>
        <td><img src="h.jpeg"></td>
        <td ><img src="i.jpg" width="400"  height="200" ></td>
    </tr>
</table>
<table>
  <tr id="e"><td>Name:Akayezu Marc <span style="text-align:center;">email:marcakayezu97@gmail.com </span><span text-aling=left;> Address:Nyarugenge</span></td></tr>
<tr id="a"><td><a href="http://www.whatsapp.com"><img src="wtp.png" height="50%"></a><span style="text-align:center;"><a href="http://www.facebook-marcakanyagasani.com"><img src="fb2.jfif"  height="50%"></a></span><a href="http://www.instagram.com"><img src="inst.jfif"  height="50%"> </a><span text-aling=left;><a href="http://www.facebook.com"><img src="twt.jfif" height="50%"></a></span></td></tr>
<tr id="a"><td><h1>+250780987654       Akanyagasani    <i>@marcakanyagasani</i></h1></td></tr>

</table>



</html>
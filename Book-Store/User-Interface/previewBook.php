<!DCTYPE html>
<html><?php  session_start();?>
<head>
<title>cart Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../css/stylePreview.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<!---------navigation-------->

<div class="header2">
<section id="nav-bar">

<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
      
	   <li class="nav-item active">
        <a class="nav-link" href="index.php">BOOKS</a>
      </li>
	<li class="nav-item ">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i>&nbsp;CART</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="AboutUs.html">PDF TO AUDIO</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="Contact.php">Upload</a>
      </li>
      
 <li class="nav-item ">
        <a class="nav-link" href="profile.php"><i class="fa fa-user"></i>&nbsp;Profile</a>
      </li>
    </ul>
  </div>
</nav>
</section>
</div>
<!---------------------------------------------------------------------------->
<?php
	try{
	$db= new PDO('mysql:host=localhost;dbname=bookstore;charset=utf8','root','');
	
	}
	catch(Exception $e){
		
		echo "Error has Occured";
	}

	
?>
<!---------book section-------->


<div class="Preview-Container">
<?php
$id=$_POST['insert_id'];
	$stmt= $db->query("SELECT * FROM product where id=$id ");
	while($row=$stmt->fetch()){
?>
<div class="Preview-img">
<img src="../pic/book/<?php echo $row['image']." " ?>" alt="" width="100%;"height="420px;">

</div>


<div class="Preview-content">
	<h2 class="text-center" style="padding-top:10px;"><b><?php	echo $row['title']." " ?></b></h2>
	<h5><br><?php echo $row['description']." " ?></h5>





<div class="line-flex">
<div>
<form action="insertCart.php" method="post">
	<label style="font-size:18px">Qty:&nbsp;</label><input type="number" name="qun" value="1" min="1" max="99"style="width:60%;" >
	<input type="hidden" name="insert_id" value="<?php echo $row['id']; ?>" />&nbsp;&nbsp;</div>
	<div>
	<button type="submit" name="submit" value="submit" name="insertCart_btn"  class="btn btn-success" >
	 Add To Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>

	</form>	</div>

</div>
<a href="../pdf/<?php echo $row['pdf'].""?>" target="blank" alt="" width="600px;"height="1500px;"><i class="fa fa-download" aria-hidden="true" ></i><h3><p style="color:red"><br>PDF TO DOWNLOAD</h3></p>
</a>

</div>
<?php } ?>	


</div>
<!------------------------------------------------>
<!----------------------------------footer------------------------------------------->
<div class="footer">
<div class="col-md-12"> <a href="#nav-bar"><i class="fa fa-angle-double-up fa-4x linkup linkk" ></i></a></div>
<div class="row" style="width:100%;padding-left:60px;padding-top:30px;padding-bottom:20px;">

<div class="col-md-4"><b><h5><i class="fa fa-paper-plane-o" ></i>&nbsp;Contact Info :</h5></b>
Mobile: +91 8015355385<br>
Email: gokulkrishnant99@gmail.com <br>
<b>FOR ANY ASSISTANCE</b><br><i class="fa fa-phone"></i>&nbsp;
<br>8015355385<br>
</div>

<br>
</div>
<div class="col-md-4"><b><h5>Social Media</h5></b>
<a href="https://www.facebook.com/gokulthalapathi99" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;" class="fa fa-facebook-official linkk" >&nbsp; Facebook</i></a><br>
<a href="https://twitter.com/GOKULKR41170814" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;"class="fa fa-twitter linkk" >&nbsp; Twitter</i></a><br> 
<a href="https://www.instagram.com/gokulthalpathi99/" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;"class="fa fa-instagram linkk"> &nbsp;Instagram</i></a><br>
<a href="https://www.youtube.com/channel/UCGI_fQFObTwNVjd-wMvPKcQ/featured" target="_blank" class="linkk" style="font-size:18px;">
<i style="padding-bottom:8px;"class="fa fa-youtube-play linkk"> &nbsp;YouTube</i></a>
</div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
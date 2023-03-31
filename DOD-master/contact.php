<!DOCTYPE html>
<html lang="en" style="background: #ffff;">
<head>
		<meta charset="UTF-8">
		<title>DOD</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">DOD</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-user"></span>Contact</a></li>
				<li><a href="sell.php"><span class="glyphicon glyphicon-fire"></span>Sell</a></li>
                <li><a href="DOD_chatbot/chatindex.html"><span class="glyphicon glyphicon-comment"></span>Chat support</a></li>
			</ul>
		</div>
	</div>
    <div class="container" style="margin-top: 100px;">
        <div class="row" style="margin-top: -40px;">
            <div class="col">
                <p class="assistyou-p">We are here to assist you!</p>
                <p class="fw-light assistcaptiopn-p"><strong><span style="color: rgb(87, 87, 87);">Have questions or need to report an issue with our product or service? We've got you covered.</span></strong><br></p>
            </div>
            <p class="details2">To sell your products on our web page, add your brand/license proof, product, contact details, National Id. Our team is waiting to welcome you into DOD Family!</p>
  
        </div>
    </div>
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col">
                <h1 class="fw-bold contactxt">Contact us</h1>
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="mail.php" method="post">
			<input class="form-control name-input" type="text" placeholder="Name" name="name">
            <br>
			<input class="form-control name-input" type="email" placeholder="Email" name="email">
            <br>
			<textarea class="form-control msgbox" placeholder="Message" name="message"></textarea>
            <br>
            <button class="btn btn-primary sumbitbtn" type="sumbit">Sumbit</button>
		</form>
            </div>
            <div class="col">
                <p class="details1">Fill in the contact form with Brand name, official email, and appropriate details for Selling on behalf of the brand.</p>
          </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p style="margin-top: 15px;margin-left: 52px;"><span style="color: rgb(255, 255, 255);">Copyright © 2023 DOD</span><br></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{% static 'assets/bootstrap/js/bootstrap.min.js' %}"></script>
</body>

</html>
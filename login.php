<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
    <div class="container"><br><br><br><br><br><br><br>
    <div class="row">
    <div class="col-md-3"></div>
     <div class="col-md-6">
    	<div class="panel panel-primary animated zoomInDown">
    		<div class="panel-heading"><h1>Login</h1></div>
    	<div class="panel-body">
    		<form method="post" action="ceklog.php">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Username" name="user">
                </div>
    			<div class="form-group">
    				<input type="text" class="form-control input-lg" placeholder="Password" name="pass">
    			</div>
    			<div class="form-group">
    				<button name="login" type="submit" class="btn btn-default btn-block">Login</button>
    			</div>
    		</form>
    	</div>
    	<div class="panel-footer">Created By : Team Z</div>
        </div>
     </div>
    <div class="col-md-3"></div>
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
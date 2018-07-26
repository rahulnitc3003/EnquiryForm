<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
</head>
<body>
	<div class="container">
    	<div class="row justify-content-center">
			<div class="col-12 col-md-8 col-lg-6 pb-5">
                <form action="enquiry.php" method="post" enctype="multipart/form-data">
	                <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                	            <h3><i class="fa fa-envelope"></i>&nbsp;&nbsp;Contact Us</h3>
                    	        <p class="m-0">Please fill all required fields</p>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                            	    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="phone" placeholder="+919988776655" required pattern="^([+][9][1]|[9][1]|[0]){0,1}([7-9]{1})([0-9]{9})$">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                            		<div class="input-group-prepend">
                                    	<div class="input-group-text"><i class="fa fa-address-book text-info"></i></div>
                                    </div>
	                                <textarea class="form-control" placeholder="Enter Your Address" name="address" required></textarea>
                                </div>
                       	    </div>
                        	<div class="form-group">
                                <div class="input-group mb-2">
                            	    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                            	    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-upload text-info"></i></div>
                                    </div>
                                    <input type="file" name="resume" class="form-control" required>
                                </div>
                            </div>
                            
                       	    <div class="text-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
		</div>
	</div>
</body>
</html>
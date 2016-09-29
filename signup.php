
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./dist/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="./dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./dist/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./dist/css/appStyle.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<div class="container">
    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="login-panel panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                           <a href="index.html" target="_self"><img src="./dist/images/logo.png" alt="Logo"></a>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xs-10">
                            <h4 class="pTitle">Hostel Management System</h4>
                            </div>
                    </div>


                </div>
                <div class="panel-body">
                    <form name="login" action="signup.php" accept-charset="utf-8" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group form-inline">
                            <div class="form-group ">
                                <input class="form-control" size="28px" placeholder="Student Name" name="fname" type="text" autofocus required>
                            </div>
                            <div class="form-group ">
                                <input class="form-control" size="30px" placeholder="Student ID" name="lname" type="text" required>
                            </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Name of Institution" name="" type="text"  required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="E-mail/Login ID" name="email" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                            </div>
                            
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" name="btnSubmit" class="btn btn-lg btn-success btn-block" ><i class="glyphicon glyphicon-ok"></i> Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="./dist/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="./dist/js/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript
<script src="./dist/js/raphael-min.js"></script>
<script src="./dist/js/morris.min.js"></script>
<script src="./dist/js/morris-data.js"></script>
 -->
<!-- Custom Theme JavaScript -->
<script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>

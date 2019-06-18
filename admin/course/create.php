

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Bootstrap 3 registration form example - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body {
    background-color: #eee;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role="form"] h2 {
    margin-left: 5em;
    margin-bottom: 1em;
}

    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <div class="container">
            <form class="form-horizontal" role="form" action="course/insert.php" method="post">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text"name="fullname" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Intermediate Course,Design Course,....</span>
                    </div>
                </div>
               <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Descriprion</label>
                    <div class="col-sm-9">
                        <input type="text" name="des" id="btndescription" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" name="photo" id="btndescription" class="form-control"value="choose file">
                    </div>
                </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Duration</label>
                    <div class="col-sm-9">
                        <input type="text" name="duration"id="btnduration" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Fees</label>
                    <div class="col-sm-9">
                        <input type="text" name="fee" id="btnfee" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section</label>
                    <div class="col-sm-9">
                        <input type="time" name="sec" id="btnsection1" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="addbtn" class="btn btn-primary btn-block">Add</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->	<script type="text/javascript">
		</script>
</body>
</html>
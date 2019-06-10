<!-- Login Form -->
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Account Register here</p>

    <form action="process.php" method="post">

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
         <input name="email" id="email" autocomplete="off" class="form-control" placeholder="Enter your email" type="text">   
    </div> <!-- form-group// -->

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="Enter password" type="password" id="password" name="password" autocomplete="off">
    </div> <!-- form-group// -->
   
        <button type="submit" name="login" id="login" class="btn btn-primary btn-block">Login</button>
        <p class="text-center">Create a new account? <a href="register.php">Register here</a> </p>
    </div> <!-- form-group// -->      
                                                                     
</form>
</article>
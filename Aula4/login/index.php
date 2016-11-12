<!DOCTYPE html>
<html>

    <head>
	    <link rel="stylesheet" href="styles/style.css">
	    <script src="js/index.js"></script>
    </head>

    <body>


	    <div class="container">
	        <div class="card card-container">
	            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
	            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
	            <p id="profile-name" class="profile-name-card"></p>
	            <form class="form-signin" action="home.php" method="POST">
	                <span id="reauth-email" class="reauth-email"></span>
	                <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Usuario" >
	                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha">
	                <!--<div id="remember" class="checkbox">
	                    <label>
	                        <input type="checkbox" value="remember-me"> Remember me
	                    </label>
	                </div>-->
	                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
	            </form><!-- /form -->
	            <a href="#" class="forgot-password">
	                Esqueceu a senha?
	            </a>
	        </div><!-- /card-container -->
	    </div><!-- /container -->
    </body>
</html>
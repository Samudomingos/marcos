<html>
	<head>
		<title>Marcos - Sistema Gerenciador de Úsuários</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style-login.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</head>
	<body class="bg-secondary">
		 <div id="login">
        
        <div class="pt-5 container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="POST">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuário:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="row">
                            	<div class="col-md">
	                            	<div class="form-group">
		                                <!-- <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
		                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
	                            	</div>
	                            </div>		
                            	
                            </div>
                            
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
		
		

		<script type="text/javascript" src="<?php echo BASE_URL.'node_modules/jquery/dist/jquery.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo BASE_URL.'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'; ?>" ></script>
	</body>
</html>
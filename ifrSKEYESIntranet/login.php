<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Intranet ifrSKEYES - Authentification</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/uncompressed/ace.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
        
        <!-- javascript external files related to this page -->
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="ressources/jquery-validation-1.11.1/dist/jquery.validate.js"></script>
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-lock black"></i>
                                    <span class="black">Intranet</span>
									<span class="orange">ifrSKEYES</span>
								</h1>
								<h5 class="blue">&copy; 2013, ifrSKEYES</h5>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-pencil orange"></i>
												Veuillez entrer vos identifiants
											</h4>

											<div class="space-6"></div>

											<form action ="" id="frmLogin" method="get">
												<fieldset>
                                                    <div id="usernameError" class="alert alert-danger hide">Veuillez entrer un login</div>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Login" name="login" id="login" class="required"/>
															<i class="icon-user"></i>
														</span>
													</label>

                                                    <div class="alert alert-danger hide" id="passwordError">Veuillez entrer un mot de passe</div>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Mot de passe" name="password" id="password" required/>
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Mémoriser mes identifiants</span>
														</label>

														<button type="button" class="width-40 pull-right btn btn-sm btn-primary" id="submitLoginForm" type="submit">
															<i class="icon-key"></i>
															Connexion
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
													<i class="icon-arrow-left"></i>
													Mot de passe oublié
												</a>
											</div>

											<div>
												<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
													Aide
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="icon-key"></i>
												Récupérez votre mot de passe
											</h4>

											<div class="space-6"></div>
											<p>
												Entrez votre adresse email pour recevoir les instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="icon-lightbulb"></i>
															Envoyer
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												Retour à l'authentification
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												Contactez l'équipe support
											</h4>

											<div class="space-6"></div>
											<p> Pour commencer, entrez les informations suivantes : </p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Login" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Mot de passe" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Entrez à nouveau votre mot de passe" />
															<i class="icon-retweet"></i>
														</span>
													</label>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
															<label for="form-field-11">Votre message :</label>
															<textarea id="form-field-11" class="autosize-transition form-control" placeholder="Décrivez votre situation"></textarea>
                                                            <i class="icon-envelope"></i>
                                                        </span>
                                                    </label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-40 pull-left btn btn-sm">
															<i class="icon-refresh"></i>
															Réinitialiser
														</button>

														<button type="button" class="width-40 pull-right btn btn-sm btn-success">
															Envoyer
															<i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												<i class="icon-arrow-left"></i>
												Retour à l'authentification
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->
        

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
             $.getScript('conf/conf.js');
            
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
            
            function setLocalStorageItemIfNotNull(itemName, item){
                var itemValue = "";
                if(!item){
                    itemValue = "-";
                } else {
                    itemValue = item;
                }
                localStorage.setItem(itemName, itemValue);
            }
            
            
            $('#editProfile').on('click', function(e){
					$('#user-profile-1').parent().addClass('hide');
					$('#user-profile-3').parent().removeClass('hide');
            });
            
            $('#submitLoginForm').on('click', function(e){
                console.log("You just clicked 'Connexion'");
                if((document.forms['frmLogin']['login'].value == "")&&(document.forms['frmLogin']['password'].value == "")){
                    $('#usernameError').removeClass('hide');
                    $('#passwordError').removeClass('hide');
                } else if(document.forms['frmLogin']['password'].value == ""){
                    $('#passwordError').removeClass('hide');
                } else {
                    console.log("Ajax call...");
                    req = $.ajax({
                        url: 'DB/checkUserIdentity.php',
                        data: {
                            action : 'login', 
                            formData : $('#frmLogin').serialize()
                        }, 
                        type: 'post',                   
                        async: true   
                    });
                    req.done(function(res) {
                        res = $.parseJSON(res);
                        if(res == 1){
                            var reqProfilePic = $.ajax({
                                    url: VDOCDB_OPERATIONS,
                                    data: {
                                        method: GET_PROFILE,
                                        login : $('#login').val()
                                    } 
                            });

                            reqProfilePic.done(function(res) {
                                res = $.parseJSON(res);
                                if(!res['PHOTO']){
                                    localStorage.setItem("profilePic", "assets/avatars/profile-pic.jpg");
                                } else {
                                    localStorage.setItem("profilePic", res['PHOTO']);
                                }
                                setLocalStorageItemIfNotNull("firstName", res['FIRSTNAME']);
                                setLocalStorageItemIfNotNull("lastName", res['LASTNAME']);
                                setLocalStorageItemIfNotNull("login", $('#login').val());
                                setLocalStorageItemIfNotNull("activationDate", res['ACTIVATION_DATE_CONVERTED']);
                                setLocalStorageItemIfNotNull("lastVisit", res['LAST_VISIT_CONVERTED']);
                                setLocalStorageItemIfNotNull("email", res['EMAIL']);
                                setLocalStorageItemIfNotNull("city", res['CITY']);
                                setLocalStorageItemIfNotNull("country", res['COUNTRY']);
                                setLocalStorageItemIfNotNull("contract", res['CONTRACT_TYPE']);
                                window.open("index.php","_self");
                            });
                            
                        } else {
                            alert("Sorry, we couldn't log you in. Try again or contact the support team.")   
                        }
                        
                        
                        
                        
                    });
                }
            });
            
		</script>
	</body>
</html>
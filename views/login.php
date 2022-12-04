<?php require 'partials/main/header.php';?>
<div class="ui-175">
			<div class="container">
				<div class="center column d-flex">
					<div class="col-md-6 col-sm-6 col-xs-6 col-mob" style="margin: 170px auto;">
						<!-- Outer Starts -->
						<div class="ui-outer">	
							<!-- Form -->
							<div>
								<h3 class="text-center mb-3">Вход</h3>
								<!-- Heading -->
								<!-- Form -->
								<form method="POST" action="/login" class="form">
                                <?php if($error_msg) { ?>
								<p class="text-center" style="color: red; font-size: 15px;"><?php echo $error_msg ?></p>
								<?php } ?>
									<div class="form-group">
										<!-- Email -->
										<input type="text" class="form-control" name="username" placeholder="Введите логин">
									</div>
									<div class="form-group">
										<!-- Password -->
										<input type="password" name="password" class="form-control mt-2" placeholder="Ваш пароль">
									</div>
									<!-- <input type="hidden" name="source" value="{{source}}"> -->
									
									<a style="text-decoration: underline; margin-left: 40%; font-size: 12px;" href="/register">Зарегистрироваться</a>
									
									<div class="form-group text-center">
										<!-- Log In Button -->
										<button type="submit" class="btn alime-btn btn-2 mt-30 wow fadeInUp">Войти</button>
									</div>
								</form>
							</div>	
					</div>
				</div>
			</div>
		</div>

<?php require 'partials/main/footer.php'; ?>
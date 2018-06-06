<!DOCTYPE html>
<html lang="en">

	<?php require_once ("head-utils.php");?>

	<body class="sfooter">
		<div class="sfooter-content">

			<?php require_once("navbar.php");?>

			<main class="d-flex align-items-end align-items-md-center mh-80">
				<div class="container-fluid text-center text-md-left">

					<div class="row">

						<div class="col-md-6 offset-md-6 col-lg-4 offset-lg-8">
							<div class="card bg-shadow-light border-0 rounded-0">
								<div class="card-body">
									<form action="#" novalidate>
										<div class="form-group">
											<div class="input-group">
												<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
												<input id="signInEmail" name="signInEmail" type="email" class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<div class="input-group-addon"><i class="fa fa-key"></i></div>
												<input id="signInPassword" name="signInPassword" type="password" class="form-control" placeholder="Password">
											</div>
										</div>
										<div class="text-md-right">
											<button class="btn btn-primary"><i class="fa fa-sign-in"></i>&nbsp;Sign In</button>
										</div>
									</form>
								</div>
							</div>

							<div class="my-2 text-white">
								<span class="font-weight-light font-italic">Don't have an account?</span><button class="btn-link py-0 text-white border-0 font-weight-bold" data-toggle="modal" data-target="#signUpModal">Sign up today!</button>
							</div>
						</div>

					</div><!--/.row-->
				</div><!--/.container-fluid-->
			</main>

		</div>

		<?php require_once("footer.php");?>

		<?php require_once("sign-up-modal.php");?>

	</body>
</html>
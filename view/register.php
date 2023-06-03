<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>ADMIN - Registro</title>

		<?php
			include('cabecalho.php');
		?>

		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/jquery-steps/jquery.steps.css"
		/>

	</head>

	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.php">
						<img src="vendors/images/deskapp-logo.svg" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="/admin/login">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div
			class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="vendors/images/register-page-img.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="register-box bg-white box-shadow border-radius-10">
							<div class="wizard-content">
								<form class="wizard-circle wizard" id="formRegister" action="">

									<input type="hidden" id="localBase" name="localBase" value="<?=CC_PASTA_INICIO;?>">
									<input type="hidden" id="urlBase" name="urlBase" value="<?=CC_LOCAL_INICIO;?>">

									<h5>Dados iniciais</h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Nome*</label>
												<div class="col-sm-8">
													<input type="text" id="name"  name="name" class="form-control required" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Email *</label
												>
												<div class="col-sm-8">
													<input type="email" id="email"  name="email" class="form-control required" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Senha*</label>
												<div class="col-sm-8">
													<input type="password" id="password"  name="password" class="form-control required" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Confirma Senha*</label
												>
												<div class="col-sm-8">
													<input type="password" id="confirm"  name="confirm" class="form-control required" />
												</div>
											</div>
										</div>
									</section>
									<!-- Step 2 -->
									<h5>Informação pessoal</h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row align-items-center">
												<label class="col-sm-4 col-form-label">Sexo*</label>
												<div class="col-sm-8">
													<div
														class="custom-control custom-radio custom-control-inline pb-0"
													>
														<input
															type="radio"
															id="masculino"
															name="sexo"
															value="M"
															class="custom-control-input required"
														/>
														<label class="custom-control-label" for="masculino"
															>Masculino</label
														>
													</div>
													<div
														class="custom-control custom-radio custom-control-inline pb-0"
													>
														<input
															type="radio"
															id="femimino"
															name="sexo"
															value="F"
															class="custom-control-input required"
														/>
														<label class="custom-control-label" for="femimino"
															>Feminino</label
														>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Data nasc.</label>
												<div class="col-sm-8">
													<input type="date"  id="dt-nascimento"  name="dt-nascimento"class="form-control required" />
												</div>
											</div>
										</div>
									</section>
									<!-- Step 3 -->
									<h5>Endereço</h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">CEP*</label>
												<div class="col-sm-8">
													<input type="text" id="cep" name="cep" onChange="javascript:verificaCep($(this).val())" class="form-control required" />
												</div>
											</div>											
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Bairro</label>
												<div class="col-sm-8">
													<input type="text" id="bairro" readonly="readonly" name="bairro"  class="form-control required" />
													<input type="hidden" id="uf" readonly="uf" name="uf" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Cidade</label
												>
												<div class="col-sm-8">
													<input type="text" id="cidade" readonly="readonly" name="cidade"  class="form-control required" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Endereço</label
												>
												<div class="col-sm-8">
													<input type="text" id="endereco" readonly="readonly" name="endereco"  class="form-control required" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Complemento</label
												>
												<div class="col-sm-8">
													<input type="text" id="complemento" name="complemento"  class="form-control required" />
												</div>
											</div>
											
										</div>
									</section>
									<!-- Step 4 -->
									<h5>Confirme seus Dados</h5>
									<section>
										<div class="form-wrap max-width-600 mx-auto">
											<ul class="register-info">
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Nome</div>
														<div id="info_name" class="col-sm-8"></div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Email</div>
														<div id="info_email" class="col-sm-8"></div>
													</div>
												</li>												
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Data Nasc.</div>
														<div id="info_dtnasc" class="col-sm-8"></div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Endereço</div>
														<div id="info_endereco" class="col-sm-8"></div>
													</div>
												</li>
											</ul>
											<div class="custom-control custom-checkbox mt-4">
												<input
													type="checkbox"
													class="custom-control-input"
													id="confirmInfo"
													name="confirmInfo"
												/>
												<label class="custom-control-label" for="confirmInfo"
													>Estou concordando com os dados a cima.</label
												>
											</div>
										</div>
									</section>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- success Popup html Start -->
		<button
			type="button"
			id="success-modal-btn"
			 onclick="javascript:registerForm()"
		>
			Launch modal
		</button>
		<div
			class="modal fade"
			id="success-modal"
			tabindex="-1"
			role="dialog"
			aria-labelledby="exampleModalCenterTitle"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered max-width-400"
				role="document"
			>
				<div class="modal-content">
					<div class="modal-body text-center font-18">
						<h3 class="mb-20">Form Submitted!</h3>
						<div class="mb-30 text-center">
							<img src="vendors/images/success.png" />
						</div>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
						eiusmod
					</div>
					<div class="modal-footer justify-content-center">
						<a href="login.php" class="btn btn-primary">Done</a>
					</div>
				</div>
			</div>
		</div>
		<!-- success Popup html End -->		
	</body>
	<footer>
		<!-- js -->
		<?php
			include('footer.php');
		?>
		<script src="src/plugins/jquery-steps/jquery.steps.js"></script>		
		<script src="src/plugins/jquery-validation/jquery.validate.js"></script>
		<script src="src/plugins/jquery-validation/localization/messages_pt_BR.js"></script>		
		<script src="vendors/scripts/steps-setting.js"></script>
	</footer>
</html>

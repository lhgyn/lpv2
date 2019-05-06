
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 title">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<form class="form-horizontal">
				  <div class="form-group">
				    <label class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <p class="form-control-static">email@example.com</p>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
				    </div>
				  </div>
				</form>
			</div>
			<div class="col-md-5"></div>
		</div>
	</div>
</section>



<div class="row row-contato" id="page-content">
	<div class="container">
		<div class="container-fluid">

			<?php
				if (isset($_REQUEST['envio'])) {
					if ($_REQUEST['envio']=='1') {
						?>
							<div class="alert-success alert-dismissible alert" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Parabéns!</strong> Sua mensagem foi enviada com sucesso!
							</div>
						<?php
					} else if ($_REQUEST['envio']=='0') {
						?>
							<div class="alert-danger alert-dismissible alert" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Ops!</strong> Ocorreu algum erro ao enviar. <strong>Tente novamente!</strong>
							</div>
						<?php
					}
				}
			?>

		    <div class="content-title-contato">
				<div class="col-xs-12">
					<h1 class="text-left border-title"><i class="fa fa-envelope-o"></i>&nbsp;Contate-nos</h1>
				</div>
			</div>
			<div class="content-forms-contato">
				<div class="col-md-8 col-xs-12 form">
					<form action="../controllers/Email/sendemail.php" id="contactForm" class="form-horizontal" role="form" novalidate="novalidate">
						<div class="form-group">
							<div class="col-md-4 col-xs-12 col-label">
								<label for="contactNameBiod">Nome completo:</label><span class="required">*</span>
							</div>
							<div class="col-md-8 col-xs-12 pull-right">
								<div class="col-md-12 col-xs-12 col-input">
									<input class="form-control" id="contactNameBiod" placeholder="Digite seu nome completo" maxlength="150" data-fv-notempty="true" data-fv-notempty-message="É obrigatório informar o nome completo." name="contactNameBiod" type="text">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4 col-xs-12 col-label">
								<label for="contactEmailBiod">Endereço de email:</label><span class="required">*</span>
							</div>
							<div class="col-md-8 col-xs-12 pull-right">
								<div class="col-md-12 col-xs-12 col-input">
									<input class="form-control" id="contactEmailBiod" placeholder="Digite seu endereço de e-mail" maxlength="150" data-fv-notempty="true" data-fv-notempty-message="É obrigatório informar um endereço de email válido." data-fv-emailaddress="true" data-fv-emailaddress-message="Este email é inválido." name="contactEmailBiod" type="email">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4 col-xs-12 col-label">
								<label for="contactSubjectBiod">Assunto:</label><span class="required">*</span>
							</div>
							<div class="col-md-8 col-xs-12 pull-right">
								<div class="col-md-12 col-xs-12 col-input">
									<input class="form-control" id="contactSubjectBiod" placeholder="Digite o assunto" maxlength="150" data-fv-notempty="true" data-fv-notempty-message="É obrigatório informar oassunto da mensagem." name="contactSubjectBiod" type="text">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4 col-xs-12 col-label">
								<label for="contactPedidoBiod">Número do pedido:</label>
							</div>
							<div class="col-md-8 col-xs-12 pull-right">
								<div class="col-md-12 col-xs-12 col-input">
									<input class="form-control" id="contactPedidoBiod" placeholder="Digite o número do pedido (opcional)" maxlength="150" data-fv-digits="true" data-fv-digits-message="O número do pedido informado é inválido." data-fv-stringlength-trim="true" data-fv-stringlength-min="7" data-fv-stringlength-max="7" data-fv-stringlength-message="O número do pedido informado é inválido." name="contactPedidoBiod" type="tel">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4 col-xs-12 col-label">
								<label for="contactMessageBiod">Mensagem:</label><span class="required">*</span>
							</div>
							<div class="col-md-8 col-xs-12 pull-right">
								<div class="col-md-12 col-xs-12 col-input">
									<textarea class="form-control" id="contactMessageBiod" placeholder="Digite sua mensagem" data-fv-notempty="true" data-fv-notempty-message="É obrigatório a informar uma mensagem." name="contactMessageBiod" cols="50" rows="10"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12 col-input content-btn-contato">
								<button type="submit" class="btn btn-success js-spin pull-right">Enviar <i class="fa fa-arrow-right right"></i> </button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4 col-xs-12 hidden-sm hidden-xs data">
					<div>
						<h3>Gostaríamos de ouvir a sua opinião</h3>
						<p>Como podemos ajudá-lo? Caso tenha alguma questão relacionada com a sua encomenda, por favor não se esqueça de mencionar o seu número de pedido.</p>
						<h3>Perguntas Frequentes</h3>
						<p>Encontre a resposta à sua pergunta na nossa sessão <a href="../views/perguntas-frequentes.php">Perguntas Frequentes</a>.</p>
						<h3>Pode encontrar-nos aqui:</h3>
						<p>
							<strong>Life Health</strong> - Rua T 50, Nº 1473, Setor Bueno, Goiânia-GO, CEP 74215-200
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

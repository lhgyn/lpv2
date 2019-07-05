

<section id="page-contato">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title">
				<h1 class="text-center">Entre em Contato</h1>
				<hr>
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
			</div>
		</div>
		<div class="row content">

			<div class="col-md-7">
				<form action="./controllers/Email/sendemail.php" id="contactForm">
				  <div class="form-group">
				    <!-- <label for="inputPassword">Nome Completo</label> -->
				    <input type="text" class="form-control input-sm" name="nome" placeholder="Nome Completo">
				  </div>
				  <div class="form-group">
				    <!-- <label for="inputPassword">E-mail</label> -->
				    <input type="email" class="form-control input-sm" name="email" placeholder="E-mail">
				  </div>
				  <div class="form-group">
				    <!-- <label for="inputPassword">Assunto</label> -->
				    <input type="text" class="form-control input-sm" name="assunto" placeholder="Assunto">
				  </div>
				  <div class="form-group">
				    <!-- <label for="inputPassword">Nº Pedido</label> -->
				    <input type="text" class="form-control input-sm" name="n-pedido" placeholder="Nº do Pedido">
				  </div>
				  <div class="form-group">
				    <!-- <label for="inputPassword">Mensagem</label> -->
				    <textarea cols="20" rows="6" class="form-control" name="mensagem" placeholder="Sua mensagem aqui!"></textarea>
				  </div>
				  <div class="form-group">
				  	<button type="button" id="cta-button" class="btn contact-button pull-right">
						<div>
							<span>Enviar</span>
						</div>
				  	</button>
				  </div>
				</form>

				<div id="message-error"></div>
			</div>

			<div class="col-md-4 col-md-offset-1 info">
				<div >
					<hr class="visible-sm visible-xs">
					<h3>Gostaríamos de ouvir a sua opinião</h3>
					<p>Como podemos ajudá-lo? Caso tenha alguma questão relacionada com a sua encomenda, por favor não se esqueça de mencionar o seu número de pedido.</p>

					<h3>Perguntas Frequentes</h3>
					<p>Encontre a resposta à sua pergunta na nossa sessão Perguntas Frequentes.</p>

					<h3>Pode encontrar-nos aqui:</h3>
					<p>Life Health - Rua T 50, Nº 1473, Setor Bueno, Goiânia-GO, CEP 74215-200</p>
				</div>
			</div>

		</div>
	</div>
</section>

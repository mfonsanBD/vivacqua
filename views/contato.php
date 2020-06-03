<!-- Home -->
<div class="home_about">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?=URL_BASE?>assets/images/contact.jpg" data-speed="0.8"></div>
	<div class="home_about_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_about_content d-flex flex-row align-items-end justify-content-start">
						<div class="home_about_title">Contato</div>
						<div class="breadcrumbs ml-auto">
							<ul>
								<li><a href="<?=URL_BASE?>">Home</a></li>
								<li>Contato</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Contact -->
<div class="contact">
	<div class="container">
		<div class="row">

			<!-- Contact Info -->
			<div class="col-lg-4">
				<div class="contact_info">
					<div class="section_title text-uppercase">Fale conosco</div>
					<div class="contact_info_content">
						<ul class="contact_info_list">
							<li>
								<div>Endereço:</div>
								<div>1481 Creekside Lane Avila Beach, CA 93424</div>
							</li>
							<li>
								<div>Telefone:</div>
								<div>+53 345 7953 32453</div>
							</li>
							<li>
								<div>E-mail:</div>
								<div>yourmail@gmail.com</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Contact Form -->
			<div class="col-lg-8">
				<div class="contact_form_container">
					<form action="#" class="contact_form" id="contact_form">
						<div class="row">
							<!-- Name -->
							<div class="col-lg-6 contact_name_col">
								<input type="text" class="contact_input" placeholder="Nome Completo" required="required">
							</div>
							<!-- Email -->
							<div class="col-lg-6">
								<input type="email" class="contact_input" placeholder="E-mail" required="required">
							</div>
						</div>
						<div><input type="text" class="contact_input" placeholder="Assunto"></div>
						<div><textarea class="contact_textarea contact_input" placeholder="Mensagem" required="required"></textarea></div>
						<button class="contact_button button">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Map -->
<div class="contact_map">
	<!-- Google Map -->
	<div class="map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div>
</div>
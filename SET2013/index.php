<!DOCTYPE html>

<html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<!-- Save UTF-8 without BOM -->

		<!-- Set the viewport width to device width for mobile -->
		<meta name="viewport" content="width=device-width" />

		<title>SET 2013</title>
		<!-- Included CSS Files (Compressed) -->
		<link rel="stylesheet" href="stylesheets/foundation.min.css">
		<link rel="stylesheet" href="stylesheets/app.css">

		<!-- Included JS Files (Compressed) -->
		<script src="javascripts/jquery.js"></script>
		<script src="javascripts/foundation.min.js"></script>		

		<!-- Initialize JS Plugins -->
		<script src="javascripts/app.js"></script>
		
		<script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>

	</head>

	<body>	
		<div class="menu">
			<!-- Desktop Version -->
			<ul id="main-menu" class="nav-bar hide-for-touch">
				<li class="active-button"><a href="index.php">SET</a></li>
				<li class="has-flyout">
					<a href="#">Evento</a> 
					<a href="#" class="flyout-toggle"><span> </span></a>
				
					<ul class="flyout" style="display: none;">
						<li><a href="evento_descricao.html">Descri��o</a></li>
						<li><a href="evento_patrociniosEapoios.html">Patroc�nios &amp; Apoios</a></li>
					</ul>
				</li>
				<li class="has-flyout">
					<a href="#">Programa</a>
					<a href="#" class="flyout-toggle"><span> </span></a>
				
					<ul class="flyout" style="display: none;">
						<li><a href="programa_calendario.html">Calend�rio</a></li>
						<!--<li><a href="programa_palestras.html">Palestras</a></li>
						<li><a href="programa_workshops.html">Workshops</a></li>
						<li><a href="programa_stands.html">Stands</a></li>-->
					</ul>
				</li>
				<li><a href="contactos_localizacao.html">Contactos & Localiza��o</a></li>
				<li class="invisible"></li>
			</ul>	
			
			<!--<a href="#" class="button hide-for-large-up invisible" data-reveal-id="mobile-menu">Click Me For The Menu!!!</a>-->
			<!-- Touch Version -->
			<select id="mobile-menu-selector" class="button show-for-touch"
					onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
				<option selected disabled>Menu</option>
				<option value="index.php">SET</option>
				<optgroup label="Evento">
					<option value="evento_descricao.html">Descri��o</option>
					<option value="evento_patrociniosEapoios.html">Patroc�nios & Apoios</option>			
				</optgroup>	
				<optgroup label="Programa">
					<option value="programa_calendario.html">Calend�rio</option>
					<!--<option value="programa_palestras.html">Palestras</option>
					<option value="programa_workshops.html">Workshops</option> 
					<option value="programa_stands.html">Stands</option>-->				
				</optgroup>	
				<option value="contactos_localizacao.html">Contactos & Localiza��o</option>						
				<!--<option value="href="https://docs.google.com/forms/d/1xfPvHFzbu6LBspcCOpEhmWee5mRfRB5mAN505PC8ZhQ/viewform"">Inscri��es</option>-->					
			</select>

			<ul id="network-menu" class="nav-bar right">	
				<a href="https://www.facebook.com/TagusSet"><img class="network-buttons" src="images/social-icons/48x48-facebook.png"/></a>
				<a href="http://www.youtube.com/user/SetTagus"><img class="network-buttons" src="images/social-icons/48x48-youtube.png"/></a>
				<a href="https://twitter.com/tagus_set"><img class="network-buttons" src="images/social-icons/48x48-twitter.png"/></a>
				<a href="https://plus.google.com/b/109511848299044071810/109511848299044071810/posts"><img class="network-buttons" src="images/social-icons/48x48-gplus.png"/></a>
			</ul>	
		</div>
		
		<div class="container">
			<!-- Cabe�alho -->
			<div class="row header">	
			</div>
			
			<!-- Titulo -->
			<div class="row title">
				<div class="twelve columns">
				
					<h5 class="hide-for-large-up"> Semana do Empreendedorismo e Tecnologia </h5>
					<h1 class="hide-for-medium-down"> Semana do Empreendedorismo e Tecnologia </h1>
				</div>
			</div>

			<!-- Conte�do -->
			<div class="row content">
			
				<div class="two columns">
				</div>
				
				<div class="eight columns">
					<center>
					
					<!-- Slider -->
					<div class="row">
						<div class="twelve columns centered">
							<div id="slider">
								<!--<img src="images/slider/inscricoes.png" />-->
								<img src="images/slider/edp.png" />
								<img src="images/slider/redbull.png" />
								<img src="images/slider/ernstyoung.jpeg" />								
								<img src="images/slider/deloitte.jpg" />
								<img src="images/slider/accenture.jpg" />		
								<img src="images/slider/kpmg.jpg" />	
								<img src="images/slider/Synopsys.jpg" />
							</div>			
						</div>				
					</div>

					<hr>					
					
					<!-- Conte�do 1 -->
					<div class="row">
						<div class="four columns">
							<img src="images/data.jpg" />
						</div>
						<div class="eight columns">
							<br />
							<h2>SET</h2>
							<p>
							<div class="row">
									<p>A SET - Semana do Empreendedorismo e Tecnologia - � um evento que visa proporcionar aos alunos um contacto mais pr�ximo com o mundo empresarial, atrav�s de palestras, workshops e debates que contam com a presen�a de oradores de distinto m�rito e experi�ncia.</p>
									<!--<p><h1>Inscri��es para workshops abertas</h1></p>
									<p>As inscri��es para os workshops e palestras j� se encontram abertas <a href="https://docs.google.com/forms/d/1xfPvHFzbu6LBspcCOpEhmWee5mRfRB5mAN505PC8ZhQ/viewform" target="_blank">nesta p�gina</a>. Reserva j� o teu lugar!</p>-->
									<div class="six columns">
									
								</div>
							</div>
							</p>
						</div>
					</div>
					<br /><br /><br />

					<!-- Oradores -->
					<div class="row">
						<div class="twelve columns">
							<div class="row">
								<p><center><h5>Para descobrir mais sobre os oradores que comp�em o evento, clique na fotografia correspondente</h5></center></p>
								<!-- Thumbnails -->
								<div class="three mobile-two columns">
									<a href="" data-reveal-id="orador1"><img src="images/cnfonseca.jpg" />
									<h6 class="panel">Cristina Fonseca</h6></a> 
								</div>

								<div class="three mobile-two columns">
									<a href="" data-reveal-id="orador2"><img src="images/amexia.jpg" />
									<h6 class="panel">Ant�nio Mexia</h6></a>
								</div>

								<div class="three mobile-two columns">
									<a href="" data-reveal-id="orador3"><img src="images/famaral.jpg" />
									<h6 class="panel">Jo�o Ferreira do Amaral</h6></a>
								</div>

								<div class="three mobile-two columns">
									<a href="" data-reveal-id="orador4"><img src="images/dbessa.jpg" />
									<h6 class="panel">Daniel Bessa</h6></a>
								</div>
							</div>
							<div class="row">
								<!-- Thumbnails -->
								<div class="three mobile-two columns">
								</div>

								<div class="three mobile-two columns">
									<a href="" data-reveal-id="orador5"><img src="images/jfreitas.jpg" />
									<h6 class="panel">Jorge Freitas</h6></a>
								</div>

								<div class="three mobile-two columns">
									<a href="" data-reveal-id="orador6"><img src="images/rsousa.jpg" />
									<h6 class="panel">Ricardo Sousa</h6></a>
								</div>

								<div class="three mobile-two columns">
								</div>
							</div>
						</div>
					</div>
 
					<a class="twitter-timeline" href="https://twitter.com/tagus_set" data-widget-id="294663014366461953">Tweets by @tagus_set</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>		

					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FTagusSet&amp;send=false&amp;layout=standard&amp;width=400&amp;show_faces=true&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:80px;" allowTransparency="true"></iframe>
				</div>
			
				<!-- Patrocinadores -->
				<div class="sponsors two columns">
				</div>
			</div>				
					
			<!-- Rodap� -->
			<div class="row footer">
				<div class="row">
					<!-- Logo IST -->
					<div class="six columns">
						<p style="text-align: center">
							<a href="#"><img class="fixed-height" src="images/logo-ist.jpg"/></a>
						</p>
					</div>
					<!-- Logo LAGE2 -->
					<div class="six columns">
						<p style="text-align: center">
							<a href="#"><img class="fixed-height" src="images/logo-lage2.png"/></a>
						</p>
					</div>
				</div>
				<!-- IST All Rights Reserved -->
				<div class="row">
					<div class="twelve columns">
						<p style="text-align: center">� 2013 <a href="#">SET</a> Todos os direitos reservados.</p>
					</div>
				</div>				
			</div>
		</div>
		
		<script type="text/javascript">
		
			 $(window).load(function() {
			 
				$('#featured').orbit({
					 animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
					 animationSpeed: 800,                // how fast animtions are
					 timer: true, 			 // true or false to have the timer
					 resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
					 advanceSpeed: 4000, 		 // if timer is enabled, time between transitions 
					 pauseOnHover: false, 		 // if you hover pauses the slider
					 startClockOnMouseOut: false, 	 // if clock should start on MouseOut
					 startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
					 directionalNav: true, 		 // manual advancing directional navs
					 captions: true, 			 // do you want captions?
					 captionAnimation: 'fade', 		 // fade, slideOpen, none
					 captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
					 bullets: false,			 // true or false to activate the bullet navigation
					 bulletThumbs: false,		 // thumbnails for the bullets
					 bulletThumbLocation: '',		 // location from this file where thumbs will be
					 afterSlideChange: function(){}, 	 // empty function 
					 fluid: true                         // or set a aspect ratio for content slides (ex: '4x3') 
				});		 
			 
				 $('#slider').orbit();
			 });
		</script>			

		
	<!-- Orador Modal 1 -->
	<div class="reveal-modal" id="orador1">
	<h4>Cristina Fonseca</h4>
	<p>Cristina Fonseca � uma empres�ria portuguesa de 24 anos com mestrado em Engenharia de Redes e Comunica��es do Instituto Superior T�cnico. Como aluna estudou o funcionamento de routers e antenas, tendo efectuado investiga��o nesse campo.</p>
	<p>Criou o seu primeiro neg�cio aos 21 anos, recusando empregos corporativos para se tornar uma empreendedora. Trabalhou como consultora, possu�a v�rias empresas mas apesar de algumas falhas manteve o seu esp�rito optimista e a sua persist�ncia.</p>
	<p>� co-fundadora da Talkdesk, empresa que permite criar um call center em menos de 5 minutos, sem contratos de longo prazo ou custos de infra-estruturas.</p>
	<p>Recentemente, a Talkdesk formou 500 startups.</p>
	<!-- Close modal -->
	<a href="#" class="close-reveal-modal">&times;</a>
	</div>
	<!-- End Modal -->
		
	<!-- Orador Modal 2 -->
	<div class="reveal-modal" id="orador2">
	<h4>Ant�nio Mexia</h4>
	<p>Ant�nio Mexia � licenciado em Economia pela Universidade de Gen�ve e � actualmente presidente do Conselho de Administra��o da EDP (desde 2005). Foi Ministro das Obras P�blicas, Transportes e Comunica��es do XVI Governo Constitucional, bem como representante do Governo Portugu�s junto da Uni�o Europeia no Grupo de trabalho para o desenvolvimento das redes transeuropeias.</p>
	<p>Estar� presente na SET no dia 6 de mar�o pelas 15:30.</p>
	<!-- Close modal -->
	<a href="#" class="close-reveal-modal">&times;</a>
	</div>
	<!-- End Modal -->
		
	<!-- Orador Modal 3 -->
	<div class="reveal-modal" id="orador3">
	<h4>Jo�o Ferreira do Amaral</h4>
	<p>Jo�o Ferreira do Amaral, economista, doutorado e agregado em em Economia pela Universidade T�cnica de Lisboa, � Professor Catedr�tico do Instituto Superior Economia e Gest�o. Foi assessor e consultor do Presidente da Republica Jorge Sampaio e ainda Director-Geral do Departamento Central de Planeamento.</p>
	<p>Estar� presente na SET para dar uma palestra em conjunto com Daniel Bessa: "A crise, suas origens, caminhos poss�veis para a ultrapassar, implica��es para Portugal e para a Europa".</p>
	<!-- Close modal -->
	<a href="#" class="close-reveal-modal">&times;</a>
	</div>
	<!-- End Modal -->
		
	<!-- Orador Modal 4 -->
	<div class="reveal-modal" id="orador4">
	<h4>Daniel Bessa</h4>
	<p>Daniel Bessa � licenciado em economia pela Faculdade de Economia da Universidade do Porto e doutorado na mesma �rea pelo Instituto Superior de Economia e Gest�o da Universidade T�cnica de Lisboa. Foi Professor na FEP at� 2000, actualmente � Presidente do Conselho de Representantes da Faculdade de Direito da Universidade do Porto e director-geral da COTEC Portugal - Associa��o Empresarial para a Inova��o. Foi ministro da Economia, Ind�stria, Com�rcio e Turismo, e em 2006 foi feito Grande-Oficial da Ordem do Infante D. Henrique.</p>
	<!-- Close modal -->
	<a href="#" class="close-reveal-modal">&times;</a>
	</div>
	<!-- End Modal -->
	<!-- Orador Modal 4 -->
	<div class="reveal-modal" id="orador5">
	<h4>Jorge Freitas</h4>
	<p>Jorge Freitas, autor do livro "7 Segundos, a arte de falar em p�blico"  dedica-se ao Treino de Alta Performance em Comunica��o na Europa e Brasil. Actualmente apresenta o primeiro e �nico programa de r�dio exclusivamente dedicado ao Coaching em Portugal e participa como orador convidado com frequ�ncia em diversos col�quios e semin�rios sobre Comunica��o. � professor de T�cnicas de Falar em P�blico h� mais de 12 anos.</p>
	<p>Estar� presente na SET no dia 4 de mar�o �s 16:30 para liderar uma palestra sobre Linguagem Corporal.</p>
	<p>Podem consultar o seu website aqui: http://www.jorgefreitasorador.com/</p>
	<!-- Close modal -->
	<a href="#" class="close-reveal-modal">&times;</a>
	</div>
	<!-- End Modal -->
	<!-- Orador Modal 4 -->
	<div class="reveal-modal" id="orador6">
	<h4>Ricardo Sousa</h4>
	<p>Ricardo Sousa � um jovem empreendedor apaixonado pelo empreendedorismo, educa��o e eventos. Actualmente  � co-fundador e CEO da ColorElephant, o produtor e apresentador da conferencia SWITCH  e o iniciador do movimento �Movement for Change in Education�. Ao longo da vida j� trabalhou com empresas como a Microsoft, BMW, Evernote, Sofitel entre outras.</p>
	<!-- Close modal -->
	<a href="#" class="close-reveal-modal">&times;</a>
	</div>
	<!-- End Modal -->
	</body>
</html>
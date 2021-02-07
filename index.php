<!DOCTYPE html>
<html>
<head>
  	<title>DSOUZA Consultoria e Serviços em TI (Projetos, Governança e Salesforce) - HOME</title>
  	<!-- Meta Tags -->
  	<meta charset="utf-8">
  	<meta property="og:title" content="DSOUZA Consultoria e Serviços em TI (Projetos, Governança e Salesforce) - HOME">
 	<meta property="og:site_name" content="DSOUZA Consultoria e Serviços em TI (Projetos, Governança e Salesforce)">
  	<meta name="description" content=" A DSOUZA é uma empresa de Consultoria e Terceirização de Serviços em Tecnologia da Informação. Trabalhamos com Gestão de projetos, Governança de TI e desenvolvimento de processos (Scrum, PMI, BPNM, OKR), Desenvolvimento de sistemas e aplicativos, Implantação de Salesforce - CRM">
  	<meta property="og:image" content="img/logo.png">
  	<meta property="og:image:type" content="image/png">
  	<meta property="og:image:alt" content="Logo DSOUZA">
  	<meta property="og:locale" content="pt_BR">
  	<meta name="keywords" content="Salesforce, CRM, Governança, Governança de ti, Governança corporativa, Projetos, Escritório de projetos, Gerenciamento de projetos, Inovação, Scrum, PMI, Kanban, Consultoria, Consultoria em TI, Gerenciamento de processos de negócio, Gerenciamento de processos de TI, Gerenciamento de processos, Tecnologia da Informação, Desenvolvimento, Software, Terceirização de Serviços, Gestão da informação, Treinamentos, ISO, BPMN, PMO">
  	<meta name="author" content="LucasSilvaDev">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<!-- Favicon -->
  	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<!-- Fonte -->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Container Principal -->
	<main id="container">
		<!-- Header -->
		<header>
			<a href="" class="logo"><img src="img/logo.png" alt="Logo"></a>
			<!-- Menu Hamburguer -->
			<div class="menuToggle" onclick="menuToggle()"></div>
			<ul class="nav">
				<li><a href="#">Home</a></li>
				<li><a href="services.php">Serviços</a></li>
				<li><a href="about.php">Sobre nós</a></li>
				<li><a href="contact.php">Contato</a></li>
			</ul>
		</header>
		<!-- Banner Principal -->
		<section id="banner-principal">
			<div id="image-bg"></div>
			<img class="barra_lateral" src="img/barra_lateral.png" alt="Barra Lateral">
			<section class="texto-principal">
				<h1>Como a TI ajuda sua empresa a crescer?</h1>
				<p>Na DSOUZA, utilizamos a Governança de TI para gerar<br> valor ao seu negócio e crescimento para sua empresa.</p>
			</section>
		</section>
		<!-- Botão WhatsApp -->
		<span class="btn-whatsapp"><a href="https://api.whatsapp.com/send?phone=5511951199915&text=Ol%C3%A1%2C%20gostaria%20de%20entrar%20em%20contato%20com%20a%20DSOUZA%20Consultoria!" target="_blank"><img src="img/whatsapp.png" alt="Ícone WhatsApp"></a></span>
		<!-- Aviso de Cookies -->
		<div id="popup_cookies">
			<p>Utilizamos cookies, cookies de terceiros e tecnologias similares para aprimorar o nosso site, analisar o tráfego online, disponibilizar funcionalidades para redes<br> sociais e personalizar o conteúdo e a publicidade em função dos seus hábitos de navegação. Ao continuar a navegação você concorda com esses termos.</p>
			<button class="btn" onclick="cookies()">Entendi</button>
		</div>
	</main>
	<!-- Ícone Seta -->
	<span class="seta"><a href="#services"><img src="img/icon_seta.png" alt="Seta Scroll"></a></span>
	<!-- Seção Serviços -->
	<section id="services">
		<h2 class="title">Serviços</h2>
		<img src="img/detalhe-titulo.png" alt="Detalhe Título">
		<section id="cards-services">
			<div class="card-services">
				<img src="img/img-servico-cons.png" alt="Imagem Consultoria em TI">
				<br><br><p>Consultoria em Projetos<br> e Governança de TI</p><br>
				<a href="services.php" class="btn">Saiba mais</a>
			</div>
			<div class="card-services">
				<img src="img/img-servico-salesforce.png" alt="Imagem Salesforce">
				<br><br><p>Implementação<br> Salesforce</p><br>
				<a href="services.php" class="btn">Saiba mais</a>
			</div>
			<div class="card-services">
				<img src="img/img-servico-terc.png" alt="Imagem Terceirização de Serviços">
				<br><br><p>Terceirização de<br> Serviços de TI</p><br>
				<a href="services.php" class="btn">Saiba mais</a>
			</div>
			<div class="card-services">
				<img src="img/img-servico-dev.png" alt="Imagem Desenvolvimento de Sistemas">
				<br><br><p>Desenvolvimento de<br> Sistemas</p><br>
				<a href="services.php" class="btn">Saiba mais</a>
			</div>
		</section>
	</section>
	<!-- Seção Parceria -->
	<section id="partnership">
		<img class="barra_lateral" src="img/barra_lateral.png" alt="Barra Lateral">
		<img src="img/img-parceiro.png" alt="Imagem Seja Nosso Parceiro">
		<section id="text-partnership">
			<h2 class="title">Seja nosso parceiro!</h2>
			<p>Traga sua empresa para a DSOUZA e<br> torne-se referência em seu segmento!</p>
			<a href="contact.php" class="btn">Entre em contato</a>
		</section>
	</section>
	<!-- Seção Newsletter -->
	<section id="newsletter">
		<section class="text-newsletter">
			<h2 class="title">Newsletter</h2>
			<img src="img/detalhe-titulo.png">
			<p>Faça seu cadastro e fique por dentro das novidades!</p>
		</section>
		<section class="form-newsletter">
			<form action="newsletter.php" method="POST">
				<br><input type="text" name="nome" placeholder="Nome" required>
				<input type="text" id="telefone" name="whatsapp" placeholder="WhatsApp" required><br><br>
				<input type="email" name="email" placeholder="E-mail" required>
				<br><button type="submit" class="btn">Cadastrar</button>
			</form>
		</section>
	</section>
	<!-- Footer -->
	<footer>
		<section id="info-footer">
			<div>
				<h3>Localização</h3>
				<svg width="115" height="6" viewBox="0 0 115 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="115" height="6" transform="matrix(-1 0 0 1 115 0)" fill="#48C1BC"/>
				</svg>
				<ul>
					<li><img src="img/icon-local.png" alt="Ícone Localização">Santo André - SP</li>
				</ul>
			</div>
			<div>
				<h3>Fale conosco</h3>
				<svg width="130" height="6" viewBox="0 0 130 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="130" height="6" transform="matrix(-1 0 0 1 130 0)" fill="#48C1BC"/>
				</svg>
				<ul>
					<li><img src="img/icon-email.png" alt="Ícone E-mail"><a href="mailto:contato@dsouzaconsultoria.com.br">contato@dsouzaconsultoria.com.br</a></li>
					<li><img src="img/icon-phone.png" alt="Ícone Telefone"><a href="tel:11-4251-0017">(11) 4251-0017</a></li>
				</ul>
			</div>
			<div>
				<h3>Redes sociais</h3>
				<svg width="135" height="6" viewBox="0 0 135 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="135" height="6" transform="matrix(-1 0 0 1 135 0)" fill="#48C1BC"/>
				</svg>
				<ul>
					<li><img src="img/icon-instagram.png" alt="Ícone Instagram"><a href="https://www.instagram.com/dsouza_consultoriati/" target="_blank">dsouza_consultoriati</a></li>
					<li><img src="img/icon-linkedin.png" alt="Ícone Linkedin"><a href="https://www.linkedin.com/company/dsouza-consultoria" target="_blank">dsouza-consultoria</a></li>
				</ul>
			</div>
		</section>
		<p>DSOUZA CONSULTORIA E SERVIÇOS EM TI - © 2021</p>
	</footer>
	<script type="text/javascript">
		// Menu Hamburger
		function menuToggle() {
			var menu = document.querySelector('div.menuToggle')
			var nav = document.querySelector('ul.nav')
			var logo = document.querySelector('a.logo')
			menu.classList.toggle("active")
			nav.classList.toggle("active")
			if (nav.classList.contains("active")) {
				logo.classList.add("logo-fixed")
			} else {
				logo.classList.remove("logo-fixed")
			}
		}
	</script>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" integrity="sha512-aUhL2xOCrpLEuGD5f6tgHbLYEXRpYZ8G5yD+WlFrXrPy2IrWBlu6bih5C9H6qGsgqnU6mgx6KtU8TreHpASprw==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<!-- Cookies -->
    <script type="text/javascript">
        function cookies(){
            document.getElementById('popup_cookies').style.display = "none"
            $.cookie("popup_cookies", true);
        }
    </script>
    <!-- Máscara Telefone -->
    <script type="text/javascript">
    	$("#telefone").mask("(00) 0000-00000");
    </script>
    <?php
        if (isset($_COOKIE["popup_cookies"])) {
            echo "<script type='text/javascript'>cookies()</script>";
        }
    ?>
</body>
</html>
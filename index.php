<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Latsuj - The Website</title>
	<meta name="description" content="French Fullstack Developer, <?= date("Y"); ?>, Latsuj's portfolio on wordpress prestashop and custom cms">
	
	<!--  Open Graph Data -->
	<meta property="og:url"                content="http://www.latsuj.com" />
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="Latsuj.com" />
	<meta property="og:description"        content="The portfolio of Latsuj, a french web developer" />
	<meta property="og:image"              content="http://www.latsuj.com/imgs/FRAME1.jpg" />
	<meta property="og:image:alt" 		   content="Portfolio of Latsuj" />
	
	<!--  Twitter Card -->
	<meta name="twitter:card" content="Latsuj.com" />
	<meta name="twitter:description" content="The portfolio of Latsuj, a french web developer" />
	<meta name="twitter:url" content="http://www.latsuj.com" />
	<meta name="twitter:image" content="http://www.latsuj.com/imgs/FRAME1.jpg" />
	
	<link rel="shortcut icon" type="image/png" href="./favicon.png"/>
	<link rel="stylesheet" type="text/css" href="./css/first.css">
</head>
<?php
	// Flush optimization
	ob_flush();
	flush(); 
?>
<body class="no-scrolling frame0">
	<div id="CONTENT">
	
		<!-- Title outside for dodging a repaint -->
		<div class="big-title big-title-blue orbitron">
			<span class="title-letters">L</span>
			<span class="title-letters">A</span>
			<span class="title-letters">T</span>
			<span class="title-letters">S</span>
			<span class="title-letters">U</span>
			<span class="title-letters"></span>
			<span class="title-letters">J</span>
		</div>
	
		<!-- START FRAME1 -->
		<div id="FRAME1" data-src="./imgs/FRAME1.jpg" class="frame frame-presentation frame-first frame-right">
			<div class="blackout-effect"></div>
			<div class="line-vertical line-white-up background-white"></div>
			<div class="line-vertical line-white-down background-white"></div>
			
			<div class="menu">
				<span class="menu-title tekolight">Menu</span>
				<div class="menu-line-top"></div>
				<div class="menu-line-middle"></div>
				<div class="menu-line-down"></div>
			</div>
			<div class="menu-show">
				<div class="menu-close">&#9670;</div>
				<div class="menu-show-prev">&#9650;</div>
				<span class="menu-show-prev-text tekolight">Project 02</span>
				<div class="menu-show-current tekolight">Preambule</div>
				<div class="menu-show-next">&#9660;</div>
				<span class="menu-show-next-text tekolight">Project 01</span>
			</div>
			
			<div class="icones scroll-down-1"></div>
			<div class="icones scroll-down-2"></div>
			<span class="scroll-text montserratlight">Scroll or die</span>
		<!-- END FRAME1 -->
		</div>

		<!-- START FRAME2 -->
		<div itemscope itemtype="http://schema.org/Project" id="FRAME2" data-src="./imgs/FRAME1.jpg" class="frame frame-informations frame-first">
			<div class="line-black-long line-black-long-up background-black"></div>
			<div class="line-black-long line-black-long-down background-black"></div>
			<div class="line-vertical line-black-up background-black"></div>
			<div class="line-vertical line-black-down background-black"></div>
			<div class="layer"></div>
			<div class="letter-l letters tekomedium">L</div>
			<div class="letter-j letters tekomedium">J</div>
			
			<div class="areas area-60">
				<div class="photo-wrap">
					<div class="photo-line photo-line-vertical photo-line-black-left"></div>
					<div class="photo-line photo-line-vertical photo-line-black-right"></div>
					<div class="photo-line photo-line-horizontal photo-line-black-up"></div>
					<div class="photo-line photo-line-horizontal photo-line-black-down"></div>
					<div class="photo-line photo-line-black-up photo-norepaint"></div>
					<div class="photo-line photo-line-black-down photo-norepaint"></div>
					<div class="photo">
						<div class="background-photo" data-imglow="./imgs/FRAME1_LOW.jpg" data-img="./imgs/FRAME1.jpg"></div>
						<div class="under-background-photo"></div>
					
						<div class="photo-square photo-square-black-left"></div>
						<div class="photo-square photo-square-black-right"></div>
						<div class="photo-square photo-square-black-up"></div>
						<div class="photo-square photo-square-black-down"></div>
						
						<div class="photo-block photo-block-vertical photo-block-black-top-left"></div>
						<div class="photo-block photo-block-vertical photo-block-black-top-right"></div>
						<div class="photo-block photo-block-horizontal photo-block-black-bottom-left"></div>
						<div class="photo-block photo-block-horizontal photo-block-black-bottom-right"></div>
					</div>
				</div>
				<div class="area-texte">
					<div class="area-texte-wrap">
						<div class="area-texte-line"></div>
						<span class="area-texte-title tekobold">Bienvenue sur mon site !</span>
						<br>
						<span class="area-texte-subtitle tekolight">I'm Latsuj ! Un développeur français passioné.</span>
					</div>
				</div>
			</div>
			<div class="areas area-40">
				<div class="blocs bloc-informations right">
					<div class="informations">
						<div class="date-line date-line-up"></div>
						<span itemprop="date" class="date orbitron">2016</span>
						<div class="date-line date-line-down"></div>
						<a href="https://www.facebook.com/sharer/sharer.php?u=www.latsuj.com" class="latsuj social-media facebook">J</a>
						<a href="https://twitter.com/home?status=www.latsuj.com" class="latsuj social-media twitter">T</a>
					</div>
				
					<div class="blocs-inside-title-line"></div>
					<div itemprop="number" class="blocs-inside-title background-white"><span class="tekolight projectx">Preambule</span></div>
					<h1 itemprop="description" class="blocs-inside-neartitle"><span class="montserratlight">Quelques mots...</span></h1>
					<div class="blocs-inside background-white"  data-count="0">
						<span itemprop="name" class="blocs-inside-informations-title tekobold">Latsuj.com</span>
						<div class="blocs-inside-wrap" data-img="./imgs/FRAME1.jpg" data-title="Bienvenue sur mon site !" data-text="I'm Latsuj ! Un développeur français passioné.">
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>H</strong>ello world ! Tu te trouve actuellement sur mon portefolio dans mon monde, mon univers. J'imagine que si tu te trouve ici, c'est que tu cherche certainement à savoir qui je suis.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>Qui suis-je ?</strong> Un fan de sport de vitesse, un voyageur mais surtout un développeur passioné. Une passion qui a démarré assez jeune et qui m'as poussé à suivre de longue étude d'ingénieur et qui m'a aussi fait voyagé pour travailler dans d'autres continents (Asie). 
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>A</strong>u moment où j'écrit ces lignes, je code depuis pas mal de temps. Mes principaux langages de programmations sont le <strong>Java, PHP, Python et le C++</strong>. Bon, j'admet cependant avoir un gros penchant pour le <strong>JavaScript</strong>. Mes connaissances sont aussi devenu assez vaste avec le temps : <strong>JQuery, Angular, Zend, Wordpress, Three.js, Modernizer.js, Wordpress...</strong> De même, pour mes méthodes de travail qui inclus maintenant systématiquement <strong>des tests unitaires/scénarios (Selenium/PHP Unit), benchmark, SEO...</strong>
							</span>
						</div>

						<div class="blocs-inside-wrap left-click" data-img="./imgs/Latsuj_roller_skating.jpg" data-title="En plein exercice à Sanam Luang (Thaïlande)" data-text="Et oui, un geek qui aime le sport, ça existe !">
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>U</strong>n point que j'affectionne particulièrement, c'est <strong>les techniques d'optimisation</strong>. Curieux, j'adore chercher les moyens les dernières techniques pour rendre son sites plus rapide aux chargements et l'execution. C'est d'ailleurs ce qui m'a poussé à apprendre <strong>le WebAssembleur, le LQIP, Flush start, Web Font loader, Ajax CSS...</strong>. J'utilise d'ailleurs abondamment ces techniques sur ce site avec de nombreuses autres optimisations. Je n'ai cependant pas minimisé les fichiers pour que vous puissez voir mon code comme je le vois moi. 
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>E</strong>nfin, je suis un sportif. Un grand passionné de roller de vitesse avec plus de 25 ans de pratique et pas mal de titre à mon actif. Bien dans son corps, bien dans sa tête que l'on dit souvent. Peut-être me croiserez vous lors d'un marathon roller ?
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>E</strong>t voila pour le tour d'horizon, j'imagine que maintenant, vous avez une idée globale de qui je suis. Dans la suite, vous trouverez surtout des projets personnels qui me tiennent à coeur.  
							</span>
						</div>
						
						<div class="blocs-inside-page blocs-inside-informations-right-page montserratbold">
							<div class="blocs-inside-informations-left-page-hover-1"></div>
							<div class="blocs-inside-informations-left-page-hover-2"></div>
							<span>></span>
						</div>
						<div class="blocs-inside-informations-page montserratlight"><span class="page">1 / 2</span></div>
						<div class="blocs-inside-page blocs-inside-informations-left-page montserratbold"><span>&lt;</span></div>
					</div>
				</div>
			</div>
		<!-- END FRAME2 -->
		</div>
	
		<!-- Title outside for dodging a repaint -->
		<div class="big-title big-title-blue orbitron left">
			<span class="title-letters">L</span>
			<span class="title-letters">A</span>
			<span class="title-letters">T</span>
			<span class="title-letters">S</span>
			<span class="title-letters">U</span>
			<span class="title-letters"></span>
			<span class="title-letters">J</span>
		</div>
		<!-- START FRAME3 -->
		<div id="FRAME3" data-src="./imgs/FRAME2.jpg" class="frame frame-presentation frame-left">
			<div class="blackout-effect"></div>
			<div class="line-vertical line-white-up background-white"></div>
			<div class="line-vertical line-white-down background-white"></div>
			
			<div class="menu">
				<span class="menu-title tekolight">Menu</span>
				<div class="menu-line-top"></div>
				<div class="menu-line-middle"></div>
				<div class="menu-line-down"></div>
			</div>
			<div class="menu-show">
				<div class="menu-close">&#9670;</div>
				<div class="menu-show-prev">&#9650;</div>
				<span class="menu-show-prev-text tekolight">Project 02</span>
				<div class="menu-show-current tekolight">Preambule</div>
				<div class="menu-show-next">&#9660;</div>
				<span class="menu-show-next-text tekolight">Project 01</span>
			</div>
			
			<div class="icones scroll-down-1"></div>
			<div class="icones scroll-down-2"></div>
			<span class="scroll-text montserratlight">Scroll or die</span>
		<!-- END FRAME3 -->
		</div>
	
		<!-- START FRAME4 -->
		<div itemscope itemtype="http://schema.org/Project" id="FRAME4" data-src="./imgs/FRAME2.jpg" class="frame frame-informations">
			<div class="line-black-long line-black-long-up background-black"></div>
			<div class="line-black-long line-black-long-down background-black"></div>
			<div class="line-vertical line-black-up background-black"></div>
			<div class="line-vertical line-black-down background-black"></div>
			<div class="layer"></div>
			<div class="letter-l letters tekomedium">L</div>
			<div class="letter-j letters tekomedium">J</div>
			
			<div class="areas area-40">
				<div class="blocs bloc-informations left">
					<div class="informations">
						<div class="date-line date-line-up"></div>
						<span itemprop="date" class="date orbitron">2015</span>
						<div class="date-line date-line-down"></div>
						<a href="https://www.facebook.com/sharer/sharer.php?u=www.latsuj.com" class="latsuj social-media facebook">J</a>
						<a href="https://twitter.com/home?status=www.latsuj.com" class="latsuj social-media twitter">T</a>
					</div>
				
					<div class="blocs-inside-title-line"></div>
					<div itemprop="number" class="blocs-inside-title background-white"><span class="tekolight projectx">Project 01</span></div>
					<h2 itemprop="description" class="blocs-inside-neartitle"><span class="montserratlight">Portefolio et Nouvelle technologie</span></h2>
					<div class="blocs-inside background-white"  data-count="0">
						<span itemprop="name" class="blocs-inside-informations-title tekobold">Latsuj.com</span>
						<div class="blocs-inside-wrap"  data-img="./imgs/FRAME2.jpg" data-title="" data-text="">
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>C</strong>um haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et <strong>Vrsicinum primum ad se venire</strong> summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
						</div>
						
						<div class="blocs-inside-wrap left-click"  data-img="./imgs/FRAME2.jpg" data-title="" data-text="">
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>C</strong>um haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et <strong>Vrsicinum primum ad se venire</strong> summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
						</div>
						
						<div class="blocs-inside-wrap left-click"  data-img="./imgs/FRAME2.jpg" data-title="" data-text="">
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>C</strong>um haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et <strong>Vrsicinum primum ad se venire</strong> summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
						</div>
						
						<div class="blocs-inside-page blocs-inside-informations-right-page montserratbold">
							<div class="blocs-inside-informations-left-page-hover-1"></div>
							<div class="blocs-inside-informations-left-page-hover-2"></div>
							<span>></span>
						</div>
						<div class="blocs-inside-informations-page montserratlight"><span class="page">1 / 3</span></div>
						<div class="blocs-inside-page blocs-inside-informations-left-page montserratbold"><span>&lt;</span></div>
					</div>
				</div>
			</div>
			
			<div class="areas area-60">
				<div class="photo-wrap">
					<div class="photo-line photo-line-vertical photo-line-black-left"></div>
					<div class="photo-line photo-line-vertical photo-line-black-right"></div>
					<div class="photo-line photo-line-horizontal photo-line-black-up"></div>
					<div class="photo-line photo-line-horizontal photo-line-black-down"></div>
					<div class="photo">
						<div class="background-photo" data-imglow="./imgs/FRAME2_LOW.jpg" data-img="./imgs/FRAME2.jpg"></div>
						<div class="under-background-photo"></div>
						
						<div class="photo-square photo-square-black-left"></div>
						<div class="photo-square photo-square-black-right"></div>
						<div class="photo-square photo-square-black-up"></div>
						<div class="photo-square photo-square-black-down"></div>
						
						<div class="photo-block photo-block-vertical photo-block-black-top-left"></div>
						<div class="photo-block photo-block-vertical photo-block-black-top-right"></div>
						<div class="photo-block photo-block-horizontal photo-block-black-bottom-left"></div>
						<div class="photo-block photo-block-horizontal photo-block-black-bottom-right"></div>
					</div>
				</div>
				<div class="area-texte">
					<div class="area-texte-wrap">
						<div class="area-texte-line"></div>
						<span class="area-texte-title tekobold">Cum haec taliaque</span>
						<br>
						<span class="area-texte-subtitle tekolight">Cum haec taliaque sollicitas eius aures everberent expositas</span>
					</div>
				</div>
			</div>
		<!-- END FRAME4 -->
		</div>
		
		<!-- Title outside for dodging a repaint -->
		<div class="big-title big-title-blue orbitron">
			<span class="title-letters">L</span>
			<span class="title-letters">A</span>
			<span class="title-letters">T</span>
			<span class="title-letters">S</span>
			<span class="title-letters">U</span>
			<span class="title-letters"></span>
			<span class="title-letters">J</span>
		</div>
		
		<!-- START FRAME1 -->
		<div id="FRAME5" data-src="./imgs/FRAME3.jpg" class="frame frame-presentation frame-right">
			<div class="blackout-effect"></div>
			<div class="line-vertical line-white-up background-white"></div>
			<div class="line-vertical line-white-down background-white"></div>
			
			<div class="menu">
				<span class="menu-title tekolight">Menu</span>
				<div class="menu-line-top"></div>
				<div class="menu-line-middle"></div>
				<div class="menu-line-down"></div>
			</div>
			<div class="menu-show">
				<div class="menu-close">&#9670;</div>
				<div class="menu-show-prev">&#9650;</div>
				<span class="menu-show-prev-text tekolight">Project 02</span>
				<div class="menu-show-current tekolight">Preambule</div>
				<div class="menu-show-next">&#9660;</div>
				<span class="menu-show-next-text tekolight">Project 01</span>
			</div>
			
			<div class="icones scroll-down-1"></div>
			<div class="icones scroll-down-2"></div>
			<span class="scroll-text montserratlight">Scroll or die</span>
		<!-- END FRAME1 -->
		</div>

		<!-- START FRAME2 -->
		<div itemscope itemtype="http://schema.org/Project" id="FRAME6" data-src="./imgs/FRAME3.jpg" class="frame frame-informations">
			<div class="line-black-long line-black-long-up background-black"></div>
			<div class="line-black-long line-black-long-down background-black"></div>
			<div class="line-vertical line-black-up background-black"></div>
			<div class="line-vertical line-black-down background-black"></div>
			<div class="layer"></div>
			<div class="letter-l letters tekomedium">L</div>
			<div class="letter-j letters tekomedium">J</div>
			
			<div class="areas area-60">
				<div class="photo-wrap">
					<div class="photo-line photo-line-vertical photo-line-black-left"></div>
					<div class="photo-line photo-line-vertical photo-line-black-right"></div>
					<div class="photo-line photo-line-horizontal photo-line-black-up"></div>
					<div class="photo-line photo-line-horizontal photo-line-black-down"></div>
					<div class="photo">
						<div class="background-photo" data-imglow="./imgs/FRAME3_LOW.jpg" data-img="./imgs/FRAME3.jpg"></div>
						<div class="under-background-photo"></div>
					
						<div class="photo-square photo-square-black-left"></div>
						<div class="photo-square photo-square-black-right"></div>
						<div class="photo-square photo-square-black-up"></div>
						<div class="photo-square photo-square-black-down"></div>
						
						<div class="photo-block photo-block-vertical photo-block-black-top-left"></div>
						<div class="photo-block photo-block-vertical photo-block-black-top-right"></div>
						<div class="photo-block photo-block-horizontal photo-block-black-bottom-left"></div>
						<div class="photo-block photo-block-horizontal photo-block-black-bottom-right"></div>
					</div>
				</div>
				<div class="area-texte">
					<div class="area-texte-wrap">
						<div class="area-texte-line"></div>
						<span class="area-texte-title tekobold">Cum haec taliaque</span>
						<br>
						<span class="area-texte-subtitle tekolight">Cum haec taliaque sollicitas eius aures everberent expositas</span>
					</div>
				</div>
			</div>
			<div class="areas area-40">
				<div class="blocs bloc-informations right">
					<div class="informations">
						<div class="date-line date-line-up"></div>
						<span itemprop="date" class="date orbitron">2015</span>
						<div class="date-line date-line-down"></div>
						<a href="https://www.facebook.com/sharer/sharer.php?u=www.latsuj.com" class="latsuj social-media facebook">J</a>
						<a href="https://twitter.com/home?status=www.latsuj.com" class="latsuj social-media twitter">T</a>
					</div>
				
					<div class="blocs-inside-title-line"></div>
					<div itemprop="number" class="blocs-inside-title background-white"><span class="tekolight projectx">Project 02</span></div>
					<h1 itemprop="description" class="blocs-inside-neartitle"><span class="montserratlight">Latsuj, french web developer</span></h1>
					<div class="blocs-inside background-white"  data-count="0">
						<span itemprop="name" class="blocs-inside-informations-title tekobold">Latsuj.com</span>
						<div class="blocs-inside-wrap" data-img="./imgs/FRAME3.jpg" data-title="" data-text="">
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>C</strong>um haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et <strong>Vrsicinum primum ad se venire</strong> summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
						</div>

						<div class="blocs-inside-wrap left-click" data-img="./imgs/FRAME2.jpg" data-title="" data-text="">
							<span class="blocs-inside-informations-texte montserratlight">
								<strong>C</strong>um haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et <strong>Vrsicinum primum ad se venire</strong> summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
							<span class="blocs-inside-informations-texte montserratlight">
								Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
							</span>
						</div>
						
						<div class="blocs-inside-page blocs-inside-informations-right-page montserratbold">
							<div class="blocs-inside-informations-left-page-hover-1"></div>
							<div class="blocs-inside-informations-left-page-hover-2"></div>
							<span>></span>
						</div>
						<div class="blocs-inside-informations-page montserratlight"><span class="page">1 / 2</span></div>
						<div class="blocs-inside-page blocs-inside-informations-left-page montserratbold"><span>&lt;</span></div>
					</div>
				</div>
			</div>
		<!-- END FRAME2 -->
		</div>
		
		<!-- BEGIN LAST FRAME -->
		<div id="LASTFRAME" class="last-frame">
			<div class="board-wrap">
				<div class="board"></div>
				<div class="board-under">
					<span class="orbitronr">	
						Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.
					</span>
				</div>
				<small class="tekolight">Mission A.1</small>
				<div class="life"></div>
				<div class="heart heart1"></div>
				<div class="heart heart2"></div>
				<div class="heart heart3"></div>
				<img src="./imgs/cats.png">
			</div>
			
			<div class="footer-wrap">
				<span class="orbitronr footer-text">Flux RSS | Mentions légale | Contact | Plan du site | @Latsuj <?= date("Y") ?></span>
				<div class="footer-design-1"></div>
				<div class="footer-design-2"></div>
			</div>
			
			<div class="footer-contact">
				<input id="pseudo" class="pseudo orbitronr" name="name" placeholder="Your name">
				<div class="pseudo-design tekolight">Pseudo/Nom</div>
				<div id="pseudo-valid" class="pseudo-valid"></div>
				<div class="pseudo-under"></div>
				<div class="pseudo-down"></div>
				<input id="email" class="email orbitronr" name="email" placeholder="Your email">
				<div class="email-design tekolight">Email</div>
				<div class="email-down"></div>
				<div class="email-under"></div>
				<div class="email-valid"></div>
				<textarea class="orbitronr" name="message" placeholder="Your message..."></textarea>
				<div class="message-down"></div>
				<div class="message-under"></div>
				<div class="message-design tekolight">Message</div>
				<div id="submit"></div>
				<div class="submit tekolight">Envoyer</div>
			</div>
			
			<div class="footer-game">
				<span class="footer-level-text tekolight">Level : 1337</span>
				<span class="footer-difficulty-text tekolight">Difficulty : Serious</span>
				<span class="footer-score-text tekolight">Score : 3141592653</span>
				<div class="footer-level"></div>
				<div class="footer-difficulty"></div>
				<div class="footer-rocket"></div>
			</div>
		</div>
		<!-- END LAST FRAME -->
	
	<!--  END CONTENT -->
	</div>

	<!-- FRAMEWORK -->
	<script type="text/javascript">
		!function(e,n,t){function o(e,n){return typeof e===n}function s(){var e,n,t,s,a,r,i;for(var l in c)if(c.hasOwnProperty(l)){if(e=[],n=c[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(s=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)r=e[a],i=r.split("."),1===i.length?Modernizr[i[0]]=s:(!Modernizr[i[0]]||Modernizr[i[0]]instanceof Boolean||(Modernizr[i[0]]=new Boolean(Modernizr[i[0]])),Modernizr[i[0]][i[1]]=s),f.push((s?"":"no-")+i.join("-"))}}function a(e){var n=p.className,t=Modernizr._config.classPrefix||"";if(g&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(o,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),g?p.className.baseVal=n:p.className=n)}function r(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):g?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function i(n,t,o){var s;if("getComputedStyle"in e){s=getComputedStyle.call(e,n,t);var a=e.console;if(null!==s)o&&(s=s.getPropertyValue(o));else if(a){var r=a.error?"error":"log";a[r].call(a,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else s=!t&&n.currentStyle&&n.currentStyle[o];return s}function l(){var e=n.body;return e||(e=r(g?"svg":"body"),e.fake=!0),e}function d(e,t,o,s){var a,i,d,f,c="modernizr",u=r("div"),g=l();if(parseInt(o,10))for(;o--;)d=r("div"),d.id=s?s[o]:c+(o+1),u.appendChild(d);return a=r("style"),a.type="text/css",a.id="s"+c,(g.fake?g:u).appendChild(a),g.appendChild(u),a.styleSheet?a.styleSheet.cssText=e:a.appendChild(n.createTextNode(e)),u.id=c,g.fake&&(g.style.background="",g.style.overflow="hidden",f=p.style.overflow,p.style.overflow="hidden",p.appendChild(g)),i=t(u,e),g.fake?(g.parentNode.removeChild(g),p.style.overflow=f,p.offsetHeight):u.parentNode.removeChild(u),!!i}var f=[],c=[],u={_version:"3.5.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){c.push({name:e,fn:n,options:t})},addAsyncTest:function(e){c.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=u,Modernizr=new Modernizr;var p=n.documentElement,g="svg"===p.nodeName.toLowerCase();Modernizr.addTest("rgba",function(){var e=r("a").style;return e.cssText="background-color:rgba(150,255,150,.5)",(""+e.backgroundColor).indexOf("rgba")>-1});var h=u.testStyles=d;h("#modernizr { height: 50vh; }",function(n){var t=parseInt(e.innerHeight/2,10),o=parseInt(i(n,null,"height"),10);Modernizr.addTest("cssvhunit",o==t)}),s(),a(f),delete u.addTest,delete u.addAsyncTest;for(var v=0;v<Modernizr._q.length;v++)Modernizr._q[v]();e.Modernizr=Modernizr}(window,document);
	</script>
	
	<!-- SCRIPT'S LATSUJ -->
	<script type="text/javascript" src="./js/index.js"></script>
	<script src="./framework/three.js"></script>
	<script src="./js/animations3D.js"></script>

</body>

</html>

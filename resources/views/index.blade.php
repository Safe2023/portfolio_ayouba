@extends('layouts.header')

@section('content')
<style>
	.wrapper20 {
		max-width: 1100px;
		width: 100%;
		position: relative;
	}

	.wrapper20 .ii {
		top: 50%;
		height: 50px;
		width: 50px;
		cursor: pointer;
		font-size: 1.25rem;
		position: absolute;
		text-align: center;
		line-height: 50px;
		background: #fff;
		border-radius: 50%;
		box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
		transform: translateY(-50%);
		transition: transform 0.1s linear;
		z-index: 1;
	}

	.wrapper20 .ii:active {
		transform: translateY(-50%) scale(0.85);
	}

	.wrapper20 .ii:first-child {
		left: -22px;
	}

	.wrapper20 .ii:last-child {
		right: -22px;
	}

	.wrapper20 .carousel20 {
		display: grid;
		grid-auto-flow: column;
		grid-auto-columns: calc((100% / 3) - 12px);
		overflow-x: auto;
		scroll-snap-type: x mandatory;
		gap: 16px;
		border-radius: 8px;
		scroll-behavior: smooth;
		scrollbar-width: none;
	}

	.carousel20::-webkit-scrollbar {
		display: none;
	}

	.carousel20.no-transition {
		scroll-behavior: auto;
	}

	.carousel20.dragging {
		scroll-snap-type: none;
		scroll-behavior: auto;
	}

	.carousel20.dragging .card {
		cursor: grab;
		user-select: none;
	}

	.carousel20 :where(.card, .img) {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.carousel20 .card20 {
		scroll-snap-align: start;
		/*  height: 342px; */
		list-style: none;
		background: #fff;
		cursor: pointer;
		padding-bottom: 15px;
		flex-direction: column;
		border-radius: 8px;
	}

	.carousel20 .card20 .img {
		background: #8b53ff;
		height: 148px;
		width: 148px;
		border-radius: 50%;
	}

	.card20 .img img {
		width: 140px;
		height: 140px;
		border-radius: 50%;
		object-fit: cover;
		border: 4px solid #fff;
	}

	.carousel20 .card20 h2 {
		font-weight: 500;
		font-size: 1.56rem;
		margin: 30px 0 5px;
	}

	.carousel20 .card20 span {
		color: #6a6d78;
		font-size: 1.31rem;
	}

	@media screen and (max-width: 900px) {
		.wrapper20 .carousel20 {
			grid-auto-columns: calc((100% / 2) - 9px);
		}
	}

	@media screen and (max-width: 600px) {
		.wrapper20 .carousel20 {
			grid-auto-columns: 100%;
		}

		.bouton {
			margin-top: 10px;
		}
	}

	.navbar-toggler:focus {
    text-decoration: none;
    outline: 0;
   box-shadow: 0px 0px 0px 0px white;
}

@media screen and (max-width: 600px) {
	.mag{
		width: 100%;
		
		}

		
	}
	@media screen and (max-width: 768px) {
	.kklklklk{
	margin-left: 0 !important;
		
		}

		
	}


</style>
<section class="home_banner_area ">
	<div class="banner_inner">
		<div class="container">

			<div class="row ">
				<div class="col-lg-6">
					<div class="home_left_img">
						<img src="image/satom12.avif" alt="" class="mag">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="banner_content kklklklk" style="margin-left: 100px;">
						<h2>Ayouba BEREBERE</h2>
						<p>Dessinateur confirmé et personne créative, je suis capable de m'adapter aux demandes des clients et travailler sur des projets diversifiés. Par ailleurs, je maîtrise l'utilisation et la gestion de projets sur Autocad, Archicad, SketchUP. Grâce à mon expertise, je suis capable d'apporter une assistance technique et des solutions pertinentes..</p>
						
						<a class="banner_btn bouton" href="{{asset('/cv/ayou_cv.pdf')}}" download> <i class="uil uil-file-alt">Telecharger le CV</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<div class="container mt-5">
	<div class="row">
		<div class="main_title">

			<h2>Quelques travaux effectués</h2>
			<p>Ces projet se justifie par les considérations suivantes : l’insuffisance de voies aménagées et d’ouvrages d’assainissement, la nécessité d’amélioration du cadre de vie et de la circulation dans plusieurs communes du Bénin</p>
		</div>
		<div class="col-md-4 mb-5">
			<div class="card ">
				<img src="image/pose_paver.jpg" class="card-img-top " alt="...">
				<div class="card-body">
					<p class="card-text">Projet de pavage de rues et d’assainissement dans la commune de Bohicon au
						Bénin.</p>

					<a href="" class="banner_btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
						En savoir plus
					</a>
				</div>
				<!-- Button trigger modal -->


				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content ">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">Projet de pavage de rues et d’assainissement dans la commune de Bohicon au
									Bénin.</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<ul>
									<li><strong>DETAILS PROJET</strong></li>
									<P>Projet de pavage de rues et d’assainissement dans la commune de Bohicon au
										Bénin
										Pavage et assainissement de quatre (04) rues de longueur totale 4896,86ml
										avec des caniveaux en BA de part et d'autre. Les travaux sont subdivisés en
										douze (12) lots dont sept (07) lots de mise en oeuvre et cinq (05) lots de
										préfabrication des éléments</P>

									<li><strong>TRAVAUX EFFECTUES</strong></li>
									<p>-Assister le contrôleur dans les réceptions des matériaux, des partie d'ouvrage <br> <br>
										-Participer à l'établissement des attachements <br> <br>
										-Participer à l'établissement des rapports journaliers, hebdomadaires et mensuels <br> <br></p>
									<li><strong>ENTREPRISE</strong></li>
									<p>Groupement PERS BTP/CEREC BTP</p>
									<li><strong>COUT DU PROJET</strong></li>
									<p>2 534 355 754</p>
									<li><strong>POSTE OCCUPE</strong></li>
									<p>Stagiaire</p>


								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-5">
			<div class="card">
				<img src="image/pose1.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text">Projet de pavage de rues et d’assainissement dans les communes de Savalou au
						Bénin.</p>
					<a href="" class="banner_btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
						En savoir plus
					</a>
				</div>
				<!-- Button trigger modal -->


				<!-- Modal -->
				<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content ">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel1">Projet de pavage de rues et d’assainissement dans les communes de Savalou au
									Bénin.</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<ul>
									<li><strong>DETAILS PROJET</strong></li>
									<P>Projet de pavage de rues et d’assainissement dans les communes de Savalou au
										Bénin
										Pavage et assainissement de trois (03) rues de longueur totale 4175ml avec des
										caniveaux en BA de part et d'autre. Les travaux sont subdivisés en sept (07)
										lots dont cinq (05) lots de mise en oeuvre et deux (02) lots de préfabrication
										des éléments.</P>

									<li><strong>TRAVAUX EFFECTUES</strong></li>
									<p>-Faire respecter les termes de référence de la mission de contrôle <br> <br>
										-Procéder à la vérification et au suivi du planning d'exécution de l'Entrepreneur <br> <br>
										-Vérifier la conformité des travaux avec les plans d'exéution fournir par l'Entreprise <br> <br>
										-Préparer les réunions de chantier et rediger les provès verbaux <br> <br>
										-Réceptionner la qualité des matériaux et suivre rigoureusement le bon dosage dans
										l'exécution des ouvrages <br> <br>
										-Réceptionner les implantations, le ferraillage, le coffrage des différentes parties
										d'ouvrages <br> <br>
										-Procéder à l'élaboration des attachements journaliers et mensuels des travaux
										exécutés <br> <br>
										-Elaborer et adresser au bureau d'étude les rapports journaliers, hebdomadaire et
										mensuels <br> <br>
										-Actualiser chaque mois les quantités du marché <br> <br>
										-Elaborer à la fin des travaux un rapport général présentant le point technique
										global des travaux, les difficultés rencontrées et les suggestions y afférentes</p>
									<li><strong>ENTREPRISE</strong></li>
									<p>Groupement PERS BTP/CEREC BTP</p>
									<li><strong>COUT DU PROJET</strong></li>
									<p>2 397 517 555</p>
									<li><strong>POSTE OCCUPE</strong></li>
									<p>Contrôleur permanent</p>


								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-5">
			<div class="card">
				<img src="image/image4.avif" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text">Projet de pavage de rues et d’assainissement dans les communes de Bopa,
						Dogbo et Zè .</p>
					<a href="" class="banner_btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
						En savoir plus
					</a>
				</div>
				<!-- Button trigger modal -->


				<!-- Modal -->
				<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content ">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel2">Projet de pavage de rues et d’assainissement dans les communes de Bopa,
									Dogbo et Zè .</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<ul>
									<li><strong>DETAILS PROJET</strong></li>
									<P>Projet de pavage de rues et d’assainissement dans les communes de Bopa,
										Dogbo et Zè au Bénin
										Pavage et assainissement de deux (02) rues de longueur totale 2725ml avec des
										caniveaux en BA de part et d'autre et l'éclairage d'une rue. Les travaux sont
										subdivisés en six (06) lots dont trois (03) lots de mise en oeuvre, deux (02) lots
										de préfabrication des éléments et un (01) lot d'éclairage public</P>

									<li><strong>TRAVAUX EFFECTUES</strong></li>
									<p>-Accompagner les équipes topo pour les relevés terrain <br> <br>
										-Représenter les relevés topo pour constituer l'état des lieux <br> <br>
										-Représenter shématiquement le rapport hydraulique <br> <br>
										-Etudier le projet de chaque rue selon les seuils des riverains et l'ecoulement des
										eaux pluviales jusqu'aux exutoires <br> <br></p>
									<li><strong>ENTREPRISE</strong></li>
									<p>Groupement PERS BTP/CEREC BTP</p>
									<li><strong>COUT DU PROJET</strong></li>
									<p>5 087 898 074</p>
									<li><strong>POSTE OCCUPE</strong></li>
									<p>Dessinateur-Projeteur</p>


								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 mb-5 mt-5">
		<a href="/service" class="banner_btn">Voir plus</a>
	</div>


</div>

<!--================End Home Banner Area =================    img/banner/home-left-1.png-->

<!--================Welcome Area =================-->

<!--================End Welcome Area =================-->

<!--================Feature Area =================-->

<!--================End Feature Area =================-->

<!--================Projects Area =================-->
<section class="latest_blog_area mb-5">
	<div class="container">
		<div class="main_title">
			<h2>
				NOS RÉCENTS PROJETS RÉALISÉS</h2>
			<p>Travaux de construction de 08 entrepôts et d’un poste de péage au niveau du
				pôle agroalimentaire de l’agglomération du grand Nokoue a Abomey Calavi
				(lot2)</p>
		</div>
		<div class="row latest_blog_inner">
			<div class="row">
				<div class="col-md-12">
					<div class="wrapper20">
						<i id="left" class="fa-solid fa-angle-left ii"></i>
						<ul class="carousel20">

							<li class="card-service wow fadeInUp card20">
								<img src="image/entrepot_8.jpg" class="card-img-top" height="200px" alt="">
								<div class="card-body w-100">
									<div class="texte d-flex align-items-top justify-content-center">
										<h5 class="card-title text-dark">Dessinateur-Projeteur | SOGEA SATOM BENIN</h5>
									</div>

									<p><strong>Abomey-Calavi Juin 2021 - Ce jour </strong></p>
								</div>
								<p>Travaux de construction des voiries et réseaux divers (VRD) y compris les voies de circulation intérieures (lot 01) en suite Travaux de <a href="#" id="voirplus">voir plus</a>
								<p id="pole"> construction de 08 entrepôts et d’un poste de péage au niveau du pôle agroalimentaire de l’agglomération du grand Nokoue a Abomey Calavi (lot2) <a href="#" id="voirmoin">voir moins</a> </p>
								</p>


							</li>
							<li class="card-service wow fadeInUp card20">
								<img src="https://acep-ing.com/wp-content/uploads/2021/03/6-1-400x250.jpg" class="card-img-top" height="200px" alt="">
								<div class="card-body w-100">
									<div class="texte d-flex align-items-top justify-content-center">
										<h5 class="card-title text-dark">Dessinateur-Projeteur | Groupement PERS BTP/CEREC BTP</h5>
									</div>
									<p><strong>Porto-Novo Novembre 2020 – Mai 2021</strong></p>
								</div>


								<p>Mission d’étude, de contrôle et surveillance sur le projet d’aménagement urbain et d’appui à la décentralisation <a href="#" id="voirplus1">voir plus</a>
								<p id="pole1">assainissement des voies d’accès aux maisons afro-brésiliennes KOUKOUI et REYNETTE dans la ville de pavage et assainissement de deux (02) rues de longueur totale 1 300ml avec des caniveaux en BA de part et d'autre. Les travaux sont subdivisés en deux (02) lots <a href="#" id="voirmoin1">voir moins</a></p>
								</p>
							</li>

							<li class="card-service wow fadeInUp card20">
								<img src="image/image5.jpg" class="card-img-top" height="200px" alt="">
								<div class="card-body w-100">
									<div class="texte d-flex align-items-top justify-content-center">
										<h5 class="card-title text-dark">Dessinateur-Projeteur | Groupement PERS BTP/CEREC BTP</h5>
									</div>
									<p>Avrankou Février 2019 – Octobre 2020</p>
								</div>
								<p>Mission d’étude, de contrôle et surveillance des travaux de pavage de rues et d’assainissement dans les communes d’Avrankou et <a href="#" id="voirplus2">voir plus</a>
								<p id="pole2">Zogbodomey au Bénin : Pavage et assainissement de quatre (04) rues de longueur totale 3 300ml avec des caniveaux en BA de part et d'autre et l'éclairage de trois (03) rues. Les travaux sont subdivisés en (10) lots dont six (06) lots de mise en oeuvre, deux (02) lots de préfabrication des éléments et deux (02) lots d'éclairage public <a href="#" id="voirmoin2">voir moins</a></p>
								</p>
							</li>

							<li class="card-service wow fadeInUp card20">
								<img src="image/image1.jpg" class="card-img-top" height="200px" alt="">
								<div class="card-body w-100">
									<div class="texte d-flex align-items-top justify-content-center">
										<h5 class="card-title text-dark">Dessinateur-Projeteur | SOGEA SATOM BENIN</h5>
									</div>
									<p><strong>Dogbo-Azovè-Abomey et Covè Novembre 2018 – Février 2019</strong></p>
								</div>
								<p>Travaux d’urgence d’entretien des routes revêtues, campagne 2018 : lot 3
									Travaux d’urgence <a href="#" id="voirplus3">voir plus</a>
								<p id="pole3">d’entretien de l'axe Dogbo-Azovè Abomey (62km) et l'axe Covè Bohicon (31km) regroupant au total 1346,81 m2 de PTB en béton bitumineux ; 1576,85 m2 de PTB grande masse en béton bitumineux ; 9452,32 m2 de PTB localisé en bicouche ; 9836,80 m2 de PTB grande masse en bicouche et de 2156,15m3 de recharge des accotements.<a href="#" id="voirmoin3">voir moins</a></p>
								</p>
							</li>

							<li class="card-service wow fadeInUp card20">
								<img src="image/image9.jpg" class="card-img-top" height="200px" alt="">
								<div class="card-body w-100">
									<div class="texte d-flex align-items-top justify-content-center">
										<h5 class="card-title text-dark">Dessinateur-Projeteur | Groupement PERS BTP/CEREC BTP</h5>
									</div>
									<p><strong>Dogbo Juillet 2017 – Novembre 2018</strong></p>
								</div>
								<p>Projet de pavage de rues et d’assainissement dans les communes de Bopa, Dogbo et Zè au Bénin : Pavage et assainissement <a href="#" id="voirplus4">voir plus</a>
								<p id="pole4">de deux (02) rues de longueur totale 2725ml avec des caniveaux en BA de part et d'autre et l'éclairage d'une rue. Les travaux sont subdivisés en six (06) lots dont trois (03) lots de mise en oeuvre, deux (02) lots de préfabrication des éléments et un (01) lot d'éclairage public.<a href="#" id="voirmoin4">voir moins</a></p>
								</p>

							</li>
							<li class="card-service wow fadeInUp card20">
								<img src="image/image8.jpg" class="card-img-top" height="200px" alt="">
								<div class="card-body w-100">
									<div class="texte d-flex align-items-top justify-content-center">
										<h5 class="card-title text-dark">Contrôleur permanent | Groupement PERS BTP/CEREC BTP</h5>
									</div>
									<p><strong>Savalou Février – Décembre 2016</strong></p>
								</div>
								<p>Projet de pavage de rues et d’assainissement dans les communes de Savalou au Bénin : Pavage et assainissement de trois <a href="#" id="voirplus5">voir plus</a>
								<p id="pole5"> (03) rues de longueur totale 4175ml avec des caniveaux en BA de part et d'autre. Les travaux sont subdivisés en sept (07) lots dont cinq (05) lots de mise en oeuvre et deux (02) lots de préfabrication des éléments.<a href="#" id="voirmoin5">voir moins</a></p>
								</p>

							</li>

						</ul>
						<i id="right" class="fa-solid fa-angle-right ii"></i>
					</div>
				</div>
			</div>
		</div>
</section>

<!--================End Projects Area =================-->




<script>
	var voirplus = document.getElementById("voirplus");
	var voirmoin = document.getElementById("voirmoin");
	var pole = document.getElementById("pole");

	pole.style.display = "none";

	voirplus.addEventListener("click", function() {
		pole.style.display = "block";
		voirplus.style.display = "none";
	});
	voirmoin.addEventListener("click", function() {
		pole.style.display = "none";
		voirplus.style.display = "block";
	});

	var voirplus1 = document.getElementById("voirplus1");
	var voirmoin1 = document.getElementById("voirmoin1");
	var pole1 = document.getElementById("pole1");

	pole1.style.display = "none";

	voirplus1.addEventListener("click", function() {
		pole1.style.display = "block";
		voirplus1.style.display = "none";
	});
	voirmoin1.addEventListener("click", function() {
		pole1.style.display = "none";
		voirplus1.style.display = "block";
	});

	var voirplus2 = document.getElementById("voirplus2");
	var voirmoin2 = document.getElementById("voirmoin2");
	var pole2 = document.getElementById("pole2");

	pole2.style.display = "none";

	voirplus2.addEventListener("click", function() {
		pole2.style.display = "block";
		voirplus2.style.display = "none";
	});
	voirmoin2.addEventListener("click", function() {
		pole2.style.display = "none";
		voirplus2.style.display = "block";
	});

	var voirplus3 = document.getElementById("voirplus3");
	var voirmoin3 = document.getElementById("voirmoin3");
	var pole3 = document.getElementById("pole3");

	pole3.style.display = "none";

	voirplus3.addEventListener("click", function() {
		pole3.style.display = "block";
		voirplus3.style.display = "none";
	});
	voirmoin3.addEventListener("click", function() {
		pole3.style.display = "none";
		voirplus3.style.display = "block";
	});

	var voirplus4 = document.getElementById("voirplus4");
	var voirmoin4 = document.getElementById("voirmoin4");
	var pole4 = document.getElementById("pole4");

	pole4.style.display = "none";

	voirplus4.addEventListener("click", function() {
		pole4.style.display="block"
		voirplus4.style.display="none"
	})
	voirmoin4.addEventListener("click", function() {
		pole4.style.display = "none";
		voirplus4.style.display = "block";
	});
	
	var voirplus5 = document.getElementById("voirplus5");
	var voirmoin5 = document.getElementById("voirmoin5");
	var pole5 = document.getElementById("pole5");

	pole5.style.display = "none";

	voirplus5.addEventListener("click", function() {
		pole5.style.display="block"
		voirplus5.style.display="none"
	})
	voirmoin5.addEventListener("click", function() {
		pole5.style.display = "none";
		voirplus4.style.display = "block";
	});



	const wrapper = document.querySelector(".wrapper20");
	const carousel = document.querySelector(".carousel20");
	const firstCardWidth = carousel.querySelector(".card20").offsetWidth;
	const arrowBtns = document.querySelectorAll(".wrapper20 i");
	const carouselChildrens = [...carousel.children];


	let isDragging = false,
		isAutoPlay = true,
		startX,
		startScrollLeft,
		timeoutId;


	let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);


	carouselChildrens
		.slice(-cardPerView)
		.reverse()
		.forEach((card) => {
			carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
		});


	carouselChildrens.slice(0, cardPerView).forEach((card) => {
		carousel.insertAdjacentHTML("beforeend", card.outerHTML);
	});


	carousel.classList.add("no-transition");
	carousel.scrollLeft = carousel.offsetWidth;
	carousel.classList.remove("no-transition");


	arrowBtns.forEach((btn) => {
		btn.addEventListener("click", () => {
			carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
		});
	});

	const dragStart = (e) => {
		isDragging = true;
		carousel.classList.add("dragging");
		startX = e.pageX;
		startScrollLeft = carousel.scrollLeft;
	};

	const dragging = (e) => {
		if (!isDragging) return;
		carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
	};

	const dragStop = () => {
		isDragging = false;
		carousel.classList.remove("dragging");
	};

	const infiniteScroll = () => {

		if (carousel.scrollLeft === 0) {
			carousel.classList.add("no-transition");
			carousel.scrollLeft = carousel.scrollWidth - 2 * carousel.offsetWidth;
			carousel.classList.remove("no-transition");
		} else if (
			Math.ceil(carousel.scrollLeft) ===
			carousel.scrollWidth - carousel.offsetWidth
		) {
			carousel.classList.add("no-transition");
			carousel.scrollLeft = carousel.offsetWidth;
			carousel.classList.remove("no-transition");
		}


		clearTimeout(timeoutId);
		if (!wrapper.matches(":hover")) autoPlay();
	};

	const autoPlay = () => {
		if (window.innerWidth < 800 || !isAutoPlay) return;
		timeoutId = setTimeout(() => (carousel.scrollLeft += firstCardWidth), 2500);
	};
	autoPlay();

	carousel.addEventListener("mousedown", dragStart);
	carousel.addEventListener("mousemove", dragging);
	document.addEventListener("mouseup", dragStop);
	carousel.addEventListener("scroll", infiniteScroll);
	wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
	wrapper.addEventListener("mouseleave", autoPlay);
</script>

@endsection
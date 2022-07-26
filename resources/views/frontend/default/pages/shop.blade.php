@extends('frontend.default.layouts.app')

@section('title')
    {{ __('common.shop') }}
@endsection



@section('content')


<section class="bg-secondary">
				<div class="main-slider-shop">
					<img src="{{asset(asset_path('frontend/default/img/front-page/hoeschen-kruner.png'))}}" class="content-before-slide">
					<div class="carousel-shop-left">
						<div class="carousel-shop-left__cell" data-background-image-url="{{asset(asset_path('frontend/default/img/front-page/frau-kruner-main-photo.jpg'))}}"></div>
						<div class="carousel-shop-left__cell" data-background-image-url="{{asset(asset_path('frontend/default/img/front-page/frau-kruner-main-photo.jpg'))}}"></div>
					</div>
					<div class="mein-slider-shop-pfeil-container">
						<img src="{{asset(asset_path('frontend/default/img/icons/icon-pfeil-links.svg'))}}" class="main-slider-shop-pfeil-links" alt="Pfeil nach links" height="26px" width="43px">
						<img src="{{asset(asset_path('frontend/default/img/icons/icon-pfeil-rechts.svg'))}}" class="main-slider-shop-pfeil-rechts" alt="Pfeil nach links" height="26px" width="43px">
					</div>
	
					<div class="carousel-shop-right">
						<div class="carousel-shop-right__cell">
							<div class="carousel-shop-right__content">
								<h2>Frische <span class="unterline-primary">Slips</span> nur<br> für dich getragen.</h2>
							</div>
						</div>
	
						<div class="carousel-shop-right__cell">
							<div class="carousel-shop-right__content">
								<h2>Frische <span class="unterline-primary">Slips</span> nur<br> für dich getragen.2</h2>
							</div>
						</div>
	
					</div>
	
				</div>
			</section>

			<!--Discount Information-->
			<div class="container-after-slider-shop">
				<div class="container-xxl d-flex justify-content-center align-items-center">
					X-MAS DEAL | Spare 15% auf nicht-reduzierte Produkte mit dem Code*: WINTER15
				</div>
			</div>
			<!--Discount Information-->

			<!--Heading Shop-->
			<section class="container-xxl">
				<div class="shop-heading-section">

					<div class="shop-section-right">
						<form role="search" method="get" class="search-form-shop" id="searchFormShop" action="">
							<label>
							  <input type="search" class="search-field-shop" placeholder="Suche…" value="" name="s" title="Suchen" />
							</label>
							<input type="submit" class="search-submit-shop" value="Suchen" />
						  </form>
					</div>


					<div class="shop-heading-section-center-left">

						<!--<ul class="breadcrumb-shop">
							<li><a href="#">Getragen Slips</a></li>
							<li><a href="#">String</a></li>
							<li><a href="#">2 Tage</a></li>
						</ul>-->


						<!-- Modal Category -->
						<button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#kategorienModal">
							<img data-src="img/icons/kategorie-icon.svg" class="lazy"> Kategorie
						</button>
						
						<!-- Modal -->
						<div class="modal fade" id="kategorienModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="kategorienModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollabled">
							<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="kategorienModalLabel">Kategorie</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="sorting-list-non-collapsing">
										<ul>
											<li class="current-menu-item"> <a href="/">Slips</a></li>
											<li><a href="/">String</a></li>
											<li><a href="/">Panties</a></li>
											<li><a href="/">Bh (Dessous)</a></li>
										</ul>

									</div>
				
								</div>
							</div>
							</div>
						</div>
						<!-- Modal Category -->

						<!-- Modal Filter -->
						<button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#filterModal">
							<img data-src="img/icons/filter-icon.svg" class="lazy"> Filter
						</button>
						
						<!-- Modal -->
						<div class="modal fade" id="filterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollabled">
							<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="filterModalLabel">Filter</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">

									
									
									<div class="sorting-list-collapsing">
										<button class="sidebar-collapse-button-closed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTragedauer" aria-expanded="false" aria-controls="collapseTragedauer">
											<span class="arrow"><span></span><span></span></span> Tragedauer
										</button>
									
										<div class="collapse collapse__sidebar" id="collapseTragedauer">
											<ul>
												<li><a href="/">1 Tag</a></li>
												<li class="current-menu-item"><a href="/">2 Tage</a></li>
												<li><a href="/">3 Tage</a></li>
											</ul>
										</div>
									</div>
									
									<div class="sorting-list-collapsing">
										<button class="sidebar-collapse-button-closed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBewertung" aria-expanded="false" aria-controls="collapseBewertung">
											<span class="arrow"><span></span><span></span></span> Bewertung
										</button>
									
										<div class="collapse collapse__sidebar" id="collapseBewertung">
											<ul>
												<li><a href="/">1 Stern</a></li>
												<li class="current-menu-item"><a href="/">2 Sterne</a></li>
												<li><a href="/">3 Sterne</a></li>
												<li><a href="/">4 Sterne</a></li>
												<li><a href="/">5 Sterne</a></li>
											</ul>
										</div>
									</div>
									
									<div class="sorting-list-collapsing">
										<button class="sidebar-collapse-button-closed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGeschlecht" aria-expanded="false" aria-controls="collapseGeschlechtg">
											<span class="arrow"><span></span><span></span></span> Geschlecht
										</button>
									
										<div class="collapse collapse__sidebar" id="collapseGeschlecht">
											<ul>
												<li><a href="/">Männlich</a></li>
												<li class="current-menu-item"><a href="/">Weiblich</a></li>
												<li><a href="/">Divers</a></li>
											</ul>
										</div>
									</div>
									
									<div class="sorting-list-collapsing">
										<button class="sidebar-collapse-button-closed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGroesse" aria-expanded="false" aria-controls="collapseGroesse">
											<span class="arrow"><span></span><span></span></span> Größe
										</button>
									
										<div class="collapse collapse__sidebar" id="collapseGroesse">
											<ul>
												<li><a href="/">Dünn</a></li>
												<li class="current-menu-item"><a href="/">Schlank</a></li>
												<li><a href="/">Kurvig</a></li>
											</ul>
										</div>
									</div>
									
									<div class="sorting-list-collapsing">
										<button class="sidebar-collapse-button-closed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseArtikelort" aria-expanded="false" aria-controls="collapseArtikelort">
											<span class="arrow"><span></span><span></span></span> Artikelort
										</button>
									
										<div class="collapse collapse__sidebar" id="collapseArtikelort">
											<ul>
												<li><a href="/">Brandenburg</a></li>
												<li class="current-menu-item"><a href="/">Berlin</a></li>
											</ul>
										</div>
									</div>
									
									<div class="sorting-list-collapsing">
										<button class="sidebar-collapse-button-closed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVerkaeferin" aria-expanded="false" aria-controls="collapseVerkaeferin">
											<span class="arrow"><span></span><span></span></span> Verkäuferin
										</button>
									
										<div class="collapse collapse__sidebar" id="collapseVerkaeferin">
											<ul>
												<li><a href="/">Abusy83</a></li>
												<li><a href="/">Biggy89</a></li>
											</ul>
										</div>
									</div>
									
									<div class="sorting-list-collapsing">
										<button class="sidebar-collapse-button-closed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVeredelung" aria-expanded="false" aria-controls="collapseVeredelung">
											<span class="arrow"><span></span><span></span></span> Verkäuferin
										</button>
									
										<div class="collapse collapse__sidebar" id="collapseVeredelung">
											<input id="Menstruation" type="checkbox" /><label for="Menstruation">Menstruation</label>
											<input id="Kaviar" type="checkbox" /><label for="Kaviar">Kaviar</label>
											<input id="Natursekt" type="checkbox" /><label for="Natursekt">Natursekt</label>
											<input id="Orgasmus" type="checkbox" /><label for="Orgasmus">Orgasmus</label>
											<input id="Speichel" type="checkbox" /><label for="Speichel">Speichel</label>
											<input id="Lippenstift" type="checkbox" /><label for="Lippenstift">Lippenstift</label>
											<input id="Parfum" type="checkbox" /><label for="Parfum">Parfum</label>
											<input id="Haare" type="checkbox" /><label for="Haare">Haare</label>
											<input id="Inside" type="checkbox" /><label for="Inside">Inside</label>
											<input id="SportSchweiß" type="checkbox" /><label for="SportSchweiß">Sport / Schweiß</label>
											<input id="beimSexgetragen" type="checkbox" /><label for="beimSexgetragen">beim Sex getragen</label>
										</div>
									</div>
									
									<div class="sorting-list-collapsing">
										<button class="sidebar-collapse-button-closed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZusatzoptionen" aria-expanded="false" aria-controls="collapseZusatzoptionen">
											<span class="arrow"><span></span><span></span></span> Zusatzoptionen
										</button>
									
										<div class="collapse collapse__sidebar" id="collapseZusatzoptionen">
											<input id="Video" type="checkbox" /><label for="Video">Video</label>
											<input id="Chat" type="checkbox" /><label for="Chat">Chat</label>
										</div>
									</div>
									
									<div class="sorting-list-collapsing">
										<h3 class="small">Schlagwörter</h3>
										<div class="sorting-list-tags-cloud">
											<a href="/">Feuchte Höschen</a>, <a href="/">Getragene Dessous</a>, <a href="/">Getragene Höschen</a>, <a href="/">Getragene Slip</a>
										</div>
									</div>
									
									
									
								</div>
							</div>
							</div>
						</div>
						<!-- Modal Filter -->



						<form action="/" class="sortierung-main-shop ">
							<label for="sortierung" class="d-none d-md-flex">Sortiere nach</label>
							<label for="sortierung" class="d-flex d-md-none"><span class="arrow"><span></span><span></span></span> </label>
							<select name="sortierung" class="sortierung" id="sortierung">
							  <option value="bewertung">Bewertung</option>
							  <option value="preis">Preis</option>
							  <option value="neuste">Neuste</option>
							  <option value="verkaeufe">Verkäufe</option>
							</select>
						</form>

					</div>

				</div>
			</section>
			<!--Heading Shop-->


		<section class="container-xxl">
			<div class="shop-heading-section">
				<aside class="shop-section-right">
					<div class="sorting-list-non-collapsing">
						<h3 class="small">Unterkategorie</h3>
						<ul>
							<li class="current-menu-item"> <a href="/">Slips</a></li>
							<li><a href="/">String</a></li>
							<li><a href="/">Panties</a></li>
							<li><a href="/">Bh (Dessous)</a></li>
						</ul>
						<input id="tragefotos" type="checkbox" /><label for="tragefotos">Tragefotos</label>
					</div>

					
					<div class="sorting-list-collapsing">
						<button class="sidebar-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTragedauer" aria-expanded="true" aria-controls="collapseTragedauer">
							<span class="arrow"><span></span><span></span></span> Tragedauer
						</button>

						<div class="collapse collapse__sidebar show" id="collapseTragedauer">
							<ul>
								<li><a href="/">1 Tag</a></li>
								<li class="current-menu-item"><a href="/">2 Tage</a></li>
								<li><a href="/">3 Tage</a></li>
							</ul>
						</div>
					</div>

					<div class="sorting-list-collapsing">
						<button class="sidebar-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBewertung" aria-expanded="true" aria-controls="collapseBewertung">
							<span class="arrow"><span></span><span></span></span> Bewertung
						</button>

						<div class="collapse collapse__sidebar show" id="collapseBewertung">
							<ul>
								<li><a href="/">1 Stern</a></li>
								<li class="current-menu-item"><a href="/">2 Sterne</a></li>
								<li><a href="/">3 Sterne</a></li>
								<li><a href="/">4 Sterne</a></li>
								<li><a href="/">5 Sterne</a></li>
							</ul>
						</div>
					</div>

					<div class="sorting-list-collapsing">
						<button class="sidebar-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGeschlecht" aria-expanded="true" aria-controls="collapseGeschlechtg">
							<span class="arrow"><span></span><span></span></span> Geschlecht
						</button>

						<div class="collapse collapse__sidebar show" id="collapseGeschlecht">
							<ul>
								<li><a href="/">Männlich</a></li>
								<li class="current-menu-item"><a href="/">Weiblich</a></li>
								<li><a href="/">Divers</a></li>
							</ul>
						</div>
					</div>

					<div class="sorting-list-collapsing">
						<button class="sidebar-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGroesse" aria-expanded="true" aria-controls="collapseGroesse">
							<span class="arrow"><span></span><span></span></span> Größe
						</button>

						<div class="collapse collapse__sidebar show" id="collapseGroesse">
							<ul>
								<li><a href="/">Dünn</a></li>
								<li class="current-menu-item"><a href="/">Schlank</a></li>
								<li><a href="/">Kurvig</a></li>
							</ul>
						</div>
					</div>

					<div class="sorting-list-collapsing">
						<button class="sidebar-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseArtikelort" aria-expanded="true" aria-controls="collapseArtikelort">
							<span class="arrow"><span></span><span></span></span> Artikelort
						</button>

						<div class="collapse collapse__sidebar show" id="collapseArtikelort">
							<ul>
								<li><a href="/">Brandenburg</a></li>
								<li class="current-menu-item"><a href="/">Berlin</a></li>
							</ul>
						</div>
					</div>

					<div class="sorting-list-collapsing">
						<button class="sidebar-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVerkaeferin" aria-expanded="true" aria-controls="collapseVerkaeferin">
							<span class="arrow"><span></span><span></span></span> Verkäuferin
						</button>

						<div class="collapse collapse__sidebar show" id="collapseVerkaeferin">
							<ul>
								<li><a href="/">Abusy83</a></li>
								<li><a href="/">Biggy89</a></li>
							</ul>
						</div>
					</div>

					<div class="sorting-list-collapsing">
						<button class="sidebar-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVeredelung" aria-expanded="true" aria-controls="collapseVeredelung">
							<span class="arrow"><span></span><span></span></span> Verkäuferin
						</button>

						<div class="collapse collapse__sidebar show" id="collapseVeredelung">
							<input id="menstruation" type="checkbox" /><label for="menstruation">Menstruation</label>
							<input id="kaviar" type="checkbox" /><label for="kaviar">Kaviar</label>
							<input id="natursekt" type="checkbox" /><label for="natursekt">Natursekt</label>
							<input id="orgasmus" type="checkbox" /><label for="orgasmus">Orgasmus</label>
							<input id="speichel" type="checkbox" /><label for="speichel">Speichel</label>
							<input id="lippenstift" type="checkbox" /><label for="lippenstift">Lippenstift</label>
							<input id="parfum" type="checkbox" /><label for="parfum">Parfum</label>
							<input id="haare" type="checkbox" /><label for="haare">Haare</label>
							<input id="inside" type="checkbox" /><label for="inside">Inside</label>
							<input id="sportSchweiß" type="checkbox" /><label for="sportSchweiß">Sport / Schweiß</label>
							<input id="beimsexgetragen" type="checkbox" /><label for="beimsexgetragen">beim Sex getragen</label>
						</div>
					</div>
					
					<div class="sorting-list-collapsing">
						<button class="sidebar-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZusatzoptionen" aria-expanded="true" aria-controls="collapseZusatzoptionen">
							<span class="arrow"><span></span><span></span></span> Zusatzoptionen
						</button>

						<div class="collapse collapse__sidebar show" id="collapseZusatzoptionen">
							<input id="video" type="checkbox" /><label for="video">Video</label>
							<input id="chat" type="checkbox" /><label for="chat">Chat</label>
						</div>
					</div>

					<div class="sorting-list-collapsing">
						<h3 class="small">Schlagwörter</h3>
						<div class="sorting-list-tags-cloud">
							<a href="/">Feuchte Höschen</a>, <a href="/">Getragene Dessous</a>, <a href="/">Getragene Höschen</a>, <a href="/">Getragene Slip</a>
						</div>
					</div>


					

				</aside>
			<!-- Products-->
				<div class="shop-section-center-left">


					<h1>Slips</h1>
					<div class="product-list-shop">
						<!-- Single Products Item-->
						<div class="product-list-shop__product">
							<a href="/single-product-page.html">
								<div class="product-list-shop__product__image">
									<img data-src="img/sample-images/IMG_3881.jpg" class="lazy" alt="Product name">
								</div>
								<div class="product-list-shop__product__content">
									<p class="text-uppercase">Slips</p>
									<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
									<span class="price">19,99€</span>
								</div>
							</a>
						</div>
						<!-- Single Products Item-->

						<!-- Single Products Item-->
						<div class="product-list-shop__product">
							<a href="/single-product-page.html">
								<div class="product-list-shop__product__image">
									<img data-src="img/sample-images/IMG_5355.jpg" class="lazy" alt="Product name">
								</div>
								<div class="product-list-shop__product__content">
									<p class="text-uppercase">Slips</p>
									<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
									<span class="price">29,99€</span>
								</div>
							</a>
						</div>
						<!-- Single Products Item-->

						<!-- Single Products Item-->
						<div class="product-list-shop__product">
							<a href="/single-product-page.html">
								<div class="product-list-shop__product__image">
									<img data-src="img/sample-images/IMG_7928.jpg" class="lazy" alt="Product name">
								</div>
								<div class="product-list-shop__product__content">
									<p class="text-uppercase">Slips</p>
									<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
									<span class="price">29,99€</span>
								</div>
							</a>
						</div>
						<!-- Single Products Item-->

						<!-- Single Products Item-->
						<div class="product-list-shop__product">
							<a href="/single-product-page.html">
								<div class="product-list-shop__product__image">
									<img data-src="img/sample-images/IMG_8685.jpg" class="lazy" alt="Product name">
								</div>
								<div class="product-list-shop__product__content">
									<p class="text-uppercase">Slips</p>
									<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
									<span class="price">29,99€</span>
								</div>
							</a>
						</div>
						<!-- Single Products Item-->

						<!-- Single Products Item-->
						<div class="product-list-shop__product">
							<a href="/single-product-page.html">
								<div class="product-list-shop__product__image">
									<img data-src="img/sample-images/IMG_5103.png" class="lazy" alt="Product name">
								</div>
								<div class="product-list-shop__product__content">
									<p class="text-uppercase">Slips</p>
									<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
									<span class="price">29,99€</span>
								</div>
							</a>
						</div>
						<!-- Single Products Item-->

						<!-- Single Products Item-->
						<div class="product-list-shop__product">
							<a href="/single-product-page.html">
								<div class="product-list-shop__product__image">
									<img data-src="img/sample-images/IMG_3881.jpg" class="lazy" alt="Product name">
								</div>
								<div class="product-list-shop__product__content">
									<p class="text-uppercase">Slips</p>
									<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
									<span class="price">29,99€</span>
								</div>
							</a>
						</div>
						<!-- Single Products Item-->

					</div>




					<div class="aehnliche-produkte"><!-- Products from other categorys (max-3)-->
						<h3>Ähnliche Produkte</h3>

						<div class="product-list-shop">

							<!-- Products from other categorys-->
							<div class="product-list-shop__product">
								<a href="/single-product-page.html">
									<div class="product-list-shop__product__image">
										<img data-src="img/sample-images/IMG_3881.jpg" class="lazy" alt="Product name">
									</div>
									<div class="product-list-shop__product__content">
										<p class="text-uppercase">Slips</p>
										<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
										<span class="price">29,99€</span>
									</div>
								</a>
							</div>
							<!-- Products from other categorys-->

							<!-- Products from other categorys-->
							<div class="product-list-shop__product">
								<a href="/single-product-page.html">
									<div class="product-list-shop__product__image">
										<img data-src="img/sample-images/IMG_3881.jpg" class="lazy" alt="Product name">
									</div>
									<div class="product-list-shop__product__content">
										<p class="text-uppercase">Slips</p>
										<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
										<span class="price">29,99€</span>
									</div>
								</a>
							</div>
							<!-- Products from other categorys-->

							<!-- Products from other categorys-->
							<div class="product-list-shop__product">
								<a href="/single-product-page.html">
									<div class="product-list-shop__product__image">
										<img data-src="img/sample-images/IMG_3881.jpg" class="lazy" alt="Product name">
									</div>
									<div class="product-list-shop__product__content">
										<p class="text-uppercase">Slips</p>
										<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
										<span class="price">29,99€</span>
									</div>
								</a>
							</div>
							<!-- Products from other categorys-->

						
						</div>
					</div>


				</div>
			<!-- Products-->
			</div>
		</section>
    
@endsection
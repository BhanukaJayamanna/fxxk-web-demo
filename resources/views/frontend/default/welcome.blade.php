@extends('frontend.default.layouts.app')

@section('styles')
<link rel="stylesheet" href="{{asset(asset_path('frontend/default/css/page_css/welcome.css'))}}" />
@endsection

@section('share_meta')
  @php
      $tags = str_replace(',', ' ',app('general_setting')->meta_tags);
  @endphp
  <meta name="keywords" content="{{$tags}}">
  <meta name="description" content="{{app('general_setting')->meta_description}}">
  <link rel="canonical" href="{{url()->current()}}"/>
@endsection

@section('content')

  @include('frontend.default.partials._mainslider')

  	<section class="container-xxl">
		<div class="carousel-testimonials-home">

			<div class="carousel-testimonials-home__slide">
				<img data-flickity-lazyload="{{asset(asset_path('frontend/default/img/icons/100-prozent-echt.svg'))}}" class="carousel-testimonials-home__slide__image" alt="100% Echt und Ehrlich"> <p>100% Echt und Ehrlich</p>
			</div>

			<div class="carousel-testimonials-home__slide">
				<img data-flickity-lazyload="{{asset(asset_path('frontend/default/img/icons/diskrete-bezahlung.svg'))}}" class="carousel-testimonials-home__slide__image" alt="Diskretes überweisen"> <p>Diskretes überweisen</p>
			</div>
			
			<div class="carousel-testimonials-home__slide">
				<img data-flickity-lazyload="{{asset(asset_path('frontend/default/img/icons/diskrete-verpackung.svg'))}}" class="carousel-testimonials-home__slide__image" alt="Unauffällige Verpackung ohne Werbeaufdruck"> <p>Unauffällige Verpackung ohne<br> Werbeaufdruck</p>
			</div>

			<div class="carousel-testimonials-home__slide">
				<img data-flickity-lazyload="{{asset(asset_path('frontend/default/img/icons/keine-gebuehr.svg'))}}" class="carousel-testimonials-home__slide__image" alt="Keine Ameldegebühren oder versteckte Kosten"> <p>Keine Ameldegebühren oder<br> versteckte Kosten</p>
			</div>

		</div>
	</section>

	<section class="container-xxl front-highline-section">
				<p>Wenn du gerne an getragener <span class="unterline-secondary">Unterwäsche</span> schnupperst, bist du hier genau richtig. Frau Kruner ist 100% echt und ehrlich und immer für dich da.</p>
				<a href="/uber-mich" class="btn btn-primary-outline">Frau Kruner kennenlernen</a>
	</section>

  	<!-- Category Presented with bg-secondary-->
		<section class="bg-secondary">
			<div class="container-xxl">
				<img data-src="{{asset(asset_path('frontend/default/img/front-page/section-image.jpg'))}}" class="img-100-width lazy" alt="Section Title">
				<div class="row" >
					<div class="col-12 col-md-5 col-main-page-sections__first">
						<h4 class="text-primary">String</h4>
						<h2>Persönliche Strings mit lieblichen Duft</h2>
						<p>Kleines Höschen mit riesen Geruchspotenzial.Kleines Höschen mit riesen Geruchspotenzial.</p>
								<a href="/shop.html" class="btn btn-primary">Slips shoppen</a>
					</div>

					<div class="col-12 col-md-7 col-main-page-sections__second">
						<div class="slider-angebote-main-categorys">
            
						<!--	<div class="slider-angebote-main-categorys__slide">
								<a href="/single-product-page.html">
									<div class="slider-angebote-main-categorys__slide__image-field" data-background-image-url="img/sample-images/IMG_5355.jpg"></div>
									<div class="slider-angebote-main-categorys__slide__content">
										<h6>Strings</h6>
										<p>Schöner duftende Socken die bis zum Himmel riechen und noch viel höher 🥰 </p>
										<span class="slider-angebote-main-categorys__slide__content-price">29,99€</span>
									</div>
								</a>
							</div>-->
						


						</div>

						
						<div class="slider-angebote-main-categorys-pfeil-container">
							<img data-src="img/icons/icon-pfeil-links.svg" class="slider-angebote-main-categorys-pfeil-links lazy" alt="Pfeil nach links" height="26px" width="43px">
							<img data-src="img/icons/icon-pfeil-rechts.svg" class="slider-angebote-main-categorys-pfeil-rechts lazy" alt="Pfeil nach links" height="26px" width="43px">
						</div>

					</div>

				</div>

			</div>
		</section>
	<!-- Category Presented with bg-secondary-->
 



  @include(theme('partials._subscription_modal'))

@endsection

@include(theme('partials.add_to_cart_script'))
@include(theme('partials.add_to_compare_script'))




    @php
        $all_select_count = 0;
        $subtotal = 0;
        $discount = 0;
        $actual_price = 0;
        $shipping_cost = 0;
        $sellect_seller = 0;
        $selected_product_check  = 0;

        foreach ($cartData as $key => $items) {
            $all_select_count += count($items);
            $sellect_seller  = $key;
            $p = 0;
            foreach ($items as $key => $data) {
                if ($data->is_select == 1) {
                    $all_select_count = $all_select_count - 1;
                    $selected_product_check ++;
                    $p = 1;
                }
            }
            if($p == 1){
                $shipping_cost += 20;

            }
        }
    @endphp
    
        <section class="container-cart mt-3 mb-3">
			<h1 class="small">Warenkorb</h1>
			<p>Waren werden neutral verpackt sowie versendet.</p>
			<hr>
		</section>

	    <section class="container-cart">
			<div class="card-fields-shopping-cart">
				<div class="card-item">
					<div class="card-item__main-info">
						<div class="col-prod-image">
							<img data-src="img/sample-images/IMG_5349.jpg" class="lazy img-fluid" alt="">
						</div>

						<div class="col-prod-text">
							<div class="col-prod-text__prod-summary">
								<h6 class="text-primary">String</h6>
								<p>Toller duftender Stringtanga mit Leomuster der heiß macht Toller duftender Stringtanga mit Leomuster der heiß macht</p>
								<div class="tragedauer">
									<span>Tragedauer</span><span> 3 Tage</span>
								</div>
							</div>

						</div>
						<div class="col-prod-price">
							<button><img data-src="img/icons/warenkorb-close.svg" alt="Produtk löschen" class="lazy col-prod-price__erase"></button>
							<span class="col-prod-price__price">39,00€</span>
						</div>
					</div>

					<div class="col-prod-addons">
						<div class="col-prod-addons__placeholder"></div>
					<!-- List of Addons to the Product-->
						<div class="col-prod-addons__addons-list">
						<!-- Single Addon-->
							<div class="col-prod-addons__addons-list__single-addon">
								<div class="col-prod-addons__addons-list__single-addon__details">
									<h6 class="text-primary">Veredelung</h6>
									<p>Natursekt</p>
								</div>
	
								<div class="col-prod-addons__addons-list__single-addon__pricing">
									<button><img data-src="img/icons/warenkorb-close.svg" alt="Produtk löschen" class="lazy col-prod-price__erase"></button>
									<span class="col-prod-price__price">9,00€</span>
								</div>
							</div>
						<!-- Single Addon-->

						<!-- Single Addon-->
						<div class="col-prod-addons__addons-list__single-addon">
							<div class="col-prod-addons__addons-list__single-addon__details">
								<h6 class="text-primary">Veredelung</h6>
								<p>Haare</p>
							</div>

							<div class="col-prod-addons__addons-list__single-addon__pricing">
								<button><img data-src="img/icons/warenkorb-close.svg" alt="Produtk löschen" class="lazy col-prod-price__erase"></button>
								<span class="col-prod-price__price">9,00€</span>
							</div>
						</div>
						<!-- Single Addon-->
						</div>

					<!-- List of Addons to the Product-->
					</div>

				</div>
				
			</div>

			<div class="delivery-date-container">
				<h1 class="small">Voraussichtlicher Liefertermin</h1>
				<p>ca. Mi. 22.02. - Fr. 25.02.2022</p>
			</div>

			<div class="payment-methods-container">
				<h1 class="small">Ich akzeptiere</h1>
				<div class="payment-methods-container__cart">
					<img data-src="/img/payment-methods/paypal.png" class="lazy" alt="PayPal">
					<img data-src="/img/payment-methods/visa.png" class="lazy" alt="Visa">
					<img data-src="/img/payment-methods/paypal.png" class="lazy" alt="PayPal">
					<img data-src="/img/payment-methods/visa.png" class="lazy" alt="Visa">
					<img data-src="/img/payment-methods/paypal.png" class="lazy" alt="PayPal">
					<img data-src="/img/payment-methods/visa.png" class="lazy" alt="Visa">
					<img data-src="/img/payment-methods/paypal.png" class="lazy" alt="PayPal">
					<img data-src="/img/payment-methods/visa.png" class="lazy" alt="Visa">
					<img data-src="/img/payment-methods/paypal.png" class="lazy" alt="PayPal">
					<img data-src="/img/payment-methods/visa.png" class="lazy" alt="Visa">
				</div>
			</div>

		</section>


      
		<section class="bg-lightgrey">
        @php
            $grand_total = $actual_price;
            $discount = $subtotal -$actual_price;
        @endphp
			<div class="container-cart-summary">
				<div class="zwischensumme-cart">
					<span class="zwischensumme-cart__heading">Zwischensumme</span>
					<span class="zwischensumme-cart__price">+ {{single_price($subtotal)}}</span>
				</div>
				<div class="delivery-cost-cart">
					<span class="delivery-cost-cart__heading">Lieferkosten</span>
					<span class="delivery-cost-cart__price">{{__('defaultTheme.calculated_at_next_step')}}</span>
				</div>

				<div class="fullsumm-cost-cart">
					<span class="fullsumm-cost-cart__heading">Gesamtsumme</span>
					<span class="fullsumm-cost-cart__price">{{single_price($grand_total)}}</span>
				</div>

				<div class="buttons-to-checkout">
					<a href="/shop.html" class="btn btn-primary-outline-white-to-sec">weiter Einkaufen</a>
					<a href="/kasse.html" class="btn btn-primary-to-sec">Zur Kasse</a>
				</div>
				<!-- Voucher Code-->
				<a href="/warenkorb.html">Gutschein hinzufügen (optional)</a>
				<!-- Voucher Code-->
			</div>
		</section>    






























   
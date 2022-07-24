<!-- footer part -->


<footer class="mt-5">

  

    <div class="bg-secondary">
        <div class="container-xxl">
            <div class="footer-headline">
            <img
                            data-src="{{ showImage(app('general_setting')->logo) }}" src="{{showImage(themeDefaultImg())}}" class="lazyload" alt="#" /> liebt es!
            </div>
            <div class="row">
                <div class="col-12 col-md-4 social-media-footer">
                    <p>Folge mir auf</p>
                    <a href="/"><img data-src="{{asset(asset_path('frontend/default/img/icons/Icon-instagram-primary.svg'))}}" class="lazy svg-up" alt="Instagram"></a>
                    <a href="/"><img data-src="{{asset(asset_path('frontend/default/img/icons/Icon-facebook-primary.svg'))}}" class="lazy svg-up" alt="Facebook"></a>
                </div>

                <div class="col-12 col-md-4 help-footer">
                    <p>Ich helfe gerne</p>
                    <a href="/" class="d-flex-link-footer"> 
                        <img data-src="{{asset(asset_path('frontend/default/img/icons/telefon-footer.svg'))}}" class="lazy svg-up" alt="Telefon"> <p>030 123 456 789</p>
                    </a>

                    <a href="/" class="d-flex-link-footer"> 
                        <img data-src="{{asset(asset_path('frontend/default/img/icons/mail-footer.svg'))}}" class="lazy svg-up" alt="Telefon"> <p>hilfe@fraukruner.de</p>
                    </a>
                </div>

                <div class="col-12 col-md-4">
                    <p>Frau Kruner hilft dir dabei einfach vom heimischen Sofa aus gutes Geld zu verdienen.</p>
                    <a href="/" class="btn btn-primary">Verkäuferin werden</a>
                </div>
            </div>

            <div class="collapsing-container-footer">
                <div class="row">

                    <div class="col-12 col-md-6 col-xl-3 collapsing-container-footer__col">
                        <button class="footer-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFrauKruner" aria-expanded="false" aria-controls="collapseFrauKruner">
                        Frau Kruner <span class="arrow"><span></span><span></span></span>
                        </button>

                        <div class="collapse collapse__footer" id="collapseFrauKruner">
                            <ul>
                                <li><a href="/">Merchandise</a></li>
                                <li><a href="/">Fan Shop</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3 collapsing-container-footer__col">
                        <button class="footer-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVerkauf" aria-expanded="false" aria-controls="collapseVerkauf">
                            Verkauf <span class="arrow"><span></span><span></span></span>
                        </button>

                        <div class="collapse collapse__footer" id="collapseVerkauf">
                            <ul>
                                <li><a href="/">Merchandise</a></li>
                                <li><a href="/">Fan Shop</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3 collapsing-container-footer__col">
                        <button class="footer-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHilfeundInfos" aria-expanded="false" aria-controls="collapseHilfeundInfos">
                            Hilfe & Info <span class="arrow"><span></span><span></span></span>
                        </button>

                        <div class="collapse collapse__footer" id="collapseHilfeundInfos">
                            <ul>
                                <li><a href="/">Merchandise</a></li>
                                <li><a href="/">Fan Shop</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3 collapsing-container-footer__col">
                        <button class="footer-collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRechtliches" aria-expanded="false" aria-controls="collapseRechtliches">
                            Rechtliches <span class="arrow"><span></span><span></span></span>
                        </button>

                        <div class="collapse collapse__footer" id="collapseRechtliches">
                            <ul>
                                <li><a href="/userprofile-welcome.html">Profile Welcome</a></li>
                                <li><a href="/userprofile-point.html#profile-content-scroll-point">Profile Punkt</a></li>
                                <li><a href="/userprofile-public.html">Public Prodile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset(asset_path('frontend/default/js/app.min.js'))}}" async></script>
</footer>


</body>
</html>

















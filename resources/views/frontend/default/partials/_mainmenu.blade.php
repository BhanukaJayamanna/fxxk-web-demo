@php
    $actual_link = \Illuminate\Support\Facades\URL::current();
    $base_url = url('/');
    $flash_deal = \Modules\Marketing\Entities\FlashDeal::where('status', 1)->first();

    $new_user_zone = \Modules\Marketing\Entities\NewUserZone::where('status', 1)->first();

@endphp


<div class="container-before-header">
    <div class="container-xxl d-flex justify-content-center align-items-center">
        Kostenlose Anmeldung - Kostenlose Lieferung - Diskret und Anonym
    </div>
    
</div>
    
</div>

</div>



    <nav class="navbar navbar-expand-lg " id="navBarHeader">
        <div class="container-xxl">
          <a class="navbar-brand" href="{{url('/')}}"><img
                            data-src="{{ showImage(app('general_setting')->logo) }}" src="{{showImage(themeDefaultImg())}}" class="lazyload" alt="#" /></a>
        
          <span class="navbar-header-secondary-before">
            <ul class="navbar-header-secondary-before__list">

              <li class="navbar-header-secondary-before__list__item hidden-search"  id="searchSecondaryHidden">

                <button class="search-button-secondary" onclick="headerSearchFunctionHidden()"><img data-src="{{asset(asset_path('frontend/default/img/icons/search-icon.svg'))}}" class="lazy" alt="Suche Icon"></button>

                <form role="search" method="get" class="search-form-hidden" id="searchSecondaryHiddenForm" action="">
                  <label class="d-flex">
                    <input type="search" class="search-field-hidden" placeholder="Suche…" value="" name="s" title="Suchen" />
                    
                     <span class="close-button" onclick="headerSearchFunctionHidden()"><img data-src="{{asset(asset_path('frontend/default/img/icons/close-icon.svg'))}}" class="lazy" alt="Suche Icon"></span>

                  </label>
                  <input type="submit" class="search-submit-hidden" value="Suchen" />
                </form>

              </li>

                <li class="navbar-header-secondary-before__list__item visible-search">
                  <form role="search" method="get" class="search-form" action="">
                    <label>
                      <input type="search" class="search-field" placeholder="Suche…" value="" name="s" title="Suchen" />
                    </label>
                    <input type="submit" class="search-submit" value="Suchen" />
                  </form>
                </li>
                
                <li class="navbar-header-secondary-before__list__item">
                    <a href="{{url('/login')}}">
                      <img src="{{asset(asset_path('frontend/default/img/icons/profil-icon.svg'))}}" class="navbar-header-secondary-before__list__item__icon" alt="Profil">
                    </a> 
                </li>

                <li class="navbar-header-secondary-before__list__item">
                    <a href="/warenkorb.html">
                      <img src="{{asset(asset_path('frontend/default/img/icons/basket-icon.svg'))}}" class="navbar-header-secondary-before__list__item__icon" alt="Warenkorb">
                    </a> 
                </li>
            </ul>
        </span>
        

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation" id="menuHeaderNavButton" onclick="headerMenuButtonFunction()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
           </button>

          </button>

          <div class="collapse navbar-collapse" id="navbarMain">
       
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/shop')}}">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/shop.html">Bestseller</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">About</a>
              </li>

              
              <li class="nav-item nav-item__item-primary">
                <a class="nav-link" href="/">Unterwäsche verkaufen</a>
              </li>
            </ul>
    
      
              <span class="navbar-header-secondary">
                  <ul class="navbar-header-secondary__list">
                      <li class="navbar-header-secondary__list__item search-form">

                        <form role="search" method="get" class="search-form" action="">
                          <label>
                            <input type="search" class="search-field" placeholder="Suche…" value="" name="suchfeld" title="Suchen" />
                          </label>
                          <input type="submit" class="search-submit" value="Suchen" />
                        </form>

                      </li>
                    
                    
                 
                        <li class="navbar-header-secondary__list__item">
                       
                            <a href="{{url('/login')}}">
                              <img src="{{asset(asset_path('frontend/default/img/icons/profil-icon.svg'))}}" class="menu_btn_1 text-nowrap">
                              <span>Profil</span>
                            </a> 
                        
                        </li>

                        
                      

                      <li class="navbar-header-secondary__list__item">
                          <a href="{{url('/cart')}}"><img src="{{asset(asset_path('frontend/default/img/icons/basket-icon.svg'))}}" class="navbar-header-secondary__list__item__icon" alt="Warenkorb">
                            <span>Warenkorb</span>
                            
                          </a> 
                      </li>
                  </ul>
              </span>
     
          </div>
        </div>
      </nav>



      <div class="container-before-header__mobile">
        <div class="container-xxl d-flex justify-content-center align-items-center">
          Kostenlose Lieferung - Diskret und Anonym
        </div>
    </div>




























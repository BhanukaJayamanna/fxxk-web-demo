<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
	<!-- No Index-->
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@if(trim($__env->yieldContent('title'))) @yield('title') | {{app('general_setting')->meta_site_title}} @else {{app('general_setting')->meta_site_title}} @endif</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<link rel="stylesheet" href="css/style.min.css" defer>
    <meta name="_token" content="@php echo csrf_token(); @endphp" />

    <link rel="stylesheet" href="{{asset(asset_path('frontend/default/css/style.min.css'))}}" defer>


    @section('share_meta')
        @show
    @laravelPWA

    <link rel="icon" href="{{asset(asset_path(app('general_setting')->favicon))}}" type="image/png">


   


    @if(!isRtl())
    <style>
        @media (max-width: 575px) {
            .header_part .sub_menu .right_sub_menu .cart_menu:hover .cart_iner {
                right: 60%;
            }
            .header_part .sub_menu .right_sub_menu .cart_menu .cart_iner {
                right: 60%;
            }

            .header_part .sub_menu .left_sub_menu .list_visiable .select_option_list {
                margin-left: -85px;
            }
            .header_part .sub_menu .left_sub_menu .select_option .select_option_list {
                margin-left: -85px;
            }
            .notifica_menu{
                right: 0%!important;
                padding: 40px 30px!important;
            }

            .header_part .sub_menu .right_sub_menu .cart_menu:hover .cart_iner {
                right: -65%;
            }
            .header_part .sub_menu .left_sub_menu .select_option .select_option_list {
                right: 0;
            }
            .header_part .sub_menu .right_sub_menu .cart_menu:hover .cart_iner.user_account_iner {
                right: auto;
                left: -130px

            }

            .header_part .sub_menu .right_sub_menu .cart_menu:hover .cart_iner.cart_for_inner {
                right: auto;
                left: -70px;
            }
            .header_part .sub_menu .right_sub_menu .cart_menu:hover .cart_iner.notifica_menu {
                right: auto !important;
                left: 0;
            }

        }

    </style>
        @guest
        <style>
            @media (max-width: 575px) {
                .user_account_iner{
                    right: 22%!important;
                }
            }

        </style>
        @endguest
    @else
        <style>
            .cart_data_img_div {
                margin-right: 0;
                margin-left: 15px;
            }
            @media (max-width: 575px) {
                .header_part .sub_menu .left_sub_menu .select_option .select_option_list {
                    margin-left: 0;
                    left: 0;
                    right: auto;
                }
                .rtl .header_part .sub_menu .right_sub_menu ul {
                    display: flex;
                    justify-content: center;
                    flex-wrap: wrap;
                }
                .rtl .header_part .sub_menu .right_sub_menu .user_account:hover .user_account_iner {
                    right: auto;
                    left: -50px !important;
                }
                .rtl .header_part .sub_menu .right_sub_menu .cart_menu:hover .cart_iner {
                    right: auto;
                    left: -120px;
                }
            }
            .logo_div{
                justify-content: right;
            }
        </style>
    @endif


    @section('styles')
        @show
 
    @if (app('business_settings')->where('type', 'google_analytics')->first()->status == 1)
          <!-- Global site tag (gtag.js) - Google Analytics -->
          <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('ANALYTICS_TRACKING_ID') }}"></script>

          <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
              gtag('config', '{{ env('ANALYTICS_TRACKING_ID') }}');
          </script>

          <!-- Google Analytics Code -->
           <x-google-analytics-client-id />
          <!-- </head> -->
    @endif

    @if (app('business_settings')->where('type', 'facebook_pixel')->first()->status == 1)
          <!-- Facebook Pixel Code -->
          <script>
              !function(f,b,e,v,n,t,s)
              {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
              n.callMethod.apply(n,arguments):n.queue.push(arguments)};
              if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
              n.queue=[];t=b.createElement(e);t.async=!0;
              t.src=v;s=b.getElementsByTagName(e)[0];
              s.parentNode.insertBefore(t,s)}(window, document,'script',
              'https://connect.facebook.net/en_US/fbevents.js');
              fbq('init', {{ Modules\Setup\Entities\AnalyticsTool::where('type', 'facebook_pixel')->first()->facebook_pixel_id }});
              fbq('track', 'PageView');
          </script>
          <noscript>
              <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ Modules\Setup\Entities\AnalyticsTool::where('type', 'facebook_pixel')->first()->facebook_pixel_id }}/&ev=PageView&noscript=1"/>
          </noscript>
          <!-- End Facebook Pixel Code -->
    @endif

    <script>
		function headerMenuButtonFunction() { 
		  var navBarLock = document.getElementById("navBarHeader");
		  document.body.classList.toggle('lock-scroll');
		  navBarLock.classList.toggle("overflowAuto");

	  };
	  function headerSearchFunctionHidden() { 
		  var searchAppers = document.getElementById("searchSecondaryHidden");
		  searchAppers.classList.toggle("activeSearch");
	  };


	  window.onscroll = function() {removeActiveSearch()};

	  function removeActiveSearch() {
			if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
				var searchAppersScrolls = document.getElementById("searchSecondaryHiddenForm");
				searchAppersScrolls.style.top = "0px";
			} 
			else{
				var searchAppersScrolls = document.getElementById("searchSecondaryHiddenForm");
				searchAppersScrolls.style.top = "4.3rem";
			}
		}
	  
	</script>

    <script>
        const _config = {!!  json_encode(collect(app('general_setting'))->only(['currency_symbol','decimal_limit','currency_symbol_position']))  !!};
        const _user_currency = {!!  json_encode(collect(app('user_currency'))->only(['symbol','convert_rate']))  !!};
    </script>



  </head>


<header class="header_wrap fixed-top header_with_topbar">
	<div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                	<div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        {{-- <div class="lng_dropdown me-2">
                            <select name="countries" class="custome_select">
                                <option value='en' class="" data-image="assets/images/eng.png" data-title="English">English</option>
                                <option value='bn' class="" data-image="assets/images/bd.png" data-title="Bangla">বাংলা</option>
                            </select>
                        </div> --}}
                     
                        <div class="dropdown me-2">
                            <div class="dropdown me-2" id="language">
                                <button class="btn dropdown-toggle btn-sm" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000">
                                    Language
                                </button>
                                <ul class="dropdown-menu " aria-labelledby="languageDropdown">
                                    <li>
                                        <a class="dropdown-item text-danger {{ session('locale', 'en') == 'en' ? 'active' : '' }}" href="{{ route('lang.switch', 'en') }}">
                                           <img src="{{ asset('assets/images/eng.png') }}" alt=""> English
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-danger {{ session('locale', 'en') == 'bn' ? 'active' : '' }}" href="{{ route('lang.switch', 'bn') }}">
                                            <img src="{{ asset('assets/images/bd.png') }}" alt="">  বাংলা
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="me-0">
                            {{-- <select name="countries" class="custome_select">
                                <option value='USD' data-title="USD">USD</option>
                                <option value='EUR' data-title="EUR">EUR</option>
                                <option value='GBR' data-title="GBR">GBR</option>
                            </select> --}}
                        </div>
                        <ul class="contact_detail text-center text-lg-start">
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                            <li><i class="ti-email"></i><span>info@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="text-center text-md-end">
                       	<ul class="header_list">
                        	<li><a href="{{route('compare')}}"><i class="ti-control-shuffle"></i><span>Compare</span></a></li>
                            <li><a href="{{route('wishlist')}}"><i class="ti-heart"></i><span>Wishlist</span></a></li>
                            <li><a href="{{route('login')}}"><i class="ti-user"></i><span>Login</span></a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
    	<div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="{{route('home')}}">
                    
                    <img class="logo_light" src="assets/images/logo.png" alt="logo" />
                    <img class="logo_dark" src="assets/images/logo.png" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a href="{{route('home')}}"  class="nav-link  active" >{{ trans('words.home') }}</a>
                            {{-- <div class="dropdown-menu">
                                <ul> 
                                    <li><a class="dropdown-item nav-link nav_item active" href="index.html">Fashion 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Fashion 2</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-3.html">Furniture 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-4.html">Furniture 2</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-5.html">Electronics 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-6.html">Electronics 2</a></li>
                                </ul>
                            </div>    --}}
                        </li>
                  
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">{{ trans('words.products') }}</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-3">
                                        <ul> 
                                            <li class="dropdown-header">Woman's</li>
                                            <li><a class="dropdown-item nav-link nav_item" href="{{route('product.list')}}">Vestibulum sed</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="{{route('product.list')}}">Donec porttitor</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="{{route('product.list')}}">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="{{route('product.list')}}">Curabitur tempus</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="{{route('product.list')}}">Vivamus in tortor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Men's</li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Donec vitae ante ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Etiam ac rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Quisque condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="compare.html">Curabitur laoreet</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Vivamus in tortor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Kid's</li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Accessories</li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="d-lg-flex menu_banners row g-3 px-3">
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="assets/images/menu_banner1.jpg" alt="menu_banner1">
                                            <div class="banne_info">
                                                <h6>10% Off</h6>
                                                <h4>New Arrival</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="assets/images/menu_banner2.jpg" alt="menu_banner2">
                                            <div class="banne_info">
                                                <h6>15% Off</h6>
                                                <h4>Men's Fashion</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="assets/images/menu_banner3.jpg" alt="menu_banner3">
                                            <div class="banne_info">
                                                <h6>23% Off</h6>
                                                <h4>Kids Fashion</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {{-- <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">{{ trans('words.blog') }}</a>
                            <div class="dropdown-menu dropdown-reverse">
                                <ul>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Grids</a>
                                        <div class="dropdown-menu">
                                            <ul> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-three-columns.html">3 columns</a></li>
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-four-columns.html">4 columns</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-left-sidebar.html">Left Sidebar</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-right-sidebar.html">right Sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-standard-left-sidebar.html">Standard Left Sidebar</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-standard-right-sidebar.html">Standard right Sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Masonry</a>
                                        <div class="dropdown-menu">
                                            <ul> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-three-columns.html">3 columns</a></li>
                                           		<li><a class="dropdown-item nav-link nav_item" href="blog-masonry-four-columns.html">4 columns</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-masonry-left-sidebar.html">Left Sidebar</a></li> 
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-masonry-right-sidebar.html">right Sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Single Post</a>
                                        <div class="dropdown-menu">
                                            <ul> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single.html">Default</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-left-sidebar.html">left sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-slider.html">slider post</a></li> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-video.html">video post</a></li> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-audio.html">audio post</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">List</a>
                                        <div class="dropdown-menu">
                                            <ul> 
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-list-left-sidebar.html">left sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-list-right-sidebar.html">right sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">{{ trans('words.shop') }}</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-9">
                                        <ul class="d-lg-flex">
                                            <li class="mega-menu-col col-lg-4">
                                                <ul> 
                                                    <li class="dropdown-header">Shop Page Layout</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list.html">shop List view</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-load-more.html">Shop Load More</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Other Pages</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Cart</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Checkout</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="my-account.html">My Account</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Wishlist</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="compare.html">compare</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Order Completed</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Product Pages</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Default</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Thumbnails Left</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <div class="header_banner">
                                            <div class="header_banner_content">
                                                <div class="shop_banner">
                                                    <div class="banner_img overlay_bg_40">
                                                        <img src="assets/images/shop_banner.jpg" alt="shop_banner"/>
                                                    </div> 
                                                    <div class="shop_bn_content">
                                                        <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                                        <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                                        <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">{{ trans('words.pages') }}</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('about')}}">{{ trans('words.about_us') }}</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('contact')}}">{{ trans('words.contact_us') }}</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="faq.html">Faq</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('login')}}">Login</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('register')}}">Register</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('term.condition')}}">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="nav-link nav_item" href="{{route('contact')}}">{{ trans('words.contact_us') }}</a></li> 
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:;" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div>
                    </li>
                  
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="{{route('shop.cart')}}"   {{-- data-bs-toggle="dropdown" --}}><i class="linearicons-cart"></i><span class="cart_count">2</span></a> 
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">Tk </span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">Tk </span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">Tk </span></span>159.00</p>
                                <p class="cart_buttons"><a href="{{route('shop.cart')}}" class="btn btn-fill-line rounded-0 view-cart">View Cart</a><a href="#" class="btn btn-fill-out rounded-0 checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<script type="text/javascript">
    document.getElementById('language').addEventListener('change', function () {
        const selectedValue = this.value;
console.log(selectedValue);
        // Check if value is selected
        if (selectedValue) {
            // Send GET request to backend using fetch API
            fetch(`/lang/${selectedValue}`)
                .then(response => response.json())
                .then(data => {
                    
                })
                .catch(error => console.error('Error:', error));
        }
    });
</script>
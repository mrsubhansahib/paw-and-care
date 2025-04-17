<header class="header-area" data-bg-img="web/assets/img/photos/header-bg.webp">
  <div class="container">
    <div class="row no-gutter align-items-center position-relative">
      <div class="col-12">
        <div class="header-align">
          <div class="header-align-start">
            <div class="header-logo-area">
              <a href="#">
                <img class="logo-main" src="{{ asset('web/assets/img/logo-light.webp') }}" width="158" height="36"
                  alt="Logo" />
              </a>
            </div>
          </div>
          <div class="header-align-center">
            <div class="header-navigation-area position-relative">
              <ul class="main-menu nav">
                <li class="has-submenu"><a href="{{ route('home')}}"><span>Home</span></a>
                  <!-- <ul class="submenu-nav">
                      <li><a href="index.html"><span>Home One</span></a></li>
                      <li><a href="index-two.html"><span>Home Two</span></a></li>
                    </ul> -->
                </li>
                <li><a href="{{ route('about') }}"><span>About</span></a></li>
                <li class="has-submenu position-static"><a href="{{ route('shop') }}"><span>Shop</span></a>
                  <!-- <ul class="submenu-nav submenu-nav-mega column-3">
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Layout</span></a>
                        <ul>
                          <li><a href="shop-three-columns.html"><span>Shop 3 Column</span></a></li>
                          <li><a href="shop-four-columns.html"><span>Shop 4 Column</span></a></li>
                          <li><a href="shop-left-sidebar.html"><span>Shop Left Sidebar</span></a></li>
                          <li><a href="shop.html"><span>Shop Right Sidebar</span></a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Single Product</span></a>
                        <ul>
                          <li><a href="single-normal-product.html"><span>Single Product Normal</span></a></li>
                          <li><a href="single-product.html"><span>Single Product Variable</span></a></li>
                          <li><a href="single-group-product.html"><span>Single Product Group</span></a></li>
                          <li><a href="single-affiliate-product.html"><span>Single Product Affiliate</span></a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Others Pages</span></a>
                        <ul>
                          <li><a href="shop-cart.html"><span>Shopping Cart</span></a></li>
                          <li><a href="shop-checkout.html"><span>Checkout</span></a></li>
                          <li><a href="shop-wishlist.html"><span>Wishlist</span></a></li>
                          <li><a href="shop-compare.html"><span>Compare</span></a></li>
                        </ul>
                      </li>
                    </ul> -->
                </li>
                <li class="has-submenu"><a href="{{ route('blog') }}"><span>Blog</span></a>
                  <!-- <ul class="submenu-nav submenu-nav-mega">
                      <li class="mega-menu-item"><a href="#/" class="mega-title">Blog Layout</a>
                        <ul>
                          <li><a href="blog-grid.html">Blog Grid</a></li>
                          <li><a href="blog.html">Blog Left Sidebar</a></li>
                          <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title">Single Blog</a>
                        <ul>
                          <li><a href="blog-details-no-sidebar.html">Blog Details</a></li>
                          <li><a href="blog-details.html">Blog Details Left Sidebar</a></li>
                          <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                        </ul>
                      </li>
                    </ul> -->
                </li>
                <li class="has-submenu"><a href="{{ route('adopt') }}"><span>ADOPTION</span></a>
                  <!-- <ul class="submenu-nav">
                      <li><a href="account.html"><span>Account</span></a></li>
                      <li><a href="account-login.html"><span>Login</span></a></li>
                      <li><a href="account-register.html"><span>Register</span></a></li>
                      <li><a href="page-not-found.html"><span>Page Not Found</span></a></li>
                    </ul> -->
                </li>
                <li><a href="#"><span>Contact</span></a></li>
              </ul>
            </div>
          </div>
          <div class="header-align-end">
            <div class="header-action-area">
              <div class="shopping-search">
                <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i
                    class="pe-7s-search icon"></i></button>
              </div>
              <div class="shopping-account">
                <a class="shopping-account-btn" href="#">
                  <i class="pe-7s-users icon"></i>
                </a>
              </div>
              <div class="shopping-wishlist">
                <a class="shopping-wishlist-btn" href="#">
                  <i class="pe-7s-like icon"></i>
                </a>
              </div>
              <div class="shopping-cart">
                <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                  <i class="pe-7s-shopbag icon"></i>
                  <sup class="shop-count">2</sup>
                </button>
              </div>
              <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu"
                aria-controls="AsideOffcanvasMenu">
                <i class="pe-7s-menu"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
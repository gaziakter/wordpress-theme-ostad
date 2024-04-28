<?php 

   $harry_header_email = get_theme_mod('harry_email','info@example.com');
   $harry_header_phone = get_theme_mod('harry_phone','+964 742 44 763');
   $harry_header_time = get_theme_mod('harry_timing','Sunday-Thures 10am-07pm');






?>
     
     
     <!-- header area start -->
      <header>
         <div class="header__area header__white-solid">
            <div class="header__top header__border d-none d-lg-block">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-10">
                        <div class="header__info">
                           <ul>
                              <?php if(!empty($harry_header_email)) : ?>
                              <li>
                                 <a href="mailto:<?php echo esc_url($harry_header_email); ?>">
                                    <span>
                                       <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.5 12.9H4.5C2.4 12.9 1 11.85 1 9.4V4.5C1 2.05 2.4 1 4.5 1H11.5C13.6 1 15 2.05 15 4.5V9.4C15 11.85 13.6 12.9 11.5 12.9Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M11.5 4.85059L9.309 6.60059C8.588 7.17459 7.405 7.17459 6.684 6.60059L4.5 4.85059" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span> 
                                    <?php echo esc_html($harry_header_email) ; ?>
                                 </a>
                              </li>
                              <?php endif; ?>
                              <?php if(!empty($harry_header_phone)) : ?>
                              <li>
                                 <a href="tel:<?php echo esc_url($harry_header_phone) ; ?>">
                                    <span>
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M14.979 12.431C14.979 12.683 14.923 12.942 14.804 13.194C14.685 13.446 14.531 13.684 14.328 13.908C13.985 14.286 13.607 14.559 13.18 14.734C12.76 14.909 12.305 15 11.815 15C11.101 15 10.338 14.832 9.533 14.489C8.728 14.146 7.923 13.684 7.125 13.103C6.32 12.515 5.557 11.864 4.829 11.143C4.108 10.415 3.457 9.652 2.876 8.854C2.302 8.056 1.84 7.258 1.504 6.467C1.168 5.669 1 4.906 1 4.178C1 3.702 1.084 3.247 1.252 2.827C1.42 2.4 1.686 2.008 2.057 1.658C2.505 1.217 2.995 1 3.513 1C3.709 1 3.905 1.042 4.08 1.126C4.262 1.21 4.423 1.336 4.549 1.518L6.173 3.807C6.299 3.982 6.39 4.143 6.453 4.297C6.516 4.444 6.551 4.591 6.551 4.724C6.551 4.892 6.502 5.06 6.404 5.221C6.313 5.382 6.18 5.55 6.012 5.718L5.48 6.271C5.403 6.348 5.368 6.439 5.368 6.551C5.368 6.607 5.375 6.656 5.389 6.712C5.41 6.768 5.431 6.81 5.445 6.852C5.571 7.083 5.788 7.384 6.096 7.748C6.411 8.112 6.747 8.483 7.111 8.854C7.489 9.225 7.853 9.568 8.224 9.883C8.588 10.191 8.889 10.401 9.127 10.527C9.162 10.541 9.204 10.562 9.253 10.583C9.309 10.604 9.365 10.611 9.428 10.611C9.547 10.611 9.638 10.569 9.715 10.492L10.247 9.967C10.422 9.792 10.59 9.659 10.751 9.575C10.912 9.477 11.073 9.428 11.248 9.428C11.381 9.428 11.521 9.456 11.675 9.519C11.829 9.582 11.99 9.673 12.165 9.792L14.482 11.437C14.664 11.563 14.79 11.71 14.867 11.885C14.937 12.06 14.979 12.235 14.979 12.431Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"/>
                                          <path d="M12.5497 5.89986C12.5497 5.47986 12.2207 4.83586 11.7307 4.31086C11.2827 3.82786 10.6877 3.44986 10.0997 3.44986" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M14.9997 5.9C14.9997 3.191 12.8087 1 10.0997 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                    <?php echo esc_html($harry_header_phone) ; ?>
                                 </a>
                              </li>
                              <?php endif; ?>
                              <?php if(!empty($harry_header_time)) : ?>
                              <li>
                                 <span>
                                    <span>
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M10.5969 10.226L8.42691 8.93101C8.04891 8.70701 7.74091 8.16801 7.74091 7.72701V4.85701" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                    <?php echo esc_html($harry_header_time) ; ?>
                                 </span>
                              </li>
                              <?php endif; ?>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2">
                        <div class="header__top-right d-flex justify-content-end align-items-center">
                           <div class="header__lang ml-30">
                              <span class="header__lang-selected-lang tp-lang-toggle" id="tp-header-lang-toggle">English</span>
                              <ul class="header__lang-list tp-lang-list">
                                 <li>Spanish</li>
                                 <li>English</li>
                                 <li>Canada</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header__bottom header__sticky" id="header-sticky">
               <div class="container">
                  <div class="mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-5 col-8">
                           <div class="logo logo-border">
                              <?php harry_logo(); ?>
                           </div>
                        </div>
                        <div class="col-xxl-7 col-xl-8 col-lg-8 d-none d-lg-block">
                           <div class="main-menu pl-55 main-menu-ff-space">
                              <nav id="mobile-menu">
                                 <ul>
                                    <li class="has-dropdown">
                                       <a href="index.html">Home</a>
                                       <ul class="submenu">
                                          <li><a href="index.html">Main Demo</a></li>
                                          <li><a href="index-shop.html">Shop Demo</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown">
                                       <a href="portfolio.html">Protfolio</a>
                                       <ul class="submenu">
                                          <li><a href="portfolio.html">Classic Style</a></li>
                                          <li><a href="portfolio-details-list.html">List With Details</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown ">
                                       <a href="#">Pages</a>
                                       <ul class="submenu">
                                          <li><a href="portfolio.html">Portfoilo</a></li>
                                          <li><a href="portfolio-details-list.html">Portfoilo Details</a></li>
                                          <li><a href="about-me.html">About Me</a></li>
                                          <li><a href="cart.html">Cart</a></li>
                                          <li><a href="checkout.html">Checkout</a></li>
                                          <li><a href="services.html">Services</a></li>
                                          <li><a href="services-details.html">Service Details</a></li>
                                          <li><a href="404.html">404 Page</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown">
                                       <a href="blog.html">Blog</a>
                                       <ul class="submenu">
                                          <li><a href="blog.html">Blog Standard</a></li>
                                          <li><a href="blog-details.html">Blog Details</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown">
                                       <a href="shop.html">Shop</a>
                                       <ul class="submenu">
                                          <li><a href="shop.html">Shop</a></li>
                                          <li><a href="product-details.html">Product Details</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="contact.html">Contact</a>
                                    </li>
                                 </ul>
                              </nav>
                              <!-- for wp -->
                              <div class="header__hamburger ml-50 d-none">
                                 <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-8 col-sm-7 col-4">
                           <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                              <div class="header__action d-none d-xl-block">
                                 <ul>
                                    <li>
                                       <a href="javascript:void(0);" class="search-open-btn">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>                                          
                                       </a>
                                    </li>
                                    <li>
                                       <button type="button"  class="hamburger-btn hamburger-btn-black offcanvas-open-btn">
                                          <span></span>
                                          <span></span>
                                          <span></span>
                                       </button>
                                    </li>
                                 </ul>
                              </div>
                              <div class="header__hamburger ml-50 d-xl-none">
                                 <button type="button" class="hamburger-btn hamburger-btn-black offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area offcanvas__area-1">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__shape">
               <img class="offcanvas__shape-1" src="assets/img/shape/offcanvas-shape-1.png" alt="">
            </div>
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="index.html">
                        <img src="assets/img/logo/logo-black.svg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="mobile-menu fix d-lg-none"></div>
               <div class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block">
                  <nav>
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Service</a></li>
                        <li><a href="blog-grid-2.html">Blog</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="contact.html">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="offcanvas__btn">
                  <a href="contact.html" class="tp-btn-offcanvas">Getting Started <i class="fa-regular fa-chevron-right"></i></a>
               </div>
               <div class="offcanvas__social">
                  <h3 class="offcanvas__social-title">Follow :</h3>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
               </div>
               <div class="offcanvas__contact">
                  <p class="offcanvas__contact-call"><a href="tel:+964-742-44-763">+964 742 44 763</a></p>
                  <p class="offcanvas__contact-mail"><a href="mailto:info@harry.com">info@harry.com</a></p>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <!-- search popup start -->
      <div class="search__popup">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="search__wrapper">
                     <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                           <a href="index.html">
                              <img src="assets/img/logo/logo.svg" alt="">
                           </a>
                        </div>
                        <div class="search__close">
                           <button type="button" class="search__close-btn search-close-btn">
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                 
                           </button>
                        </div>
                     </div>
                     <div class="search__form">
                        <form action="#">
                           <div class="search__input">
                              <input class="search-input-field" type="text" placeholder="Type here to search...">
                              <span class="search-focus-border"></span>
                              <button type="submit">
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg> 
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- search popup end --> 
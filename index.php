<?php
ob_start();
include "API/database.php";

session_start();
$name="";
$ProfileImage="";

if (!isset($_SESSION['email'])) {
    // header('Location: index.php');
}else{
    $email=$_SESSION['email'];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
            $name=$row['name'];
            $ProfileImage=$row['profile_image'];
            if($row['password']==null){
            }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>
      Find & Consult | The Best Immigration Experts Business Listing
    </title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link
      rel="shortcut icon"
      href="images/branding/favicon.png"
      type="image/x-icon"
    />
    <link rel="icon" href="images/branding/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  </head>

  <body>
    <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>

      <!-- Main Header-->
      <header class="main-header">
        <!-- Main box -->
        <div class="main-box">
          <div class="logo-box">
            <div class="logo" >
              <a href="index.html"
                ><img
                  src="images/branding/logo.png"
                  alt="logo"
                  width="240px"
                  title=""
              /></a>
            </div>

            <!-- Search Btn -->
            <div class="search-box">
              <!-- Search Backdrop -->
              <div class="search-backdrop"></div>

              <div class="header-search-form">
                <input
                  type="text"
                  name="header-search"
                  id="cusom-search"
                  data-list=".search-list"
                  placeholder="What are you looking for?"
                />
                <span class="search-btn"
                  ><i class="flaticon-magnifying-glass"></i
                ></span>
              </div>

              <div class="search-list">
                <div class="search-item region">
                  <i class="icon flaticon-placeholder"></i>
                  <div class="text">City Of London</div>
                  <span class="cat">Region</span>
                  <a href="listing-single.html" class="overlay-link"></a>
                </div>
                <div class="search-item region">
                  <i class="icon flaticon-placeholder"></i>
                  <div class="text">City of Westminster</div>
                  <span class="cat">Region</span>
                  <a href="listing-single.html" class="overlay-link"></a>
                </div>
                <div class="search-item region">
                  <i class="icon flaticon-placeholder"></i>
                  <div class="text">Chelsea District</div>
                  <span class="cat">Region</span>
                  <a href="listing-single.html" class="overlay-link"></a>
                </div>
                <div class="search-item listing">
                  <i class="icon flaticon-placeholder"></i>
                  <div class="text">Top Picks</div>
                  <span class="cat">Featured Listings</span>
                  <a href="listing-single.html" class="overlay-link"></a>
                </div>
                <div class="search-item shopping">
                  <i class="icon flaticon-placeholder"></i>
                  <div class="text">Shopping</div>
                  <span class="cat">Category</span>
                  <a href="listing-single.html" class="overlay-link"></a>
                </div>
                <div class="search-item food">
                  <i class="icon flaticon-placeholder"></i>
                  <div class="text">Local Food</div>
                  <span class="cat">Category</span>
                  <a href="listing-single.html" class="overlay-link"></a>
                </div>
                <div class="search-item prize">
                  <i class="icon flaticon-placeholder"></i>
                  <div class="text">Free Entrance</div>
                  <span class="cat">Tag</span>
                  <a href="listing-single.html" class="overlay-link"></a>
                </div>
              </div>
            </div>
          </div>



          <!--Nav Box-->
          <div class="nav-outer">

            <!-- Main Menu End-->

            <div class="outer-box">
              <!-- Add Listing -->
                <a href="add-listing.html" class="add-listing">
                <span class="flaticon-plus-symbol"></span> Add Listing</a>


              <?php
                if(isset($_SESSION['email'])){
                  echo '
                  <nav class="nav main-menu">
                  <ul class="navigation" id="navbar">
  
                    <li class="dropdown">
                      <img
                        src="'.$ProfileImage.'"
                        alt=""
                        class="thumb rounded-full h-12 w-12"
                        />
                      <ul class="mr-12">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li><a id="logoutbtn">Logout</a></li>
                      </ul>
                    </li>
  
                    <!-- <li><a href="contact.html">Contact</a></li> -->
                    <li class="mm-add-listing">
                      <a href="add-listing.html" class="theme-btn btn-style-three"
                        ><span class="flaticon-plus-symbol"></span>Add Listing</a
                      >
                    </li>
                  </ul>
                </nav>';
                }
              ?>
             

              <?php
                if(!isset($_SESSION['email'])){
                  echo '
                    <div class="login-box">
                      <span class="flaticon-user"></span>
                      <a href="login.html" class="call-modal">Login</a> or
                      <a href="register.html" class="call-modal">Register </a>
                    </div>';
                }
              ?>

              <!-- Login/Register -->

            </div>

          </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
          <div class="logo">
            <a href="index.html"
              ><img src="images/logo.png" alt="" title=""
            /></a>
          </div>

          <!--Nav Box-->
          <div class="nav-outer clearfix">
            <div class="outer-box">
              <!-- Search Btn -->
              <div class="search-box">
                <button class="search-btn mobile-search-btn">
                  <i class="flaticon-magnifying-glass"></i>
                </button>
              </div>

              <!-- Cart btn -->
              <div class="cart-btn">
                <a href="shopping-cart.html"
                  ><i class="icon flaticon-shopping-bag"></i>
                  <span class="count">2</span></a
                >
              </div>

              <!-- Login/Register -->
              <div class="login-box">
                <a href="login.html" class="call-modal"
                  ><span class="flaticon-user"></span
                ></a>
              </div>
              <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"
                ><span class="fa fa-bars"></span
              ></a>
            </div>
          </div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>

        <!-- Header Search -->
        <div class="search-popup">
          <span class="search-back-drop"></span>

          <div class="search-inner">
            <button class="close-search">
              <span class="fa fa-times"></span>
            </button>
            <form
              method="post"
              action="https://creativelayers.net/themes/listdo-html/blog-showcase.html"
            >
              <div class="form-group">
                <input
                  type="search"
                  name="search-field"
                  value=""
                  placeholder="Search..."
                  required=""
                />
                <button type="submit">
                  <i class="flaticon-magnifying-glass"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Header Search -->
      </header>
      <!--End Main Header -->

      <!-- Banner Section-->
      <section class="banner-section">
        <!-- Background Layer -->
        <div
          class="background-layer"
          style="background-image: url(images/banner/1.jpg)"
        ></div>

        <div class="auto-container">
          <div class="content-box">
            <!-- Upper Heading -->
            <div class="upper-heading">
              <h3>
                Discover The
                <!-- Typed words can be configured in script settings at the bottom of this HTML file -->
                <span class="typed-words"></span>
              </h3>
              <p>
                Find great places to stay, eat, shop, or visit from local
                experts.
              </p>
            </div>

            <!-- Listing Search Tabs -->
            <div class="listing-search-tabs tabs-box">
              <ul class="tab-buttons">
                <li class="tab-btn active-btn" data-tab="#tab1">Places</li>
                <li class="tab-btn" data-tab="#tab2">Events</li>
                <li class="tab-btn" data-tab="#tab3">Jobs</li>
                <li class="tab-btn" data-tab="#tab4">Real Estate</li>
                <li class="tab-btn" data-tab="#tab5">Cars</li>
              </ul>

              <div class="tabs-content">
                <!--Tab-->
                <div class="tab active-tab" id="tab1">
                  <div class="listing-search-form">
                    <form
                      method="post"
                      action="https://creativelayers.net/themes/listdo-html/index.html"
                    >
                      <div class="row">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="What are you looking for?"
                          />
                        </div>
                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-3 col-md-6 col-sm-12 location"
                        >
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="Lucation"
                          />
                          <span
                            class="icon flaticon-placeholder"
                            data-text="Type and hit enter"
                          ></span>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                          <select class="chosen-select">
                            <option>All Categories</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                            <option>Apartments</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-2 col-md-6 col-sm-12 text-right"
                        >
                          <button type="submit" class="theme-btn btn-style-two">
                            Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab2">
                  <div class="listing-search-form">
                    <form
                      method="post"
                      action="https://creativelayers.net/themes/listdo-html/index.html"
                    >
                      <div class="row">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="What are you looking for?"
                          />
                        </div>
                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-3 col-md-6 col-sm-12 location"
                        >
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="Lucation"
                          />
                          <span
                            class="icon flaticon-placeholder"
                            data-text="Type and hit enter"
                          ></span>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                          <select class="chosen-select">
                            <option>All Categories</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                            <option>Apartments</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-2 col-md-6 col-sm-12 text-right"
                        >
                          <button type="submit" class="theme-btn btn-style-two">
                            Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab3">
                  <div class="listing-search-form">
                    <form
                      method="post"
                      action="https://creativelayers.net/themes/listdo-html/index.html"
                    >
                      <div class="row">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="What are you looking for?"
                          />
                        </div>
                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-3 col-md-6 col-sm-12 location"
                        >
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="Lucation"
                          />
                          <span
                            class="icon flaticon-placeholder"
                            data-text="Type and hit enter"
                          ></span>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                          <select class="chosen-select">
                            <option>All Categories</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                            <option>Apartments</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-2 col-md-6 col-sm-12 text-right"
                        >
                          <button type="submit" class="theme-btn btn-style-two">
                            Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab4">
                  <div class="listing-search-form">
                    <form
                      method="post"
                      action="https://creativelayers.net/themes/listdo-html/index.html"
                    >
                      <div class="row">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="What are you looking for?"
                          />
                        </div>
                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-3 col-md-6 col-sm-12 location"
                        >
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="Lucation"
                          />
                          <span
                            class="icon flaticon-placeholder"
                            data-text="Type and hit enter"
                          ></span>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                          <select class="chosen-select">
                            <option>All Categories</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                            <option>Apartments</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-2 col-md-6 col-sm-12 text-right"
                        >
                          <button type="submit" class="theme-btn btn-style-two">
                            Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab5">
                  <div class="listing-search-form">
                    <form
                      method="post"
                      action="https://creativelayers.net/themes/listdo-html/index.html"
                    >
                      <div class="row">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="What are you looking for?"
                          />
                        </div>
                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-3 col-md-6 col-sm-12 location"
                        >
                          <input
                            type="text"
                            name="listing-search"
                            placeholder="Lucation"
                          />
                          <span
                            class="icon flaticon-placeholder"
                            data-text="Type and hit enter"
                          ></span>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                          <select class="chosen-select">
                            <option>All Categories</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                            <option>Apartments</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div
                          class="form-group col-lg-2 col-md-6 col-sm-12 text-right"
                        >
                          <button type="submit" class="theme-btn btn-style-two">
                            Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Browse Category -->
          <div class="browse-catergory">
            <div class="text">Or browse the highlights</div>
            <ul class="browse-cat-list">
              <li>
                <a href="#"
                  ><span class="icon flaticon-hamburger"></span> Eat & Drink</a
                >
              </li>
              <li>
                <a href="#"
                  ><span class="icon flaticon-shopping-cart"></span> Shopping
                </a>
              </li>
              <li>
                <a href="#"><span class="icon flaticon-bed"></span> Hotels </a>
              </li>
              <li>
                <a href="#"
                  ><span class="icon flaticon-guitar"></span> Nightlife
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- End Banner Section-->

      <!-- Features Section -->
      <section class="features-section">
        <div class="auto-container">
          <div class="sec-title text-center">
            <h2>What are you interested in?</h2>
            <span class="divider"></span>
            <div class="text">
              Explore some of the best tips from around the city from our
              partners and friends.
            </div>
          </div>

          <div class="row">
            <!-- Feature Block -->
            <div class="feature-block col-lg-6 col-md-12 col-sm-12">
              <div class="inner-box">
                <figure class="image">
                  <img src="images/resource/interested-1.jpg" alt="" />
                </figure>
                <div class="overlay-box">
                  <div class="content">
                    <span class="icon-box flaticon-musical-note"></span>
                    <h5>Nightlife</h5>
                    <span class="locations">07 Locations</span>
                    <a href="#" class="overlay-link"></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box">
                <figure class="image">
                  <img src="images/resource/interested-2.jpg" alt="" />
                </figure>
                <div class="overlay-box">
                  <div class="content">
                    <span class="icon-box flaticon-hotel-bell"></span>
                    <h5>Restaurant</h5>
                    <span class="locations">58 Locations</span>
                    <a href="#" class="overlay-link"></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box">
                <figure class="image">
                  <img src="images/resource/interested-3.jpg" alt="" />
                </figure>
                <div class="overlay-box">
                  <div class="content">
                    <span class="icon-box flaticon-weightlifting"></span>
                    <h5>Gym & Fitness</h5>
                    <span class="locations">43 Locations</span>
                    <a href="#" class="overlay-link"></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box">
                <figure class="image">
                  <img src="images/resource/interested-4.jpg" alt="" />
                </figure>
                <div class="overlay-box">
                  <div class="content">
                    <span class="icon-box flaticon-museum"></span>
                    <h5>Art & History</h5>
                    <span class="locations">13 Locations</span>
                    <a href="#" class="overlay-link"></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box">
                <figure class="image">
                  <img src="images/resource/interested-5.jpg" alt="" />
                </figure>
                <div class="overlay-box">
                  <div class="content">
                    <span class="icon-box flaticon-bed"></span>
                    <h5>Hotels</h5>
                    <span class="locations">129 Locations</span>
                    <a href="#" class="overlay-link"></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-6 col-md-12 col-sm-12">
              <div class="inner-box">
                <figure class="image">
                  <img src="images/resource/interested-6.jpg" alt="" />
                </figure>
                <div class="overlay-box">
                  <div class="content">
                    <span class="icon-box flaticon-tent"></span>
                    <h5>Outdoor Activities</h5>
                    <span class="locations">94 Locations</span>
                    <a href="#" class="overlay-link"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Features Section -->

      <!-- Listing Section -->
      <section class="listing-section">
        <div class="auto-container">
          <div class="sec-title text-center">
            <h2>What are you interested in?</h2>
            <span class="divider"></span>
            <div class="text">
              Explore some of the best tips from around the city from our
              partners and friends.
            </div>
          </div>

          <div class="three-items-carousel owl-carousel owl-theme default-nav">
            <!-- Listing lLock -->
            <div class="listing-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/listing/1-1.jpg" alt="" />
                  </figure>
                  <div class="tags">
                    <span>Featured</span>
                    <span>$25 - $35</span>
                  </div>
                  <a href="#" class="like-btn"
                    ><span class="flaticon-heart"></span> Save</a
                  >
                </div>
                <div class="lower-content">
                  <div class="user-thumb">
                    <img src="images/resource/user-thumb-1.jpg" alt="" />
                  </div>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="title">(7 review)</span>
                  </div>
                  <h3>
                    <a href="#"
                      >Private Hotel-Spa <span class="icon icon-verified"></span
                    ></a>
                  </h3>
                  <div class="text">
                    Luxury hotel in the heart of Bloomsbury.
                  </div>
                  <ul class="info">
                    <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                    <li>
                      <span class="flaticon-phone-call"></span> +61 2 8236 9200
                    </li>
                  </ul>
                </div>
                <div class="bottom-box">
                  <div class="places">
                    <div class="place">
                      <span class="icon flaticon-bed"></span> Hotels
                    </div>
                    <span class="count">+3</span>
                  </div>
                  <div class="status">Now Closed</div>
                </div>
              </div>
            </div>

            <!-- Listing lLock -->
            <div class="listing-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/listing/1-2.jpg" alt="" />
                  </figure>
                  <div class="tags">
                    <span>Featured</span>
                  </div>
                  <a href="#" class="like-btn"
                    ><span class="flaticon-heart"></span> Save</a
                  >
                </div>
                <div class="lower-content">
                  <div class="user-thumb">
                    <img src="images/resource/user-thumb-2.jpg" alt="" />
                  </div>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="title">(7 review)</span>
                  </div>
                  <h3><a href="#">Moonlight Restourant </a></h3>
                  <div class="text">Italian traditional served pizzeria.</div>
                  <ul class="info">
                    <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                    <li><span class="flaticon-tray"></span> +61 2 8236 9200</li>
                  </ul>
                </div>
                <div class="bottom-box">
                  <div class="places">
                    <div class="place pink">
                      <span class="icon flaticon-hotel-1"></span> Restourant
                    </div>
                    <span class="count">+3</span>
                  </div>
                  <div class="status">Open</div>
                </div>
              </div>
            </div>

            <!-- Listing lLock -->
            <div class="listing-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/listing/1-3.jpg" alt="" />
                  </figure>
                  <a href="#" class="like-btn"
                    ><span class="flaticon-heart"></span> Save</a
                  >
                </div>
                <div class="lower-content">
                  <div class="user-thumb">
                    <img src="images/resource/user-thumb-3.jpg" alt="" />
                  </div>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="title">(7 review)</span>
                  </div>
                  <h3><a href="#">Best Museum</a></h3>
                  <div class="text">This cafe is small but bustling.</div>
                  <ul class="info">
                    <li><span class="flaticon-pin"></span> Art & History</li>
                    <li>
                      <span class="flaticon-phone-call"></span> +61 2 8236 9200
                    </li>
                  </ul>
                </div>
                <div class="bottom-box">
                  <div class="places">
                    <div class="place purple">
                      <span class="icon flaticon-museum"></span>Art & History
                    </div>
                    <span class="count">+3</span>
                  </div>
                  <div class="status">Now Closed</div>
                </div>
              </div>
            </div>

            <!-- Listing lLock -->
            <div class="listing-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/listing/1-1.jpg" alt="" />
                  </figure>
                  <div class="tags">
                    <span>Featured</span>
                    <span>$25 - $35</span>
                  </div>
                  <a href="#" class="like-btn"
                    ><span class="flaticon-heart"></span> Save</a
                  >
                </div>
                <div class="lower-content">
                  <div class="user-thumb">
                    <img src="images/resource/user-thumb-1.jpg" alt="" />
                  </div>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="title">(7 review)</span>
                  </div>
                  <h3>
                    <a href="#"
                      >Private Hotel-Spa <span class="icon icon-verified"></span
                    ></a>
                  </h3>
                  <div class="text">
                    Luxury hotel in the heart of Bloomsbury.
                  </div>
                  <ul class="info">
                    <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                    <li>
                      <span class="flaticon-phone-call"></span> +61 2 8236 9200
                    </li>
                  </ul>
                </div>
                <div class="bottom-box">
                  <div class="places">
                    <div class="place">
                      <span class="icon flaticon-bed"></span> Hotels
                    </div>
                    <span class="count">+3</span>
                  </div>
                  <div class="status">Now Closed</div>
                </div>
              </div>
            </div>

            <!-- Listing lLock -->
            <div class="listing-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/listing/1-2.jpg" alt="" />
                  </figure>
                  <div class="tags">
                    <span>Featured</span>
                  </div>
                  <a href="#" class="like-btn"
                    ><span class="flaticon-heart"></span> Save</a
                  >
                </div>
                <div class="lower-content">
                  <div class="user-thumb">
                    <img src="images/resource/user-thumb-2.jpg" alt="" />
                  </div>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="title">(7 review)</span>
                  </div>
                  <h3><a href="#">Moonlight Restourant </a></h3>
                  <div class="text">Italian traditional served pizzeria.</div>
                  <ul class="info">
                    <li><span class="flaticon-pin"></span> Santa Monica, CA</li>
                    <li><span class="flaticon-tray"></span> +61 2 8236 9200</li>
                  </ul>
                </div>
                <div class="bottom-box">
                  <div class="places">
                    <div class="place pink">
                      <span class="icon flaticon-hotel-1"></span> Restourant
                    </div>
                    <span class="count">+3</span>
                  </div>
                  <div class="status">Open</div>
                </div>
              </div>
            </div>

            <!-- Listing lLock -->
            <div class="listing-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/listing/1-3.jpg" alt="" />
                  </figure>
                  <a href="#" class="like-btn"
                    ><span class="flaticon-heart"></span> Save</a
                  >
                </div>
                <div class="lower-content">
                  <div class="user-thumb">
                    <img src="images/resource/user-thumb-3.jpg" alt="" />
                  </div>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="title">(7 review)</span>
                  </div>
                  <h3><a href="#">Best Museum</a></h3>
                  <div class="text">This cafe is small but bustling.</div>
                  <ul class="info">
                    <li><span class="flaticon-pin"></span> Art & History</li>
                    <li>
                      <span class="flaticon-phone-call"></span> +61 2 8236 9200
                    </li>
                  </ul>
                </div>
                <div class="bottom-box">
                  <div class="places">
                    <div class="place purple">
                      <span class="icon flaticon-museum"></span>Art & History
                    </div>
                    <span class="count">+3</span>
                  </div>
                  <div class="status">Now Closed</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Listing Section -->

      <!-- How It Works -->
      <section class="how-it-works">
        <div class="auto-container">
          <div class="sec-title text-center">
            <h2>See How It Works</h2>
            <span class="divider"></span>
            <div class="text">
              Discover how Listable can you help you find everything you want.
            </div>
          </div>
          <div class="row">
            <!-- Work Block -->
            <div class="work-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <figure class="icon-box">
                  <img src="images/icons/process-1.png" alt="" />
                </figure>
                <h4><a href="#">Choose What To Do</a></h4>
                <div class="text">
                  Looking for a cozy hotel to stay, a restaurant to eat, a
                  museum to visit or a mall to do some shopping?
                </div>
              </div>
            </div>

            <!-- Work Block -->
            <div class="work-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <figure class="icon-box">
                  <img src="images/icons/process-2.png" alt="" />
                </figure>
                <h4><a href="#">Find What You Want</a></h4>
                <div class="text">
                  Looking for a cozy hotel to stay, a restaurant to eat, a
                  museum to visit or a mall to do some shopping?
                </div>
              </div>
            </div>

            <!-- Work Block -->
            <div class="work-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <figure class="icon-box">
                  <img src="images/icons/process-3.png" alt="" />
                </figure>
                <h4><a href="#">Explore Amazing Places</a></h4>
                <div class="text">
                  Looking for a cozy hotel to stay, a restaurant to eat, a
                  museum to visit or a mall to do some shopping?
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End How It Works -->

      <!-- Call to Action -->
      <section
        class="call-to-action"
        style="background-image: url(images/background/1.jpg)"
      >
        <div class="auto-container">
          <div class="content">
            <h3>Need More Information</h3>
            <div class="text">
              Keep calm and get a special discount for all oders over $50 from
              The Naturel Coffee.<br />
              Hurry up! Only 3 days left.
            </div>
            <div class="btn-box">
              <a href="#" class="theme-btn btn-style-three"
                >Explore <span class="flaticon-right"></span
              ></a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Call to Action -->

      <!-- Testimonial Section -->
      <section class="testimonial-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title text-center">
            <h2>What Our Users Say</h2>
            <span class="divider"></span>
            <div class="text">
              Discover how Listable can you help you find everything you want.
            </div>
          </div>

          <div class="testimonial-outer">
            <!-- Product Thumbs Carousel -->
            <div class="client-thumb-outer">
              <div class="client-thumbs-carousel owl-carousel owl-theme">
                <div class="thumb-item">
                  <figure class="thumb-box">
                    <img src="images/resource/testi-thumb-1.jpg" alt="" />
                  </figure>
                  <div class="author-info">
                    <div class="author-name">Lara Croft</div>
                    <div class="designation">Restaurant Owner</div>
                  </div>
                </div>
                <div class="thumb-item">
                  <figure class="thumb-box">
                    <img src="images/resource/testi-thumb-2.jpg" alt="" />
                  </figure>
                  <div class="author-info">
                    <div class="author-name">Lara Croft</div>
                    <div class="designation">Restaurant Owner</div>
                  </div>
                </div>
                <div class="thumb-item">
                  <figure class="thumb-box">
                    <img src="images/resource/testi-thumb-3.jpg" alt="" />
                  </figure>
                  <div class="author-info">
                    <div class="author-name">Lara Croft</div>
                    <div class="designation">Restaurant Owner</div>
                  </div>
                </div>

                <div class="thumb-item">
                  <figure class="thumb-box">
                    <img src="images/resource/testi-thumb-4.jpg" alt="" />
                  </figure>
                  <div class="author-info">
                    <div class="author-name">Lara Croft</div>
                    <div class="designation">Restaurant Owner</div>
                  </div>
                </div>
                <div class="thumb-item">
                  <figure class="thumb-box">
                    <img src="images/resource/testi-thumb-5.jpg" alt="" />
                  </figure>
                  <div class="author-info">
                    <div class="author-name">Lara Croft</div>
                    <div class="designation">Restaurant Owner</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Client Testimonial Carousel -->
            <div class="client-testimonial-carousel owl-carousel owl-theme">
              <!--Testimonial Block -->
              <div class="testimonial-block">
                <div class="inner-box">
                  <div class="text">
                    Especially i want to give thanks to support team, this guys
                    are friendly, <br />
                    correct, gave me quick and complete answers.
                  </div>
                  <span class="title">Good job!</span>
                </div>
              </div>

              <!--Testimonial Block -->
              <div class="testimonial-block">
                <div class="inner-box">
                  <div class="text">
                    Especially i want to give thanks to support team, this guys
                    are friendly, <br />
                    correct, gave me quick and complete answers.
                  </div>
                  <span class="title">Good job!</span>
                </div>
              </div>

              <!--Testimonial Block -->
              <div class="testimonial-block">
                <div class="inner-box">
                  <div class="text">
                    Especially i want to give thanks to support team, this guys
                    are friendly, <br />
                    correct, gave me quick and complete answers.
                  </div>
                  <span class="title">Good job!</span>
                </div>
              </div>

              <!--Testimonial Block -->
              <div class="testimonial-block">
                <div class="inner-box">
                  <div class="text">
                    Especially i want to give thanks to support team, this guys
                    are friendly, <br />
                    correct, gave me quick and complete answers.
                  </div>
                  <span class="title">Good job!</span>
                </div>
              </div>

              <!--Testimonial Block -->
              <div class="testimonial-block">
                <div class="inner-box">
                  <div class="text">
                    Especially i want to give thanks to support team, this guys
                    are friendly, <br />
                    correct, gave me quick and complete answers.
                  </div>
                  <span class="title">Good job!</span>
                </div>
              </div>

              <!--Testimonial Block -->
              <div class="testimonial-block">
                <div class="inner-box">
                  <div class="text">
                    Especially i want to give thanks to support team, this guys
                    are friendly, <br />
                    correct, gave me quick and complete answers.
                  </div>
                  <span class="title">Good job!</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonial Section -->

      <!-- News Section -->
      <section class="news-section">
        <div class="auto-container">
          <div class="sec-title text-center">
            <h2>Tips & acArticles</h2>
            <span class="divider"></span>
            <div class="text">Browse the latest articles from our blog.</div>
          </div>

          <div class="row">
            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/news-1.jpg" alt="" />
                  </figure>
                  <div class="tags">Lifestyle, Outdoor</div>
                  <a href="blog-single.html" class="overlay-link"></a>
                </div>
                <div class="lower-content">
                  <h3>
                    <a href="blog-single.html">Etiquette Tips For Travellers</a>
                  </h3>
                  <div class="date">October 20, 2019</div>
                </div>
              </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/news-2.jpg" alt="" />
                  </figure>
                  <div class="tags">Gym, Fitness</div>
                  <a href="blog-single.html" class="overlay-link"></a>
                </div>
                <div class="lower-content">
                  <h3>
                    <a href="blog-single.html">The Annual Gathering Comunity</a>
                  </h3>
                  <div class="date">October 20, 2019</div>
                </div>
              </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/news-3.jpg" alt="" />
                  </figure>
                  <div class="tags">Hotels, Travel</div>
                  <a href="blog-single.html" class="overlay-link"></a>
                </div>
                <div class="lower-content">
                  <h3>
                    <a href="blog-single.html">The Famous Streets of London</a>
                  </h3>
                  <div class="date">October 20, 2019</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Btn Box -->
          <div class="btn-box">
            <a href="#" class="theme-btn btn-style-two"
              >View All <span class="flaticon-right"></span
            ></a>
          </div>
        </div>
      </section>
      <!-- End News Section -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- Footer Upper -->
        <div class="footer-upper">
          <ul class="footer-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Listings</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <!-- Footer Content -->
        <div class="footer-content">
          <div class="auto-container">
            <ul class="social-icon-one">
              <li>
                <a href="#"><span class="fab fa-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="fab fa-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="fab fa-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="fab fa-pinterest"></span></a>
              </li>
              <li>
                <a href="#"><span class="fab fa-dribbble"></span></a>
              </li>
              <li>
                <a href="#"><span class="fab fa-google"></span></a>
              </li>
            </ul>

            <ul class="copyright-text">
              <li>Copyright © 2019 Listdo</li>
              <li>New York, NY</li>
              <li><a href="#">+61 2 8236 9200</a></li>
            </ul>
          </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
          <div class="text">Proudly Listdo by CreativeLayers</div>
        </div>

        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html">
          <span class="flaticon-up"></span>
        </div>
      </footer>
      <!-- End Footer -->
    </div>
    <!-- End Page Wrapper -->

    <script src="js/index.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/chosen.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/jquery.hideseek.min.js"></script>
    <script src="js/mmenu.polyfills.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>

    <!-- Typed Script -->
    <script src="js/typed.js"></script>
    <script>
      var typed = new Typed(".typed-words", {
        strings: ["City Gems", " Restaurants", " Hotels"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true,
      });
    </script>
  </body>

  <!-- Mirrored from creativelayers.net/themes/listdo-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 08:17:52 GMT -->
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/restaurant_icon.png" type="image/x-icon" />
    <title>Restaurant Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">

</head>

<body>
    <div class="wrap">

        <!-- Header -->
        <div class="header">
            <div class="grid wide">
                <div class="header__wrap">
                    <div class="header__logo">
                        <a href="" class="header__logo-link">
                            <img src="./img/logo.png" alt="" class="header__logo-img">
                        </a>
                    </div>
                    <ul class="header__navbar hide-on-tablet hide-on-mobile">
                        <li class="header__navbar-item">
                            <a href="#" class="header__navbar-link">Home</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="#" class="header__navbar-link">About</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="#" class="header__navbar-link">Foods</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="#" class="header__navbar-link">Contact</a>
                        </li>
                    </ul>
                    <input type="checkbox" hidden class="check-mobile" name="" id="check">
                    <label for="check" class="overlay"></label>

                    <label for="check" class="header__navbar-icon hide-on-pc">
                        <i class="fas fa-bars"></i>
                    </label>
                    <!-- Navbar mobile -->
                    <nav for="check" class="navbar__mobile">
                        <label for="check" class="navbar__mobile-close">
                            <i class="navbar__mobile-close-icon fas fa-times"></i>
                        </label>
                        <ul class="nav__mobile-list">
                            <li class="nav__mobile-item">
                                <a href="" class="nav__mobile-item-link">Home</a>
                            </li>
                            <li class="nav__mobile-item">
                                <a href="" class="nav__mobile-item-link">About</a>
                            </li>
                            <li class="nav__mobile-item">
                                <a href="" class="nav__mobile-item-link">Foods</a>
                            </li>
                            <li class="nav__mobile-item">
                                <a href="" class="nav__mobile-item-link">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="header__search">
                <div class="grid">
                    <div class="header__background">
                    </div>
                    <div class="header__search-form">
                        <div class="header__search-wrap">
                            <input type="text" placeholder="Search Food..." class="header__search-input" >
                        </div>
                        <div class="btn">
                            <button class="search-btn">Search</button>
                        </div>
                    </div>
                        
                    <!-- Header search history -->
                    <div class="header__search-history">
                        <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                        <ul class="header__search-history-list">
                            <li class="header__search-history-item">
                                <a href="">Bánh Pizza</a>
                            </li>
                            <li class="header__search-history-item">
                                <a href="">Bánh Burger</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>    

        <!-- Content -->
        <div class="content">

            <!-- Categories -->
            <div class="categories">
                <div class="content__title">
                    <h1>Explore Foods</h1>
                </div>
                <div class="content">
                    <div class="grid wide">
                        <div class="row">
                            <div class="col l-4 m-6 c-12">
                                <div class="food__wrap">
                                    <a href="#" class="food-list">
                                        <img src="./img/pizza.jpg" alt="" class="food-item">
                                    </a>
                                    <div class="food-name">
                                        <h1>Pizza</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-4 m-6 c-12">
                                <div class="food__wrap">
                                    <a href="#" class="food-list">
                                        <img src="./img/burger.jpg" alt="" class="food-item">
                                    </a>
                                    <div class="food-name">
                                        <h1>Burger</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-4 m-6 c-12">
                                <div class="food__wrap">
                                    <a href="#" class="food-list">
                                        <img src="./img/momo.jpg" alt="" class="food-item">
                                    </a>
                                    <div class="food-name">
                                        <h1>Momo</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Food Menu -->
            <div class="food__menu">
                <div class="food__menu-heading">
                    <h1>Food Menu</h1>
                </div>
                    <div class="grid wide">
                        <div class="row">
                                <div class="col l-6 m-6 c-12 mb">
                                    <div class="food__list">
                                        <div class="food__list-img">
                                            <img src="./img/menu-pizza.jpg" alt="" class="food__list-img">
                                        </div>
                                        <div class="food__list-description">
                                            <h1 class="pad title-des">Food Title</h1>
                                            <h2 class="pad">$2.3</h2>
                                            <p class="pad food-text hide-on-tablet">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                            <button class="food__list-buy-btn" id="myBtn">Order Now</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-12 mb">
                                    <div class="food__list">
                                        <div class="food__list-img">
                                            <img src="./img/menu-pizza.jpg" alt="" class="food__list-img">
                                        </div>
                                        <div class="food__list-description">
                                            <h1 class="pad title-des">Food Title</h1>
                                            <h2 class="pad">$2.3</h2>
                                            <p class="pad food-text hide-on-tablet">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                            <button class="food__list-buy-btn" id="myBtn">Order Now</button>
                                        </div>
    
                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-12 mb">
                                    <div class="food__list">
                                        <div class="food__list-img">
                                            <img src="./img/menu-pizza.jpg" alt="" class="food__list-img">
                                        </div>
                                        <div class="food__list-description">
                                            <h1 class="pad title-des">Food Title</h1>
                                            <h2 class="pad">$2.3</h2>
                                            <p class="pad food-text hide-on-tablet">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                            <button class="food__list-buy-btn" id="myBtn">Order Now</button>
                                        </div>
    
                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-12 mb">
                                    <div class="food__list">
                                        <div class="food__list-img">
                                            <img src="./img/menu-pizza.jpg" alt="" class="food__list-img">
                                        </div>
                                        <div class="food__list-description">
                                            <h1 class="pad title-des">Food Title</h1>
                                            <h2 class="pad">$2.3</h2>
                                            <p class="pad food-text hide-on-tablet">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                            <button class="food__list-buy-btn" id="myBtn">Order Now</button>
                                        </div>
    
                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-12 mb">
                                    <div class="food__list">
                                        <div class="food__list-img">
                                            <img src="./img/menu-pizza.jpg" alt="" class="food__list-img">
                                        </div>
                                        <div class="food__list-description">
                                            <h1 class="pad title-des">Food Title</h1>
                                            <h2 class="pad">$2.3</h2>
                                            <p class="pad food-text hide-on-tablet">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                            <button class="food__list-buy-btn" id="myBtn">Order Now</button>
                                        </div>
    
                                    </div>
                                </div>
                                <div class="col l-6 m-6 c-12 mb">
                                    <div class="food__list">
                                        <div class="food__list-img">
                                            <img src="./img/menu-pizza.jpg" alt="" class="food__list-img">
                                        </div>
                                        <div class="food__list-description">
                                            <h1 class="pad title-des">Food Title</h1>
                                            <h2 class="pad">$2.3</h2>
                                            <p class="pad food-text hide-on-tablet">Made with Italian Sauce, Chicken, and organice vegetables</p>
                                            <button class="food__list-buy-btn" id="myBtn">Order Now</button>
                                        </div>
    
                                    </div>
                                </div>
                        </div>
                        <div class="food__menu-see-more">
                            <a href="" class="food__menu-see-more--link">See All Food</a>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="socials">
                <a href="https://www.facebook.com/profile.php?id=100016857480406" class="socials__link">
                    <i class="socials__link-icon--facebook fab fa-facebook"></i>
                </a>
                <a href="" class="socials__link">
                    <i class="socials__link-icon--instagram fab fa-instagram"></i>
                </a>
                <a href="" class="socials__link">
                    <i class="socials__link-icon--twitter fab fa-twitter"></i>
                </a>
            </div>
            <div class="copyright">
                <p>All rights reserved. Designed By
                    <a href="" class="copyright-text">Dung Bui</a>
                </p>
            </div>
        </div>
    </div>
    
    <!-- Modal layout  -->

    <label for="check" class="modal" id="myModal">

        <div class="modal__body">
            <div class="modal__content">
                    <span class="modal__content-close close">
                        <i class="fas fa-times"></i>
                    </span>
                    <div class="modal__content-food close">
                        <img src="./img/food1.jpg" alt="" class="modal__content-food-img">
                    </div>
                    <h2 class="modal__content-food-name">
                        Veg Muffin -
                        <span class="modal__content-food-price">
                            $16
                        </span>
                    </h2>
                    <div class="btn-wrap">
                        <button class="modal__content-buy-btn">
                            <a href="" class="modal__content-buy-btn--link">
                                Order Now
                                <i class="fas fa-caret-right"></i>
                            </a>
                        </button>
                    </div>
            </div>
        </div>

    </label>


    <!-- Javascript -->
    <script>
        
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn")
        var span = document.getElementsByClassName("close")[0];
         
         btn.onclick = function() {
            modal.style.display = "flex";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function() {
            if(event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>

</body>

</html>
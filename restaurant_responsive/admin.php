
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/restaurant_icon.png" type="image/x-icon" />
    <title>Admin UI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
</head>

<body>

    <div class="wrap">
            <!-- Header -->
            <div class="header">
                <div class="grid wide">
                    <div class="header__wrap">
                        <ul class="header__navbar">
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link">Home</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link">Admin</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link">Categories</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link">Food</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link">Order</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>   
            </div>

            <!-- Content -->

            <div class="dashboard border">
                <div class="grid wide">
                    <div class="title">
                        <span class="title-text">Dashboard</span>
                    </div>
                    <div class="row">
                        <div class="col l-3">
                            <div class="box">
                                <h1>4</h1>
                                <h2>Categories</h2>
                            </div>
                        </div>
                        <div class="col l-3">
                            <div class="box">
                                <h1>6</h1>
                                <h2>Foods</h2>
                            </div>
                        </div>
                        <div class="col l-3">
                            <div class="box">
                                <h1>3</h1>
                                <h2>Total Orders</h2>
                            </div>
                        </div>
                        <div class="col l-3">
                            <div class="box">
                                <h1>$36.00</h1>
                                <h2>Revenue Generated</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="manage-user border">
                <div class="grid wide">
                    <div class="title">
                        <span class="title-text">Manage Users</span>
                    </div>
                    <button class="btn change">Add New User</button>
                    <div class="row">
                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">S.N</p>
                            </div>

                            <div class="number pad">1.</div>
                            <div class="number pad">2.</div>
                            <div class="number pad">3.</div>
                            <div class="number pad">4.</div>
                        </div>
                        <div class="col l-2">
                            <div class="heading">
                                <p class="text">FullName</p>
                            </div>
                            <div class="fullname pad"> dung bui</div>
                            <div class="fullname pad"> dung bui</div>
                            <div class="fullname pad"> dung bui</div>
                            <div class="fullname pad"> dung bui</div>
                        </div>
                        <div class="col l-2">
                            <div class="heading">
                                <p class="text">UserName</p>
                            </div>
                            <div class="username pad">ffasf </div>
                            <div class="username pad">ffasf </div>
                            <div class="username pad">ffasf </div>
                            <div class="username pad">ffasf </div>

                        </div>
                        <div class="col l-5">
                            <div class="heading">
                                <p class="text">Actions</p>
                            </div>
                            <button class="btn change">Change Password</button>
                            <button class="btn update">Update Admin</button>
                            <button class="btn delete">Delete Admin</button>
                            <button class="btn change">Change Password</button>
                            <button class="btn update">Update Admin</button>
                            <button class="btn delete">Delete Admin</button>
                            <button class="btn change">Change Password</button>
                            <button class="btn update">Update Admin</button>
                            <button class="btn delete">Delete Admin</button>
                            <button class="btn change">Change Password</button>
                            <button class="btn update">Update Admin</button>
                            <button class="btn delete">Delete Admin</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="manage-category border">
                <div class="grid wide">
                    <div class="title">
                        <span class="title-text">Manage Category</span>
                    </div>
                    <button class="btn change">Add Category</button>
                    <div class="row">
                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">S.N</p>
                            </div>
                            <div class="number pading">1.</div>
                            <div class="number pading">2.</div>
                            <div class="number pading">3.</div>
                            <div class="number pading">4.</div>
                        </div>

                        <div class="col l-2">
                            <div class="heading">
                                <p class="text">Title</p>
                            </div>
                            <div class="title-food pading">Pizza</div>
                            <div class="title-food pading">Burger</div>
                            <div class="title-food pading">Momo</div>
                            <div class="title-food pading">Quia est ipsum id id</div>
                        </div>

                        <div class="col l-2">
                            <div class="heading">
                                <p class="text">Image</p>
                            </div>
                            <img src="./img/pizza.jpg" alt="" class="img">
                            <img src="./img/burger.jpg" alt="" class="img">
                            <img src="./img/momo.jpg" alt="" class="img">
                            <img src="./img/pizza.jpg" alt="" class="img">
                        </div>

                        <div class="col l-2">
                            <div class="heading">
                                <p class="text">Featured</p>
                            </div>
                            <div class="featured pading">Yes</div>
                            <div class="featured pading">Yes</div>
                            <div class="featured pading">Yes</div>
                            <div class="featured pading">Yes</div>
                        </div>

                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Active</p>
                            </div>
                            <div class="active pading">Yes</div>
                            <div class="active pading">Yes</div>
                            <div class="active pading">Yes</div>
                            <div class="active pading">Yes</div>
                        </div>

                        <div class="col l-3">
                            <div class="heading">
                                <p class="text">Actions</p>
                            </div>
                            <button class="btn update margin">Update Category</button>
                            <button class="btn delete margin">Delete Category</button>
                            <button class="btn update margin">Update Category</button>
                            <button class="btn delete margin">Delete Category</button>
                            <button class="btn update margin">Update Category</button>
                            <button class="btn delete margin">Delete Category</button>
                            <button class="btn update margin">Update Category</button>
                            <button class="btn delete margin">Delete Category</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="manage-food border">
                <div class="grid wide">
                    <div class="title">
                        <span class="title-text">Manage Food</span>
                    </div>
                    <button class="btn change">Add Food</button>
                    <div class="row">
                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">S.N</p>
                            </div>
                            <div class="number pa">1.</div>
                            <div class="number pa">2.</div>
                            <div class="number pa">3.</div>
                            <div class="number pa">4.</div>
                            <div class="number pa">5.</div>
                            <div class="number pa">6.</div>
                        </div>

                        <div class="col l-2">
                            <div class="heading">
                                <p class="text">Title</p>
                            </div>
                            <div class="title-food pa">Dumplings Special</div>
                            <div class="title-food pa">Best Burger</div>
                            <div class="title-food pa">Smoky BBQ Pizza</div>
                            <div class="title-food pa">Sadeko Momo</div>
                            <div class="title-food pa">Mixed Pizza</div>
                            <div class="title-food pa">Sed ipsum cillum in</div>
                        </div>

                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Price</p>
                            </div>
                            <div class="number pa">$5.00</div>
                            <div class="number pa">$4.00</div>
                            <div class="number pa">$6.00</div>
                            <div class="number pa">$6.00</div>
                            <div class="number pa">$10.00</div>
                            <div class="number pa">$52.00</div>
                        </div>

                        <div class="col l-2">
                            <div class="heading">
                                <p class="text">Image</p>
                            </div>
                            <img src="./img/pizza.jpg" alt="" class="image">
                            <img src="./img/burger.jpg" alt="" class="image">
                            <img src="./img/momo.jpg" alt="" class="image">
                            <img src="./img/pizza.jpg" alt="" class="image">
                            <img src="./img/pizza.jpg" alt="" class="image">
                            <p class="img-not-add">Img not Added</p>
                        </div>

                        <div class="col l-2">
                            <div class="heading">
                                <p class="text">Featured</p>
                            </div>
                            <div class="featured pa">Yes</div>
                            <div class="featured pa">No</div>
                            <div class="featured pa">Yes</div>
                            <div class="featured pa">Yes</div>
                            <div class="featured pa">No</div>
                            <div class="featured pa">Yes</div>
                        </div>

                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Active</p>
                            </div>
                            <div class="active pa">Yes</div>
                            <div class="active pa">No</div>
                            <div class="active pa">Yes</div>
                            <div class="active pa">No</div>
                            <div class="active pa">No</div>
                            <div class="active pa">No</div>
                        </div>

                        <div class="col l-3">
                            <div class="heading">
                                <p class="text">Actions</p>
                            </div>
                            <button class="btn update ma">Update Food</button>
                            <button class="btn delete ma">Delete Food</button>
                            <button class="btn update ma">Update Food</button>
                            <button class="btn delete ma">Delete Food</button>
                            <button class="btn update ma">Update Food</button>
                            <button class="btn delete ma">Delete Food</button>
                            <button class="btn update ma">Update Food</button>
                            <button class="btn delete ma">Delete Food</button>
                            <button class="btn update ma">Update Food</button>
                            <button class="btn delete ma">Delete Food</button>
                            <button class="btn update ma">Update Food</button>
                            <button class="btn delete ma">Delete Food</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="manage-order border">
                <div class="grid wide">
                    <div class="title">
                        <span class="title-text">Manage Order</span>
                    </div>
                    <div class="row">
                    <div class="col l-1">
                            <div class="heading">
                                <p class="text">S.N</p>
                            </div>
                            <div class="number padin">1.</div>
                            <div class="number padin">2.</div>
                            <div class="number padin">3.</div>
                        </div>

                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Food</p>
                            </div>
                            <div class="title-food padi">Dumplings Special</div>
                            <div class="title-food padi">Best Burger Famous</div>
                            <div class="title-food padi">Smoky BBQ Pizza</div>
                        </div>

                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Price</p>
                            </div>
                            <div class="number padin">5.00</div>
                            <div class="number padin">4.00</div>
                            <div class="number padin">6.00</div>
                        </div>

                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Quantity</p>
                            </div>
                            <div class="quantity padin">2</div>
                            <div class="quantity padin">3</div>
                            <div class="quantity padin">4</div>
                        </div>
                        
                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Total</p>
                            </div>
                            <div class="total padin">20.00</div>
                            <div class="total padin">16.00</div>
                            <div class="total padin">18.00</div>
                        </div>


                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">OrderDate</p>
                            </div>
                            <div class="date padi">2020-11-30 04:07:17</div>
                            <div class="date padi">2020-11-30 03:52:43</div>
                            <div class="date padi">2020-11-30 03:49:48</div>
                        </div>

                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Status</p>
                            </div>
                            <div class="status padin">Delivered</div>
                            <div class="status padin">Delivered</div>
                            <div class="status padin">Cancelled</div>
                        </div>

                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Customer</p>
                            </div>
                            <div class="customer-name padin">Dung Bui</div>
                            <div class="customer-name padin">Dung Bui</div>
                            <div class="customer-name padin">Dung Bui</div>
                        </div>
                        <div class="col l-2">
                            <div class="heading">
                                <p class="text">Email</p>
                            </div>
                            <div class="email padin">buithedung0304@gmail.com</div>
                            <div class="email padin">bdsdaung0304@gmail.com</div>
                            <div class="email padin">bgưewung0304@gmail.com</div>
                        </div>
                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Address</p>
                            </div>
                            <address class="add padin">Nam Dinh</address>
                            <address class="add padin">Nghia Hung Nam Dinh</address>
                            <address class="add padin">Nam Dinh</address>
                        </div>
                        <div class="col l-1">
                            <div class="heading">
                                <p class="text">Actions</p>
                            </div>
                            <button class="btn update padi">Update Food</button>
                            <button class="btn update padi">Update Food</button>
                            <button class="btn update padi">Update Food</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>  
            <!-- Footer -->
            <footer class="footer">
                <div class="footer-copyright">
                    2020 All rights reserved, Food House, Developed By -
                    <a href="" class="footer-copyright--link">Dung Bui</a>
                </div>
            </footer>
    </div>

</body>

</html>
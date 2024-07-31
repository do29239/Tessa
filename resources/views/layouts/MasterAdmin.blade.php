

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>Black Dashboard by Creative Tim</title>


    <!-- Nucleo Icons -->
    @vite('resources/css/admincss/nucleo-icons.css')
    <!-- CSS Files -->
    @vite('resources/css/admincss/custom.css')
    @vite('resources/css/admincss/black-dashboard.css')

</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-color="blue">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">CT</a>
                <a href="javascript:void(0)" class="simple-text logo-normal">Creative Tim</a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="{{url('/admin/dashboard')}}">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li><a href="{{ route('categories.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Categories</p></a></li>
                <li><a href="{{ route('brands.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Brands</p></a></li>
                <li><a href="{{ route('products.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Products</p></a></li>
                <li><a href="{{ route('orders.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Orders</p></a></li>
                <li><a href="{{ route('show_users') }}"><i class="tim-icons icon-book-bookmark"></i><p>Users</p></a></li>
                <li><a href="{{ route('requests.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Requests</p></a></li>
                <li><a href="{{ route('show_stylists') }}"><i class="tim-icons icon-book-bookmark"></i><p>Stylists</p></a></li>
                <li><a href="{{ route('orders.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Orders</p></a></li>
                <li><a href="{{ route('sales.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Sales</p></a></li>
                <li><a href="{{ route('codes.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Stylist Codes</p></a></li>
                <li><a href="{{ route('distributors.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Distributors</p></a></li>
                <li><a href="{{ route('coupons.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Coupons</p></a></li>
                <li><a href="{{ route('admin.bulkSale.create') }}"><i class="tim-icons icon-book-bookmark"></i><p>Bulk Sale</p></a></li>
                <li><a href="{{ url('/admin/icons') }}"><i class="tim-icons icon-atom"></i><p>Icons</p></a></li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle d-inline">
                        <button type="button" class="navbar-toggler" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                            <div class="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                </div>
                <div id="navigation" class="d-flex">
                    <ul class="navbar-nav custom-navbar-nav ml-auto">
                        <li class="custom-search-bar">
                            <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal">
                                <i class="tim-icons icon-zoom-split"></i>
                            </button>
                        </li>
                        <!-- Search Modal -->
                        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="searchModalLabel">Search</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('search') }}" method="GET">
                                        <div class="modal-body">
                                            <select name="searchType">
                                                <option value="Product">Product</option>
                                                <option value="User">Users</option>
                                                <option value="Course">Courses</option>
                                                <option value="Order">Orders</option>
                                            </select>
                                            <input type="text" name="query" placeholder="Type your search...">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <li class="custom-nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="form-inline">
                                @csrf
                                <button type="submit" class="btn btn-primary">{{ __('Log Out') }}</button>
                            </form>
                        </li>
                        <li class="separator d-lg-none"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->
        @yield('content')
        @vite('resources/js/adminjs/custom.js')
        <footer class="footer">

        </footer>
    </div>
</div>
<div class="modal right fade sidebarModal" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>
            <div class="modal-body">
                <ul class="sidebar-nav">
                    <li class="active">
                        <a href="{{url('/admin/dashboard')}}">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li><a href="{{ route('categories.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Categories</p></a></li>
                    <li><a href="{{ route('brands.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Brands</p></a></li>
                    <li><a href="{{ route('products.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Products</p></a></li>
                    <li><a href="{{ route('orders.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Orders</p></a></li>
                    <li><a href="{{ route('show_users') }}"><i class="tim-icons icon-book-bookmark"></i><p>Users</p></a></li>
                    <li><a href="{{ route('requests.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Requests</p></a></li>
                    <li><a href="{{ route('show_stylists') }}"><i class="tim-icons icon-book-bookmark"></i><p>Stylists</p></a></li>
                    <li><a href="{{ route('orders.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Orders</p></a></li>
                    <li><a href="{{ route('sales.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Sales</p></a></li>
                    <li><a href="{{ route('codes.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Stylist Codes</p></a></li>
                    <li><a href="{{ route('distributors.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Distributors</p></a></li>
                    <li><a href="{{ route('coupons.index') }}"><i class="tim-icons icon-book-bookmark"></i><p>Coupons</p></a></li>
                    <li><a href="{{ route('admin.bulkSale.create') }}"><i class="tim-icons icon-book-bookmark"></i><p>Bulk Sale</p></a></li>
                    <li><a href="{{ url('/admin/icons') }}"><i class="tim-icons icon-atom"></i><p>Icons</p></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



@vite('resources/js/bootstrap.bundle.min.js')

</body>

</html>
<style>
    /* Custom navbar styles */
    .custom-navbar-nav {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-end; /* Align items to the right */
        gap: 5px; /* Add small space between items */
        margin-left: auto; /* Push the navbar items to the right */
    }

    .custom-navbar-nav .custom-nav-item,
    .custom-navbar-nav .custom-search-bar {
        display: flex;
        align-items: center;
        margin: 0; /* Remove any default margins */
    }

    .custom-navbar-nav .custom-nav-item .btn {
        padding: 2px 8px; /* Make the button smaller */
        font-size: 12px; /* Adjust the font size */
    }

    @media (max-width: 768px) {
        .custom-navbar-nav {
            flex-direction: row; /* Force row direction on smaller screens */
        }

        .custom-navbar-nav .custom-nav-item,
        .custom-navbar-nav .custom-search-bar {
            display: flex;
            align-items: center;
        }
    }
</style>

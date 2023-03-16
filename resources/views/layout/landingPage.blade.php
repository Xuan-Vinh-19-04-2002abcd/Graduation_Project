<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Soccer Helper</title>
    <meta name="description" content="Knight is a beautiful Bootstrap 4 template for product landing pages." />

    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="assets/CSS/default.css" id="theme-color">
    
</head>

<body>

    <!--navigation-->
    <section class="smart-scroll">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="navbar-brand heading-black" href="#app">
                    Soccer Helper
                </a>
                <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span data-feather="grid"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#app">Application</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link page-scroll" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#blog">Blog</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link page-scroll d-flex flex-row align-items-center text-primary"
                                href="#">
                                <em data-feather="layout" width="18" height="18" class="mr-2"></em>
                                Try app now
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!--hero header-->
    <section class="py-7 py-md-0 bg-hero" id="home">
        <div class="container">
            <div class="row vh-md-100">
                <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                    <h1 class="heading-black text-capitalize">Welcome to Soccer Helper application</h1>
                    <p class="lead py-3">Soccer Helper is an application help quickly find the football field and match
                        the soccer team
                        in minutes. Download for free.</p>
                    <button class="btn btn-primary d-inline-flex flex-row align-items-center">
                        Get started now
                        <em class="ml-2" data-feather="arrow-right"></em>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient flex-1 d-flex align-items-stretch" id="app">
        <div class="container d-flex align-items-center">
            <div class="d-none col-md-5 d-md-block col-lg-4">
                <img src="assets/Images/soccer-helper-app-preview.png" alt="Preview Image" class="img-fluid" />
            </div>

            <div class="py-5 col-md-7 col-lg-8">
                <h2 class="text-center mt-0 mb-2 text-md-left">Introducing Soccer Helper</h1>
                    <h4 class="text-center my-0 text-md-left mb-md-5">
                        the app that keeps you and your friends connected on every platform
                        </h3>
                        <div class="text-center d-md-none">
                            <img src="assets/Images/soccer-helper-app-preview.png" alt="Preview Image"
                                class="preview-image-small" />
                        </div>
                        <p class="lead py-3">
                            Soccer Helper makes sharing your contact info and social media profiles
                            with old and new friends both fun and intuitive. With Soccer Helper, you
                            can:
                        </p>

                        <ul class="list-unstyled mb-4 py-1 mb-md-5">
                            <li class="d-flex py-2">
                                <i class="fa fa-check-circle pr-4" aria-hidden="true"></i>
                                Follow and connect with friends on up to 12 different social media
                                platforms
                            </li>
                            <li class="d-flex py-2">
                                <i class="fa fa-check-circle pr-4" aria-hidden="true"></i>
                                Stay in touch through real-time private and group chat
                            </li>
                            <li class="d-flex py-2">
                                <i class="fa fa-check-circle pr-4" aria-hidden="true"></i>
                                Discover new accounts and grow your network
                            </li>
                            <li class="d-flex py-2">
                                <i class="fa fa-check-circle pr-4" aria-hidden="true"></i>
                                And much more as new features are rolled out
                            </li>
                        </ul>

                        <div class="text-center text-md-left">
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <img src="assets/Images/icon-appstore-0ac658e90248e413db2bdc584e50b25b06a8229f6a74efb816b93194d0491829.svg"
                                    alt="App Store Link" class="app-store-badge" />
                                <img src="assets/Images/icon-googleplaystore-18c9b8d2140c5ad8657c670f05036c5a62760da182f1d8cbe8c40c467c7f2b4b.svg"
                                    alt="CH Play link" class="app-store-badge">
                            </a>
                        </div>
            </div>
        </div>
    </section>
    {{-- @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif --}}
    <!-- features section -->
    <section class="pt-6 pb-7" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="heading-black">Soccer Helper offers everything a football field owner needs.</h2>
                    <p class="text-muted lead">Why should register for football field management with Soccer helper?
                        Here are a few reasons why football owners should use the app:</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 mx-auto">
                    <div class="row feature-boxes">
                        <div class="col-md-6 box">
                            <div class="icon-box box-primary">
                                <div class="icon-box-inner">
                                    <span data-feather="edit-3" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Effective management</h5>
                            <p class="text-muted">
                                Simple, easy football field management solution anytime, anywhere on any device.</p>
                        </div>
                        <div class="col-md-6 box">
                            <div class="icon-box box-success">
                                <div class="icon-box-inner">
                                    <span data-feather="monitor" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Increase the revenue</h5>
                            <p class="text-muted">Sales increase by 10% or more! Cut costs and management time.</p>
                        </div>
                        <div class="col-md-6 box">
                            <div class="icon-box box-danger">
                                <div class="icon-box-inner">
                                    <span data-feather="layout" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Safe and reliable</h5>
                            <p class="text-muted">Keeping your business running smoothly is our top priority</p>
                        </div>
                        <div class="col-md-6 box">
                            <div class="icon-box box-info">
                                <div class="icon-box-inner">
                                    <span data-feather="globe" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Effective promotion</h5>
                            <p class="text-muted">A separate football field information page with thousands of daily
                                visitors!</p>
                        </div>
                        <button class="btn btn-primary d-inline-flex flex-row align-items-center" 
                        data-toggle="modal" data-target="#create-account-modal">
                            Contact Us
                            <em class="ml-2" data-feather="arrow-right"></em>
                        </button>
                        <div class="modal fade" id="create-account-modal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3>Contact with admin</h3>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('contactForm')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="text-info">Name</label>
                                                <input type="text" class="form-control" id="name"
                                                    name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="text-info">Address</label>
                                                <input type="text" class="form-control" id="address"
                                                    name="address">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class = "text-info">Phone Number</label>
                                                <input type="text" class="form-control " id="phone"
                                                    name="phone">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success" >Contact</button>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-md-6 mr-auto">
                    <h2>Soccer Helper is more than just an application.</h2>
                    <p class="mb-5">Suitable level, not playing bad, playing dirty. Comment and rate opponents after playing. We bring you to a healthy, fun sports community.</p>
                   
                </div>
                <div class="col-md-5">
                    <div class="slick-about">
                        <img src="assets/Images/sanbong2sanbong2.jpg" class="img-fluid rounded d-block mx-auto" alt="Work 1"/>
                        <img src="assets/Images/sanbong.jpg" class="img-fluid rounded d-block mx-auto" alt="Work 2"/>
                        <img src="assets/Images/sanbbong1b.jpg" class="img-fluid rounded d-block mx-auto" alt="Work 3"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <footer class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 mr-auto">
                    <h5>About Soccer Helper</h5>
                    <p class="text-muted">The first and largest football social network for brothers in Vietnam. Here, you can easily find a place to play, find teammates or opponents to play in the most fun, fair and safe way.</p>
                    <ul class="list-inline social social-sm">
                        <li class="list-inline-item">
                            <a href=""><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href=""><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href=""><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href=""><i class="fa fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Refund policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Partner</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Refer a friend</a></li>
                        <li><a href="#">Affiliates</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Log in</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-muted text-center small-xl">
                    &copy; 2023 Soccer Helper - All Rights Reserved
                </div>
            </div>
        </div>
    </footer>

    <!--scroll to top-->
    <div class="scroll-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- theme switcher (FOR DEMO ONLY - REMOVE FROM PRODUCTION)-->
    <div class="switcher-wrap">
        <div class="switcher-trigger">
            <span class="fa fa-gear"></span>
        </div>
        <div class="color-switcher">
            <h6>Color Switcher</h6>
            <ul class="mt-3 clearfix">
                <li class="bg-teal active" data-color="default" title="Default Teal"></li>
                <li class="bg-blue" data-color="blue" title="Blue"></li>
                <li class="bg-green" data-color="green" title="Green"></li>
            </ul>
            <p>These are just demo colors. You can <b>easily</b> create your own color scheme.</p>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="assets/JS/scripts.js"></script>

</body>

</html>

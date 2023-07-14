<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/templates/style.css')}}">
    <!-- font cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
<body>
        <div class="container grad text-center">
            <header >
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="text-white text-center mb-0 py-2">E-Money</h1>
                    </div>
                    <div class="col-md-7">
                        <ul class="nav justify-content-center py-3">
                            <li class="nav-item"><a class="btn btn-outline-primary fw-bolder text-white nav-link underline" href="#">Home</a></li>
                            <li class="nav-item"><a class="btn btn-outline-primary fw-bolder text-white nav-link underline" href="#">Service</a></li>
                            <li class="nav-item"><a class="btn btn-outline-primary fw-bolder text-white nav-link underline" href="#">Offer</a></li>
                            <li class="nav-item"><a class="btn btn-outline-primary fw-bolder text-white nav-link underline" href="#">About</a></li>
                            <li class="nav-item"><a class="btn btn-outline-primary fw-bolder text-white nav-link underline" href="#">Log In</a></li>
                        </ul>
                    </div>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/images/banner1.jpg')}}" class="d-block w-100" alt="..." width="100%" height="100%">
                                    <div class="carousel-caption d-none d-md-block fs-2">
                                        <h5 class="badge bg-dark text-wrap">First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                            </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/images/banner2.jpg')}}" class="d-block w-100" alt="..." width="100%" height="100%">
                                    <div class="carousel-caption d-none d-md-block fs-2">
                                        <h5 class="badge bg-dark text-wrap">Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/images/banner3.jpg')}}" class="d-block w-100" alt="..." width="100%" height="100%">
                                        <div class="carousel-caption d-none d-md-block fs-2">
                                            <h5 class="badge bg-dark text-wrap">Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                        </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                </div>
            </header>
            <main>
                    <!-- service section start -->
                        <div class="text fs-5 badge bg-dark text-wrap py-3 my-3">
                            <i class="fa-brands fa-servicestack fa-5x text-info"></i>
                            <h1 class="text fw-bolder text-white">Service</h1>
                        </div>
                        <div class="card py-3 m-3 grad">
                            <div class="card-body py-3 m-3 ">
                                <div class="row text-center">
                                    <div class="col-lg-4 my_style">
                                        <div class="card bg-success">
                                        <i class="fa fa-credit-card-alt fa-3x text-white"></i>
                                        <div class="title text-uppercase fs-5 fw-bolder badge bg-dark text-wrap text-success">cash in</div>
                                        <p class="fw-light text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam itaque harum, eos voluptatibus at, sequi perferendis tempore molestiae ad eveniet quidem ea recusandae? Officiis dolorum nihil deleniti et, minus beatae!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 my_style">
                                        <div class="card bg-warning">
                                        <i class="fa-solid fa-money-bill-transfer fa-3x text-white"></i>
                                        <div class="title text-uppercase fs-5 fw-bolder badge bg-dark text-wrap text-warning">Send Money</div>
                                        <p class="fw-light text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam itaque harum, eos voluptatibus at, sequi perferendis tempore molestiae ad eveniet quidem ea recusandae? Officiis dolorum nihil deleniti et, minus beatae!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 my_style">
                                        <div class="card bg-danger">
                                            <i class="fa fa-minus-square fa-3x text-white"></i>
                                            <div class="title text-uppercase fs-5 fw-bolder badge bg-dark text-wrap text-danger">Cash Out</div>
                                        <p class="fw-light text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam itaque harum, eos voluptatibus at, sequi perferendis tempore molestiae ad eveniet quidem ea recusandae? Officiis dolorum nihil deleniti et, minus beatae!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- create account section -->
                        <div class="text fs-5 badge bg-dark text-wrap py-3 my-3">
                            <i class="fa fa-folder-open fa-5x text-success"></i>
                            <h1 class="text fw-bolder text-white">Open E-Money Account</h1>
                        </div>
                        <div class="row py-3 m-3">
                            <div class="col-md-6">
                                <img class="img-fluid rounded-circle" src="{{asset('assets/images/account.avif')}}" alt="...">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Well done!</h4>
                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    <hr>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                </div>
                            </div>
                            <div class="col-md-6 my_style">
                                <img src="{{asset('assets/images/register.avif')}}" class="img-fluid rounded-circle" alt="...">
    
                                <div class="alert alert-primary" role="alert">
                                    Don't have account?? <a href="#" class="alert-link">go to register now </a>. Give it a click if you like.
                                </div>
                            </div>
                        </div>
                    <!-- offers section strat -->
                        <div class="text fs-5 badge bg-dark text-wrap">
                            <i class="fa fa-gift fa-5x text-danger" aria-hidden="true"></i>
                            <h1 class="text fw-bolder text-white">Current Offers</h1>
                        </div>
                        <div class="row py-3 m-3">
                            <div class="col-md-8 alert alert-warning alert-dismissible fade show p-3 m-3" role="alert">
                                <strong>Hey, this is the perfect time for cash out have no charge!</strong> You should check in on some of those fields below.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            
                            <div class="col-md-3 alert alert-success alert-dismissible fade show p-3 m-3" role="alert">
                                <strong>Send Money charge free!</strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        
                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide py-5 m-5 grad rounded-circle" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
    
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row text-center">
                                            <div class="col-md-4">
                                                <div class="card grad rounded-circle">
                                                    <img src=
                                                        "{{asset('assets/images/refferal.png')}}" 
                                                            class="card-img-top rounded-circle"
                                                    alt="img">
                                                    <div class="card-body rounded-circle">
                                                        <p class="fw-light text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia fugiat deserunt nihil hic voluptas blanditiis odit quibusdam culpa ipsa? Iure ab voluptates distinctio enim illum velit tenetur minima, nulla assumenda!</p>
                                                    </div>
                                                    <div class="form-control grad rounded-circle">
                                                    <a href="http://" class="btn btn-outline-info rounded-circle">Offer Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card grad rounded-circle">
                                                    <img src=
                                                        "{{asset('assets/images/refferal.png')}}" 
                                                            class="card-img-top rounded-circle"
                                                    alt="img">
                                                    <div class="card-body rounded-circle">
                                                        <p class="fw-light text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia fugiat deserunt nihil hic voluptas blanditiis odit quibusdam culpa ipsa? Iure ab voluptates distinctio enim illum velit tenetur minima, nulla assumenda!</p>
                                                    </div>
                                                    <div class="form-control grad rounded-circle">
                                                    <a href="http://" class="btn btn-outline-info rounded-circle">Offer Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card grad rounded-circle">
                                                    <img src=
                                                        "{{asset('assets/images/refferal.png')}}" 
                                                            class="card-img-top rounded-circle"
                                                    alt="img">
                                                    <div class="card-body rounded-circle">
                                                        <p class="fw-light text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia fugiat deserunt nihil hic voluptas blanditiis odit quibusdam culpa ipsa? Iure ab voluptates distinctio enim illum velit tenetur minima, nulla assumenda!</p>
                                                    </div>
                                                    <div class="form-control grad rounded-circle">
                                                    <a href="http://" class="btn btn-outline-info rounded-circle">Offer Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row text-center">
                                            <div class="col-md-4">
                                                <div class="card grad rounded-circle">
                                                    <img src=
                                                        "{{asset('assets/images/refferal.png')}}" 
                                                            class="card-img-top rounded-circle"
                                                    alt="img">
                                                    <div class="card-body rounded-circle">
                                                        <p class="fw-light text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia fugiat deserunt nihil hic voluptas blanditiis odit quibusdam culpa ipsa? Iure ab voluptates distinctio enim illum velit tenetur minima, nulla assumenda!</p>
                                                    </div>
                                                    <div class="form-control grad rounded-circle">
                                                    <a href="http://" class="btn btn-outline-info rounded-circle">Offer Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card grad rounded-circle">
                                                    <img src=
                                                        "{{asset('assets/images/refferal.png')}}" 
                                                            class="card-img-top rounded-circle"
                                                    alt="img">
                                                    <div class="card-body rounded-circle">
                                                        <p class="fw-light text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia fugiat deserunt nihil hic voluptas blanditiis odit quibusdam culpa ipsa? Iure ab voluptates distinctio enim illum velit tenetur minima, nulla assumenda!</p>
                                                    </div>
                                                    <div class="form-control grad rounded-circle">
                                                    <a href="http://" class="btn btn-outline-info rounded-circle">Offer Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card grad rounded-circle">
                                                    <img src=
                                                        "{{asset('assets/images/refferal.png')}}" 
                                                            class="card-img-top rounded-circle"
                                                    alt="img">
                                                    <div class="card-body rounded-circle">
                                                        <p class="fw-light text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia fugiat deserunt nihil hic voluptas blanditiis odit quibusdam culpa ipsa? Iure ab voluptates distinctio enim illum velit tenetur minima, nulla assumenda!</p>
                                                    </div>
                                                    <div class="form-control grad rounded-circle">
                                                    <a href="http://" class="btn btn-outline-info rounded-circle">Offer Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <div class="btn-group py-3 my-3">
                                    <a href="http://" class="btn btn-outline-info btn-lg rounded-circle">All Offers</a>
                            </div>
                        </div>

                    
                     <!-- about Section start -->
                        <div class="text badge bg-dark text-wrap py-3 my-3">
                            <i class="fa fa-folder-open fa-5x text-success"></i>
                            <h1 class="text fw-bolder text-white">About Us</h1>
                        </div>
                        <div class="row justify-content-center my_style">
                            <h1 class="text-white mb-2 py-3">Board of Directors</h1>
                            <div class="col-md-2 py-3 m-3">
                                <img class="img-thumbnail rounded-circle" src="{{asset('assets/images/banner2.jpg')}}" alt="">
                                <h3 class="text-white text-bolder">Jhon Deo</h3>
                                <p class="fw-light text-white">Senior execuitive</p>
                            </div>
                            <div class="col-md-2 py-3 m-3">
                                <img class="img-thumbnail rounded-circle" src="{{asset('assets/images/banner2.jpg')}}" alt="">
                                <h3 class="text-white text-bolder">Carlo jh</h3>
                                <p class="fw-light text-white">CEO</p>
                            </div>
                            <div class="col-md-2 py-3 m-3">
                                <img class="img-thumbnail rounded-circle" src="{{asset('assets/images/banner2.jpg')}}" alt="">
                                <h3 class="text-white text-bolder">Don H</h3>
                                <p class="fw-light text-white">Managing Director</p>
                            </div>
                            <div class="col-md-2 py-3 m-3">
                                <img class="img-thumbnail rounded-circle" src="{{asset('assets/images/banner2.jpg')}}" alt="">
                                <h3 class="text-white text-bolder">Alex Gail</h3>
                                <p class="fw-light text-white">Consultant</p>
                            </div>
                            <div class="col-md-2 py-3 m-3">
                                <img class="img-thumbnail rounded-circle" src="{{asset('assets/images/banner2.jpg')}}" alt="">
                                <h3 class="text-white text-bolder">Lee Chir</h3>
                                <p class="fw-light text-white">Executive</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <i class="fa-regular fa-comment fa-3x text-white"></i>
                            <h1 class="text-white py-3">Complience</h1>
                            <div class="col-md-3 my_style p-3 m-3">
                                <p class="text-white fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nihil, pariatur dicta dolorum doloremque corporis, eveniet ducimus tempore vitae a voluptas saepe, vel maiores quo aspernatur enim. Sed, molestias iure.</p>
                            </div>
                            <div class="col-md-5 p-3 m-3 my_style">
                                <img class="img-fluid" src="{{asset('assets/images/refferal.png')}}" alt="">
                            </div>
                        </div>
                        <!-- End about Section -->
                        <!-- start Contact Section -->
                        <div class="contact">
                            <div class="text badge bg-dark text-wrap py-3 my-3">
                                <i class="fa-regular fa-user fa-5x text-white"></i>
                                <h1 class="text fw-bolder text-white">Contact Us</h1>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-5 grad rounded contact_form py-3 m-5">
                                <h1 class="fw-bolder text-white">Contact Form</h1>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="name" class="text-white fw-bolder">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="text-white fw-bolder">Email Address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="text-white fw-bolder">Message</label>
                                            <textarea class="form-control" name="message" form="usrform">
                                                Enter text here...
                                            </textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-outline-info">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Contact section -->
                    <footer class="grad rounded">
                        <div class="row text-center text-white">
                            <div class="col-md-4 py-3 my-3">
                                <h1 class="fs-3 fw-bolder badge bg-dark text-wrap my-3 py-2">E-Money</h1>
                                <ul class="nav justify-content-center py-3 my-3">
                                    <li class="nav-item">
                                        <i class="fa-solid fa-house"></i>
                                        <a class="nav-link text-white underline" href="">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <i class="fa-brands fa-servicestack"></i>
                                        <a class="nav-link text-white underline" href="">Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <i class="fa-solid fa-gift"></i>
                                        <a class="nav-link text-white underline" href="">Offer</a>
                                    </li>
                                    <li class="nav-item">
                                        <i class="fa-solid fa-question"></i>
                                        <a class="nav-link text-white underline" href="">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <i class="fa-solid fa-address-card"></i>
                                        <a class="nav-link text-white underline" href="">About Us</a>
                                    </li>
                                </ul>
                                <div class="p-3 m-3 my_style">
                                    <h5 class="text-white">Subscribe now</h5>
                                    <form action="">
                                        <div class="form-group m-2">
                                            <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                                            <button type="submit" class="btn btn-outline-info m-1">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 py-3 my-3">
                                <h1 class="fs-3 fw-bolder badge bg-dark text-wrap my-3 py-2">Contact Us</h1>
                                <ul class="nav justify-content-center py-3 my-3">
                                    <li class="nav-item">
                                        <i class="fa-brands fa-facebook fa-2x"></i>
                                        <a class="nav-link text-white underline" href="">Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                        <i class="fa-brands fa-square-whatsapp fa-2x"></i>
                                        <a class="nav-link text-white underline" href="">Whatsapp</a>
                                    </li>
                                    <li class="nav-item">
                                        <i class="fa-brands fa-square-instagram fa-2x"></i>
                                        <a class="nav-link text-white underline" href="">Instegram</a>
                                    </li>
                                </ul>
                                <p>Do you need instant support??<a href="#" class="alert-link">Just Click here.. </a></p>
                            </div>
                            <div class="col-md-4 py-3 my-3">
                                <h1 class="fs-3 fw-bolder badge bg-dark text-wrap my-3 py-2">Download the App</h1><br>
                                <h3 class="py-3 my-3">Download E-Money App</h3>
                                <i class="fa-brands fa-google fa-3x p-1"></i><i class="fa-brands fa-apple fa-3x"></i>
                                <p class="fw-light">To make your life easier download the e-money app from</p>
                                <div class="icon py-3 m-3">
                                    <a class="text-white " href="#"><i class="fa-brands fa-google-play fa-3x my_style p-1"></i></a>
                                    <a class="text-white " href="#"><i class="fa-brands fa-apple-pay fa-3x my_style"></i></a>
                                </div>
                            </div>
                            <div class="text text-center mb-0 py-2">
                                <p class="fw-light">All Rights Reserved @E-Money 2023</p>
                            </div>
                        </div>
        
                    </footer>
            </main>

        </div>
    
    <!-- offers section end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
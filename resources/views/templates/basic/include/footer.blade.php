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
                <form action="{{route('subscribe')}}" method="post">
                    @csrf
                    <div class="form-group m-2">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                        <button type="submit" class="btn btn-outline-info text-white m-1">Subscribe</button>
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
            <p>Do you need instant support??<a href="{{route('ticket.open')}}" class="alert-link">Just Click here.. </a></p>
            <a href="" class="navbar-brand m-5">
                <img src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" class="rounded" width="100px" alt="">
            </a>
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
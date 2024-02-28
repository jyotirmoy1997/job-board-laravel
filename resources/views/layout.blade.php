<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkSpace</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <script src="https://kit.fontawesome.com/b217e86bcf.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar-wrapper">
        <h1>
            <a href="">WorkSpace</a>
        </h1>
        <div class="navbar-links">
            <div>
                <a href="login.html">Login <i class="fa-solid fa-user"></i></a>
                </div>
            <div>
                <a href="register.html">
                    Register <i class="fa-solid fa-book-open-reader"></i>
                </a>
            </div>
        </div>
    </nav>

    @yield('home')
    @yield('listings')
    @yield('listing')
    @yield('create')

    
    <!-- Footer -->
    <footer class="footer-wrapper">
        <div class="footer">
            <div class="footer-heading">
                <h1>WorkSpace</h1>
                <h4>Your One Stop Destination for Jobs</h4>
            </div>
            
            <div class="footer-contact">
                <div class="footer-contact-inner">
                    <div class="footer-contact-inner-img-container">
                        <img src="{{asset('images/chatting.png')}}" alt="">
                    </div>
                    <div class="footer-contact-text">
                        <h5>Contact Us</h5>
                        <h6>workspace@workspace.com</h6>
                    </div>
                </div>
                <div class="footer-social-links">
                    <h6>Follow us on</h6>
                     <i class="fa-brands fa-facebook-f fa-xl" style="color: #ffffff;"></i> 
                     <i class="fa-brands fa-twitter fa-xl" style="color: #ffffff;"></i>
                     <i class="fa-brands fa-instagram fa-xl" style="color: #ffffff;"></i>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            2024 &copy; Workspace All Rights Reserved
        </div>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>Trang chủ</title>
</head>

<body>

    <header>
        <nav>
            <div class="logo">LOGO</div>
            <ul class="nav-links">
                <li><a href="#home">Trang chủ</a></li>
                <li><a href="#products">Sản phẩm</a></li>
                <li><a href="#about">Về chúng tôi</a></li>
                <li><a href="#contact">Liên hệ</a></li>
            </ul>
            <div class="auth-buttons">
                <button onclick="showLoginForm()">Đăng nhập</button>
                <button onclick="showRegisterForm()">Đăng ký</button>
            </div>
        </nav>
    </header>

    <main>
        
        <section class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./assets/image/1920x500.png" alt="">
                    <div class="swiper-slide-content">
                        <div class="swiper-slide-title">Ảnh 1</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/image/1920x500.png" alt="">
                    <div class="swiper-slide-content">
                        <div class="swiper-slide-title">Ảnh 2</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/image/1920x500.png" alt="">
                    <div class="swiper-slide-content">
                        <div class="swiper-slide-title">Ảnh 3</div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <div class="swiper-pagination"></div>
        </section>

        <section class="featured-products">
            <h2>Sản phẩm nổi bật</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="./assets/image/200x250.png" alt="Product 1">
                    <h3>Quần bó</h3>
                    <p>999.999 VNĐ</p>
                    <button>Thêm vào giỏ hàng</button>
                </div>
                <div class="product-card">
                    <img src="./assets/image/200x250.png" alt="Product 2">
                    <h3>Quần Jeans</h3>
                    <p>999.999 VNĐ</p>
                    <button>Thêm vào giỏ hàng</button>
                </div>
                <div class="product-card">
                    <img src="./assets/image/200x250.png" alt="Product 3">
                    <h3>Áo Dress</h3>
                    <p>999.999 VNĐ</p>
                    <button>Thêm vào giỏ hàng</button>
                </div>
            </div>
        </section>
    </main>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <h2>Đăng nhập</h2>
            <form id="loginForm" action="./view/login.php">
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Mật khẩu" required>
                <button type="submit" name="signIn">Đăng nhập</button>
            </form>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeRegisterModal()">&times;</span>
            <h2>Đăng ký</h2>
            <form id="registerForm" method="POST" action="./view/register.php">
                <input type="text" placeholder="Họ và tên" name="userName" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Mật khẩu" name="password" required>
                <input type="password" placeholder="Xác nhận lại mật khẩu" name="confirmPassword" required>
                <button type="submit" name="signUp">Đăng ký</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Về chúng tôi</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ab cumque repudiandae!</p>
            </div>
            <div class="footer-section">
                <h3>Liên hệ</h3>
                <p>Email: buimanhtuan@gmail.com</p>
                <p>Phone: 033 783 2186</p>
            </div>
            <div class="footer-section">
                <h3>Theo dõi</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>
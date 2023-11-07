@extends('public.templating.layouts')
@section('title', 'Agrihub - Vendors')
@section('content')

    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Chat Bot AI
                </div>
            </div>
        </div>
        <div class="chat-container">
            <div class="chat-header">
                Chatbot
            </div>
            <div class="chat-box">
                <div class="chat-message user">Saya ingin mencari supplier buah apel dengan kebutuhan sekitar 600-700kg pada bulan november jika bisa, <br>berikan supplier yang sudah memiliki sertifikasi untuk ekspor</div>
                <div class="chat-message bot">✔ Menganalisa permintaan user
                   <br> ✔ Mengambil data supplier dari database
                   <br> ✔ (langkah lainnya) ..</div>
                <div class="chat-message bot">Menurut data yang ada, kami menemukan supplier Puncak Farm dapat memenuhi permintaan yang anda inginkan, <br>dikarenakan kuota panen yang besar dan masa panen yang mendekati target waktu pembelian anda.
                    <br>
                    <br>
                    <div class="akun-card" style="width: 500px; background-color: #fff; border: 1px solid #ccc; border-radius: 5px; box-shadow: 2px 2px 5px #888888; text-align: center; padding: 20px; display: flex; align-items: center;">
                        <img src="assets/imgs/vendor/vendor-1.png" alt="Foto Profil" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 20px;">
                        <br>
                        <div class="info" style="text-align: left;">
                            <h5 style="font-size: 20px; margin: 0; color: #333;">Pass Farm Bogor</h5>
                            <img src="assets/imgs/rating/rating5.svg" width="50%">
                            <ul class="contact-infor text-muted">
                                <li style="margin-bottom: 0.2px;"><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Bogor</span></li>
                                <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span> Subscribe to Unlock</span></li>
                            </ul>       
                            <br>                                                                     
                        <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="chat-input">
                <input type="text" id="user-input" placeholder="Type your message...">
                <button id="send-button">Send</button>
            </div>
        </div>
    
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0">
                            <div class="logo mb-30">
                                <a href="index.html" class="mb-15"><img src="assets/imgs/theme/AgriHub.svg" alt="logo" /></a>
                                <p class="font-lg text-heading">Exposure to Agricultural Products</p>
                            </div>
                            <ul class="contact-infor">
                                <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Bogor, Jawa Barat</span></li>
                                <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>+62 878-8411-6725</span></li>
                                <li><img src="assets/imgs/theme/icons/icon-email-2.svg" alt="" /><strong>Email:</strong><span>agrihubcommerce@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-widget col">
                        <h4 class="widget-title">Company</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="page-contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col">
                        <h4 class="widget-title">Account</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="page-login.html">Sign In</a></li>
                            <li><a href="page-register.html">Registration</li>
                            <li><a href="page-account.html">Account Detail</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col">
                        <h4 class="widget-title">Corporate</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="page-register.html">Become a Vendor</a></li>
                            <li><a href="subscribe.html">Subscribe</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col">
                        <h4 class="widget-title">Popular</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Fruits</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Tubers</a></li>
                            <li><a href="#">Spices</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget widget-install-app col">
                        <h4 class="widget-title">Install App</h4>
                        <p class="wow fadeIn animated">From App Store or Google Play</p>
                        <div class="download-app">
                            <a href="#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt="" /></a>
                            <a href="#" class="hover-up mb-sm-2"><img src="assets/imgs/theme/google-play.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-30">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; 2023, <strong class="text-brand">AgriHub</strong></p>
                </div>
                
            </div>
        </div>
    </main>

@endsection
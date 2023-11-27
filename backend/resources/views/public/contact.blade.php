@extends('public.templating.layouts')
@section('title', 'Agrihub - Contact')
@section('content')
<main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Contact
                </div>
            </div>
        </div>
        <div class="page-content pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="row align-items-center mb-50">
                            <div class="col-lg-6">
                                <img src="{{asset('assets/imgs/page/team.jpg')}}" alt="" class="border-radius-15 mb-md-3 mb-lg-0 mb-sm-4" height="800" />
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-25">
                                    <h2 class="mb-30">AgriHub Company</h2>
                                    <p class="mb-25">AgriHub Company is a company that focuses on innovation in agriculture. They connect agricultural suppliers or vendors with potential buyers, creating a platform that simplifies transactions. </p>
                                    <p class="mb-50">By leveraging technology and a sustainable approach, AgriHub enhances efficiency in the agricultural supply chain, reduces waste, and contributes to global food security. Their primary goal is to support farmers by providing access to broader markets while ensuring environmental sustainability and the welfare of farmers in the agricultural industry.</p>
                                    <div class="carausel-3-columns-cover position-relative">
                                        <div id="carausel-3-columns-arrows"></div>
                                        <div class="carausel-3-columns" id="carausel-3-columns">
                                            <img src="assets/imgs/page/buah.jpg" alt="" />
                                            <img src="assets/imgs/page/about-3.png" alt="" />
                                            <img src="assets/imgs/page/rempah.jpg" alt="" />
                                            <img src="assets/imgs/page/umbi.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="text-center mb-50">
                            <h2 class="title style-3 mb-40">What We Provide?</h2>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-1.svg" alt="" />
                                        <h4>Best Prices & Offers</h4>
                                        <p>AgriHub provides exclusive access to the best prices and special offers in the agricultural world, helping you save more on every transaction.</p>
                                        <!--<a href="#">Read more</a>-->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-2.svg" alt="" />
                                        <h4>Wide Assortment</h4>
                                        <p>Our diverse selection offers a broad range of choices to cater to every need, preference, and the demand for high-quality food.</p>
                                        <!--<a href="#">Read more</a>-->
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-3.svg" alt="" />
                                        <h4>Free Delivery</h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                        <a href="#">Read more</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-4.svg" alt="" />
                                        <h4>Easy Returns</h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                        <a href="#">Read more</a>
                                    </div>
                                </div> -->
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-5.svg" alt="" />
                                        <h4>100% Satisfaction</h4>
                                        <p> AgriHub is deeply committed to your contentment. We aim to provide you with a comprehensive and delightful experience by ensuring the quality and service of our products meet your every need and expectation</p>
                                        <!--<a href="#">Read more</a>-->
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-6.svg" alt="" />
                                        <h4>Great Daily Deal</h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                        <a href="#">Read more</a>
                                    </div>
                                </div> -->
                            </div>
                        </section>
                        <!-- <section class="row align-items-center mb-50">
                            <div class="row mb-50 align-items-center">
                                <div class="col-lg-7 pr-30">
                                    <img src="assets/imgs/page/about-5.png" alt="" class="mb-md-3 mb-lg-0 mb-sm-4" />
                                </div>
                                <div class="col-lg-5">
                                    <h4 class="mb-20 text-muted">Our performance</h4>
                                    <h1 class="heading-1 mb-40">Your Partner for e-commerce grocery solution</h1>
                                    <p class="mb-30">Your Partner for Quality, Affordable Grocery Shopping Solutions: At AgriHub, we take pride in being your trusted ally when it comes to sourcing high-quality grocery products at budget-friendly prices.</p>
                                    <p>Our mission is to make your grocery shopping experience not only cost-effective but also of the highest quality, ensuring you get the best value for your money.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 pr-30 mb-md-5 mb-lg-0 mb-sm-5">
                                    <h3 class="mb-30">Who we are</h3>
                                    <p>AgriHub is a digital platform connecting agricultural suppliers and buyers. Our mission is to enhance the accessibility and affordability of quality food by streamlining the supply chain. We prioritize transparency, quality, affordability, and community support in everything we do.</p>
                                </div>
                                <div class="col-lg-4 pr-30 mb-md-5 mb-lg-0 mb-sm-5">
                                    <h3 class="mb-30">Our history</h3>
                                    <p>AgriHub is a relatively new application, born from the idea of enhancing food security in Indonesia. We built this platform to address the evolving needs of our growing agricultural community and the modern challenges of food supply. As a newly developed solution, AgriHub is driven by innovation and a commitment to creating a more resilient and connected food ecosystem in our country. <a href="javascript:void(0);" onclick="toggleParagraph('history-paragraph-2')">Read more</a></p>
                                    <p id="history-paragraph-2" style="display: none;">We realize this goal by connecting suppliers and prospective buyers, making it easier for all to access high-quality food, rendering it more affordable, and available to everyone. In our efforts to create a holistic solution, AgriHub serves as a bridge connecting stakeholders in the agricultural sector, promoting sustainable economic growth, and strengthening the food supply chain.</p>
                                </div>
                                <div class="col-lg-4">
                                    <h3 class="mb-30">Our mission</h3>
                                    <p>At AgriHub, our mission is to enhance food security and promote an equitable food supply chain. We've created a platform to connect agricultural suppliers and prospective buyers, simplifying the process of sourcing top-quality products. Our commitment to innovation and resilience drives us to build a more connected food ecosystem in our nation. Through AgriHub, we aim to make high-quality food readily available to all while ensuring an even distribution in the food supply chain.</p>
                                </div>
                            </div>
                        </section> -->
                    </div>
                </div>
            </div>
            <!-- <section class="container mb-50 d-none d-md-block">
                <div class="row about-count">
                    <div class="col-lg-1-5 col-md-6 text-center mb-lg-0 mb-md-5">
                        <h1 class="heading-1"><span class="count">12</span>+</h1>
                        <h4>Glorious years</h4>
                    </div>
                    <div class="col-lg-1-5 col-md-6 text-center">
                        <h1 class="heading-1"><span class="count">36</span>+</h1>
                        <h4>Happy clients</h4>
                    </div>
                    <div class="col-lg-1-5 col-md-6 text-center">
                        <h1 class="heading-1"><span class="count">58</span>+</h1>
                        <h4>Projects complete</h4>
                    </div>
                    <div class="col-lg-1-5 col-md-6 text-center">
                        <h1 class="heading-1"><span class="count">24</span>+</h1>
                        <h4>Team advisor</h4>
                    </div>
                    <div class="col-lg-1-5 text-center d-none d-lg-block">
                        <h1 class="heading-1"><span class="count">26</span>+</h1>
                        <h4>Products Sale</h4>
                    </div>
                </div>
            </section> -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="mb-50">
                            <h2 class="title style-3 mb-40 text-center">Our Team</h2>
                            <div class="row">
                                <div class="col-lg-4 mb-lg-0 mb-md-5 mb-sm-5">
                                    <h6 class="mb-5 text-brand">Our Team</h6>
                                    <h1 class="mb-30">Meet Our Expert Team</h1>
                                    <p class="mb-30">Our team is dedicated to carrying out tasks with the highest level of professionalism. Each member of our team possesses their own area of expertise, which we synergistically combine to achieve the most optimal outcomes. We are unwavering in our commitment to enhancing the quality of our work and delivering flawless results.</p>
                                    <p class="mb-30">Proin ullamcorper pretium orci. Donec necscele risque leo. Nam massa dolor imperdiet neccon sequata congue idsem. Maecenas malesuada faucibus finibus.</p>
                                    <a href="#" class="btn">View All Members</a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="carausel-3-columns-cover position-relative">
                                        <div id="carausel-3-columns-arrows">
                                        <div class="carausel-3-columns" id="team-slider">
                                            <div class="team-card">
                                            <div class="team-member">
                                                <img src="assets/imgs/page/eky.jpg" alt="" />
                                                <div class="content text-center">
                                                    <h4 class="mb-5">Eky Mulia Lasardi</h4>
                                                    <span>CEO</span>
                                                    <div class="social-network mt-20">
                                                        <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-brand.svg" alt="" /></a>
                                                        <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-brand.svg" alt="" /></a>
                                                        <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-brand.svg" alt="" /></a>
                                                        <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-brand.svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="team-card">
                                            <img src="assets/imgs/page/nopal.jpg" alt="" />
                                            <div class="content text-center">
                                                <h4 class="mb-5">Muhammad Naufal Ardhani</h4>
                                                <span>CTO</span>
                                                <div class="social-network mt-20">
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-brand.svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="team-card">
                                            <img src="assets/imgs/page/cipa.jpg" alt="" />
                                            <div class="content text-center">
                                                <h4 class="mb-5">Syifa Nursaadah</h4>
                                                <span>COO</span>
                                                <div class="social-network mt-20">
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-brand.svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="team-card">
                                            <img src="assets/imgs/page/caca.JPG" alt="" />
                                            <div class="content text-center">
                                                <h4 class="mb-5">Marsya Halya Alfrida</h4>
                                                <span>CFO</span>
                                                <div class="social-network mt-20">
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-brand.svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="team-card">
                                            <img src="assets/imgs/page/mia.jpg" alt="" />
                                            <div class="content text-center">
                                                <h4 class="mb-5">Mia Putri Yeza</h4>
                                                <span>CMO</span>
                                                <div class="social-network mt-20">
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-brand.svg" alt="" /></a>
                                                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-brand.svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

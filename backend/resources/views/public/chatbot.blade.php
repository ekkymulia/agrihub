@extends('public.templating.layouts')
@section('title', 'Agrihub - Chat Bot AI')
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
    </main>

@endsection
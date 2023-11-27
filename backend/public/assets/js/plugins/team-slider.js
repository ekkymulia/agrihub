$(document).ready(function() {
    $('.team-slider').slick({
        slidesToShow: 1, // Menampilkan 1 anggota tim sekaligus
        slidesToScroll: 1, // Menggulir 1 anggota tim pada setiap klik
        autoplay: true, // Tidak otomatis memulai slider
        arrows: true, // Menampilkan tombol navigasi
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
        responsive: [
            {
                breakpoint: 500, // Penyesuaian untuk layar yang lebih kecil
                settings: {
                    slidesToShow: 1, // Menampilkan 1 anggota tim sekaligus pada layar yang lebih kecil
                    slidesToScroll: 1
                }
            }
        ]
    });
});

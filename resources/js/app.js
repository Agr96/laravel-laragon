import jQuery from 'jquery';
window.$ = jQuery;
window.jQuery = jQuery;

$(document).ready(function() {
    console.log('✅ Local jQuery + Vite Active!');

    // 1. Interaksi Mobile Menu (Slide Toggle)
    $('#mobile-menu-btn').on('click', function() {
        $('#mobile-menu').slideToggle(300);
    });

    // 2. Smooth Scrolling untuk link yang ada hashtag-nya
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        let target = this.hash;
        if (target) {
            $('html, body').animate({
                scrollTop: $(target).offset().top - 64 // Dikurangi 64px agar tidak tertutup navbar
            }, 600, 'swing');

            // Tutup menu mobile jika link diklik (UX yang baik)
            if ($(window).width() < 768) {
                $('#mobile-menu').slideUp(300);
            }
        }
    });

    // 3. Scroll Reveal Animation (Elemen muncul saat di-scroll)
    function revealOnScroll() {
        let windowHeight = $(window).height();
        let scrollTop = $(window).scrollTop();

        $('.reveal-item').each(function() {
            let elementTop = $(this).offset().top;

            // Jika elemen sudah masuk jangkauan layar (dengan sedikit offset 100px)
            if (elementTop < (scrollTop + windowHeight - 100)) {
                $(this).removeClass('opacity-0 translate-y-10').addClass('opacity-100 translate-y-0');
            }
        });
    }

    // Jalankan fungsi saat pertama kali load dan saat di-scroll
    revealOnScroll();
    $(window).on('scroll', revealOnScroll);
});

console.log("Vite JS aktif");

// MOBILE MENU
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("mobile-menu-btn");
    const menu = document.getElementById("mobile-menu");

    if (btn && menu) {
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }

    // SMOOTH SCROLL
    document.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener("click", (e) => {
            const targetId = link.getAttribute("href");
            const target = document.querySelector(targetId);

            if (!target) return;

            e.preventDefault();

            window.scrollTo({
                top: target.offsetTop - 64,
                behavior: "smooth",
            });
        });
    });

    // REVEAL ANIMATION (FIXED)
    const items = document.querySelectorAll(".reveal-item");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("opacity-0", "translate-y-10");
                    entry.target.classList.add("opacity-100", "translate-y-0");
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    items.forEach((el) => observer.observe(el));
});

// counter number
document.addEventListener("DOMContentLoaded", () => {

    // MODULE: Counter on Scroll
    (() => {
        const counters = document.querySelectorAll(".counter");
        if (counters.length === 0) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    element.textContent = "0";

                    const start = 0;
                    const end = parseFloat(element.getAttribute("data-countto")) || 0;
                    const duration = parseInt(element.getAttribute("data-duration"), 10) || 1000;
                    let startTime = null;

                    const updateCount = (currentTime) => {
                        if (!startTime) startTime = currentTime;
                        const progress = Math.min((currentTime - startTime) / duration, 1);
                        const currentCount = start + progress * (end - start);

                        element.textContent = Math.floor(currentCount);

                        if (progress < 1) {
                            requestAnimationFrame(updateCount);
                        } else {
                            element.textContent = end;
                        }
                    };

                    requestAnimationFrame(updateCount);
                    observer.unobserve(element);
                }
            });
        }, { root: null, threshold: 0.2 });

        counters.forEach((element) => {
            element.textContent = "0";
            observer.observe(element);
        });
    })();

    // FUNGSI LAIN DI BAWAH INI

});



// import gambar
// Buka resources/js/app.js dan tambahkan baris ini di paling bawah:
import.meta.glob([
    '../images/**',
]);

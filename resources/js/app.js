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

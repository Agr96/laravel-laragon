import confetti from "canvas-confetti";

document.addEventListener("DOMContentLoaded", () => {

    const audio = new Audio("/audio/kaching.mp3");

    document.body.style.display = "none";

    document.body.offsetHeight;

    document.body.style.display = "flex";

    audio.play().catch(() => {});

    const end = Date.now() + 5000;

    const colors = ["#667eea", "#764ba2", "#fffb2c", "#ff6b6b"];

    (function frame() {

        confetti({
            particleCount: 3,
            angle: 60,
            spread: 55,
            origin: { x: 0 },
            colors
        });

        confetti({
            particleCount: 3,
            angle: 120,
            spread: 55,
            origin: { x: 1 },
            colors
        });

        if (Date.now() < end) {
            requestAnimationFrame(frame);
        }

    })();

    setTimeout(() => {
        document.body.style.opacity = "0";
        document.body.style.transition = "2s";
    }, 3000);

    document.querySelector(".header").addEventListener("click", () => {

        confetti({
            particleCount: 100,
            spread: 70,
            origin: { y: 0.6 }
        });

    });

});

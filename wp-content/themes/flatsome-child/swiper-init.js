  document.addEventListener("DOMContentLoaded", function() {
                    new Swiper(".myVerticalSlider", {
                        direction: "vertical",
                        slidesPerView: 3, // Hiển thị 3 slide cùng lúc
                        spaceBetween: 20, // khoảng cách giữa slides
                        loop: true,
                        mousewheel: {
                            releaseOnEdges: true,
                        },
                        autoplay: {
                            delay: 3000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                            dynamicBullets: true,
                        }
                    });
                });

document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide-vip .slide');
    const navs = Array.from(document.querySelectorAll('.slide-nav .nav-slide'));
    let current = 0; // index slide chính / thumbnail hiện tại

    // Hiển thị slide chính và nav thumbnail
    function showSlide(index) {
        // slide chính
        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(-${index*100}%)`;
        });

        // reset tất cả thumbnail
        navs.forEach(nav => {
            nav.style.display = 'none';
            nav.classList.remove('active');
        });

        // thumbnail hiện tại + thumbnail tiếp theo
        const nextIndex = (index + 1) % navs.length;
        navs[index].style.display = 'block';
        navs[index].classList.add('active');
        navs[nextIndex].style.display = 'block';
    }

    // click vào thumbnail
    navs.forEach((nav, i) => {
        nav.addEventListener('click', () => {
            current = i;
            showSlide(current);
        });
    });

    showSlide(current); // render lần đầu
});

class SlidingCarousel {
    constructor(container, options = {}) {
        this.container = container;
        this.options = Object.assign({}, SlidingCarousel.defaults, options);
        this.images = Array.from(container.querySelectorAll('.slide'));
        this.mIndex = Math.floor(this.images.length / 2);

        this.sinus = this._generateSinus(this.images.length);

        this.setupEvents();
        this.doLayout(false);

        window.addEventListener("resize", () => this.doLayout(false));
    }

    _generateSinus(total) {
        let sinus = [0];
        let freq = 0;
        const middle = Math.floor(total / 2);

        for (let n = 1; n < total; n++) {
            sinus[n] = (n <= middle) ? Math.sin(freq += (1.6 / middle)) : sinus[total - n];
        }

        return sinus;
    }

    setupEvents() {
        const leftBtn = this.container.querySelector('.navigate-left');
        const rightBtn = this.container.querySelector('.navigate-right');

        if (leftBtn) leftBtn.addEventListener('click', () => this.prev());
        if (rightBtn) rightBtn.addEventListener('click', () => this.next());

        this.images.forEach(slide => {
            slide.querySelector('a')?.addEventListener('click', e => {
                e.preventDefault();
                const idx = this.images.indexOf(slide);
                if (idx === this.mIndex) return;

                if (idx < this.mIndex) {
                    for (let i = 0; i < this.mIndex - idx; i++) {
                        this.prev();
                    }
                } else {
                    for (let i = 0; i < idx - this.mIndex; i++) {
                        this.next();
                    }
                }
            });
        });
    }

    prev() {
        this.images.push(this.images.shift());
        this.doLayout(true);
    }

    next() {
        this.images.unshift(this.images.pop());
        this.doLayout(true);
    }

    doLayout(animate) {
        const mid = this.mIndex;
        const containerWidth = this.container.clientWidth;
        var widtd_mid = "70%";
        var left_side = "15%";
        if (containerWidth <= 1024) {
            widtd_mid = "80%";
            left_side = "10%";

        } else {}
        this.container.querySelectorAll('span').forEach(s => {
            s.style.display = "none";
            s.style.opacity = 0;
        });

        this.images.forEach((slide, i) => {
            if (animate) {
                slide.style.transition = `all ${this.options.animate}ms ease-in-out`;
            } else {
                slide.style.transition = "none";
            }

            if (this.options.shadow) slide.classList.add("shadow");

            const isCenter = i === mid;
            const isLeft = i === mid - 1;
            const isRight = i === mid + 1;

            if (isCenter) {
                slide.style.display = "block";
                slide.style.width = widtd_mid;
                slide.style.height = '100%';
                slide.style.left = left_side;
                slide.style.top = '0';
                slide.style.zIndex = 10;
                slide.style.opacity = 1;
                slide.style.right = 'auto';

                const caption = slide.querySelector("span");
                if (caption) {
                    caption.style.display = "block";
                    caption.style.opacity = 0.7;
                }
            } else if (isLeft) {
                slide.style.display = "block";
                slide.style.width = '50%';
                slide.style.height = '80%';
                slide.style.left = '0';
                slide.style.top = '10%';
                slide.style.zIndex = 9;
                slide.style.opacity = 0.6;
                slide.style.right = 'auto';
            } else if (isRight) {
                slide.style.display = "block";
                slide.style.width = '50%';
                slide.style.height = '80%';
                slide.style.right = '0';
                slide.style.top = '10%';
                slide.style.zIndex = 9;
                slide.style.opacity = 0.6;
                slide.style.left = 'auto';
            } else {
                slide.style.display = "none";
            }
        });
    }
}

SlidingCarousel.defaults = {
    shadow: true,
    squeeze: 100,
    animate: 250
};

document.addEventListener("DOMContentLoaded", () => {
    new SlidingCarousel(document.getElementById("carousel"));
});
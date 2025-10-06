document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".myVerticalSlider", {
    direction: "vertical",
    slidesPerView: 3,       // Hiển thị 3 slide cùng lúc
    spaceBetween: 20,       // khoảng cách giữa slides
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


// tôi code thêm swiper


class SlidingCarousel {
    constructor(container, options = {}) {
        this.container = container;
        this.options = Object.assign({}, SlidingCarousel.defaults, options);
        this.images = Array.from(container.querySelectorAll('.slide'));
        this.mIndex = Math.floor(this.images.length / 2);

        this.sinus = this._generateSinus(this.images.length);
        this.setupEvents();
        this.doLayout(false);
    }

    _generateSinus(total) {
        let sinus = [0];
        let freq = 0;
        const middle = Math.floor(total / 2);
        let sinsum = 0;

        for (let n = 1; n < total; n++) {
            sinus[n] = (n <= middle) ? Math.sin(freq += (1.6 / middle)) : sinus[total - n];
            if (n < middle) sinsum += sinus[n];
        }

        this.sinsum = sinsum * this.options.squeeze;
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
                while (idx !== this.mIndex) {
                    this.next();
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
        const sin = this.sinus;
        const displayWidth = 550;
        const containerWidth = this.container.clientWidth;
        const middle = (containerWidth - displayWidth) / 2;

        // Ẩn tất cả caption
        this.container.querySelectorAll('span').forEach(s => {
            s.style.display = "none";
            s.style.opacity = 0;
        });

        let posX = 0;
        this.images.forEach((slide, i) => {
            const idx = Math.abs(i - mid);
            const top = idx * 15;
            const diff = sin[i] * this.options.squeeze;

            const left = posX;
            posX += displayWidth * 0.7 + diff; 

            const isCenter = i === mid;
            const height = isCenter ? 400 : 350; 

            if (animate) {
                slide.style.transition = `left ${this.options.animate}ms ease, top ${this.options.animate}ms ease, opacity ${this.options.animate}ms ease, height ${this.options.animate}ms ease`;
            } else {
                slide.style.transition = "none";
            }

            slide.style.width = displayWidth + "px";
            slide.style.height = height + "px"; 
            slide.style.top = top + "px";
            slide.style.left = (left + middle - posX / 2) + "px";
            slide.style.zIndex = isCenter ? 10 : 10 - idx;
            slide.style.opacity = isCenter ? 1 : 0.6;

            if (this.options.shadow) slide.classList.add("shadow");

            if (isCenter) {
                const caption = slide.querySelector("span");
                if (caption) {
                    caption.style.display = "block";
                    caption.style.opacity = 0.7;
                }
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
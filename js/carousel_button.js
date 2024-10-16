const carousel = document.querySelector(".carousel");
const carousel_content = document.querySelector(".carousel_content");

const arrowBtns = document.querySelectorAll(".carousel-wrapper i");

const firstCardWidth = carousel.clientWidth / 3;
const secondCardWidth = carousel_content.clientWidth;

const carouselChildrens = [...carousel.children];
const carousel_contentChildrens = [...carousel_content.children];

let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);
let carousel_contentPerView = Math.round(carousel_content.offsetWidth / secondCardWidth);

let isScrolling = false; 

carouselChildrens.slice(-cardPerView).reverse().forEach(carousel_img => {
    carousel.insertAdjacentHTML("afterbegin", carousel_img.outerHTML);
});
carouselChildrens.slice(0, cardPerView).forEach(carousel_img => {
    carousel.insertAdjacentHTML("beforeend", carousel_img.outerHTML);
});

carousel_contentChildrens.slice(-carousel_contentPerView).reverse().forEach(carousel_group_content => {
    carousel_content.insertAdjacentHTML("afterbegin", carousel_group_content.outerHTML);
});
carousel_contentChildrens.slice(0, carousel_contentPerView).forEach(carousel_group_content => {
    carousel_content.insertAdjacentHTML("beforeend", carousel_group_content.outerHTML);
});

carousel.scrollLeft = carousel.offsetWidth;
carousel_content.scrollLeft = carousel_content.offsetWidth;

arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        if (isScrolling) return; 
        isScrolling = true;

        carousel.classList.add('hide-before');
        carousel_content.classList.add('hide-before');

        carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
        console.log("Derecha console", carousel.scrollLeft);
        carousel_content.scrollLeft += btn.id === "left" ? -secondCardWidth : secondCardWidth;
        console.log("Derecha carousel_content", carousel_content.scrollLeft);

        setTimeout(() => {
            isScrolling = false;
            carousel.classList.remove('hide-before');
            carousel_content.classList.remove('hide-before');
        }, 600);
    });
});

const infiniteScroll = (test) => {
    const scrollLeft = Math.ceil(test.scrollLeft);
    const maxScrollLeft = Math.ceil(test.scrollWidth - test.offsetWidth);

    if (scrollLeft <= 0) {
        test.classList.add("no-transition");
        test.scrollLeft = test.scrollWidth - (2 * test.offsetWidth);
        test.classList.remove("no-transition");
    } else if (scrollLeft >= maxScrollLeft) {
        test.classList.add("no-transition");
        test.scrollLeft = test.offsetWidth;
        test.classList.remove("no-transition");
    }
};



carousel.addEventListener("scroll", () => infiniteScroll(carousel));
carousel_content.addEventListener("scroll", () => infiniteScroll(carousel_content));



import Swiper from "swiper";
import { Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

const swiper = new Swiper(".js-swiper-modules", {
    modules: [Pagination],
    slidesPerView: 1.3,
    spaceBetween: 30,

    pagination: {
        el: ".js-swiper-pagination-modules",
    },
});

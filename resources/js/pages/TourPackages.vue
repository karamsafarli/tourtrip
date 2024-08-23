<template>
<Header />

<Banner title="Our Tour Packages" hindi="श्री हरि" imgPath="assets/images/banner_bg_1.webp" subtitle="Get your Haridwar Trip Personalized by our team of experts." />

<section class="popular_tour_packages">
    <div class="container">

        <TitleTag title="POPULAR PACKAGES" />

        <h1>Embark on Sacred Journeys</h1>
        <p>
            Experience the Essence of Haridwar's Sacred Vibes and Seek Inner Peace with our
            Tailor-Made Tour Packages, Catering to Your Spiritual Needs.
        </p>

        <TourCard imgPath="assets/images/tourcard_1.webp" duration="11 Nights & 12 Days" title="Chardham Yatra Package From Delhi" description="This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath – nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations." prevPrice="37,000" saledPrice="26,999" />
        <TourCard imgPath="assets/images/tourcard_1.webp" duration="11 Nights & 12 Days" title="Chardham Yatra Package From Delhi" description="This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath – nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations." prevPrice="37,000" saledPrice="26,999" />
        <TourCard imgPath="assets/images/tourcard_1.webp" duration="11 Nights & 12 Days" title="Chardham Yatra Package From Delhi" description="This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath – nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations." prevPrice="37,000" saledPrice="26,999" />
        <TourCard imgPath="assets/images/tourcard_1.webp" duration="11 Nights & 12 Days" title="Chardham Yatra Package From Delhi" description="This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath – nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations." prevPrice="37,000" saledPrice="26,999" />
        <TourCard imgPath="assets/images/tourcard_1.webp" duration="11 Nights & 12 Days" title="Chardham Yatra Package From Delhi" description="This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath – nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations." prevPrice="37,000" saledPrice="26,999" />
        <TourCard imgPath="assets/images/tourcard_1.webp" duration="11 Nights & 12 Days" title="Chardham Yatra Package From Delhi" description="This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath – nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations." prevPrice="37,000" saledPrice="26,999" />
    </div>
</section>

<section id="reviews">
    <div class="container">
        <TitleTag title="श्री हरि" />
        <h1>Embark on Sacred Journeys</h1>

        <Swiper :modules="modules" :pagination="{ clickable: true }" :spaceBetween="20" :breakpoints="{
    991: {
                slidesPerView: 3
            },
    768: {
                slidesPerView: 2
            },
    200: {
                slidesPerView: 1
            },
        }">
            <SwiperSlide>
                <div class="review_container">
                    <div class="review_card">
                        <div class="quote_icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>

                        <p>
                            Haridwartourtrip.com team is perfect if you're planning to visit Haridwar. I recommend it to all travelers who want to have a real and enjoyable experience in these special places.
                        </p>

                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="name_location">Priya Rai, Mumbai</div>
                </div>
            </SwiperSlide>
            <SwiperSlide>
                <div class="review_container">
                    <div class="review_card">
                        <div class="quote_icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>

                        <p>
                            Haridwartourtrip.com team is perfect if you're planning to visit Haridwar. I recommend it to all travelers who want to have a real and enjoyable experience in these special places.
                        </p>

                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="name_location">Priya Rai, Mumbai</div>
                </div>
            </SwiperSlide>
            <SwiperSlide>
                <div class="review_container">
                    <div class="review_card">
                        <div class="quote_icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>

                        <p>
                            Haridwartourtrip.com team is perfect if you're planning to visit Haridwar. I recommend it to all travelers who want to have a real and enjoyable experience in these special places.
                        </p>

                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="name_location">Priya Rai, Mumbai</div>
                </div>
            </SwiperSlide>
            <SwiperSlide>
                <div class="review_container">
                    <div class="review_card">
                        <div class="quote_icon">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>

                        <p>
                            Haridwartourtrip.com team is perfect if you're planning to visit Haridwar. I recommend it to all travelers who want to have a real and enjoyable experience in these special places.
                        </p>

                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="name_location">Priya Rai, Mumbai</div>
                </div>
            </SwiperSlide>
        </Swiper>
    </div>
</section>

<Footer :isHome="true" />
</template>

<script>
import Footer from '../components/Footer.vue';
import Header from '../components/Header.vue';
import {
    Swiper,
    SwiperSlide
} from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/pagination';

import {
    Navigation,
    Pagination,
    Scrollbar,
    A11y
} from 'swiper/modules';
import Banner from '../components/Banner.vue';
import TourCard from '../components/TourCard.vue';
import TitleTag from '../components/TitleTag.vue';

export default {
    components: {
        Header,
        Footer,
        Swiper,
        SwiperSlide,
        Banner,
        TourCard,
        TitleTag
    },

    setup() {
        return {
            modules: [Pagination],
        };
    },
}
</script>

<style lang="scss" scoped>
#reviews {
    padding: 60px 0;
    background: url('assets/images/map_bg.png');
    background-size: cover;

    @media (max-width: 768px) {
        padding-top: 0;
    }

    .review_container {
        .review_card {
            box-shadow: 9px 11px 14px 0 rgba(0, 0, 0, .1);
            border-radius: 10px;
            background-color: #fff;
            padding: 30px;
            height: 400px;
            .quote_icon {
                display: flex;
                justify-content: center;
                margin-bottom: 30px;

                i {
                    color: rgb(37 117 252 / 20%);
                    font-size: 40px;
                }
            }

            p {
                font-size: 14px;
                color: #8c8c8c;
                margin-bottom: 30px;
                text-align: center;
                line-height: 26px;
            }

            .stars {
                display: flex;
                justify-content: center;
                gap: 5px;
                align-items: center;
                color: #fec42d;
            }
        }

        .name_location {
            font-size: 18px;
            font-weight: 500;
            color: #000;
            text-align: center;
            margin: 20px 0 40px 0;
        }
    }
}



h1 {
    color: #223645;
    font-weight: 600;
    font-size: 48px;
    text-align: center;
    margin-bottom: 30px;

    @media (max-width: 768px) {
        font-size: 36px;
    }
}

p {
    color: #68727B;
    font-size: 21px;
    font-weight: 400;
    text-align: center;
    max-width: 1000px;
    margin: 0 auto 30px auto;

    @media (max-width: 768px) {
        font-size: 16px;
    }
}

.popular_tour_packages {
    padding: 80px 0;


    h1 {
        color: #223645;
        font-weight: 600;
        font-size: 48px;
        text-align: center;
        margin-bottom: 30px;

        @media (max-width: 768px) {
            font-size: 36px;
        }
    }

    p {
        color: #68727B;
        font-size: 21px;
        font-weight: 400;
        text-align: center;
        max-width: 1000px;
        margin: 0 auto 30px auto;

        @media (max-width: 768px) {
            font-size: 16px;
        }
    }
}
</style>

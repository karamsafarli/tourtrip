<template>
<Header />

<HomeBanner />

<section id="popular_destinations" class="popular_destinations">
    <div class="container">
        <TitleTag title="Devbhumi" />
        <h1>Popular Destinations</h1>
        <p>
            Unveiling the Charms of Uttarakhand's Sacred Hub and Its Popular Attractions
            That Leave Travelers Mesmerized.
        </p>
    </div>

    <div class="container">
        <div class="row popular_cards">
            <div class="col-lg-4 first">
                <div class="card">

                    <div class="data">
                        <div class="stars">
                            ★★★★★
                        </div>

                        <h2>Har ki Pauri</h2>
                        <h3>Ganga Arti
                        </h3>
                        <h4>Visit Har Ki Pauri, one of the holiest ghats, and witness the mesmerizing Ganga Aarti ceremony.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 second">
                <div class="card">

                    <div class="data">
                        <div class="stars">
                            ★★★★★
                        </div>

                        <h2>Neel Parvat
                        </h2>
                        <h3>Chandi Devi Temple

                        </h3>
                        <h4>The temple attracts a large number of devotees and tourists throughout the year, especially during
                            festivals like Navratri.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 third">
                <div class="card">

                    <div class="data">
                        <div class="stars">
                            ★★★★★
                        </div>

                        <h2>Kankhal</h2>
                        <h3>Daksheswar Mahadev Temple

                        </h3>
                        <h4>Devotees believe that visiting the Daksheshwar Mahadev Temple and seeking the blessings of Lord Shiva
                            can bring them peace, prosperity, and fulfillment of their wishes.
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<section id="book_now_section">
    <div class="container">
        <div class="bns_icon">
            <img src="../../assets/images/hands_icon.png" alt="">
        </div>

        <h1>ARE YOU READY TO TRAVEL? <br> REMEMBER US !!</h1>
        <p>Haridwar is an ancient city and important Hindu pilgrimage site in North India's Uttarakhand state, where the River Ganges exits the Himalayan foothills.</p>

        <div class="booknow_btn">
            <Link href="/enquire-now">
            BOOK NOW
            </Link>
        </div>

        <div class="features">
            <div class="feature">
                <i class="fa-solid fa-taxi"></i>
                <span>Cab Transfer</span>
            </div>
            <div class="feature">
                <i class="fa-solid fa-hotel"></i>
                <span>3/4/5 Star Hotels</span>
            </div>
            <div class="feature">
                <i class="fa-solid fa-user-tie"></i>
                <span>Expert Guide</span>
            </div>
            <div class="feature">
                <i class="fa-solid fa-mug-saucer"></i>
                <span>Refreshments</span>
            </div>
        </div>
    </div>
</section>



<section id="reviews">
<div class="container">
    <TitleTag title="श्री हरि" />

    <h1>Embark on Sacred Journeys</h1>

    <ReviewItem 
        author="Somnath Das"
        review="I booked a cab for 2 dham. The service was amazing. The process of booking was hassle free. The driver was allocated well in time. The team addressed all my queries patiently. Thanks to the team."
        profileImg="assets/images/pp.png"
        :sliderImgs="['assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg', 'assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg',]"
    />
    <ReviewItem 
        author="Somnath Das"
        review="I booked a cab for 2 dham. The service was amazing. The process of booking was hassle free. The driver was allocated well in time. The team addressed all my queries patiently. Thanks to the team."
        profileImg="assets/images/pp.png"
        :sliderImgs="['assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg', 'assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg',]"
    />
    <ReviewItem 
        author="Somnath Das"
        review="I booked a cab for 2 dham. The service was amazing. The process of booking was hassle free. The driver was allocated well in time. The team addressed all my queries patiently. Thanks to the team."
        profileImg="assets/images/pp.png"
        :sliderImgs="['assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg', 'assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg',]"
    />
    

</div>
</section>



<Footer :isHome="true" />
</template>

<script>
import {
    Link
} from '@inertiajs/inertia-vue3';
import Header from '../components/Header.vue';
import HomeBanner from '../components/HomeBanner.vue';
import Footer from '../components/Footer.vue';
import TourCard from '../components/TourCard.vue';
import TitleTag from '../components/TitleTag.vue';
import ReviewItem from '../components/ReviewItem.vue';

export default {

    components: {
        Link,
        Header,
        HomeBanner,
        Footer,
        TourCard,
        TitleTag,
        ReviewItem
    },
}
</script>

<style lang="scss" scoped>


#reviews {
    padding: 60px 0;
    background: url('assets/images/map_bg.png');
    background-size: cover;

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

#popular_destinations {
    padding-top: 60px;

    .container {
        .row {
            .title {
                padding: 70px 0 35px;

                @media (max-width: 991px) {
                    padding: 60px 15px 30px;
                }

                text-align: center;

                button {
                    cursor: pointer;
                    background-color: #f1f3f7;
                    border-radius: 30px;
                    padding: 5px 20px;
                    border: 1px solid #e0e0eb;

                    a {
                        font-weight: 500;
                        letter-spacing: 1px;
                        text-decoration: none;
                        font-size: 15px;
                        color: #0d6efd;

                    }
                }

                h2 {
                    margin: 30px 0;
                    font-size: 48px;
                    color: #223645;
                    font-weight: 600;

                    @media (max-width: 991px) {
                        font-size: 36px;
                    }

                    @media (max-width: 568px) {
                        font-size: 28px;
                    }
                }

                h3 {
                    font-size: 21px;

                    color: #68727b;
                    line-height: 25px;

                    @media (max-width: 568px) {
                        font-size: 17px;
                    }
                }
            }
        }

        .popular_cards {
            padding: 0 0 40px;
            display: flex;
            align-items: center;
            justify-content: center;

            @media (max-width: 991px) {
                gap: 20px;
            }

            .col-lg-4 {
                .card {
                    width: 100%;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                    height: 660px;
                    border-radius: 20px;
                    display: flex;
                    align-items: center;
                    flex-direction: column-reverse;

                    @media (max-width: 568px) {
                        height: 600px;
                    }

                    .data {
                        height: 260px;
                        background-color: white;
                        padding: 13px 20px 70px;
                        margin: 0 15px 20px;
                        border-radius: 10px;
                        border: none;
                        position: relative;

                        @media (max-width: 568px) {
                            padding: 13px 20px 50px;
                            height: 220px;
                        }

                        h2 {
                            margin-top: 10px;
                            font-size: 16px;

                            color: #0d6efd;
                            font-weight: 600;
                        }

                        h3 {
                            letter-spacing: 0.5px;

                            margin: 15px 0 25px;
                            font-size: 18px;
                            line-height: 20px;
                            color: #223645;
                            font-weight: 700;

                            @media (max-width: 568px) {
                                margin: 15px 0 15px;
                            }
                        }

                        h4 {

                            font-size: 16px;
                            color: #68727b;
                            line-height: 26px;
                            font-weight: 400;
                        }

                        .stars {
                            display: flex;
                            position: absolute;
                            top: -15px;
                            right: 25px;
                            background-color: #0d6efd;
                            color: white;
                            font-size: 19px;
                            align-items: center;
                            justify-content: center;
                            text-align: center;
                            padding: 0 20px 2px;
                            border-radius: 15px;
                        }
                    }
                }
            }

            .first {
                .card {
                    background-image: url("assets/images/Haridwar-Tourtrip-Ganga-Arti-scaled.webp");
                }
            }

            .second {
                .card {
                    background-image: url("assets/images/Haridwar-Tourtrip-Chandi-Devi-Temple.webp");
                }
            }

            .third {
                .card {
                    background-image: url("assets/images/Daksheswar-Mahadev-Temple.webp");
                }
            }
        }
    }
}

#book_now_section {
    padding: 80px 0;
    background-color: #000;

    .bns_icon {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;

        img {
            width: 60px;
            height: 60px;
        }
    }

    h1 {
        color: #fff;
        max-width: 800px;
        margin: 0 auto 20px auto;
        font-size: 45px;
        font-weight: bold;
        text-align: center;

        @media (max-width: 768px) {
            font-size: 30px;
        }
    }

    p {
        text-align: center;
        color: #fff;
        font-size: 15px;
        font-weight: 500;
        text-align: center;
        margin: 0 auto 25px auto;
        max-width: 1000px;

        @media (max-width: 768px) {
            font-size: 12px;
        }
    }

    .booknow_btn {
        display: flex;
        justify-content: center;

        a {
            padding: 20px 80px;
            color: #fff;
            background-color: #0D6EFD;
            font-weight: 500;
            border-radius: 50px;
        }
    }

    .features {
        display: flex;
        flex-wrap: wrap;
        padding: 30px 0;
        gap: 30px;
        justify-content: center;
        background: #fff;
        border-radius: 20px;
        margin-top: 50px;

        .feature {
            flex: 1;
            min-width: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;

            span {
                color: #223645;
                font-weight: 600;
                font-size: 19px;
                text-align: center;

                  @media (max-width: 768px) {
                    font-size: 14px;
                }
            }

            i {
                color: #0D6EFD;
                font-size: 35px;

                  @media (max-width: 768px) {
                    font-size: 24px;
                }
            }
        }
    }

}

#comment_part {
    padding: 0 0 50px;

    .container {
        @media (max-width: 991px) {
            padding: 0 40px;
        }

        @media (max-width: 440px) {
            padding: 0 25px;
        }

        .row {
            border-radius: 10px;
            border: 1px solid gray;

            .title {
                margin: 30px 0;
                padding: 0 60px 0 10px;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;

                @media (max-width: 991px) {
                    padding: 0 30px 0 10px;
                    margin: 30px 0 20px;
                }

                .left {
                    display: flex;
                    flex-direction: row;
                    gap: 15px;

                    .img {
                        img {
                            width: 53px;
                        }
                    }

                    .info {
                        h2 {
                            color: #272727;

                            font-size: 18px;
                            font-weight: 600;
                            font-style: italic;
                            line-height: 1.5;
                        }

                        i {
                            color: #f2b01e;
                            width: 18px;
                        }
                    }
                }

                .right {
                    i {
                        font-size: 45px;
                        color: rgb(179, 178, 178);
                    }
                }
            }

            .second_part {
                padding: 0 60px 20px;

                @media (max-width: 991px) {
                    padding: 0 20px 20px 20px;
                }

                h2 {
                    margin-bottom: 15px;
                    font-style: italic;
                    color: #6f6f6f;
                    line-height: 33px;

                    font-weight: 400;
                    font-size: 17px;
                }
            }
        }
    }
}
</style>

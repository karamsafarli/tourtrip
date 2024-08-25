<template>
<Header />
<div class="tour_packages_2day_page">
    <Banner hindi="हरिद्वार" title="2 Days Tour Packages" subtitle="Get your 2 Days Haridwar Tour Personalized by our team of tour experts." imgPath="assets/images/banner_bg_1.webp" />

    <section id="popular_destinations" class="popular_destinations">
        <div class="container">
            <TitleTag title="2 Days Tour for Haridwar" />
            <h1>Popular Destinations Covered</h1>

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

    <BookNow />

    <section class="popular_tour_packages">
        <div class="container">

            <TitleTag title="Pilgrimages" />

            <h1>Special Package Offers</h1>
            <p>
                Unveiling the Charms of Uttarakhand's Sacred Hub and Its Popular Attractions
                That Leave Travelers Mesmerized.
            </p>

            <TourCard imgPath="assets/images/tourcard_1.webp" duration="11 Nights & 12 Days" title="Chardham Yatra Package From Delhi" description="This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath – nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations." prevPrice="37,000" saledPrice="26,999" />
            <TourCard imgPath="assets/images/tourcard_1.webp" duration="11 Nights & 12 Days" title="Chardham Yatra Package From Delhi" description="This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath – nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations." prevPrice="37,000" saledPrice="26,999" />
        </div>
    </section>

    <section class="vertical_tour_cards">
        <div class="container-xxl">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <VerticalTourCard 
                        imgPath="assets/images/verticaltour_1.png"
                        title="Char Dham Yatra Tour Package From Haridwar"
                        prevPrice="₹ 28,000"
                        newPrice="₹ 21,999"
                        :rating="5"
                    />
                </div>
                <div class="col-lg-3 col-md-6">
                    <VerticalTourCard 
                        imgPath="assets/images/verticaltour_1.png"
                        title="Char Dham Yatra Tour Package From Haridwar"
                        prevPrice="₹ 28,000"
                        newPrice="₹ 21,999"
                        :rating="4.7"
                    />
                </div>
                <div class="col-lg-3 col-md-6">
                    <VerticalTourCard 
                        imgPath="assets/images/verticaltour_1.png"
                        title="Char Dham Yatra Tour Package From Haridwar"
                        prevPrice="₹ 28,000"
                        newPrice="₹ 21,999"
                        :rating="4.5"
                    />
                </div>
                <div class="col-lg-3 col-md-6">
                    <VerticalTourCard 
                        imgPath="assets/images/verticaltour_1.png"
                        title="Char Dham Yatra Tour Package From Haridwar"
                        prevPrice="₹ 28,000"
                        newPrice="₹ 21,999"
                        :rating="4"
                    />
                </div>
            </div>
        </div>
    </section>


    <section id="reviews">
<div class="container">

    <h1>Our Reviews</h1>
    <p>As your click-through-rate rises, your website's time-on-site will likely increase as well. <br>
This is how long your website visitors are staying. Book Your Goa Tour Packages With Us Now!</p>

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
</div>

<Footer :isHome="true"/>
</template>

<script>
import Banner from '../components/Banner.vue';
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import TitleTag from '../components/TitleTag.vue';
import BookNow from '../components/BookNow.vue';
import TourCard from '../components/TourCard.vue';
import ReviewItem from '../components/ReviewItem.vue';
import VerticalTourCard from '../components/VerticalTourCard.vue';
export default {
    components: {
        Banner,
        Header,
        Footer,
        TitleTag,
        BookNow,
        TourCard,
        ReviewItem,
        VerticalTourCard
    }
}
</script>

<style lang="scss" scoped>
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


.vertical_tour_cards {
    padding: 40px 0 70px 0;
}

#popular_destinations {
    padding-top: 60px;

    .container {
        .row {
            .title {
                padding: 70px 0 35px;
                text-align: center;

                @media (max-width: 991px) {
                    padding: 60px 15px 30px;
                }

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

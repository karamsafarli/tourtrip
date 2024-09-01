<template>
<Header />
<div class="tour_packages_2day_page chardham_package_page">
    <Banner imgPath="assets/images/chardham_bg.webp" />

    <section id="package_information">
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-8">
                    <div class="img_slider">
                        <Swiper :navigation="navigationButtons" :modules="modules" :loop="true">
                            <div class="slider_next_1">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="slider_prev_1">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <SwiperSlide>
                                <div class="slider_img">
                                    <img src="https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Rectangle-5585.png" alt="">
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div class="slider_img">
                                    <img src="https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Rectangle-5585-1.png" alt="">
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div class="slider_img">
                                    <img src="https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Rectangle-5585-2.png" alt="">
                                </div>
                            </SwiperSlide>
                        </Swiper>
                    </div>

                    <div class="best_pkg_slider">
                        <p>Best Packages</p>
                        <div class="slider_content">
                            <Swiper :modules="modules" :navigation="navigationButtons2">
                                <div class="slider_next_2">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                <div class="slider_prev_2">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </div>
                                <SwiperSlide>
                                    <Link href="/faq">Faq</Link>
                                </SwiperSlide>
                                <SwiperSlide>
                                    <Link href="/blog">Blog</Link>
                                </SwiperSlide>
                            </Swiper>
                        </div>
                    </div>

                    <div class="overview">
                        <h5>
                            Package Overview
                        </h5>

                        <p>
                            Discover the mystical allure of Haridwar with our exclusive tour package. Nestled at the foothills of the majestic Himalayas, Haridwar beckons with its profound spiritual significance and breathtaking natural beauty.
                        </p>

                        <p>
                            Embark on a journey of self-discovery as you explore the sacred temples and vibrant ghats lining the banks of the revered Ganges River. Witness the mesmerizing Ganga Aarti at Har Ki Pauri, where the evening air is filled with chants and the flicker of countless oil lamps.
                        </p>

                        <p>
                            Delve into the ancient lore and spirituality as you visit iconic landmarks like the Mansa Devi Temple, perched atop Bilwa Parvat, and the Chandi Devi Temple, nestled on Neel Parvat. Traverse the winding streets, immersing yourself in the rich tapestry of local culture and traditions.
                        </p>

                        <p>
                            Expand your horizons with an excursion to Rishikesh, the tranquil abode of yogis and seekers. Cross the iconic bridges of Lakshman Jhula and Ram Jhula, and delve into the serene ambiance of revered ashrams like Parmarth Niketan and Sivananda Ashram.
                        </p>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="tour_price">
                        <h3>Starting From</h3>
                        <div class="seperator"></div>
                        <h5 class="price">
                            <span class="prev_price">₹ 15,000 /- </span>
                            ₹ 7,500 /-
                        </h5>
                        <p>*Per person on quad sharing basis</p>
                        <Link href="/enquire-now">ENQUIRE NOW!</Link>
                    </div>

                    <div class="package_includes">
                        <div class="duration">
                            <img src="../../assets/images/clock-icon.svg" alt="">
                            <h5>
                                Duration:
                                <span> 1 Nights / 2 Days</span>
                            </h5>
                        </div>
                        <div class="places">
                            <img src="../../assets/images/location-holiday.svg" alt="">
                            <h5>
                                Places to Visit:
                                <span> Haridwar</span>
                            </h5>
                        </div>

                        <div class="seperator">
                            <div class="line"></div>
                            <span>Package Includes</span>
                        </div>

                        <div class="includes">
                            <div class="item">
                                <img src="../../assets/images/hotel_icon.svg" alt="">
                                <span>Hotel</span>
                            </div>
                            <div class="item">
                                <img src="../../assets/images/sightseeing_icon.svg" alt="">
                                <span>Sightseeing</span>
                            </div>
                            <div class="item">
                                <img src="../../assets/images/transfer_icon.svg" alt="">
                                <span>Transfers</span>
                            </div>
                            <div class="item">
                                <img src="../../assets/images/meal_icon.svg" alt="">
                                <span>Meals</span>
                            </div>
                        </div>
                    </div>


                    <div class="need_help">
                        <img src="../../assets/images/operator_icon.svg" alt="">
                        <div class="contact_info">
                            <h5>Need Help?</h5>
                            <div class="info">
                                Call us:
                                <a href="tel:+91123456789"> +91 123456789</a>
                            </div>
                            <div class="info">
                                Mail us:
                                <a href="mailto:info@tourtrip.com"> info@tourtrip.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="ad_img">
                        <Link href="/enquire-now">
                            <img src="../../assets/images/ad_img.jpg" alt="">
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <section id="inc_exc">
        <div class="container-xxl">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="inclusions">
                        <div class="heading">
                            <div class="mark">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <span>Inclusions</span>
                        </div>

                        <ul>
                            <li>Pickup and drop.</li>
                            <li>Complete sightseeing by a Private non AC Vehicle</li>
                            <li>All Taxes, Tolls, Parking’s & Driver Expense.</li>
                            <li>Stay at 3 Star Hotels.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="exclusions">
                        <div class="heading">
                            <div class="mark">
                               <i class="fa-solid fa-xmark"></i>
                            </div>
                            <span>Exclusions</span>
                        </div>

                        <ul>
                            <li>Any private expenses, room service charges.</li>
                            <li>Any Temple entry charge.</li>
                            <li>Any Pony Ride, Doli Charges, Tips Activites.</li>
                            <li>Anything which is not mentioned in the inclusions.</li>
                        </ul>
                    </div>
                </div>
             
            </div>
        </div>
    </section>

    <section id="tour_info_acc">
        <div class="container-xxl">
            <div class="row g-4">
                <div class="col-lg-7">
                    <FaqItem 
                        :isOrange="true"
                        question="Day 1: Arrive Delhi to Haridwar & Darshan"
                    >   
                        <ul>
                            <li>Pickup from Haridwar, Check into the Hotel, and ready to darshan.</li>
                            <li>Visit the Mansa Devi Temple, located atop the Bilwa Parvat Hill. You can reach the temple by either trekking or taking a cable car ride.</li>
                            <li>Explore Chandi Devi Temple, situated on the Neel Parvat hill. Similar to Mansa Devi Temple, you can choose to trek or take a cable car to reach the temple.</li>
                            <li>In the afternoon, visit Har Ki Pauri, one of the most sacred ghats in Haridwar.</li>
                            <li>Spent the night at Haridwar.</li>
                        </ul>
                    </FaqItem>
                    <FaqItem 
                        :isOrange="true"
                        question="Day 1: Arrive Delhi to Haridwar & Darshan"
                    >   
                        <ul>
                            <li>Pickup from Haridwar, Check into the Hotel, and ready to darshan.</li>
                            <li>Visit the Mansa Devi Temple, located atop the Bilwa Parvat Hill. You can reach the temple by either trekking or taking a cable car ride.</li>
                            <li>Explore Chandi Devi Temple, situated on the Neel Parvat hill. Similar to Mansa Devi Temple, you can choose to trek or take a cable car to reach the temple.</li>
                            <li>In the afternoon, visit Har Ki Pauri, one of the most sacred ghats in Haridwar.</li>
                            <li>Spent the night at Haridwar.</li>
                        </ul>
                    </FaqItem>
                    <FaqItem 
                        :isOrange="true"
                        question="Day 1: Arrive Delhi to Haridwar & Darshan"
                    >   
                        <ul>
                            <li>Pickup from Haridwar, Check into the Hotel, and ready to darshan.</li>
                            <li>Visit the Mansa Devi Temple, located atop the Bilwa Parvat Hill. You can reach the temple by either trekking or taking a cable car ride.</li>
                            <li>Explore Chandi Devi Temple, situated on the Neel Parvat hill. Similar to Mansa Devi Temple, you can choose to trek or take a cable car to reach the temple.</li>
                            <li>In the afternoon, visit Har Ki Pauri, one of the most sacred ghats in Haridwar.</li>
                            <li>Spent the night at Haridwar.</li>
                        </ul>
                    </FaqItem>
                    <FaqItem 
                        :isOrange="true"
                        question="Day 1: Arrive Delhi to Haridwar & Darshan"
                    >   
                        <ul>
                            <li>Pickup from Haridwar, Check into the Hotel, and ready to darshan.</li>
                            <li>Visit the Mansa Devi Temple, located atop the Bilwa Parvat Hill. You can reach the temple by either trekking or taking a cable car ride.</li>
                            <li>Explore Chandi Devi Temple, situated on the Neel Parvat hill. Similar to Mansa Devi Temple, you can choose to trek or take a cable car to reach the temple.</li>
                            <li>In the afternoon, visit Har Ki Pauri, one of the most sacred ghats in Haridwar.</li>
                            <li>Spent the night at Haridwar.</li>
                        </ul>
                    </FaqItem>
                    <FaqItem 
                        :isOrange="true"
                        question="Day 1: Arrive Delhi to Haridwar & Darshan"
                    >   
                        <ul>
                            <li>Pickup from Haridwar, Check into the Hotel, and ready to darshan.</li>
                            <li>Visit the Mansa Devi Temple, located atop the Bilwa Parvat Hill. You can reach the temple by either trekking or taking a cable car ride.</li>
                            <li>Explore Chandi Devi Temple, situated on the Neel Parvat hill. Similar to Mansa Devi Temple, you can choose to trek or take a cable car to reach the temple.</li>
                            <li>In the afternoon, visit Har Ki Pauri, one of the most sacred ghats in Haridwar.</li>
                            <li>Spent the night at Haridwar.</li>
                        </ul>
                    </FaqItem>
                </div>

                <div class="col-lg-5">
                     <FaqItem 
                        :isOrange="true"
                        question="Cancellation and Refund Policy"
                        answer="In the event of cancellation, please notify us as soon as possible. Cancellation policies may vary depending on the specific tour package and service providers involved."
                    />   
                     <FaqItem 
                        :isOrange="true"
                        question="Cancellation and Refund Policy"
                        answer="In the event of cancellation, please notify us as soon as possible. Cancellation policies may vary depending on the specific tour package and service providers involved."
                    />   
                     <FaqItem 
                        :isOrange="true"
                        question="Cancellation and Refund Policy"
                        answer="In the event of cancellation, please notify us as soon as possible. Cancellation policies may vary depending on the specific tour package and service providers involved."
                    />   
                     <FaqItem 
                        :isOrange="true"
                        question="Cancellation and Refund Policy"
                        answer="In the event of cancellation, please notify us as soon as possible. Cancellation policies may vary depending on the specific tour package and service providers involved."
                    />   
                     <FaqItem 
                        :isOrange="true"
                        question="Cancellation and Refund Policy"
                        answer="In the event of cancellation, please notify us as soon as possible. Cancellation policies may vary depending on the specific tour package and service providers involved."
                    />   
                    
                </div>

                <div class="enquire_btn">
                    <Link href="/enquire-now">Enquire Now</Link>
                </div>
            </div>
        </div>
    </section>


    <section id="expandables">
        <div class="container-xxl">
            <div class="image_container">
                <div class="animated_img">
                    <img src="../../assets/images/animated_img1.webp" alt="">
                    <div class="overlay">
                        <h5>Yamunotri</h5>
                        <p>Yamunotri is a part of Char Dham (along with Gangotri, Kedarnath and Badrinath), the four most revered Hindu pilgrimages in the Himalayas. The small mountain hamlet, with the Yamunotri Temple at its centre, attracts thousands of devotees every year and is the commencing point of the Char Dham Yatra pilgrimage (May to October), which proceeds from Yamunotri to Gangotri and finally to Kedarnath and Badrinath.</p>
                    </div>
                </div>
                <div class="animated_img">
                    <img src="../../assets/images/animated_img2.webp" alt="">
                    <div class="overlay">
                        <h5>Yamunotri</h5>
                        <p>Yamunotri is a part of Char Dham (along with Gangotri, Kedarnath and Badrinath), the four most revered Hindu pilgrimages in the Himalayas. The small mountain hamlet, with the Yamunotri Temple at its centre, attracts thousands of devotees every year and is the commencing point of the Char Dham Yatra pilgrimage (May to October), which proceeds from Yamunotri to Gangotri and finally to Kedarnath and Badrinath.</p>
                    </div>
                </div>
                <div class="animated_img">
                    <img src="../../assets/images/animated_img3.jpeg" alt="">
                    <div class="overlay">
                        <h5>Yamunotri</h5>
                        <p>Yamunotri is a part of Char Dham (along with Gangotri, Kedarnath and Badrinath), the four most revered Hindu pilgrimages in the Himalayas. The small mountain hamlet, with the Yamunotri Temple at its centre, attracts thousands of devotees every year and is the commencing point of the Char Dham Yatra pilgrimage (May to October), which proceeds from Yamunotri to Gangotri and finally to Kedarnath and Badrinath.</p>
                    </div>
                </div>
                <div class="animated_img">
                    <img src="../../assets/images/animated_img4.jpg" alt="">
                    <div class="overlay">
                        <h5>Yamunotri</h5>
                        <p>Yamunotri is a part of Char Dham (along with Gangotri, Kedarnath and Badrinath), the four most revered Hindu pilgrimages in the Himalayas. The small mountain hamlet, with the Yamunotri Temple at its centre, attracts thousands of devotees every year and is the commencing point of the Char Dham Yatra pilgrimage (May to October), which proceeds from Yamunotri to Gangotri and finally to Kedarnath and Badrinath.</p>
                    </div>
                </div>
                <div class="animated_img">
                    <img src="../../assets/images/animated_img5.jpeg" alt="">
                    <div class="overlay">
                        <h5>Yamunotri</h5>
                        <p>Yamunotri is a part of Char Dham (along with Gangotri, Kedarnath and Badrinath), the four most revered Hindu pilgrimages in the Himalayas. The small mountain hamlet, with the Yamunotri Temple at its centre, attracts thousands of devotees every year and is the commencing point of the Char Dham Yatra pilgrimage (May to October), which proceeds from Yamunotri to Gangotri and finally to Kedarnath and Badrinath.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="vertical_tour_cards">
        <div class="container-xxl">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <VerticalTourCard imgPath="assets/images/verticaltour_1.png" title="Char Dham Yatra Tour Package From Haridwar" prevPrice="₹ 28,000" newPrice="₹ 21,999" :rating="5" />
                </div>
                <div class="col-lg-3 col-md-6">
                    <VerticalTourCard imgPath="assets/images/verticaltour_1.png" title="Char Dham Yatra Tour Package From Haridwar" prevPrice="₹ 28,000" newPrice="₹ 21,999" :rating="4.7" />
                </div>
                <div class="col-lg-3 col-md-6">
                    <VerticalTourCard imgPath="assets/images/verticaltour_1.png" title="Char Dham Yatra Tour Package From Haridwar" prevPrice="₹ 28,000" newPrice="₹ 21,999" :rating="4.5" />
                </div>
                <div class="col-lg-3 col-md-6">
                    <VerticalTourCard imgPath="assets/images/verticaltour_1.png" title="Char Dham Yatra Tour Package From Haridwar" prevPrice="₹ 28,000" newPrice="₹ 21,999" :rating="4" />
                </div>
            </div>
        </div>
    </section>


    <section id="faqs">
        <div class="container-xxl">
            <h1>Frequently Asked Questions</h1>
            <FaqItem 
                question="Q. How to plan Char Dham yatra from Haridwar?"
                answer="Planning a Char Dham Yatra from Haridwar involves selecting the right time is April-October, by choosing tour packages offered by TourTripX, booking accommodations and transportation, obtaining necessary permits, packing essentials, planning an itinerary with darshan time and rest days, staying informed about weather and road conditions, respecting local customs, and embracing the spiritual journey."
            />
            <FaqItem 
                question="Q. How to plan Char Dham yatra from Haridwar?"
                answer="Planning a Char Dham Yatra from Haridwar involves selecting the right time is April-October, by choosing tour packages offered by TourTripX, booking accommodations and transportation, obtaining necessary permits, packing essentials, planning an itinerary with darshan time and rest days, staying informed about weather and road conditions, respecting local customs, and embracing the spiritual journey."
            />
            <FaqItem 
                question="Q. How to plan Char Dham yatra from Haridwar?"
                answer="Planning a Char Dham Yatra from Haridwar involves selecting the right time is April-October, by choosing tour packages offered by TourTripX, booking accommodations and transportation, obtaining necessary permits, packing essentials, planning an itinerary with darshan time and rest days, staying informed about weather and road conditions, respecting local customs, and embracing the spiritual journey."
            />
            <FaqItem 
                question="Q. How to plan Char Dham yatra from Haridwar?"
                answer="Planning a Char Dham Yatra from Haridwar involves selecting the right time is April-October, by choosing tour packages offered by TourTripX, booking accommodations and transportation, obtaining necessary permits, packing essentials, planning an itinerary with darshan time and rest days, staying informed about weather and road conditions, respecting local customs, and embracing the spiritual journey."
            />
            <FaqItem 
                question="Q. How to plan Char Dham yatra from Haridwar?"
                answer="Planning a Char Dham Yatra from Haridwar involves selecting the right time is April-October, by choosing tour packages offered by TourTripX, booking accommodations and transportation, obtaining necessary permits, packing essentials, planning an itinerary with darshan time and rest days, staying informed about weather and road conditions, respecting local customs, and embracing the spiritual journey."
            />
            <FaqItem 
                question="Q. How to plan Char Dham yatra from Haridwar?"
                answer="Planning a Char Dham Yatra from Haridwar involves selecting the right time is April-October, by choosing tour packages offered by TourTripX, booking accommodations and transportation, obtaining necessary permits, packing essentials, planning an itinerary with darshan time and rest days, staying informed about weather and road conditions, respecting local customs, and embracing the spiritual journey."
            />
            <FaqItem 
                question="Q. How to plan Char Dham yatra from Haridwar?"
                answer="Planning a Char Dham Yatra from Haridwar involves selecting the right time is April-October, by choosing tour packages offered by TourTripX, booking accommodations and transportation, obtaining necessary permits, packing essentials, planning an itinerary with darshan time and rest days, staying informed about weather and road conditions, respecting local customs, and embracing the spiritual journey."
            />
            <FaqItem 
                question="Q. How to plan Char Dham yatra from Haridwar?"
                answer="Planning a Char Dham Yatra from Haridwar involves selecting the right time is April-October, by choosing tour packages offered by TourTripX, booking accommodations and transportation, obtaining necessary permits, packing essentials, planning an itinerary with darshan time and rest days, staying informed about weather and road conditions, respecting local customs, and embracing the spiritual journey."
            />
        </div>
    </section>


    <section id="reviews">
        <div class="container">

            <h1>Customer Feedback: A Glimpse into Our Reviews</h1>
            <p>As your click-through-rate rises, your website's time-on-site will likely increase as well. <br>
                This is how long your website visitors are staying. Book Your Goa Tour Packages With Us Now!</p>

            <ReviewItem author="Somnath Das" review="I booked a cab for 2 dham. The service was amazing. The process of booking was hassle free. The driver was allocated well in time. The team addressed all my queries patiently. Thanks to the team." profileImg="assets/images/pp.png" :sliderImgs="['assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg', 'assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg',]" />
            <ReviewItem author="Somnath Das" review="I booked a cab for 2 dham. The service was amazing. The process of booking was hassle free. The driver was allocated well in time. The team addressed all my queries patiently. Thanks to the team." profileImg="assets/images/pp.png" :sliderImgs="['assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg', 'assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg',]" />
            <ReviewItem author="Somnath Das" review="I booked a cab for 2 dham. The service was amazing. The process of booking was hassle free. The driver was allocated well in time. The team addressed all my queries patiently. Thanks to the team." profileImg="assets/images/pp.png" :sliderImgs="['assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg', 'assets/images/review_slide_1.jpg', 'assets/images/review_slide_2.jpg','assets/images/review_slide_3.jpg','assets/images/review_slide_4.jpg','assets/images/review_slide_5.jpg',]" />

        </div>
    </section>
</div>

<Footer :isHome="true" />
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
import {
    Swiper,
    SwiperSlide
} from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import {
    Navigation
} from 'swiper/modules';
import {
    Link
} from '@inertiajs/inertia-vue3';
import FaqItem from '../components/FaqItem.vue';

export default {
    components: {
        Banner,
        Header,
        Footer,
        TitleTag,
        BookNow,
        TourCard,
        ReviewItem,
        VerticalTourCard,
        Swiper,
        SwiperSlide,
        Link,
        FaqItem
    },
    data() {
        return {
            activeTab: 0
        }
    },
    methods: {
        setActiveTab(tab) {
            this.activeTab = tab;
        }
    },
    setup() {
        return {
            modules: [Navigation],
            navigationButtons: {
                nextEl: '.slider_next_1',
                prevEl: '.slider_prev_1',
            },
            navigationButtons2: {
                nextEl: '.slider_next_2',
                prevEl: '.slider_prev_2',
            },
            navigationButtons3: {
                nextEl: '.slider_next_3',
                prevEl: '.slider_prev_3',
            },
        }
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
        font-size: 28px;
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
        font-size: 12px;
    }
}

#package_information {
    padding: 70px 0;

    .img_slider {
        position: relative;
        margin-bottom: 30px;

        .slider_next_1,
        .slider_prev_1 {
            position: absolute;
            top: 50%;
            transform: tarnslateY(-50%);
            z-index: 100;
            cursor: pointer;

            i {
                color: hsl(0deg 0% 93.3% / 90%);
                font-size: 25px;
            }
        }

        .slider_prev_1 {
            left: 15px
        }

        .slider_next_1 {
            right: 15px
        }

        .slider_img {
            height: 550px;
            width: 100%;
            border-radius: 12px;
            overflow: hidden;

            img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }
    }

    .best_pkg_slider {
        display: flex;
        align-items: center;
        height: 48px;
        border: 1px solid #FB4D00;
        position: relative;

        .slider_prev_2,
        .slider_next_2 {
            position: absolute;
            cursor: pointer;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;

            i {
                color: #000;
                font-size: 18px;
            }
        }

        .slider_prev_2 {
            right: 25px;
        }

        .slider_next_2 {
            right: 0;
        }

        p {
            color: #fff;
            font-weight: 600;
            line-height: 48px;
            margin: 0;
            padding: 0 10px;
            background-color: #FB4D00;
            font-size: 16px;
        }

        .swiper {
            height: 100% !important;
        }

        .slider_content {
            flex: 1;
            padding: 0 15px;
            height: 100%;

            .swiper-slide {
                width: 100% !important;
                height: 100% !important;
                display: flex;
                flex-direction: column;
                justify-content: center;

                a {
                    color: #222222;
                    font-size: 16px;
                    font-weight: 600;
                }
            }
        }
    }

    .overview {
        padding: 25px;
        border-radius: 10px;
        border: 1px solid #D6D6D6;
        margin: 30px 0;

        h5 {
            color: #FB4D00;
            font-size: 24px;
            margin-bottom: 30px;
        }

        p {
            color: #6f6f6f;
            font-size: 16px;
            margin-bottom: 16px;
            line-height: 30px;
            text-align: left;
        }
    }



    .tour_price {
        padding: 30px;
        border-radius: 10px;
        border: 1px solid #D6D6D6;
        margin-bottom: 30px;
        h3 {
            color: #181818;
    font-size: 24px;
    text-align: center;
        }

        .seperator {
            width: 70%;
            margin: 20px auto;
            height: 1px;
            background-color: #dbdbdb;
        }

        .price {
            margin-bottom: 15px;
            font-size: 24px;    
            color: #3D3D3D;
            text-align: center;

            span {
                color: #FF0000;
                text-decoration: line-through !important;
            }
        }

        p {
            font-size: 16px;
            color: #B3AAAA;
            text-align: center;
            margin-bottom: 40px
        }

        a {
            display: block;
            width: 180px;
            padding: 12px 0;
            text-align: center;
            border-radius: 6px;
            background-color: #FB4D00;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            margin: 0 auto;
        }
    }


    .package_includes {
        padding: 20px;
        border: 1px solid #D6D6D6;
        border-radius: 10px;
        margin-bottom: 30px;

        .duration, .places {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            gap: 8px;

            img {
                width: 20px;
                flex-shrink: 0;
            }

            h5 {
                margin: 0;
                
                color: #0C0C0C;
    font-size: 16px;
                font-weight: 600;
                span {
                    font-weight: 400;
                }
            }


        }

        .seperator {
            position: relative;
            display: flex;
            justify-content: center;
            margin: 30px 0;
            .line {
                position: absolute;
                width: 100%;
                height: 1px;
                left: 0;
                z-index: -1;
                top: 50%;
                transform: translateY(-50%);
                background-color: #000;
            }

            span {
                background-color: #fff;
                position: relative;
                border: 1px solid #A5A5A5;
                border-radius: 40px;
                padding: 12px 24px;
                font-size: 15px;
                color: #3B3A3A;
                font-weight: 600;
            }
        }

        .includes {
            display: flex;
            gap: 10px;
            align-items: center;
            .item {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 15px;
                flex: 1;
                span {
                    font-size: 15px;
                    color: #0C0C0C;
                }
            }
        }
    }
    
    .need_help {
        padding: 40px;
        border-radius: 10px;
        border: 1px solid #D6D6D6;
        display: flex;
        gap: 20px;
        margin-bottom: 30px;

 .contact_info {
        h5 {
            font-size: 22px;
            color: #0C0C0C;
        }

        .info {
            font-size: 16px;
            color: #7A7A7A;
            font-weight: 500;
            a {
                color: #ffce1f;
            }
        }

        }
    }

    .ad_img {
        a {
            img {
                width: 100%;
                border-radius: 20px;
            }
        }
    }
}

#images_slider {
    .img_cont {
        width: 100%;
        height: 200px;
        @media (max-width: 768px) {
            height: 150px;
        }
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }

         .slider_next_3,
        .slider_prev_3 {
            position: absolute;
            top: 50%;
            transform: tarnslateY(-50%);
            z-index: 100;
            cursor: pointer;

            i {
                color: hsl(0deg 0% 93.3% / 90%);
                font-size: 25px;
            }
        }

        .slider_prev_3 {
            left: 15px
        }

        .slider_next_3 {
            right: 15px
        }
}

#inc_exc {
    // padding: 0 0 20px 0;
    .inclusions,.exclusions {
        padding: 40px 30px;
        border: 1px solid #D6D6D6;
        border-radius: 10px;

        .heading {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            .mark {
                width: 42px;
                height: 42px;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #fff;
                i {
                    font-size: 20px;
                }
            }

            span {
                font-size: 24px;
                color: #000;
            }
        }

        ul {
            list-style: square;
            li {
                color: #414141;
                font-size: 16px;
                padding: 3px 0;
            }
        }
    }

    .inclusions {
        background-color:#EAFAEA;
        .mark {
            background-color: #32AF31;
        }
    }

    .exclusions {
        background-color: #FBEBEB;
         .mark {
            background-color: #E02828;
        }
    }
}

#tour_info_acc {
    padding: 40px 0;
    color: #6f6f6f;
    font-size: 16px;

    ul {
        li {
            padding: 6px 0;
        }
    }

    .enquire_btn {
        display: flex;
        justify-content: center;
        margin: 20px 0;
        a {
            background-color: #FB4D00;
            color: #fff;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: 600;

            @media (max-width: 768px) {
                font-size: 16px;
            }
        }
    }
}

#expandables {
    padding: 40px 0;
    .image_container {
        display: flex;

        @keyframes animateh5 {
            from {
                opacity: 0;
                transform: translateY(-400%)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }
        @keyframes animatep {
            from {
                opacity: 0;
                transform: translateY(400%)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .animated_img {
    flex: 1;
    height: 400px;
    position: relative;
    cursor: pointer;
    transition: .3s ease-in-out;
    overflow: hidden;

    &:hover {
        flex: 3;

        @media (max-width: 768px) {
            flex: 4;
        }

        .overlay {
            animation: opacity .4s ease .3s forwards;

            h5 {
                animation: animateh5 .4s ease .3s forwards; 
            }

            p {
                animation: animatep .4s ease .3s forwards; 
            }
        }
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @keyframes opacity {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
        background-color: #0000007a;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        gap: 20px;
        justify-content: center;
        align-items: center;
        padding: 10px;
        transition: .5s ease-in-out;
        opacity: 0;

        h5 {
            font-size: 24px;
            color: #fff;   
            margin: 0;
            @media (max-width: 768px) {
            font-size: 14px;
        }
        }

        p {
            color: #fff;
            font-size: 16px;
            margin: 0;

             @media (max-width: 768px) {
            font-size: 10px;
        }
        }
    }
}

    }
}

#itinerary_details {
    h2 {
        font-size: 30px;
        color: #223645;
        margin-bottom: 20px;
    }

    .itinerary_tabs {
        .tab_wrapper {
            background-color: #3a78c99c;
        border-radius: 5px 5px 0px 0px;
        padding: 10px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;

            .tab {
                flex:1;
                border-radius: 5px;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 30px;
                padding: 12px 20px;
                font-size: 18px;
                font-weight: 500;
                cursor: pointer;
                min-width: fit-content;
                transition: .2s ease-in-out;
            }
            .active {
                background-color: #3A78C9;
            }
        }

        .tab_details {
            background-color: #fff;
            padding: 40px 32px;
            @media (max-width: 768px) {
                padding: 40px 20px;
            }
            .detail_container {
                border-left: 1px dashed #3a78c99c;
                padding: 0 30px;
                .timeline_heading {
                    color: #656565;
                    font-size: 16px;
                    position: relative;
                    font-weight: 600;

                    &::before {
                        content: "";
                        position: absolute;
                        width: 12px;
                        height: 12px;
                        border-radius: 50%;
                        background-color: #3a78c99c;
                        top: 0;
                        left: -36px;
                    }
                }

                p {
                    margin: 16px 0;
                    color: #6f6f6f;
                    font-size: 16px;
                    text-align: left;
                    line-height: 30px;
                    max-width: 100%;
                }
            }
        }
    }
}

.vertical_tour_cards {
    padding: 40px 0 70px 0;
}

#faqs {
    padding: 40px 0;

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

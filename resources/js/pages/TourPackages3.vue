<template>
<Header />
<div class="tour_packages_2day_page">
    <Banner hindi="हरिद्वार" title="3 Days Tour Packages" subtitle="Get your 3 Days Haridwar Tour Packages Personalized by our team of tour experts." imgPath="assets/images/3days_banner_bg.png" />

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

    <section id="images_slider">
        <div class="container-xxl">
            <Swiper 
            :modules="modules"
            :navigation="navigationButtons3"
                :breakpoints="{
    1300: {
                        slidesPerView: 5
                    },
    991: {
                        slidesPerView: 4
                    },
    768: {
                        slidesPerView: 3
                    },
    100: {
                        slidesPerView: 2
                    },
                }"
            >

                <div class="slider_next_3">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="slider_prev_3">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                <SwiperSlide>
                    <div class="img_cont">
                        <img src="../../assets/images/slider_1.webp" alt="">
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="img_cont">
                        <img src="../../assets/images/slider_2.webp" alt="">
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="img_cont">
                        <img src="../../assets/images/slider_3.webp" alt="">
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="img_cont">
                        <img src="../../assets/images/slider_1.webp" alt="">
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                    <div class="img_cont">
                        <img src="../../assets/images/slider_2.webp" alt="">
                    </div>
                </SwiperSlide>
            </Swiper>
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


    <section id="itinerary_details">
        <div class="container-xxl">
            <h2>Itinerary Details</h2>

            <div class="itinerary_tabs">
                <div class="tab_wrapper">
                    <div :class="activeTab === 0 ? 'tab active' : 'tab'"
                     @click="setActiveTab(0)"
                     >
                            <i class="fa-regular fa-calendar"></i>
                            <span>Day 1: Local Sightseeing</span>
                    </div>
                    <div :class="activeTab === 1 ? 'tab active' : 'tab'" @click="setActiveTab(1)">
                            <i class="fa-regular fa-calendar"></i>
                            <span>Day 2: Rishikesh</span>
                    </div>
                    <div :class="activeTab === 2 ? 'tab active' : 'tab'" @click="setActiveTab(2)">
                            <i class="fa-solid fa-car"></i>
                            <span>Cab Schedule</span>
                    </div>
                </div>

                <div class="tab_details" v-if="activeTab === 0">
                    <div class="detail_container">
                       <div class="timeline">
                         <h5 class="timeline_heading">
                            Location 1: Daksh Mahadev Temple
                        </h5>
                        <p>
                            <b>Daksheswar Mahadev</b> ( दक्षेश्‍वर महादेव मन्दिर) or Daksha Mahadev temple is a Hindu temple dedicated to Lord Shiva, located in the town of Kankhal, about 4 km from Haridwar, Uttarakhand, India. It is named after King Daksha Prajapati, the father of Sati. Daksha is one of the fourteen Prajapatis, creator deities, who preside over procreation and are the protector of life in Hindu mythology.
                        </p>
                       </div>

                        <div class="timeline">
                            <h5 class="timeline_heading">Location 2: Har Ki Pauri</h5>
                        <p>
                            Har Ki Pauri is a major landmark place and a famous ghat on the banks of river Ganga in Haridwar. A center place of attraction among devotees in Haridwar, Har ki Pauri is believed to be the place of exit of holy river Ganga from the mountains. 
                        </p>
                        <p>
                            World famous Ganga Aarti takes place in Brahmakund area of Har ki Pauri, a sacred spot where it is believed that the nectar (Amrit) fell on earth. Largest fairs of Hindu’s, Kumbh and Ardh Kumbh also takes place at Har ki Pauri.
                        </p>
                        </div>

                        <div class="timeline">
                            <h5 class="timeline_heading">
                                Location 3: Ganga Aarti
                            </h5>
                            <p>
                                Ganga Aarti is a religious prayer that takes place at the bank of the sacred river Ganga at the Har Ki Pauri ghat in Haridwar. Bringing in tourists and devotees from all over the world, it is a ritual of light and sound where the priests perform prayers with bowls of fire and the ringing of the temple bells. Visitors float “diyas” (small candles) and flowers, surrounded by the chanting of the mantras and the reflection of the lights off the surface of the flowing river, which is said to be blessed by the Goddess Ganga.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab_details" v-if="activeTab === 1">
                    <div class="detail_container">
                       <div class="timeline">
                         <h5 class="timeline_heading">
                            Location 1: Vaishno Devi Temple
                        </h5>
                        <p>
                            A replica of the Vaishno Devi temple in Kashmir, the Vaishno Devi Temple of Haridwar is marked by tunnels and caves that lead to the inner sanctum containing the shrine of Goddess Vaishno Devi. The divine temple houses three deities – Lakshmi, Kaali and Saraswati. The Vaishno Devi Temple in Haridwar is a frequently visited site, both by religious devotees and nature lovers because of the stunning view of the surrounding landscape.
                        </p>
                        <p>
                            Apart from its architecture and tunnels, this temple bears no resemblance to the original Vaishno Devi Temple. After climbing a flight of steep stairs and crawling through a narrow tunnel, the devotees are blessed with the sight of the idol of Maa Vaishno Devi and the replicas of the 12 Jyotirlingas in India. It is widely believed that the Vaishno Devi Temple of Haridwar was constructed in the memory of Trikuta, a devotee of Lord Ram. She prayed to him so devotedly that he agreed to marry her in his last earthy carnation. This is also one of the Shakti Peethas temple.
                        </p>
                       </div>

                        <div class="timeline">
                            <h5 class="timeline_heading">Location 2: Lakshman Jhula</h5>
                        <p>
                           The Lakshman Jhula is a famous hanging bridge across the river Ganga that connects two villages, Tapovan in the Tehri Garhwal district and Jonk in the Pauri Garhwal district. Located in the town Rishikesh in the Indian state of Uttarakhand, the entire bridge is made up of iron, is 450 feet long and is situated at the height of 70 feet from the river. Sadly, it has been closed permanently owing to the risk to the safety and security. A new glass bridge is set to come up adjacent to Lakshman Jhula. However, it is still used by pedestrians but bikes are strictly not allowed.
                        </p>
                        <p>
                            The Lakshman Jhula is well-known amongst tourists because it is believed that Lord Lakshman, the younger brother of Lord Rama, had crossed the river Ganga at this same site.
                        </p>
                        </div>

                        <div class="timeline">
                            <h5 class="timeline_heading">
                                Location 3: Ram Jhula
                            </h5>
                            <p>
                               Ram Jhula is one of the most iconic places in Rishikesh and if you are planning a pilgrimage to the city, or just visiting for a holiday, you must stop by this iconic bridge. It is a suspension bridge, built entirely out of iron and the length of the bridge is around 450 feet. It was constructed in the year 1986, by the PWD.
                            </p>
                            <p>
                                The bridge is located over the holy Ganga river and it connects Sivananda Nagar in Muni Ki Reti, in the district of Tehri Garhwal in the west to Swargashram in the district of Pauri Garhwal, in the east.
                            </p>
                            <p>
                                People can also traverse the bridge with bikes or cycles. A number of holy ashrams and Hindu religious centres and temples can be found lining the side of the bridge. These ashrams encompass the true essence of Rishikesh, with their peace, hospitality and piety.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab_details" v-if="activeTab === 2">
                    <div class="detail_container">
                       <div class="timeline">
                         <h5 class="timeline_heading">
                            Arrival In Haridwar
                        </h5>
                        <p>
                            Welcome to the vibrant city of Haridwa, where a warm reception awaits you amidst the bustling streets, grand monuments, and a rich tapestry of diverse cultures, marking the beginning of an extraordinary travel experience.
                        </p>
                      
                       </div>

                        <div class="timeline">
                            <h5 class="timeline_heading">Haridwar – Rishikesh</h5>
                        <p>
                           Haridwar is an ancient city and important Hindu pilgrimage site in North India’s Uttarakhand state, where the River Ganges exits the Himalayan foothills. The largest of several sacred ghats (bathing steps), Har Ki Pauri hosts a nightly Ganga Aarti (river-worshipping ceremony) in which tiny flickering lamps are floated off the steps.
                        </p>
                       
                        </div>

                        <div class="timeline">
                            <h5 class="timeline_heading">
                               Drop at Haridwar
                            </h5>
                            <p>
                               As we bid you farewell in Delhi, we hope your soul has been nourished by the profound experiences and cultural immersion, and that the memories created during this transformative journey will stay with you forever, reminding you of the profound beauty and spirituality of India.
                            </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

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

    <section id="reviews">
        <div class="container">

            <h1>Our Reviews</h1>
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
        Link
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
        border: 1px solid #0D6EFD;
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
            background-color: #0D6EFD;
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
            color: #0D6EFD;
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
            background-color: #0D6EFD;
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
    padding: 40px 0;
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

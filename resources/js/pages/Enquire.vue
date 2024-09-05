<template>
<Header />

<Banner title="Enquire Now!" hindi="We're here to help you." imgPath="assets/images/banner_bg_2.webp" subtitle="Enquire for your Yatra Now. Allow us to take care of all of your travel concerns and serve you in the best possible way!" :isLarge="true" />

<section id="plan_your_trip_title">
    <div class="container">
        <div class="row first">
            <div class="col-lg-5">

                <h2>TO GET THE BEST DEALS, JUST</h2>
                <h3>Fill The Form Below</h3>
            </div>
            <div class="col-lg-7">
                <h4>Fill out the form completely. Our Team will get in touch very soon!</h4>
            </div>

        </div>

    </div>
</section>
<section id="form">

    <form @submit.prevent="submitEnquiry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 title">
                    <h2>Plan your trip
                    </h2>
                </div>
                <div class="col-lg-12 line">
                    <div class="span">

                    </div>
                </div>

                <div class="col-lg-4 input">
                    <h2>Tour Start Date</h2>
                    <input v-model="form.startDate" required type="date">
                </div>
                <div class="col-lg-4 input">
                    <h2>Tour Duration (in days)</h2>
                    <input v-model="form.duration" min="0" required type="number" placeholder="Number of days">
                </div>
                <div class="col-lg-4 input">
                    <h2>Number of Adults</h2>
                    <input v-model="form.adults" min="0" required type="number" placeholder="Number of adults">
                </div>

                <div class="col-lg-4 input">
                    <h2>Number of Children

                    </h2>
                    <input v-model="form.children" min="0" required type="number" placeholder="Number of Children">
                </div>

                <div class="col-lg-4 input">
                    <h2>Pickup City

                    </h2>
                    <input v-model="form.pickupCity" required type="text" placeholder="Pickup City">
                </div>
                <div class="col-lg-4 input">
                    <h2>Drop City

                    </h2>
                    <input v-model="form.dropCity" required type="text" placeholder="Drop City">
                </div>
                <div class="col-lg-12 type_title">
                    <h2>Accommodation Type</h2>
                </div>
                <div class="col-lg-4 star">

                    <input v-model="form.accommodationType" value="3star" type="checkbox">
                    <h2>3 Star Hotel <span> ★★★</span></h2>
                </div>
                <div class="col-lg-4 star">

                    <input v-model="form.accommodationType" value="4star" type="checkbox">
                    <h2>4 Star Hotel <span> ★★★★</span></h2>
                </div>
                <div class="col-lg-4 star">

                    <input v-model="form.accommodationType" value="5star" type="checkbox">
                    <h2>5 Star Hotel <span> ★★★★★</span></h2>
                </div>
                <div class="col-lg-12 select_one">
                    <h2>Interested In
                    </h2>
                    <select required v-model="form.interestedIn" id="country" name="country">
                        <option value="Chardham Yatra">Chardham Yatra</option>
                        <option value="Do Dham Yatra (Kedarnath and Badrinath)">Do Dham Yatra (Kedarnath and Badrinath)</option>
                        <option value="Do Dham Yatra (Gangotri and Yamnotri)">Do Dham Yatra (Gangotri and Yamnotri)</option>
                        <option value="Haridwar Only">Haridwar Only</option>
                        <option value="Haridwar and Rishikesh">Haridwar and Rishikesh</option>
                        <option value="Haridwar, Rishikesh and Mussoorie">Haridwar, Rishikesh and Mussoorie</option>
                        <option value="Haridwar, Rishikesh, Dehradoon and Mussoorie">Haridwar, Rishikesh, Dehradoon and Mussoorie</option>
                    </select>
                </div>
                <div class="col-lg-12 select_one">
                    <h2>Per Person Budget (₹)

                    </h2>
                    <select required v-model="form.budget" id="country" name="country">
                        <option value="5000"> 5000</option>
                        <option value="8000"> 8000</option>
                        <option value="12000"> 12000</option>
                        <option value="15000"> 15000</option>
                        <option value="20000"> 20000</option>

                    </select>
                </div>
                <div class="col-lg-12 text">
                    <h2>Details / Comments (preferred destinations, any health conditions, traveling
                        with children?)
                    </h2>
                    <textarea v-model="form.comments" name="" id="" placeholder="Extra information"></textarea>
                </div>
                <div class="col-lg-3 datas">
                    <h2>Full Name

                    </h2>
                    <input v-model="form.fullName" required type="text" placeholder="Enter Your Name">
                </div>
                <div class="col-lg-3 datas">
                    <h2>Email

                    </h2>
                    <input v-model="form.email" required type="text" placeholder="Enter Your Email">
                </div>
                <div class="col-lg-3 datas">
                    <h2>WhatsApp Number

                    </h2>
                    <input v-model="form.whatsappNumber" required type="text" placeholder="Enter Your Number">
                </div>
                <div class="col-lg-3 datas">
                    <h2>City

                    </h2>
                    <input v-model="form.city" required type="text" placeholder="Enter Your City">
                </div>
                <div class="col-lg-12 line">
                    <div class="span">

                    </div>
                </div>
                <div class="col-lg-12 last_button">
                    <button type="submit">GET FREE QUOTE</button>
                </div>
            </div>

        </div>
    </form>
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

<Footer />
</template>

<script>
import {
    Link
} from '@inertiajs/inertia-vue3';
import Header from '../components/Header.vue';
import Banner from '../components/Banner.vue';
import Footer from '../components/Footer.vue';
import TourCard from '../components/TourCard.vue';
import TitleTag from '../components/TitleTag.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import Swal from 'sweetalert2';

export default {
    components: {
        Link,
        Header,
        Banner,
        Footer,
        TourCard,
        TitleTag
    },

    setup() {
        const form = useForm({
            startDate: '',
            duration: '',
            adults: '',
            children: '',
            pickupCity: '',
            dropCity: '',
            accommodationType: [],
            interestedIn: '',
            budget: '',
            comments: '',
            fullName: '',
            email: '',
            whatsappNumber: '',
            city: ''
        });

        function submitEnquiry() {
            form.post('/enquire', {
              onSuccess: () => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Your enquiry has been submitted successfully.',
                        confirmButtonText: 'OK'
                    });
                },
              onError: () => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }

        return { form, submitEnquiry };
    }
}
</script>


<style lang="scss" scoped>
#plan_your_trip_title {
    background-color: #f5f9ff;

    .container {
        .first {
            padding: 50px 0 80px;

            @media (max-width: 991px) {
                padding: 50px 20px 40px;
            }

            .col-lg-5 {
                h2 {
                    font-size: 22px;
                    font-weight: 500;
                    line-height: 31px;
                    color: black;

                    @media (max-width: 568px) {
                        font-size: 18px;
                    }
                }

                h3 {
                    margin-top: 17px;
                    font-size: 39px;
                    font-weight: 500;
                    line-height: 32px;
                    color: #030303;

                    @media (max-width: 568px) {
                        margin-top: 12px;

                        font-size: 32px;
                    }
                }
            }

            .col-lg-7 {
                margin-top: 25px;

                h4 {
                    color: #7c7c7c;
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 31px;
                }
            }
        }
    }
}

#form {
    margin-bottom: 30px;

    .container {
        @media (max-width: 991px) {
            padding: 0 30px 30px;
        }

        .row {
            padding: 0 70px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 8px rgba(204, 200, 204, 1);

            @media (max-width: 991px) {
                padding: 0 50px;
            }

            @media (max-width: 568px) {
                padding: 0 30px;
            }

            @media (max-width: 432px) {
                padding: 0 20px;
            }

            .title {
                margin-top: 42px;

                h2 {
                    font-weight: 600;
                    font-size: 24px;
                    line-height: 30px;
                    text-transform: capitalize;
                    color: #000000;
                }
            }

            .line {
                margin: 20px 0;

                .span {
                    width: 100%;
                    height: 1px;
                    background-color: #cbcbcb;
                }
            }

            .input {
                margin-bottom: 35px;

                h2 {
                    margin-top: 10px;
                    font-weight: 600;
                    font-size: 16px;
                    line-height: 20px;
                    color: #000000;
                }

                input {
                    margin-top: 8px;
                    line-height: 28px;
                    padding: 10px 20px;
                    color: #000;
                    height: 45px;
                    font-size: 13px;
                    background: #fff;
                    border-radius: 6px;
                    border: 1px solid #d7d7d7;
                    width: 100%;
                }

                @media (max-width: 768px) {
                    margin-bottom: 25px;
                }

                @media (max-width: 568px) {
                    margin-bottom: 15px;
                }

            }

            .type_title {
                @media (max-width: 568px) {
                    margin-top: 15px;
                }

                h2 {
                    font-weight: 600;
                    font-size: 16px;
                    line-height: 20px;
                    color: #000000;
                }
            }

            .star {
                padding: 0 20px;

                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 10px;

                h2 {
                    margin-top: 3px;
                    font-weight: 600;
                    font-size: 14px;
                    line-height: 20px;
                    color: #000000;

                    span {
                        color: #fc0;
                        font-size: 18px;
                        margin-left: 7px;
                    }
                }
            }

            .select_one {
                margin-top: 30px;

                h2 {
                    font-weight: 600;
                    font-size: 16px;
                    line-height: 20px;
                    color: #000000;
                }

                select {
                    margin-top: 10px;
                    width: 100%;
                    padding: 10px 20px;
                    color: #000;
                    height: 45px;
                    font-size: 13px;
                    background: #fff;
                    border-radius: 6px;
                    border: 1px solid #d7d7d7;
                }

            }

            .text {
                margin-top: 30px;

                h2 {
                    font-weight: 600;
                    font-size: 16px;
                    line-height: 20px;
                    color: #000000;
                }

                textarea {
                    margin-top: 15px;
                    width: 100%;
                    padding: 15px 20px;
                    color: #797979;
                    height: 120px;
                    background: #fff;
                    resize: none;
                    font-size: 14px;
                    border: 1px solid #d7d7d7;

                    line-height: 22px;
                }
            }

            .datas {
                margin-top: 20px;

                h2 {
                    margin-top: 10px;
                    font-weight: 600;
                    font-size: 16px;
                    line-height: 20px;
                    color: #000000;
                }

                input {
                    margin-top: 8px;
                    line-height: 28px;
                    padding: 10px 20px;
                    color: #000;
                    height: 45px;
                    font-size: 13px;
                    background: #fff;
                    border-radius: 6px;
                    border: 1px solid #d7d7d7;
                    width: 100%;
                }
            }

            .last_button {
                display: flex;
                padding: 0 0 40px 0;
                justify-content: flex-end;

                @media (max-width: 991px) {
                    justify-content: center;
                }

                button {
                    text-align: center;
                    height: 42px;
                    padding: 5px 38px;
                    margin-top: 10px;
                    display: inline-block;
                    background: #dd0426;
                    border-radius: 5px;
                    margin-bottom: 10px;
                    border: 1px solid #dd0426;

                    color: #fff;
                    text-transform: uppercase;
                    text-decoration: none;
                    font-size: 15px;
                    font-weight: 700;

                }
            }
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

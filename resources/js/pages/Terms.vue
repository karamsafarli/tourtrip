<template>
<Header />

<Banner title="Terms and Conditions" hindi="श्री हरि" imgPath="assets/images/banner_bg_1.webp" />

<section id="terms_and_conditions">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Overview</h2>
                <h3><span>Payment Terms: </span>To confirm your booking, an advance payment of 30% of the total trip amount is
                    required. The remaining 70% should be paid at least 24 hours before the start of the trip or as soon as
                    possible. Prompt payment ensures a seamless experience for your upcoming journey.</h3>
                <h3><span>Hotel Check-in and Checkout Timings: </span> Our partner hotels have designated check-in time at 1
                    PM and checkout time at 11 AM. We kindly request your cooperation in adhering to these timings. In case of
                    late checkout or early check-in, additional charges may apply, as determined by the hotel’s daily tariff.
                </h3>
                <h3><span>Car Timings: </span>The car service will be available for up to 10 hours per day. If your trip
                    begins at 8 AM, the car will be at your disposal until 6 PM. We kindly request that you adhere to the
                    specified timings to avoid any inconvenience. Extension of car service beyond the allocated hours may result
                    in additional charges.</h3>
                <h3><span>Responsibility for Personal Belongings: </span> Please ensure the safety of your personal belongings
                    throughout your trip. Although we prioritize your comfort and security, we cannot assume responsibility for
                    any loss or damage to your belongings. We recommend exercising caution and vigilance, whether inside the
                    hotel, car, or during visits to various destinations. </h3>
                <h3><span>Cancellation and Refund Policy: </span>In the event of cancellation, please notify us as soon as
                    possible. Cancellation policies may vary depending on the specific tour package and service providers
                    involved. We will strive to assist you with any applicable refunds, but please note that certain
                    non-refundable expenses may have already been incurred on your behalf.</h3>
                <h3><span>Travel Documentation: </span> It is your responsibility to ensure that all travel documents, such as
                    Aadhar cards (Indian nationals), passports/visas (non-india visitors), and identification cards, are valid
                    and up to date for the duration of your trip. Any costs or issues arising from inadequate travel
                    documentation will be solely your responsibility.</h3>
                <h3><span>Changes or Modifications: </span>We understand that unforeseen circumstances may require changes or
                    modifications to your itinerary. Please contact our customer support as soon as possible, and we will do our
                    best to accommodate your requests. However, please note that changes may be subject to availability and
                    additional charges, if applicable.</h3>
                <h3><span>Travel Insurance: </span>We strongly recommend obtaining comprehensive travel insurance to protect
                    yourself against unforeseen events, medical emergencies, trip cancellations, or other travel-related issues.
                    We can provide guidance on reputable insurance providers if needed.</h3>
                <h3><span>Force Majeure: </span>In the event of unforeseen circumstances beyond our control, such as natural
                    disasters, civil unrest, or government-imposed restrictions, we reserve the right to modify or cancel your
                    trip. We will make every effort to provide suitable alternatives or refunds, but we cannot be held liable
                    for any losses incurred as a result. </h3>
                <h3><span>Liability Disclaimer: </span>Please be advised that <Link href="#">TourTripX.com</Link> does not offer
                    insurance coverage for accidents, sickness, death, theft, or any other incidents. We strongly recommend
                    visitors to arrange their own insurance in their home country. It is important to note that all personal
                    belongings are solely the responsibility of the client. By participating in our program or Yatra, I
                    acknowledge and willingly accept all associated risks. <Link href="#">TourTripX.com</Link> cannot be held liable
                    for any accidents, illnesses, or deaths that may occur during the Yatra. I hereby confirm the accuracy of
                    all provided information. I willingly and knowingly agree to participate in the program/Yatra organized by
                    <Link href="#">TourTripX.com</Link> at my own risk, and I understand that neither I nor my dependents will be
                    eligible for any compensation in the event of accidents, illnesses, injuries, mishaps, or death. I release
                    the organization, its staff, and agents from any liability in connection with the aforementioned.
                    Furthermore, <span>I understand that my advance payment signifies my consent to this disclaimer.</span></h3>
                <h3><span>Governing Law and Jurisdiction: </span>These terms and conditions are governed by the laws of
                    Lucknow, Uttar Pradesh, India. Any disputes or claims arising from or related to our services will be
                    subject to the exclusive jurisdiction of the courts in Lucknow.</h3>

            </div>
        </div>
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

export default {

    components: {
        Link,
        Header,
        Banner,
        Footer
    },

}
</script>

<style lang="scss">
#terms_and_conditions {
  .container {
    .row {
      @media (max-width: 991px) {
        padding: 0 15px;
      }
      .col-lg-12 {
        padding: 80px 0;
        @media (max-width:568px) {
          padding: 80px 0 30px;

        }

        h2 {
          color: #7a7a7a;
          font-size: 18px;
          font-weight: 600;
          margin: 18px 0;
          font-family: sans-serif;
        }
        h3 {
          font-size: 16px;
          color: #6f6f6f;
          font-family: sans-serif;
          font-weight: 500;
          margin-bottom: 15px;
          line-height: 30px;

          span {
            font-weight: 600;
          }
          a {
            color: #ffce1f;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
          }
        }
      }
    }
  }
}
</style>

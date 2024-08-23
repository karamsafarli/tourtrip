<template>
<Header />

<Banner title="Refund and Returns Policy" hindi="श्री हरि" imgPath="assets/images/banner_bg_1.webp" />

<section id="refund_and_returns_policy">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>TourTripX acts as a facilitator for various travel services, and our commitment is to ensure a seamless
                    experience for our users. Please read the following refund policy carefully to understand the terms and
                    conditions associated with refunds.
                </h2>
                <h3> 1. Refund Processing: </h3>
                <h2>TourTripX facilitates services provided by independent contractors and service providers. Any refund
                    request for services not delivered by the respective service provider is contingent upon TourTripX receiving
                    the refunded amount from the said service provider.

                </h2>
                <h3>2. User Responsibility:
                </h3>
                <h2>Users acknowledge that TourTripX is not liable for any delay in the refund process or the non-refund of
                    amounts by service providers or independent contractors. In the event of non-delivery of services, users are
                    required to directly contact the service provider for any refund claims.

                </h2>
                <h3>3. Accommodation Changes:
                </h3>
                <h2>If a user makes changes to their accommodation during an outbound tour, TourTripX will not provide refunds
                    or compensation for any adjustments made. Users will be responsible for any additional payments required due
                    to changes in accommodation.

                </h2>
                <h3>4. Refund Delay:
                </h3>
                <h2>In case of delays in the refund process beyond the specified period, TourTripX’s liability is limited to
                    the refund of the amount with interest. The interest will be calculated at the applicable bank rate until
                    the date the refund is processed.

                </h2>
                <h3>5. Liability Limitation:
                </h3>
                <h2>TourTripX aims to facilitate smooth transactions, but we cannot guarantee the actions of independent
                    contractors or service providers. Users are encouraged to review the specific refund policies of service
                    providers and address any refund-related concerns directly with them.

                </h2>
                <h3>6. Contact Information:
                </h3>
                <h2>For any questions or concerns regarding refunds, users can reach out to TourTripX customer support. We are
                    here to assist you in resolving any issues related to the refund process.

                </h2>
                <h3>Shipping Policy:
                </h3>
                <h2>TourTripX primarily deals with travel services, and as such, we do not have a traditional shipping policy.
                    Instead, our focus is on delivering electronic tickets, itineraries, and other travel-related documents
                    through secure online channels. Users will receive their travel documentation via email or through our
                    online platform.

                </h2>
                <h3>Return Policy:
                </h3>
                <h2>TourTripX does not have a traditional return policy since the services we facilitate are typically
                    non-returnable. Users are advised to carefully review the details of their booked services, including
                    cancellation policies provided by service providers. In the event of cancellations, users should follow the
                    specific cancellation procedures outlined by the service provider to manage any refunds or adjustments.

                </h2>
                <h2>For any questions or concerns regarding our policies, feel free to contact TourTripX customer support for
                    assistance

                </h2>
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

<style lang="scss" scoped>
#refund_and_returns_policy {
    .container {
        .row {
            @media (max-width: 991px) {
                padding: 0 15px;
            }

            .col-lg-12 {
                padding: 80px 0;

                @media (max-width: 568px) {
                    padding: 80px 0 30px;
                }

                h2 {
                    color: #7a7a7a;
                    font-size: 16px;
                    font-weight: 500;
                    margin: 18px 0;
                    font-family: sans-serif;
                }

                h3 {
                    color: #7a7a7a;
                    font-size: 16px;
                    font-weight: 600;
                    margin: 24px 0 18px;
                    font-family: sans-serif;
                }
            }
        }
    }
}
</style>

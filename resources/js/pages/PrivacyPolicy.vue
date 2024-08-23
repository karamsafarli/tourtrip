<template>
<Header/>


<Banner
    title="Privacy Policy"
    hindi="श्री हरि"
    imgPath="assets/images/banner_bg_1.webp"
/>


  <section id="privacy_policy">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Who we are</h2>
          <h3>This website is owned by TourTripX Travel Solutions Private Limited, which provides travel information,
            booking services, and other related travel services. This Privacy Policy outlines how we collect, use,
            disclose, and protect your personal information when you use our website. By accessing or using this
            website, you acknowledge and accept the practices and policies described in this Privacy Policy.</h3>
          <h2>Information We Collect</h2>
          <h4>Personal Information</h4>
          <h3>This website does not collect any personal information from users except for data collected through Google
            Cookies.
          </h3>
          <h4>Cookies and Tracking Technologies
          </h4>
          <h3>We use Google Cookies and similar tracking technologies to enhance your experience on our website. These
            technologies collect information about your browsing behavior and preferences. You have the option to
            disable cookies through your browser settings, but this may affect the functionality of our website.
          </h3>
          <h2>How We Use Your Information </h2>
          <h4>Providing Services </h4>
          <h3>We use information from Google Cookies to analyze user behavior and improve our services. </h3>
          <h4>Personalization </h4>
          <h3>Your information helps us personalize your experience on our website and recommend relevant travel
            options. </h3>
          <h4>Analytics and Improvements</h4>
          <h3>We analyze usage patterns and behavior to improve our website, services, and user experience. This
            includes troubleshooting technical issues, conducting research, and generating statistical data.</h3>
          <h4>Legal Compliance</h4>

          <h3>We may use information from Google Cookies to comply with applicable laws, regulations, legal processes,
            or enforceable governmental requests, such as fraud prevention, investigations, and resolving disputes.</h3>
          <h2>Information Sharing and Disclosure</h2>
          <h4>Service Providers</h4>
          <h3>We may share information from Google Cookies with trusted third-party service providers who assist us in
            delivering our services, such as IT infrastructure providers. These service providers are contractually
            obligated to protect your information and only use it for the purposes specified by us.</h3>
          <h4>Legal Requirements</h4>
          <h3>We may disclose information from Google Cookies to comply with legal obligations, enforce our terms of
            service, protect our rights, property, or safety, or that of others.</h3>
          <h4>Aggregate and Anonymous Information</h4>
          <h3>We may share aggregate or anonymized information that does not personally identify you for various
            purposes, including research, analytics, and marketing.</h3>
          <h2>Data Security</h2>
          <h3>We implement reasonable security measures to protect information collected from Google Cookies from
            unauthorized access, disclosure, alteration, or destruction. However, no method of transmission over the
            internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</h3>
          <h2>Your Privacy Choices</h2>
          <h4>Cookies</h4>
          <h3>You can adjust your browser settings to disable Google Cookies and other tracking technologies.</h3>
          <h2>Children’s Privacy</h2>
          <h3>This website is not intended for use by individuals under the age of 18. We do not knowingly collect
            personal information from children. If we become aware that we have inadvertently collected personal
            information from a child, we will take steps to delete the information as soon as possible.</h3>
          <h2>Changes to this Privacy Policy</h2>
          <h3>We may update this Privacy Policy periodically to reflect changes in our practices or legal requirements.
            We will notify you of any material changes by posting the updated Privacy Policy on our website or through
            other communication channels. Please review this policy regularly to stay informed about our data practices.
          </h3>
          <h2>Contact Us</h2>
          <h3>If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices,
            please contact us at info@tourtripx.com. We will respond to your inquiries as soon as reasonably possible.
          </h3>
          <h3>Thank you for trusting us with your personal information.</h3>
        </div>
      </div>
    </div>



  </section>


<Footer />

</template>



<script>
import { Link } from '@inertiajs/inertia-vue3';
import Header from '../components/Header.vue';
import Banner from '../components/Banner.vue';
import Footer from '../components/Footer.vue';


export default {

    components: {
        Link,
        Header,
        Banner,
        Footer
    }
}
</script>



<style lang="scss" scoped>
#privacy_policy {
  .container {
    .row {
      @media (max-width: 991px) {
        padding: 0 15px;
      }
      .col-lg-12 {
        padding: 80px 0;
        h2 {
          margin-top: 20px;
          font-size: 24px;
          color: #7a7a7a;
          font-family: sans-serif;
          font-weight: 600;
        }
        h3 {
          margin-top: 20px;
          font-size: 16px;
          color: #6f6f6f;
          line-height: 35px;
          font-family: sans-serif;
          font-weight: 500;
        }
        h4 {
          font-size: 19px;
          color: #7a7a7a;
          margin: 19px 0;
          font-family: sans-serif;
          font-weight: 600;
        }
      }
    }
  }
}
</style>

<template>
<footer>
    <section id="foot" v-if="isHome">

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Book Your Haridwar Pilgrimage Today!</h3>
            <h4>Delve into the Rich Spiritual Tapestry of Haridwar, Rejuvenate Your Soul, and <br>Create Lifelong
              Memories on Your Blessed Pilgrimage!</h4>
            <div class="footer_button">
                <Link href="/enquire-now">Book your trip</Link>

            </div>
          </div>
        </div>
      </div>
    </section>



    <section id="inform">
      <div class="container">
        <div class="row text">
          <div class="col-lg-3 col-xl-3  col-md-6 first">
            <Link href="/">
              <img class="logo" src="../../assets/images/logo.png" alt="">
            </Link>
            <h3>Need to help for your dream trip? trust us. With HaridwarTourTrip, travel becomes a lot easier with us.
            </h3>
            <img class="img2" src="../../assets/images/combined3-1-2048x372.png" alt="">
          </div>
          <div class="col-lg-3 col-xl-3 col-md-6  second">
            <p>Best Packages</p>
            <div class="line">
              <div class="subline">

              </div>
            </div>
            <div class="links">

              <Link href="/tour-packages">2 Days Haridwar Tour Packages</Link>
              <Link href="/tour-packages">3 Days Haridwar Tour Packages</Link>
              <Link href="/tour-packages">4 Days Haridwar Tour Packages</Link>
            </div>
          </div>
          <div class="col-lg-3 col-xl-3 col-md-6 third">
            <p>Legal</p>
            <div class="line">
              <div class="subline">

              </div>
            </div>
            <div class="links">

              <Link href="/privacy-policy">Privacy Policy</Link>
              <Link href="/terms-and-conditions">Terms And Conditions​​</Link>
              <Link href="/refund-and-returns-policy">Refund and Returns Policy</Link>
            </div>
          </div>
          <div class="col-lg-3 col-xl-3 col-md-6  fourth">
            <p>Contact Us </p>
            <div class="line">
              <div class="subline">

              </div>
            </div>
            <div class="links">

              <Link>haridwar@tourtripx.com</Link>
              <h2>For Booking:</h2>
              <Link href="#">+91 92199 63913</Link>
            </div>
            <div class="icons">
              <div class="icon">
                <Link href="#"> <img src="../../assets/images/facebook (3).png" alt=""></Link>

              </div>
              <div class="icon">
                <Link href="#"> <img src="../../assets/images/twitter.png" alt=""></Link>

              </div>
              <div class="icon">
                <Link href="#"> <img src="../../assets/images/instagram.png" alt=""></Link>

              </div>
              <div class="icon">
                <Link href="#"> <img src="../../assets/images/linkedin.png" alt=""></Link>

              </div>
            </div>
          </div>
        </div>
        <div class="row line">
          <div class="col-lg-12 first">
            <div class="line">

            </div>

          </div>
          <div class="col-lg-12 second">
            <h3> Copyright © 2024 <span>TourTripX</span> </h3>
          </div>
        </div>
      </div>
    </section>

  </footer>
</template>



<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: {
        isHome: Boolean
    },
    components: {
        Link
    }
}
</script>


<style lang="scss" scoped>
footer {
  #foot {
    background-image: url("../../assets/images/Haridwar-Tourtrip-Banner-Booking-Image-scaled.webp");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    width: 100%;
    .container {
      .row {
        .col-lg-12 {
          padding: 100px 0;
          @media (max-width: 991px) {
            padding: 80px 0 50px 0;
          }
          @media (max-width: 768px) {
            padding: 60px 15px 40px;
          }
          @media (max-width: 610px) {
            padding: 50px 15px 30px;
          }
          h3 {
            color: #ffffff;
            font-size: 48px;
            font-weight: 600;
            line-height: 72px;
            @media (max-width: 991px) {
              font-size: 36px;
              line-height: 52px;
            }
            @media (max-width: 520px) {
              font-size: 26px;
              line-height: 52px;
            }
          }
          h4 {
            margin-top: 25px;
            color: #ffffff;
            font-size: 24px;
            font-weight: 400;
            line-height: 36px;
            @media (max-width: 991px) {
              font-size: 20px;
              margin-top: 15px;
            }
            @media (max-width: 991px) {
              font-size: 18px;
            }
          }
          .footer_button {
            @media (max-width: 768px) {
              text-align: center;
            }
            a {
              display: inline-block;
              margin-top: 20px;
              padding: 16px 40px;
              background-color: #0d6efd;
              border-radius: 31px;
              border: none;
              color: white;
              font-weight: 600;
              font-size: 18px;
            }
          }
        }
      }
    }
  }
  #inform {
    background-color: #0a1f3e;
    .container {
      @media (max-width: 550px) {
        padding: 0 15px;
      }
      .text {
        display: flex;
        flex-direction: row;
        padding: 60px 0;
        @media (max-width: 991px) {
          gap: 35px;
        }
        .first {
          .logo {
            max-width: 196px;
            height: 60px;
          }
          .img2 {
            
            height: 57px;
            margin-top: 17px;
            @media (max-width:1200px) {
                margin-top:40px;
            }
            @media (max-width:991px) {
                margin-top: 17px;
            }
          }
          h3 {
            font-weight: 400;
            line-height: 25px;
            max-width: 311px;
            color: white;
            font-size: 16px;
            margin-top: 30px;
          }
        }
        .second {
          p {
            font-size: 24px;
            font-family: sans-serif;
            color: white;
            font-weight: 600;
          }
          .line {
            max-width: 311px;
            .subline {
              width: 95%;
              height: 2px;
              background-color: white;
              border: 1px solid white;
            }
          }
          .links {
            display: flex;
            flex-direction: column;
            margin-top: 25px;
            a {
              text-decoration: none;
              color: white;
              margin-bottom: 7px;
              font-size: 16px;
              font-family: sans-serif;
              cursor: pointer;
              &:hover {
                color: #ffce1f;
              }
            }
          }
        }
        .third {
          p {
            font-size: 24px;
            font-family: sans-serif;
            color: white;
            font-weight: 600;
          }
          .line {
           max-width: 311px;
            .subline {
              width: 95%;
              height: 2px;
              background-color: white;
              border: 1px solid white;
            }
          }
          .links {
            display: flex;
            flex-direction: column;
            margin-top: 25px;
            a {
              text-decoration: none;
              margin-bottom: 7px;
              font-size: 16px;
              font-family: sans-serif;
              cursor: pointer;
              color: #ffce1f;
            }
          }
        }
        .fourth {
          p {
            font-size: 24px;
            font-family: sans-serif;
            color: white;
            font-weight: 600;
          }
          .line {
           max-width: 311px;
            .subline {
              width: 95%;
              height: 2px;
              background-color: white;
              border: 1px solid white;
            }
          }
          .links {
            display: flex;
            flex-direction: column;
            margin-top: 25px;
            h2 {
              font-size: 17px;
              color: white;
            }
            a {
              text-decoration: none;
              margin-bottom: 7px;
              font-size: 16px;
              font-family: sans-serif;
              cursor: pointer;
              color: #ffce1f;
            }
          }
          .icons {
            margin-top: 30px;
            display: flex;
            flex-direction: row;
            gap: 10px;
            .icon {
              a {
                img {
                  width: 50px;
                  height: 50px;
                  color: white;
                }
              }
            }
          }
        }
      }
      .line {
        margin-top: 20px;
        .first {
          .line {
            width: 100%;
            height: 1px;
            background-color: white;
          }
        }
        .second {
          margin: 20px 0 15px;
          text-align: center;
          h3 {
            font-size: 17px;
            color: white;
            span {
              color: white;
              &:hover {
                color: #ffce1f;
              }
            }
          }
        }
      }
    }
  }
}

</style>
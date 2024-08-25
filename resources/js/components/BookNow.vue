<template>
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
</template>

<script>
export default {
    name: "BookNow"
}
</script>


<style lang="scss" scoped>
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
</style>
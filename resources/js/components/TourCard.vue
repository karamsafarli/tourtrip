<template>
<div class="tour_package_card">
    <div class="tour_img">
        <img :src="imgPath" alt="">
    </div>

    <div class="tour_info">
        <div class="duration">
            {{ duration }}
            <span>| Customizable</span>
        </div>
        <Link class="tour_title" href="/tour-packages">{{ title }}</Link>
        <p>{{ description }}</p>

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

    <div class="tour_offers">
        <div class="tour_offers_content">
            <div class="prev_price">₹ {{ prevPrice }} /</div>
            <div class="saled_price">₹ {{ saledPrice }} / - Per Person</div>
            <Link href="/tour-packages" class="view_package">View Package</Link>
            <Link href="/enquire-now" class="book_now">
            <div class="circle"></div>
            <span>Book Now</span>
            </Link>
        </div>
    </div>
</div>
</template>

<script>
import {
    Link
} from '@inertiajs/inertia-vue3';

export default {
    name: 'TourCard',
    components: {
        Link
    },
    props: {
        imgPath: String,
        duration: String,
        title: String,
        description: String,
        prevPrice: String,
        saledPrice: String
    }
}
</script>

<style lang="scss" scoped>
.tour_package_card {
    display: flex;
    overflow: hidden;
    border: 1px solid #9AC3FF;
    border-radius: 25px;
    background-color: #F1F3F7;
    margin-bottom: 30px;

    @media (max-width: 1100px) {
        flex-direction: column;
    }

    .tour_img {
        width: 30%;

        @media (max-width: 1100px) {
            width: 100%;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    }

    .tour_info {
        width: 45%;
        padding: 20px 25px;

        @media (max-width: 1100px) {
            width: 100%;
        }

        .duration {
            color: #0D6EFD;
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 15px;

            span {
                color: #868686;
            }
        }

        .tour_title {
            display: block;
            font-size: 24px;
            font-weight: 600;
            color: #223645;
            margin-bottom: 15px;

            @media (max-width: 768px) {
                font-size: 18px
            }
        }

        p {
            font-size: 16px;
            color: #68727B;
            font-weight: 400;
            margin-bottom: 20px;

            @media (max-width: 768px) {
                font-size: 12px
            }
        }

        .features {
            display: flex;
            justify-content: space-between;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            padding: 15px 20px;
            background-color: #fff;
            border-radius: 10px;
            gap: 10px;
            flex-wrap: wrap;

            .feature {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 10px;

                i {
                    color: #0D6EFD;
                    font-size: 24px;

                    @media (max-width: 768px) {
                        font-size: 16px
                    }
                    @media (max-width: 500px) {
                        font-size: 14px
                    }
                }

                span {
                    color: #223645;
                    font-size: 12px;
                    font-weight: 600;
                    text-align: center;

                    @media (max-width: 768px) {
                        font-size: 8px
                    }

                }

            }
        }
    }

    .tour_offers {
        border-left: 1px solid #E0E0EB;
        padding: 20px;
        width: 25%;
        display: flex;
        flex-direction: column;
        justify-content: center;

        @media (max-width: 1100px) {
            width: 100%;
        }

        .tour_offers_content {
            border-radius: 10px;
            background-image: linear-gradient(180deg, #2B75E2 0%, #6AA6FF 100%);
            padding: 30px 25px;
            width: 100%;

            .prev_price {
                text-align: center;
                text-decoration: line-through !important;
                font-size: 16px;
                font-weight: 500;
                margin-bottom: 10px;
                color: #fff;
            }

            .saled_price {
                text-align: center;
                font-size: 16px;
                font-weight: 500;
                color: #fff;
                margin-bottom: 20px;
            }

            a {
                width: 100%;
                padding: 10px 0;
                border-radius: 35px;
            }

            .view_package {
                text-align: center;
                background-color: transparent;
                border: 1px solid #fff;
                margin-bottom: 20px;
                display: block;
                color: #fff;
                font-size: 16px;
                font-weight: 500;
            }

            .book_now {
                color: #0D6EFD;
                padding: 10px 20px;
                background-color: #fff;
                font-size: 16px;
                font-weight: 400;
                display: flex;
                gap: 15px;
                align-items: center;

                &:hover {
                    .circle {
                        width: 10px;
                        height: 10px;
                    }
                }

                .circle {
                    height: 0;
                    width: 0;
                    border-radius: 50%;
                    background-color: #0D6EFD;
                    transition: .2s cubic-bezier(.68, -.55, .265, 1.55);
                }
            }

        }
    }
}
</style>

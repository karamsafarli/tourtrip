<template>
<div id="vertical_tour_card">
    <div class="img_cont">
        <img :src="imgPath" alt="">
    </div>
    <div class="content">
        <div class="rating">
            <div class="stars_filled" :style="{width: ratingWidth}">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="stars_unfilled">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>

        <div class="title">{{ title }}</div>
        <div class="prev_price">
            <span>{{ prevPrice }}</span>
        </div>

        <p class="price_per_person">
            {{ newPrice }} -/
            <span> Per Person*</span>
        </p>

        <Link href="/enquire-now">Enquire Now</Link>
    </div>

</div>
</template>

<style lang="scss" scoped>
#vertical_tour_card {
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
    width: 100%;
    border-radius: 10px;
    overflow: hidden;

    .img_cont {
        width: 100%;
        height: 220px;

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }

    .content {
        padding: 20px 15px;

        .rating {
            position: relative;
            width: 110px;
            height: 30px;

            .stars_filled {
                position: absolute;
                left: 0;
                top: 0;
                display: flex;
                gap: 5px;
                z-index: 10;
                overflow: hidden;

                i {
                    color: #FFCA30;
                    font-size: 16px;
                }
            }

            .stars_unfilled {
                position: absolute;
                left: 0;
                top: 0;
                display: flex;
                gap: 5px;
                width: 100%;

                i {
                    color: #ccd6df;
                    font-size: 16px;
                }
            }
        }

        .title {
            color: #111111;
            font-size: 18px;
            margin: 15px 0;
        }

        .prev_price {
            margin-bottom: 10px;

            span {
                color: #FF0000;
                font-size: 15px;
                text-decoration: line-through !important;
                line-height: 17px;
            }
        }

        .price_per_person {
            color: #2C2C2C;
            font-size: 22px;

            line-height: 10px;
            font-weight: 600;

            span {
                font-weight: 400;
            }
        }

        a {
            display: block;
            margin-top: 20px;
            width: 100%;
            padding: 10px 0;
            text-align: center;
            background-color: #FB4D00;
            color: #fff;
            font-weight: 600;
            font-size: 18px;
            border-radius: 4px;
        }
    }
}
</style>

<script>
import {
    Link
} from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link
    },
    props: {
        imgPath: String,
        title: String,
        prevPrice: String,
        newPrice: String,
        rating: Number
    },
    data() {
        return {
            ratingWidth: `${this.$props.rating/5 * 100}%`
        }
    }
}
</script>

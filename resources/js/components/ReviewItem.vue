<template>
<section id="comment_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title">
                <div class="left">
                    <div class="img">
                        <img :src="profileImg" alt="">
                    </div>
                    <div class="info">
                        <h2>{{ author }}</h2>
                        <div class="star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>

                    </div>
                </div>
                <div class="right">
                    <i class="fa-solid fa-quote-right"></i>
                </div>
            </div>
            <div class="col-lg-12 second_part">
                <h2>{{ review }}</h2>
            </div>

            <div class="col-lg-12">
                <div class="slider_container">
                    <Swiper  :breakpoints="{
    991: {
        slidesPerView: 5
                            },
    576: {
                                slidesPerView: 2
                            },
    200: {
                                slidesPerView: 1
                            },
                        }">
                        <SwiperSlide v-for="(img, index) in sliderImgs" :key="index">
                            <div class="slider_img">
                                <img :src="img" alt="">
                            </div>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </div>
        </div>
    </div>
</section>
</template>

<style lang="scss" scoped>
.slider_container {
    margin-bottom: 20px;
}

.slider_img {
    height: 180px;

    img {
        height: 100%;
        width: 100%;
        cursor: pointer;

        object-fit: cover;
    }
}

#comment_part {
    padding: 0 0 50px;

    .container {
        @media (max-width: 991px) {
            padding: 0 40px;
        }

        @media (max-width: 440px) {
            padding: 0 25px;
        }

        .row {
            border-radius: 10px;
            border: 1px solid gray;

            .title {
                margin: 30px 0;
                padding: 0 60px 0 10px;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;

                @media (max-width: 991px) {
                    padding: 0 30px 0 10px;
                    margin: 30px 0 20px;
                }

                .left {
                    display: flex;
                    flex-direction: row;
                    gap: 15px;

                    .img {
                        img {
                            width: 53px;
                        }
                    }

                    .info {
                        h2 {
                            color: #272727;

                            font-size: 18px;
                            font-weight: 600;
                            font-style: italic;
                            line-height: 1.5;
                        }

                        i {
                            color: #f2b01e;
                            width: 18px;
                        }
                    }
                }

                .right {
                    i {
                        font-size: 45px;
                        color: rgb(179, 178, 178);
                    }
                }
            }

            .second_part {
                padding: 0 60px 20px;

                @media (max-width: 991px) {
                    padding: 0 20px 20px 20px;
                }

                h2 {
                    margin-bottom: 15px;
                    font-style: italic;
                    color: #6f6f6f;
                    line-height: 33px;

                    font-weight: 400;
                    font-size: 17px;
                }
            }
        }
    }
}
</style>

<script>
import {
    Swiper,
    SwiperSlide
} from 'swiper/vue';
import 'swiper/css';

export default {
    name: 'ReviewItem',
    components: {
        Swiper,
        SwiperSlide
    },
    props: {
        author: String,
        profileImg: String,
        review: String,
        sliderImgs: Array
    }
}
</script>

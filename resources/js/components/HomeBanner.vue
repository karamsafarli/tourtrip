<template>
<div class="home_banner">
    <div class="container">
        <h5>हरिद्वार</h5>
        <h1>Haridwar Tour</h1>
        <h3>Where Faith Finds Salience</h3>
        <p>
            Embark on a Pilgrimage of Divine Bliss, Explore Temples, Rituals, and Sacred Ghats, and Immerse
            Yourself in the Spiritual Essence of Uttarakhand's Holiest City.
        </p>

        <div class="action_btns">
            <Link href="/tour-packages">
            Explore Packages
            </Link>
            <Link href="/enquire-now">
            Plan your trip
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
    components: {
        Link
    }
}
</script>

<style lang="scss" scoped>
.home_banner {
    padding: 150px 10px;
    background: url('../../assets/images/homebanner_bg.webp');
    background-size: cover;
    background-repeat: no-repeat;

    @media (max-width: 500px) {
        padding: 120px 10px;
    }

    h5 {
        color: #fff;
        font-size: 28px;
        text-align: center;

        @media (max-width: 768px) {
            font-size: 20px;
        }
    }

    h1 {
        font-size: 150px;
        color: #FCE601;
        text-align: center;

        @media (max-width: 768px) {
            font-size: 80px;
        }

        @media (max-width: 500px) {
            font-size: 60px;
            margin-bottom: 15px;
        }
    }

    h3 {
        font-size: 32px;
        color: #fff;
        font-weight: 500;
        margin-bottom: 25px;
        text-align: center;

        @media (max-width: 768px) {
            font-size: 25px;
        }

        @media (max-width: 500px) {
            font-size: 20px;
        }
    }

    p {
        font-size: 16px;
        color: #fff;
        text-align: center;
        max-width: 900px;
        margin: 0 auto;
        font-weight: 500;

        @media (max-width: 768px) {
            font-size: 14px;
        }
    }

    .action_btns {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        gap: 20px;

        a {
            padding: 15px 30px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 50px;

            @media (max-width: 768px) {
                padding: 7.5px 15px;
                font-size: 12px;
            }

            &:first-child {
                color: #0f0f0f;
                background-color: #fff;
            }

            &:last-child {
                background-color: #0D6EFD;
                color: #fff;
            }
        }

    }
}
</style>

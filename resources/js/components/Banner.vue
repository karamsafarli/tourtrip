<template>
<div class="banner_component" :style="bgImg">
    <div class="container">
        <h5>{{ hindi }}</h5>

        <h1>{{ title }}</h1>

        <p>{{ subtitle }}</p>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            bgImg: `background-image: url("${this.$props.imgPath}"); padding: ${this.$props.isLarge ? '160px 0 160px 0;' : '120px 0 60px 0'}`
        }
    },
    props: {
        title: String,
        subtitle: String,
        imgPath: String,
        hindi: String,
        isLarge: Boolean
    }
}
</script>


<style lang="scss" scoped>
    .banner_component {
        padding: 120px 0 60px 0;
        background-size: cover !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        
        h5 {
            font-size: 18px;
            color: #fff;
            font-weight: 500;
            text-align: center;


            @media (max-width: 768px) {
                font-size: 15px;
            }
            @media (max-width: 500px) {
                font-size: 13px;
            }
        }

        h1 {
            color: #FFCE1F;
            font-size: 75px;
            font-weight: 500;
            text-align: center;
             @media (max-width: 768px) {
                font-size: 55px;
            }

             @media (max-width: 500px) {
                font-size: 40px;
            }

        }

        p {
            font-size: 22px;
            font-weight: 500;
            color: #fff;
            text-align: center;
            margin-top: 20px;

               @media (max-width: 768px) {
                font-size: 18px;
            }

             @media (max-width: 500px) {
                font-size: 15px;
            }

        }

    }
</style>
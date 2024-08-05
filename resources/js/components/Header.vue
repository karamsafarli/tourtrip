<template>
<header>
    <nav>
        <div class="container">
            <Link href="/">
            <div class="logo">
                <img src="../../assets/images/logo.png" alt="">
            </div>
            </Link>

            <div class="nav_links">
                <Link href="/">Home</Link>
                <Link href="/tour-packages">Tour Packages</Link>
                <Link href="/blog">Blog</Link>
                <Link href="/enquire-now">Enquire Now</Link>
                <a href="tel:+919219959121">+91 92199 59121</a>
            </div>

            <div class="burger_icon"  @click="toggleMenu">
                <img src="../../assets/images/burger_icon.png" alt="">
            </div>

            <div v-if="isOpen" class="mobile_menu">
                <Link href="/">Home</Link>
                <Link href="/tour-packages">Tour Packages</Link>
                <Link href="/blog">Blog</Link>
                <Link href="/enquire-now">Enquire Now</Link>
                <a href="tel:+919219959121">+91 92199 59121</a>
            </div>
        </div>
    </nav>

</header>
</template>

<script>
import {
    Link
} from '@inertiajs/inertia-vue3';

export default {

    components: {
        Link
    },

    data() {
        return {
            isOpen: false
        }
    },

    methods: {
        toggleMenu() {
            this.isOpen = !this.isOpen;
        }
    }
}
</script>

<style lang="scss" scoped>
header {
    z-index: 10000;
    position: absolute;

    nav {
        padding: 12px 5px;

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;

            .logo {
                img {
                    width: 200px;

                    @media (max-width: 768px) {
                        width: 150px;
                    }
                }
            }

            .nav_links {
                display: flex;
                align-items: center;
                gap: 32px;

                @media (max-width: 1024px) {
                    display: none;
                }

                a {
                    padding: 5px 0;
                    color: #fff;
                    font-weight: 600;
                    font-size: 17px;
                    transition: .2s color;
                    position: relative;

                    &::before {
                        position: absolute;
                        top: 60%;
                        left: 0;
                        width: 100%;
                        height: 2px;
                        margin-top: 14px;
                        transform: scale(0, 1);
                        transition: transform .4s cubic-bezier(1, 0, 0, 1);
                        background: #ffce1f;
                        content: "";
                        transform-origin: right top;
                    }

                    &:last-child {
                        color: #ffce1f;
                    }

                    &:hover {
                        color: #ffce1f;

                        &::before {
                            transform: scale(1, 1);
                            transform-origin: left top;
                        }
                    }
                }
            }

            .burger_icon {
                display: none;
                cursor: pointer;

                img {
                    width: 35px;
                    height: 35px;
                }

                @media (max-width: 1024px) {
                    display: block;
                }
            }

            .mobile_menu {
                position: absolute;
                width: 100%;
                background-color: #fff;
                left: 0;
                top: 80px;
                padding: 10px 0;
                z-index: 12000;

                a {
                    display: block;
                    padding: 5px 0;
                    text-align: center;
                    color: #676767;
                    font-size: 17px;
                    transition: .2s color;
                    font-weight: 600;

                     &:hover {
                        color: #ffce1f;
                    }
                }
            }
        }
    }

}
</style>

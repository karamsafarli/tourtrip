<template>
<header class="no-transparent">
    <!-- Fixed navbar -->
    <nav id="header" class="navbar main-nav fixed-header" style="position: absolute; top: auto;">
        <div id="header-container" class="container header-wrap navbar-container" bis_skin_checked="1">
            <div class="navbar-header-logo main-logo" bis_skin_checked="1">
                <Link href="/" class="img-responsive logo-light" rel="home">
                <img original-width="2576" original-height="787" src="https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Haridwar-Logo-WHT-n-YLW-1.png" class="img-responsive logo-light" alt="Haridwar Tour Trip" decoding="async" srcset="https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Haridwar-Logo-WHT-n-YLW-1.png 2576w, https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Haridwar-Logo-WHT-n-YLW-1-300x92.png 300w, https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Haridwar-Logo-WHT-n-YLW-1-1024x313.png 1024w, https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Haridwar-Logo-WHT-n-YLW-1-768x235.png 768w, https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Haridwar-Logo-WHT-n-YLW-1-1536x469.png 1536w, https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Haridwar-Logo-WHT-n-YLW-1-2048x626.png 2048w" sizes="(max-width: 2576px) 100vw, 2576px"></Link>
                <Link href="/" class="custom-logo-link logo-dark" rel="home" itemprop="url">

                <img class="img-responsive logo-dark" width="120" height="60" src="https://haridwartourtrip.s3.ap-south-1.amazonaws.com/Haridwar-Logo-WHT-n-YLW-1.png" alt="Logo">
                </Link>
            </div>
            <div id="mainmenu" classold="=&quot;collapse" bis_skin_checked="1">
                <div @click="toggleMenu" id="menu-button" class="fa fa-bars" aria-hidden="true" bis_skin_checked="1"></div>
                <ul v-if="isOpen" id="menu-main-menu" style="display: block" class="navbar-nav">
                    <li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-56">
                        <Link href="/">Home</Link>
                    </li>
                    <li id="menu-item-82" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82">
                        <Link href="/haridwar-tour-packages">Tour Packages</Link>
                    </li>
                    <li id="menu-item-2160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2160">
                        <Link href="/blog">Blog</Link>
                    </li>
                    <li id="menu-item-461" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-460 current_page_item menu-item-461">
                        <Link href="/enquire-now" aria-current="page">Enquire Now</Link>
                    </li>
                    <li id="menu-item-85" class="tel-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-85">
                        <Link href="tel:+919219959121">+91 92199 59121</Link>
                    </li>
                </ul>
            </div><!-- /.nav-collapse -->

        </div><!-- /.container -->
    </nav><!-- /.navbar -->
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
            isOpen: window.innerWidth > 1024 ? true : false
        }
    },

    methods: {
        toggleMenu() {
            this.isOpen = !this.isOpen;
        }
    }
}
</script>

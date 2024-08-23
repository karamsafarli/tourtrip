<template>
<div class="title_tag">
    <Link href="#">
        {{ title }}
    </Link>
</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    name: 'TitleTag',
    props: {
        title: String
    },
    components: {
        Link
    }
}
</script>

<style lang="scss" scoped>
.title_tag {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;

    a {
        color: #0D6EFD;
        font-weight: 500;
        font-size: 15px;
        background-color: #F1F3F7;
        border: 1px solid #E0E0EB;
        padding: 10px 20px;
        border-radius: 30px;
    }
}
</style>

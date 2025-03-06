<template>
    <div class="hidden xl:block">
        <headerDesktop />
    </div>
    <div class="block xl:hidden">
        <HeaderMobile />
    </div>
    <slot />
</template>

<script>
import headerDesktop from '@/components/header-desktop.vue';
import HeaderMobile from '@/components/header-mobile.vue';

export default {
    name: 'layout',
    components: {
        headerDesktop,
        HeaderMobile,
    },
    data() {
        return {};
    },
};
</script>

<style></style>

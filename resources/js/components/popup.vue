<template>
    <div class="absolute left-[50%] top-[50%] min-h-[33vh] w-1/3 -translate-x-1/2 -translate-y-1/2 bg-blue p-[3rem]">
        <button @click="closePopup" class="absolute right-3 top-3 text-2xl text-white">X</button>
        <slot></slot>
    </div>
</template>

<script>
export default {
    methods: {
        closePopup() {
            this.$emit('closePopup');
        },
    },
};
</script>

<style></style>

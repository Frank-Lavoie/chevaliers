<template lang="">
    <div class="flex items-start justify-start p-10">
        <div class="flex flex-col items-center justify-start">
            <div class="mr-[5vw] w-[25vw]">
                <img :src="event.cover_image" />
            </div>
            <div class="mt-[5vh] flex w-full flex-col text-2xl">
                <p>Où ? - {{ event.location + ' ' + event.time }}</p>
                <p>Quand ? - {{ event.date }}</p>
                <p>Pourquoi ? - {{ event.reason }}</p>
            </div>
        </div>
        <div class="flex w-full flex-col items-center justify-center">
            <h1 class="w-full border-b-2 border-solid border-black pb-10 text-center text-6xl">{{ event.title }}</h1>
            <div class="mt-[5vh] flex items-center justify-center">
                <div class="triangle triangle-left border-blue" @click="previousImage"></div>
                <div class="w-[60%]">
                    <img :src="currentImage" />
                </div>
                <div class="triangle triangle-right border-blue" @click="nextImage"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        event: Object,
    },
    data() {
        return {
            imageIndex: 0,
            currentImage: this.event.images[0].image_path,
        };
    },
    methods: {
        nextImage() {
            this.imageIndex++;
            if (this.imageIndex >= this.event.images.length) this.imageIndex = 0;

            this.currentImage = this.event.images[this.imageIndex].image_path;
        },
        previousImage() {
            this.imageIndex--;
            if (this.imageIndex < 0) this.imageIndex = this.event.images.length - 1;

            this.currentImage = this.event.images[this.imageIndex].image_path;
        },
    },
};
</script>
<style lang="css">
.triangle {
    width: 0;
    height: 0;
    border-top: 25px solid transparent;
    border-bottom: 25px solid transparent;
    margin: 0 10px;
}

.triangle:hover {
    cursor: pointer;
    opacity: 0.8;
}

.triangle-right {
    /* border-left: 50px solid; */
    border-left-width: 50px;
    border-left-style: solid;
}

.triangle-left {
    /* border-right: 50px solid; */
    border-right-width: 50px;
    border-right-style: solid;
}
</style>

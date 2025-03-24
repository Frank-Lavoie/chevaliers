<template>
    <div class="flex h-[80vh] w-[100vw] flex-col items-center justify-center">
        <h1 class="text-5xl">Disponibilités de la salle</h1>
        <iframe
            src="https://calendar.google.com/calendar/embed?&wkst=1&ctz=America%2FToronto&showPrint=0&mode=WEEK&showCalendars=0&src=Y2hldmFsaWVyczc0MzBAZ21haWwuY29t&src=ZnIuY2FuYWRpYW4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%230B8043"
            width="80%"
            height="80%"
            frameBorder="0"
            scrolling="no"
        ></iframe>
        <Popup v-if="popupIsVisible" @closePopup="closePopup()">
            <div class="flex h-full flex-col items-center justify-center">
                <h1 class="mb-[3rem] text-2xl text-white">Contactez l'une des personne suivante afin de réserver la plage qui vous intéresse !</h1>
                <h1 v-for="phone in phones" :key="phone.key" class="text-xl text-white">{{ phone.label + ' ' + phone.value }}</h1>
            </div>
        </Popup>
    </div>
    <button @click="openPopup()" class="absolute bottom-2 right-2 rounded-full bg-blue p-5 text-2xl text-white hover:opacity-[.8]">Réserver</button>
</template>

<script>
import Popup from '@/components/popup.vue';
export default {
    components: {
        Popup,
    },
    props: {
        phones: [],
    },
    data() {
        return {
            popupIsVisible: false,
        };
    },
    methods: {
        closePopup() {
            this.popupIsVisible = false;
        },
        openPopup() {
            this.popupIsVisible = true;
        },
    },
};
</script>

<style></style>

<template>
    <div class="m-auto flex w-4/5 flex-wrap justify-center">
        <EventCard v-for="event in events" :event="event" />
    </div>
</template>

<script>
import EventCard from '@/components/event-card.vue';

export default {
    components: {
        EventCard,
    },
    props: {
        events: [],
    },
    data() {
        return {
            eventsStatic: [
                {
                    id: 1,
                    title: 'Chorale',
                    location: 'Église',
                    date: '2024-12-14',
                    reason: 'Charité',
                    cover_image: '../../images/chorale.png',
                    image_1: '../../images/vente_garage.jpg',
                    image_2: '../../images/collecte_fond.jpg',
                },
                {
                    id: 2,
                    title: 'Vente de garage',
                    location: 'Saint-honoré',
                    date: '2024-10-19',
                    reason: 'Charité',
                    cover_image: '../../images/vente_garage.jpg',
                    image_1: '../../images/vente_garage.jpg',
                    image_2: '../../images/collecte_fond.jpg',
                },
                {
                    id: 3,
                    title: 'Collecte de fond',
                    location: 'Rue de saint-honoré',
                    date: '2024-11-07',
                    reason: 'Charité',
                    cover_image: '../../images/collecte_fond.jpg',
                    image_1: '../../images/vente_garage.jpg',
                    image_2: '../../images/collecte_fond.jpg',
                },
                {
                    id: 4,
                    title: 'Collecte de denrées',
                    location: 'Chicoutimi',
                    date: '2024-12-16',
                    reason: 'Charité',
                    cover_image: '../../images/denrees.jpg',
                    image_1: '../../images/vente_garage.jpg',
                    image_2: '../../images/collecte_fond.jpg',
                },
                {
                    id: 5,
                    title: 'Collecte de vêtements',
                    location: 'Chicoutimi-Nord',
                    date: '2024-10-14',
                    reason: 'Charité',
                    cover_image: '../../images/vetements.jpg',
                    image_1: '../../images/vente_garage.jpg',
                    image_2: '../../images/collecte_fond.jpg',
                },
            ],
        };
    },
};
</script>
<style lang=""></style>

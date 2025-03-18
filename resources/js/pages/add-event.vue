<template>
    <form action="" class="flex w-1/2 flex-col items-end justify-center">
        <table>
            <tr>
                <th>Titre</th>
                <th>Date</th>
                <th>Où</th>
                <th>Pourquoi</th>
            </tr>
            <AddEventCard v-for="event in events" :event="event" :key="event.title" />
        </table>
        <button class="bg-blue p-5 text-white" @click="addEvent">Ajouter</button>
    </form>
</template>

<script>
import AddEventCard from '@/components/add-event-card.vue';
export default {
    components: {
        AddEventCard,
    },
    data() {
        return {
            events: [],
        };
    },
    mounted() {
        this.addEvent();
    },
    methods: {
        addEvent() {
            let event = {
                title: '',
                date: '2025-03-18',
                location: 'Saint-Honoré',
                reason: 'Charité',
            };
            this.events.push(event);
        },
    },
};
</script>

<style></style>

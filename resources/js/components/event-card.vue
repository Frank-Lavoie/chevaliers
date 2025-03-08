<template>
    <a :href="'/evenement/' + event.id">
        <div className="m-4 h-[450px] w-[350px] bg-white">
            <img class="w-500 h-500" :src="event.cover_image" :alt="event.title" />
            <h1 className="my-6 text-center text-3xl">{{ event.title }}</h1>
            <p className="px-3 text-xl">Quand : {{ event.date }}</p>
            <p className="px-3 text-xl">Où : {{ event.location }}</p>
            <p className="px-3 text-xl">Pourquoi : {{ event.reason }}</p>
        </div>
    </a>
</template>

<script>
export default {
    props: {
        event: {},
    },
};
</script>

<style></style>

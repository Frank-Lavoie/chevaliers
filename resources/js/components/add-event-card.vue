<template>
    <tr>
        <td>
            <!-- <label for="title"></label> -->
            <input type="text" id="title" :value="event.title" />
        </td>
        <td>
            <!-- <label for="date"></label> -->
            <input type="date" id="date" :value="event.date" />
        </td>
        <td>
            <!-- <label for="location"></label> -->
            <input type="text" id="location" :value="event.location" />
        </td>
        <td>
            <!-- <label for="reason"></label> -->
            <input type="text" id="reason" :value="event.reason" />
        </td>
    </tr>
</template>

<script>
export default {
    props: {
        event: Object,
    },
};
</script>

<style>
input {
    border: 1px solid black;
}
</style>

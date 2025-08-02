<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    time: String,
    users: Array
});

</script>

<template>
    <Head>
        <title>Users</title>
        <meta type="description" content="Users information" head-key="description">
    </Head>
    <h1 class="text-3xl">
        Users
    </h1>

    <div class="mt-4">
        <ul>
            <li v-for="user in users" :key="user.id" v-text="user.name"></li>
        </ul>
    </div>
</template>

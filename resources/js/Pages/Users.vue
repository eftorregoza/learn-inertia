<script setup>
import { Link, Head } from '@inertiajs/vue3';

defineProps({
    time: String
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

    <div style="margin-top: 400px">
        <p>The current time is {{ time }}.</p>

        <Link href="/users" class="text-blue-500" preserve-scroll>
        Refresh
        </Link>
    </div>
</template>

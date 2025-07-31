<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    name: String
});

let count = ref(0);
</script>

<template>
    <div class="space-y-1">
        <h1 class="text-4xl">Hello {{ name }}</h1>
        <p>
            <button @click="count++">Count: {{ count }}</button>
        </p>
        <p>
            <Link href="/users">Users</Link>
        </p>
    </div>
</template>
<template>
    <div>
        <h1>Hello {{ name }}</h1>
        <p>
            <button @click="count++">Count: {{ count }}</button>
        </p>
        <p>
            <Link href="/users">Users</Link>
        </p>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    name: String
});

let count = ref(0);
</script>
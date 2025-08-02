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
        <ul>
            <li>
                <Link href="/users">Users</Link>
            </li>
            <li>
                <Link href="/logout" method="post" as="button" :data="{ foo: 'bar' }">Logout</Link>
            </li>
        </ul>
    </div>
</template>
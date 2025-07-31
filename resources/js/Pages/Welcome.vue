<template>
    <div>
        <h1>Hello {{ name }}</h1>
        <p>
            <button @click="count++">Count: {{ count }}</button>
        </p>
    </div>
</template>

<script setup>
import { ref } from 'vue';

defineProps({
    name: String
});

let count = ref(0);
</script>
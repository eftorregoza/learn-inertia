<script setup>
import Layout from '../Shared/Layout.vue';

import { ref } from 'vue';

defineOptions({
    layout: Layout
});

let test = ref('test');

</script>

<template>
    <h1 class="text-3xl">
        Home
    </h1>
</template>

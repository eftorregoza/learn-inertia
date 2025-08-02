<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    active: Boolean
})

</script>

<template>
    <Link class="text-blue-500 cursor-pointer hover:underline" :class="{ 'font-bold underline': active }"  >
    <slot />
    </Link>
</template>

<template>
    <div>
        <h1>Produtos</h1>
        <ul>
            <li v-for="produto in products" :key="produto.id">
                {{ produto.name }}
            </li>
        </ul>
    </div>
</template>

<script setup>
defineProps({
    products: Array,
});
</script>

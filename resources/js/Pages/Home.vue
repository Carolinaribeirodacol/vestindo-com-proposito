<template>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Loja de Camisetas</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div v-for="product in products" :key="product.id" class="border rounded p-4">
                <img :src="product.image" :alt="product.name" class="w-full h-48 object-cover mb-4" />
                <h2 class="text-xl font-semibold">{{ product.name }}</h2>
                <p class="text-gray-700 mb-2">{{ product.description }}</p>
                <p class="font-bold text-lg mb-4">R$ {{ product.price.toFixed(2) }}</p>
                <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700" @click="addToCart(product)">
                    Adicionar ao carrinho
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        products: Array,
    },
    methods: {
        addToCart(product) {
            alert(`Adicionado ${product.name} ao carrinho!`);
            // Aqui você pode adicionar lógica para gerenciar o carrinho
        },
    },
};
</script>

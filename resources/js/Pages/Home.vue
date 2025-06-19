<template>
    <q-layout view="hHh lpR fFf">

        <!-- Header -->
        <q-header elevated>
            <q-toolbar>
                <q-toolbar-title>
                    Vestindo com propósito
                </q-toolbar-title>
            </q-toolbar>
        </q-header>

        <!-- Conteúdo principal -->
        <q-page-container>
            <q-page padding>

                <h1 class="text-h4 q-mb-md">Camisetas</h1>

                <q-gutter-md class="row">
                    <q-card v-for="product in products" :key="product.id"
                        class="col-12 col-sm-6 col-md-4 col-lg-3 my-card" flat bordered style="max-width: 300px;">
                        <q-img :src="product.image" alt="Imagem da camiseta" style="height: 200px;" class="q-mb-sm"
                            contain />

                        <q-card-section>
                            <div class="product-title">{{ product.name }}</div>
                            <p class="product-description">{{ product.description }}</p>
                            <p class="product-price">{{ product.price }}</p>
                        </q-card-section>

                        <q-card-actions align="right">
                            <q-btn class="card-button" label="Adicionar ao carrinho" @click="addToCart(product)"
                                dense />
                        </q-card-actions>
                    </q-card>
                </q-gutter-md>

            </q-page>
        </q-page-container>

        <!-- Footer -->
        <q-footer class="text-center" elevated height-hint="50">
            <div class="text-subtitle2 q-pa-sm">
                &copy; 2025 Sua Loja - Todos os direitos reservados
            </div>
        </q-footer>

    </q-layout>
</template>

<script setup>
defineProps({
    products: Array,
});

function addToCart(product) {
    // Aqui você pode implementar a lógica para adicionar o produto ao carrinho
    alert(`Produto ${product.name} adicionado ao carrinho!`)
}
</script>

<style scoped>
.product-title {
    font-size: 1rem;
    /* 20px */
    color: #1e1e1d;
    font-weight: 700;
}

.product-description {
    font-size: 0.8rem;
    color: #4d4c4b;
}

.product-price {
    font-weight: bold;
    color: #1e1e1d;
    font-size: 1rem;
}

.my-card {
    transition: box-shadow 0.3s ease;
}

.my-card:hover {
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

.card-button {
    background-color: #1e1e1d;
    color: #fff;
}
</style>

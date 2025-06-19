<template>
    <q-layout view="hHh lpR fFf">

        <!-- Header -->
        <q-header class="header">
            <q-toolbar>
                <q-toolbar-title>
                    VESTINDO COM PROPÓSITO
                </q-toolbar-title>
            </q-toolbar>
        </q-header>

        <!-- Conteúdo principal -->
        <q-page-container>
            <q-page padding>
                <h1 class="text-h4 q-mb-md page-title">T-shirts</h1>

                <q-gutter-md class="row q-col-gutter-md q-row-gutter-md">
                    <q-card v-for="product in products" :key="product.id"
                        class="col-12 col-sm-6 col-md-4 col-lg-3 my-card" flat style="max-width: 400px;">
                        <q-img :src="product.image" alt="Imagem da camiseta" style="height: 500px;" class="q-mb-sm"
                            contain />

                        <q-card-section class="card-section">
                            <div class="product-title">{{ product.name }}</div>
                            <p class="product-price">{{ formatPrice(product.price) }}</p>
                        </q-card-section>

                        <q-card-actions align="center">
                            <q-btn flat class="card-button" padding="8px 30px" label="ver produto"
                                @click="addToCart(product)" />
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

function formatPrice(value) {
    return new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(value);
}
</script>

<style scoped>
.header {
    padding: 1rem;
}

.card-section {
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: .3rem;
}

.product-title {
    font-size: 0.9rem;
    letter-spacing: 1px;
    color: #1e1e1d;
    font-weight: 500;
}

.product-price {
    font-weight: 400;
    color: #1e1e1d;
    font-size: 0.7rem;
    margin: 0;
}

.my-card {
    transition: box-shadow 0.3s ease;
    border: none;
}

.my-card:hover {
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

.page-title {
    font-size: 1rem;
    color: #1e1e1d;
}

.card-button {
    color: #1e1e1d;
    font-size: .65rem;
    border: 1px solid #1e1e1d;
    border-radius: 50px;
    text-transform: uppercase;
    font-weight: 400;
}
</style>

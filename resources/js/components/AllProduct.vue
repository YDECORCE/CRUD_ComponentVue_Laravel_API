<template>
    <div style="position:absolute; width:100%">
        <h2 class="text-center">Liste des produits</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products" :key="product.id">
                <td>{{ product.id }}</td>
                <td>{{ product.name }}</td>
                <td>{{ product.detail }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: product.id }}" class="btn btn-success">Editer</router-link>
                        <button class="btn btn-danger" @click="deleteProduct(product.id)">Supprimer</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                products: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/products/')
                .then(response => {
                    this.products = response.data;
                });
        },
        methods: {
            
            deleteProduct(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/products/${id}`)
                    .then(response => {
                         this.axios
                        .get('http://localhost:8000/api/products/')
                        .then(response => {
                        this.products = response.data;
                });
                        // let i = this.products.map(data => data.id).indexOf(id);
                        // this.products.splice(i, 1)
                    });
            }
        }
    }
</script>
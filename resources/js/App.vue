<template>
    <div class="container px-0" style="position:relative"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Liste des Produits</router-link>
                    <router-link to="/create" class="nav-item nav-link">Nouveau Produit</router-link>
                </div>
            </div>
        </nav>
        <transition name="fade">
        <router-view> </router-view>
        </transition>
    </div>
</template>
 
<script>
    export default {}
</script>
<template>
    <div class="container px-0" style="position:relative"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Products List</router-link>
                    <router-link to="/create" class="nav-item nav-link">Create Product</router-link>
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
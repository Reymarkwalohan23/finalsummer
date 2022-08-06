<template>
    <h1>Cap Shop</h1>
    <hr>

    <div class="d-flex justify-content-between">
        <div class="card mb-3" v-for="cap in caps" :key="cap.id">
            <div class="card-header bg-info">
                <h2>Brand: {{ cap.brand }} </h2>
                <h5> Type: {{cap.type}}</h5>
                <h5> Color: {{cap.color}}</h5>
                <h5> Price: {{cap.price}}</h5>


            </div>        
            
            
        </div>
    </div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        caps: Array
    }
}
</script>


<style scoped>
.card {
    width: 600px;
}

</style>
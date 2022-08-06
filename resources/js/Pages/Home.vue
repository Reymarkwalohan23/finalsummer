
<template class="back">
    <div class="main">
        <div class="subcontainer">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt945a21f172338f33/62b2f0f9d3d3d90e34f1bd76/best-caps.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'
const message = "WELCOME TO MY CAP SHOP"

const number = ref(0)

function increment() {
    number.value++; 
}

function decrement() {
    number.value--;
}

</script>


<script>
    export default {
        layout: Layout
    }
</script>
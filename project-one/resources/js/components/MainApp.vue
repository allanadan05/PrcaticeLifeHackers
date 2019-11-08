<template>
    <v-app id="bg">
        <v-container fluid>
            <v-content>
                <router-view></router-view>
            </v-content>
        </v-container>
        <Footer></Footer>
    </v-app>
</template>

<script>
import Footer from './footer.vue';
export default {
    components: {
        Footer,
    }
    
}
</script>

<style scoped>
    #bg {
        background: url('http://localhost:8000/images/banner/banner-bg.jpg');

    }
</style>
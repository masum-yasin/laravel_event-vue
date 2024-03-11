
<script setup>
    import Header from '@/Components/Header.vue'
    import Footer from '@/Components/Footer.vue'
</script>

<template>
     <!--========================================
=            Navigation Section            =
=========================================-->
<Header/>
<slot />
<Footer/>

<!--====  End of Navigation Section  ====-->
</template>
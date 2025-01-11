<template>
    <header class="flex align-middle justify-between my-2">
        <div class="">
            <img src="@img/logo-light.svg" alt="Logo">
        </div>
        <NavList/>
    </header>
</template>

<script>
import NavList from '@/Components/NavList.vue';

export default {
    name: 'Header',

    components: {
        NavList
    }
}
</script>
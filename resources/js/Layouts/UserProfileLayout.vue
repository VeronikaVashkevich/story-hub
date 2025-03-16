<template>
    <div class="container mx-auto">
        <Header></Header>
        <div class="flex mt-8">
            <LeftNavbar/>
            <slot/>
        </div>
    </div>
</template>

<script>
import Header from "@/Components/Header.vue";
import LeftNavbar from "@/Components/LeftNavbar/LeftNavbar.vue";
export default {
    name: "UserProfileLayout",

    components: {
        Header,
        LeftNavbar,
    },
};
</script>

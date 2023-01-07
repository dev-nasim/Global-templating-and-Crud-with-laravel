<template>

    <div class="full_container">
        <div class="inner_container">
            <side-bar-component></side-bar-component>
            <div id="content">
                <top-bar-component></top-bar-component>
                <inner-dashboard></inner-dashboard>
            </div>

        </div>
    </div>
</template>

<script>
    import SideBarComponent from "./Layouts/SideBarComponent";
    import TopBarComponent from "./Layouts/TopBarComponent";
    import InnerDashboard from "./Layouts/InnerDashboard";
    export default {
        name: 'HelloVue',
        components: {InnerDashboard, TopBarComponent, SideBarComponent}
    }
</script>

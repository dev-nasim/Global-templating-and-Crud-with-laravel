<template>
    <div class="full_container">
        <div class="inner_container">
            <side-bar-component></side-bar-component>
            <div id="content">
                <top-bar-component></top-bar-component>
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>User List</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import SideBarComponent from "./SideBarComponent";
    import TopBarComponent from "./TopBarComponent";
    import InnerDashboard from "./InnerDashboard";
    export default {
        name: 'BaseLayouts',
        components: {InnerDashboard, TopBarComponent, SideBarComponent}
    }
</script>

<template>
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <div class="col-md-6 float-left">
                            <h2>{{pageTitle}}</h2>

                        </div>
                        <div class="text-right">
                            <button @click="openModal('ModalVue', pageModalTitle)" class="btn btn-info">Add New <i class="fa-solid fa-user-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "pageTop",
        props: {
            pageTitle: {
                type: [String],
                default: 'Data List'
            },
            defaultAddButton: {
                type: [Boolean],
                default: true
            },
            pageModalTitle: {
                type: [String],
                default: 'Add/edit modal'
            },
        },
    }
</script>

<style scoped>

</style>

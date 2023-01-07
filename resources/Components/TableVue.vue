<template>
    <div class="userList">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <template v-for="(heading, index) in tableHeading">
                        <th scope="col">{{heading}}</th>
                    </template>
                </tr>
            </thead>
            <slot name="data"></slot>
        </table>

    </div>
</template>

<script>
    export default {
        name: "TableVue",
        props: {
            tableHeading: {
                type: [Array, Object],
                default: []
            },
            tableTitle: {
                type: [String],
                default: 'Data List'
            },
        },
    }
</script>

<style scoped>

</style>

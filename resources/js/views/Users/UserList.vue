<template>
    <div class="full_container">
        <div class="inner_container">
            <side-bar-component></side-bar-component>
            <div id="content">
                <top-bar-component></top-bar-component>

                <page-top page-title="User List">
                    <template v-slot:header>

                    </template>
                </page-top>

                <table-vue :table-heading="tableHeading">
                    <template v-slot:data>
                        <tbody>
                            <tr v-for="(data, index) in dataList.data">
                                <th scope="row">{{index+1}}</th>
                                <td>{{data.name}}</td>
                                <td>{{data.email}}</td>
                                <td>
                                    <a type="button" @click="editData(data, data.id)" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-pen-to-square blue1_color"></i></a>
                                    <a type="button" @click="deleteInformation('/api/users/', data.id)" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash red_color"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </template>

                </table-vue>

                <user-form></user-form>

            </div>
        </div>
    </div>

</template>
<script>
    import SideBarComponent from "../Layouts/SideBarComponent";
    import TopBarComponent from "../Layouts/TopBarComponent";
    import UserForm from "./UserForm";
    import TableVue from "../../../Components/TableVue";
    import PageTop from "../../../Components/PageTop";
    export default {
        name: 'UserList',
        components: {PageTop, TableVue, UserForm, TopBarComponent, SideBarComponent},
        methods: {

        },
        data() {
            return {
                tableHeading: ['Sl','Name','Email', 'Modify'],
            }
        },
        mounted(){
            this.getDataList();
        }
    }
</script>

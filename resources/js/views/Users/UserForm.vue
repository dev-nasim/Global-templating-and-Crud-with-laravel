<template>
    <modal-vue @submitMyForm="submitForm(formObject,'ModalVue', ()=>{}, true, 'api/users')" modal-id="ModalVue" back-drop="static">
        <div class="mb-2">
            <label class="col-form-label">User Name:</label>
            <input type="text" v-model="formObject.name" class="form-control">
        </div>
        <div class="mb-2">
            <label class="col-form-label">Email Address:</label>
            <input type="email" class="form-control" v-model="formObject.email">
        </div>
        <div class="mb-2" v-if="formType==1">
            <label class="col-form-label" >Password:</label>
            <input type="password" class="form-control" v-model="formObject.password">
        </div>
    </modal-vue>
</template>

<script>
    import ModalVue from "../../../Components/ModalVue";
    export default {
        name: "userForm",
        components: {ModalVue}
    }
</script>

<style scoped>

</style>

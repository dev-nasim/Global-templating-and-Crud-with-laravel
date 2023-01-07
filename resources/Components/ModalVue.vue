<template>

    <!-- Modal -->
    <div class="modal fade" :id="modalId" :data-backdrop="backDrop">
        <div class="modal-dialog" role="document">
            <form @submit.prevent="submit()">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ModalTitle}}</h5>
                    <button @click="closeModal()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <slot></slot>
                </div>
                <div class="modal-footer">
                    <button v-if="isEnablePrint" type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Submit
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        name: "ModalVue",
        props:{
            ModalTitle: {
                type: [String],
                default: 'Add / Edit Modal'
            },
            modalId: {
                type: [String],
                default: 'ModalVue',

            },
            backDrop : {
                type: [String],
                default: 'static'
            },
            isEnablePrint: {
                type: [Boolean],
                default: true
            },
        },
        methods : {
            submit : function () {
                this.$emit('submitMyForm');
            }
        }
    }
</script>

<style scoped>

</style>

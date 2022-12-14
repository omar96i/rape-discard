<template>
    <div class="col-12">
        <div class="col-12">
            <button type="button" class="btn btn-primary mr-4" data-bs-toggle="modal" data-bs-target="#modalAbastecimiento" @click="action('insert')">
                Nuevo registro
            </button>
            <!-- <button type="button" class="btn btn-primary" @click="info">
                Importar Excel
            </button> -->
        </div>
        <EasyDataTable class="mt-4"
            :headers="headers"
            :items="items"
            border-cell
            buttons-pagination
        >

            <template #item-actions="item">
                <div class="operation-wrapper text-center">
                    <a href="#" class="btn btn-danger btn-sm" @click="action('delete', item.alimento_id, item.departamento_id)"><i class='bx bx-message-alt-x' ></i></a>
                </div>
            </template>

        </EasyDataTable>
    </div>

    <div>
        <modal-abastecimiento ref="modal_form"></modal-abastecimiento>
    </div>

</template>

<script lang="ts">
    import axios from "axios";
    import { ref } from "vue";
    import Modal from "./Modal.vue"
    export default{
        components:{
            'modal-abastecimiento' : Modal,
        },
        data(){
            return{
                headers: [
                    { text: "Departamento", value: "departamento"},
                    { text: "Alimento", value: "alimento"},
                    { text: "Categoria", value: "alimento_categoria"},
                    { text: "Acciones", value: "actions"},
                ],
                items : [],
                loading : false

            }
        },
        created(){
            this.getData()
        },
        methods:{
            action(tipo,alimento_id = false, departamento_id = false){
                if(tipo == 'delete'){
                    this.deleteData(alimento_id, departamento_id)
                    return
                }
                this.$refs.modal_form.setData(tipo, alimento_id, departamento_id)
            },
            getData(){
                axios.get('/abastecimiento/get').then(res=>{
                    this.items = []
                    res.data.data.forEach(alimento => {
                        alimento.departamentos.forEach(departamento=>{
                            this.items.push({
                                alimento_id : alimento.id,
                                departamento_id : departamento.id,
                                alimento : alimento.nombre,
                                alimento_categoria : alimento.categoria,
                                departamento : departamento.nombre
                            })
                        })
                    });
                }).catch(res=>{
                    console.log(res.response)
                })
            },
            info(){
                this.$swal({
                    title: 'Funcionalidad',
                    text: 'En desarrollo',
                    icon: 'success',
                    timer: 3000
                })
            },
            deleteData(alimento_id, departamento_id){
                this.$swal({
                    title: 'Usuario',
                    text: 'Estas Seguro de eliminar el registro seleccionado?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#FF0000',
                }).then((result) => {
                    if(result.value){
                        axios.get(`/abastecimiento/delete/${departamento_id}/${alimento_id}`).then(res=>{
                            if(res.data.status){
                                this.$swal({
                                    title: 'Registro',
                                    text: 'Eliminado',
                                    icon: 'success',
                                    timer: 3000
                                })
                                this.getData()
                            }
                        }).catch(error=>{
                            console.log(error.response)
                            this.$swal({
                                title: 'Registro',
                                text: 'Error en el servidor',
                                icon: 'error',
                                timer: 3000
                            })
                        })
                    }
                });
            }
        }
    }

</script>

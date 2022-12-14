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
                    <a href="#" class="btn btn-primary m-1 btn-sm" @click="action('edit', item.id)" data-bs-toggle="modal" data-bs-target="#modalAbastecimiento"><i class='bx bxs-edit'></i></a>
                    <a href="#" class="btn btn-danger btn-sm" @click="action('delete', item.id)"><i class='bx bx-message-alt-x' ></i></a>
                </div>
            </template>

        </EasyDataTable>
    </div>


    <modal-abastecimiento ref="modal_form"></modal-abastecimiento>

</template>

<script lang="ts">
    import axios from "axios";
    import { ref } from "vue";
    import ModalAbastecimiento from './ModalAbastecimiento.vue'
    export default{
        components:{
            'modal-abastecimiento' : ModalAbastecimiento
        },
        data(){
            return{
                headers: [
                    { text: "Departamento", value: "departamento"},
                    { text: "Departamento Proveedor", value: "departamento_proveedor"},
                    { text: "Alimento", value: "alimento"},
                    { text: "Categoria", value: "categoria"},
                    { text: "Cantidad", value: "cantidad"},
                    { text: "Fecha", value: "fecha"},
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
            action(tipo, id){
                if(tipo == 'delete'){
                    this.deleteData(id)
                    return
                }
                this.$refs.modal_form.setData(tipo, id)
            },
            getData(){
                axios.get('/departamento-alimento-departamento/get').then(res=>{
                    this.items = []
                    res.data.data.forEach(alimento => {
                        this.items.push({
                            id : alimento.id,
                            departamento : alimento.departamento.nombre,
                            departamento_proveedor : alimento.alimento.departamento.nombre,
                            alimento : alimento.alimento.alimento.nombre,
                            categoria : alimento.alimento.alimento.categoria,
                            cantidad : alimento.cantidad,
                            fecha : alimento.fecha
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
            deleteData(id){
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
                        axios.get(`/departamento-alimento-departamento/delete/${id}`).then(res=>{
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

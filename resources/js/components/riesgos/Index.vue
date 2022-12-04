<template>
    <div class="col-12">
        <div class="col-12">
            <button type="button" class="btn btn-primary mr-4" data-bs-toggle="modal" data-bs-target="#modalRiesgo" @click="action('insert')">
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
                <div class="operation-wrapper">
                    <a href="#" class="btn btn-primary btn-sm" @click="action('edit', item.id)" data-bs-toggle="modal" data-bs-target="#modalRiesgo"><i class='bx bxs-edit'></i></a>
                    <a href="#" class="btn btn-danger btn-sm" @click="action('delete', item.id)"><i class='bx bx-message-alt-x' ></i></a>
                </div>
            </template>

        </EasyDataTable>
    </div>

    <div>
        <modal-riesgos ref="modal_form"></modal-riesgos>
    </div>

</template>

<script lang="ts">
    import axios from "axios";
    import { ref } from "vue";
    import Modal from "./Modal.vue"
    export default{
        components:{
            'modal-riesgos' : Modal,
        },
        data(){
            return{
                headers: [
                    { text: "Departamento", value: "departamento"},
                    { text: "Municipio", value: "municipio"},
                    { text: "Evento", value: "evento"},
                    { text: "Fecha", value: "fecha"},
                    { text: "Muertos", value: "muertos"},
                    { text: "Heridos", value: "heridos"},
                    { text: "Desaparecidos", value: "desaparecidos"},
                    { text: "Personas", value: "personas"},
                    { text: "Familias", value: "familias"},
                    { text: "Viv.destru", value: "viv_destru"},
                    { text: "Viv.aver", value: "viv_aver"},
                    { text: "Vias", value: "vias"},
                    { text: "Ptes.vehic", value: "ptes_vehic"},
                    { text: "Ptes.peat", value: "ptes_peat"},
                    { text: "Acued", value: "acued"},
                    { text: "Alcant", value: "alcant"},
                    { text: "C.salud", value: "c_salud"},
                    { text: "C.educat", value: "c_educat"},
                    { text: "C.comunit", value: "c_comunit"},
                    { text: "Hectareas", value: "hectareas"},
                    { text: "Otros", value: "otros"},
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
            action(tipo,id = false){
                if(tipo == 'delete'){
                    this.deleteData(id)
                    return
                }
                console.log(this.$refs.modal_form)
                this.$refs.modal_form.setData(tipo, id)
            },
            getData(){
                axios.get('/riesgo/get').then(res=>{
                    console.log(res.data)
                    this.items = []
                    res.data.data.forEach(riesgo => {
                        this.items.push({
                            id : riesgo.id,
                            departamento : riesgo.municipio.departamento.nombre,
                            municipio : riesgo.municipio.nombre,
                            fecha : riesgo.fecha,
                            evento : riesgo.evento,
                            muertos : riesgo.muertos,
                            heridos : riesgo.heridos,
                            desaparecidos : riesgo.desaparecidos,
                            personas : riesgo.personas,
                            familias : riesgo.familias,
                            viv_destru : riesgo.viv_destru,
                            viv_aver : riesgo.viv_aver,
                            vias : riesgo.vias,
                            ptes_peat : riesgo.ptes_peat,
                            acued : riesgo.acued,
                            ptes_vehic : riesgo.ptes_vehic,
                            alcant : riesgo.alcant,
                            c_salud : riesgo.c_salud,
                            c_educat : riesgo.c_educat,
                            c_comunit : riesgo.c_comunit,
                            hectareas : riesgo.hectareas,
                            otros : riesgo.otros,
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
                        axios.get(`/riesgo/delete/${id}`).then(res=>{
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

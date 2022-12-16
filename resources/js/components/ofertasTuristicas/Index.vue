<template>
    <div class="col-12">
        <div class="col-12">
            <button type="button" class="btn btn-primary mr-4" data-bs-toggle="modal" data-bs-target="#fullscreenModal" @click="action('insert')">
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
            <template #item-logo="items">
                <div class="customize-header">
                    <div class="avatar">
                        <img :src="(items.logo == null) ? ((items.tipo_de_turismo == 'aventura')? './assets/default_icons/aventura.svg' : ((items.tipo_de_turismo == 'turismo verde y experiencias')? './assets/default_icons/turismo_verde.svg' : ((items.tipo_de_turismo == 'atractivo turistico')? './assets/default_icons/atractivo_turistico.svg':((items.tipo_de_turismo == 'hospedaje')? './assets/default_icons/hospedaje.svg':'./assets/img/default_logo.png')))) : `./public/logo/${items.logo}`" class="w-px-40 h-auto rounded-circle" />
                    </div>
                </div>
            </template>

            <template #item-actions="item">
                <div class="operation-wrapper">
                    <a href="#" class="btn btn-primary btn-sm" @click="action('edit', item.id)" data-bs-toggle="modal" data-bs-target="#fullscreenModal"><i class='bx bxs-edit'></i></a>
                    <a href="#" class="btn btn-danger btn-sm" @click="action('delete', item.id)"><i class='bx bx-message-alt-x' ></i></a>
                </div>
            </template>

        </EasyDataTable>
    </div>

    <modal-ofertas-turisticas ref="modal_form"></modal-ofertas-turisticas>

</template>

<script lang="ts">
    import axios from "axios";
    import { ref } from "vue";
    import Modal from "./Modal.vue"
    export default{
        components: {
            'modal-ofertas-turisticas' : Modal
        },
        data(){
            return{
                headers: [
                    { text: "Logo", value: "logo" },
                    { text: "Departamento", value: "departamento"},
                    { text: "Tipo de turismo", value: "tipo_de_turismo"},
                    { text: "Nombre", value: "nombre"},
                    { text: "Estado", value: "estado"},
                    { text: "Descripcion", value: "descripcion"},
                    { text: "Contacto", value: "contacto"},
                    { text: "Telefono", value: "telefono"},
                    { text: "Georreferenciacion", value: "localizacion"},
                    { text: "Website", value: "website"},
                    { text: "Correo", value: "correo"},
                    { text: "RNT", value: "rnt"},
                    { text: "Fecha de creacion", value: "created_at"},
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
                this.$refs.modal_form.setData(tipo, id)
            },
            getData(){
                axios.get('/ofertas-turisticas/get').then(res=>{
                    this.items = []
                    res.data.proyects.forEach(proyect => {
                        this.items.push({
                            id : proyect.id,
                            logo : proyect.logo,
                            departamento : proyect.departamento,
                            tipo_de_turismo : proyect.tipo_de_turismo,
                            nombre : proyect.nombre,
                            estado : proyect.estado,
                            descripcion : (proyect.descripcion == 'undefined') ? 'sin definir' : proyect.descripcion,
                            contacto : (proyect.contacto == 'undefined') ? 'sin definir' : proyect.contacto,
                            telefono : (proyect.telefono == 'undefined') ? 'sin definir' : proyect.telefono,
                            localizacion : (proyect.lat == null) ? 'sin definir' : proyect.lat+','+proyect.lng,
                            website : (proyect.website == 'undefined') ? 'sin definir' : proyect.website,
                            correo : (proyect.correo == 'undefined') ? 'sin definir' : proyect.correo,
                            rnt : (proyect.rnt == 'undefined') ? 'sin definir' : proyect.rnt,
                            created_at : proyect.created_at

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
                    text: 'Estas Seguro de eliminar el usuario seleccionado?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#FF0000',
                }).then((result) => {
                    if(result.value){
                        axios.get(`/ofertas-turisticas/delete/${id}`).then(res=>{
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

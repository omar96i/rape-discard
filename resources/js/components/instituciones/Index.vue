<template>
    <div class="col-12">
        <div class="col-12">
            <a class="btn btn-primary mr-4" href="/institucion/export" target="_blank" @click="exportExcel()">
                Exportar Excel
            </a>
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
</template>

<script lang="ts">
    import axios from "axios";
    import { ref } from "vue";
    export default{
        data(){
            return{
                headers: [
                    { text: "Territorio", value: "territorio" },
                    { text: "FID Colegio", value: "fid_colegio"},
                    { text: "ID", value: "id_institucion"},
                    { text: "MUNICIPIO", value: "municipio"},
                    { text: "NOMBRE DE INSTITUCION", value: "nombre_institucion"},
                    { text: "NORTE", value: "norte"},
                    { text: "ESTE", value: "este"},
                    { text: "CODIGO DANE", value: "cod_dane"},
                    { text: "SEDE", value: "sede"},
                    { text: "ESTADO", value: "estado"},
                    { text: "UBICACION", value: "ubicacion"},
                    { text: "DIRECCION", value: "direccion"},
                    { text: "MODALIDAD", value: "modalidad"},
                    { text: "LATITUD", value: "latitud"},
                    { text: "LONGITUD", value: "longitud"},
                    { text: "CODIGO DANE SEDE", value: "cod_dane_sede"},
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
                    //this.deleteData(id)
                    return
                }
                //this.$refs.modal_form.setData(tipo, id)
            },
            getData(){
                axios.get('/institucion/get').then(res=>{
                    this.items = res.data.instituciones

                }).catch(res=>{
                    console.log(res.response)
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

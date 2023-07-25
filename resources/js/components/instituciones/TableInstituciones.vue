<template>
    <div class="col-12 text-center">
        Establecimiento: {{ type }}
    </div>
    <div class="col-12" v-if="loading">
        <EasyDataTable class="mt-4"
            :headers="headers"
            :items="items"
            border-cell
            buttons-pagination
        >
        </EasyDataTable>
    </div>
</template>

<script lang="ts">
    import axios from "axios";
    export default{
        props:['type', 'id'],
        data(){
            return{
                headers: [
                    { text: "Territorio", value: "territorio" },
                    { text: "Municipio", value: "municipio" },
                    { text: "Código DANE Municipio", value: "cod_dane_municipio" },
                    { text: "Nombre de Institución", value: "nombre_institucion" },
                    { text: "Nombre", value: "nombre" },
                    { text: "Código DANE", value: "cod_dane" },
                    { text: "Sede", value: "sede" },
                    { text: "Código DANE Sede", value: "cod_dane_sede" },
                    { text: "Estado", value: "estado" },
                    { text: "Ubicación", value: "ubicacion" },
                    { text: "Dirección", value: "direccion" },
                    { text: "Modalidad", value: "modalidad" },
                    { text: "Latitud", value: "latitud" },
                    { text: "Longitud", value: "longitud" },
                    { text: "Modelos", value: "modelos" },
                    { text: "Zona", value: "zona" },
                    { text: "Dirección 2", value: "direccion_2" },
                    { text: "Teléfono", value: "telefono" },
                    { text: "Estado Sede", value: "estado_sede" },
                    { text: "Niveles", value: "niveles" },
                    { text: "Grados", value: "grados" },
                ],
                items : [],
                loading : false

            }
        },
        created(){
            if(this.type == 'general'){
                this.getData()
            }else{
                this.getDataFilt()
            }
        },
        methods:{
            getData(){
                axios.get('/institucion/get').then(res=>{
                    this.items = res.data.instituciones
                    this.loading = true
                }).catch(res=>{
                    console.log(res.response)
                })
            },
            getDataFilt(){
                axios.get(`/institucion/get/filtro/${this.id}`).then(res=>{
                    this.items = res.data.establecimiento.instituciones
                    this.loading = true
                }).catch(res=>{
                    console.log(res.response)
                })
            },
        }
    }

</script>


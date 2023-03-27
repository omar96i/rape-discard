<template>
    <div class="col-12" v-if="loading">
        <EasyDataTable class="mt-4"
            :headers="headers"
            :items="items"
            border-cell
            buttons-pagination
        >
            <template #item-actions="item">
                <div class="operation-wrapper text-center">
                    <a href="#" class="btn btn-primary m-1 btn-sm" @click="$parent.selectType(item.nombre, item.id)"><i class='bx bx-search'></i></a>
                </div>
            </template>
        </EasyDataTable>
    </div>
</template>

<script lang="ts">
    import axios from "axios";
    export default{
        data(){
            return{
                headers: [
                    { text: "Código DANE", value: "cod_dane" },
                    { text: "Nombre", value: "nombre" },
                    { text: "Territorio", value: "territorio" },
                    { text: "Municipio", value: "municipio" },
                    { text: "Total Sedes", value: "total_sedes" },
                    { text: "Secretaría", value: "secretaria" },
                    { text: "Código DANE Municipio", value: "cod_dane_municipio" },
                    { text: "Nombre Municipio", value: "nombre_municipio" },
                    { text: "Nombre Establecimiento", value: "nombre_establecimiento" },
                    { text: "Teléfono", value: "telefono" },
                    { text: "Nombre Rector", value: "nombre_rector" },
                    { text: "Tipo Establecimiento", value: "tipo_establecimiento" },
                    { text: "Etnias", value: "etnias" },
                    { text: "Sector", value: "sector" },
                    { text: "Género", value: "genero" },
                    { text: "Zona", value: "zona" },
                    { text: "Niveles", value: "niveles" },
                    { text: "Jornadas", value: "jornadas" },
                    { text: "Carácter", value: "caracter" },
                    { text: "Especialidad", value: "especialidad" },
                    { text: "Licencia", value: "licencia" },
                    { text: "Grados", value: "grados" },
                    { text: "Modelo Educativo", value: "modelo_educativo" },
                    { text: "Capacidades Excepcionales", value: "capacidades_excepcionales" },
                    { text: "Discapacidades", value: "discapacidades" },
                    { text: "Idiomas", value: "idiomas" },
                    { text: "Número Sedes", value: "numero_sedes" },
                    { text: "Estado", value: "estado" },
                    { text: "Prestador de Servicio", value: "prestador_de_servicio" },
                    { text: "Propiedad Planta Física", value: "propiedad_planta_fisica" },
                    { text: "Resguardo", value: "resguardo" },
                    { text: "Matrícula Contratada", value: "matricula_contratada" },
                    { text: "Calendario", value: "calendario" },
                    { text: "Internado", value: "internado" },
                    { text: "Estrato", value: "estrato" },
                    { text: "Correo Electrónico", value: "correo_electronico" },
                    { text: "Código Secretaría", value: "cod_secretaria" },
                    { text: "Nombre Establecimiento 2", value: "nombre_establecimiento_2" },
                    { text: "Sector 2", value: "sector_2" },
                    { text: "Web", value: "web" },
                    { text: "Total Matrícula", value: "total_matricula" },
                    { text: "Cantidad Sedes", value: "cantidad_sedes" },
                    { text: "Grupo", value: "grupo"},
                    { text: "Acciones", value: "actions"}
                ],
                items : [],
                loading : false

            }
        },
        created(){
            this.getData()
        },
        methods:{
            getData(){
                axios.get('/institucion/getEstablecimientos').then(res=>{
                    this.items = res.data.establecimientos
                    this.loading = true
                }).catch(res=>{
                    console.log(res.response)
                })
            },
        }
    }

</script>

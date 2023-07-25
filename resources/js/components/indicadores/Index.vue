<template>
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

<script>
export default {
    data(){
        return{
            headers: [
                    { text: "Codigo de departamento", value: "codigo_departamento" },
                    { text: "Departamento", value: "departamento" },
                    { text: "Codigo entidad", value: "codigo_entidad" },
                    { text: "Entidad", value: "entidad" },
                    { text: "Dimension", value: "dimension" },
                    { text: "Indicador", value: "indicador" },
                    { text: "Dato numerico", value: "dato_numerico" },
                    { text: "Año", value: "date" },
                    { text: "Fuente", value: "fuente" },
                ],
                items : [],
                loading : false
        }
    },
    mounted(){
        this.get()
    },
    methods:{
        get(){
            this.loading = false
            axios.get('/indicador/get').then(res=>{
                this.items = res.data.indicadores
            }).catch(error=>{
                console.log(error.response)
            }).finally(()=>{
                this.loading = true
            })
        }
    }
}
</script>

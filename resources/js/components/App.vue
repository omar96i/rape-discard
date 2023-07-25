<template>
    Bievenido!
    <label class="form-label btn btn-primary" for="import_excel">Selecciona el archivo a importar</label>
    <input type="file" @change="onInputExcelChange" id="import_excel" style="display:none">
    <button class="btn btn-success" @click="importExcel()">Importar</button>
</template>

<script>
    export default{
        data(){
            return{
                file : ''
            }
        },
        methods:{
            onInputExcelChange(e){
                let files = e.target.files[0]
                this.file = files
            },
            importExcel(){
                let data = new FormData();
                data.append("file", this.file)
                axios.post('/indicador/import', data).then(res=>{
                    console.log(res.data)
                }).catch(error=>{
                    console.log(error.response)
                })
            }
        }
    }
</script>

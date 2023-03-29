<template>
    <div class="col-12">
        <button class="btn btn-primary m-1" :class="{'active' : loadTableEstablecimiento}" @click="selectTable()">Establecimientos</button>
        <button class="btn btn-primary" :class="{'active' : loadTable}" @click="selectType('general')">Instituciones</button>
        <button class="btn btn-primary m-1" :class="{'active' : loadPowerBi}" @click="openTre()">Estadisticas</button>
    </div>
    <div class="col-12" v-if="loadTable">
        <table-instituciones-vue :type="type" :id="id"></table-instituciones-vue>
    </div>
    <div class="col-12" v-if="loadTableEstablecimiento">
        <table-establecimiento-vue></table-establecimiento-vue>
    </div>
    <div class="col-12" v-if="loadPowerBi">
        <iframe title="Report Section" width="100%" height="800" src="https://app.powerbi.com/view?r=eyJrIjoiNDM0ZWZkMjktMjRhMC00MzNmLWI1ZTEtZWU2YzYxZGY3ZDQ5IiwidCI6IjJlNjBlNWFlLTA2MGYtNGExMC1hZWJiLTkyODY2MjFjNGQ4MiJ9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
</template>

<script lang="ts">
    import TableEstablecimientoVue from './TableEstablecimiento.vue'
    import TableInstitucionesVue from './TableInstituciones.vue'
    export default{
        components:{
            TableInstitucionesVue,
            TableEstablecimientoVue
        },
        data(){
            return{
                type : 'general',
                loading : false,
                loadTable : false,
                loadTableEstablecimiento : true,
                id : '',
                loadPowerBi: false,
            }
        },
        created(){
        },
        methods:{
            selectType(type, id = false){
                this.type = type
                if(id){
                    this.id = id
                }
                this.loadPowerBi = false
                this.loadTableEstablecimiento = false
                this.loadTable = true
            },
            selectTable(){
                this.type = 'general'
                this.id = ''
                this.loadPowerBi = false
                this.loadTable = false
                this.loadTableEstablecimiento = true
            },
            openTre(){
                this.loadPowerBi = true
                this.type = 'general'
                this.id = ''
                this.loadTable = false
                this.loadTableEstablecimiento = false
            }

        }
    }

</script>

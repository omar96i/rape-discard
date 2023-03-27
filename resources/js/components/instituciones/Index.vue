<template>
    <div class="col-12">
        <button class="btn btn-primary m-1" :class="{'active' : loadTableEstablecimiento}" @click="selectTable()">Establecimientos</button>
        <button class="btn btn-primary" :class="{'active' : loadTable}" @click="selectType('general')">Instituciones</button>
    </div>
    <div class="col-12" v-if="loadTable">
        <table-instituciones-vue :type="type" :id="id"></table-instituciones-vue>
    </div>
    <div class="col-12" v-if="loadTableEstablecimiento">
        <table-establecimiento-vue></table-establecimiento-vue>
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
                this.loadTableEstablecimiento = false
                this.loadTable = true
            },
            selectTable(){
                this.type = 'general'
                this.id = ''
                this.loadTable = false
                this.loadTableEstablecimiento = true
            },

        }
    }

</script>

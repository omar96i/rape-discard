<template>
    <div class="col-12 mb-2">
        <label for="">Vistas</label><br>
        <button class="btn btn-primary" @click="selectView('alimentos_departamentos')">Alimentos de Departamentos</button>
        <button class="btn btn-primary mt-2 m-sm-2" @click="selectView('abastecimiento')">Abastecimiento de Departamentos</button>
    </div>
    <hr>
    <departamento-alimento-view v-if="selected_view == 'alimentos_departamentos'"></departamento-alimento-view>
    <departamento-alimento-departamento-view v-if="selected_view == 'abastecimiento'"></departamento-alimento-departamento-view>
</template>

<script lang="ts">
import DepartamentoAlimentoView from './DepartamentoAlimentoView.vue'
import DepartamentoAlimentoDepartamentoView from './DepartamentoAlimentoDepartamentoView.vue'
export default{
    components:{
        'departamento-alimento-view' : DepartamentoAlimentoView,
        'departamento-alimento-departamento-view' : DepartamentoAlimentoDepartamentoView,
    },
    data(){
        return{
            selected_view : ''
        }
    },
    methods:{
        selectView(view){
            this.selected_view = view
        }
    }
}
</script>

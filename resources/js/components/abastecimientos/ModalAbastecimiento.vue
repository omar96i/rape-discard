<template>
    <!-- Modal -->
    <div class="modal fade" id="modalAbastecimiento" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" v-if="!loading_data">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFullTitle">Formulario de registro</h5>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="card-body row">
                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Departamento</label>
                                <select class="form-select" v-model="data.departamento_id" >
                                    <option value="1">RISARALDA</option>
                                    <option value="2">QUINDIO</option>
                                    <option value="3">TOLIMA</option>
                                    <option value="4">CALDAS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Departamento proveedor</label>
                                <select class="form-select" v-model="aux.departamento_id" >
                                    <option value="1">RISARALDA</option>
                                    <option value="2">QUINDIO</option>
                                    <option value="3">TOLIMA</option>
                                    <option value="4">CALDAS</option>
                                    <option value="5">ANTIOQUIA</option>
                                    <option value="6">BOGOTÁ D.C.</option>
                                    <option value="7">BOYACÁ</option>
                                    <option value="8">BOLIVAR</option>
                                    <option value="9">CASANARE</option>
                                    <option value="10">CAUCA</option>
                                    <option value="11">CESAR</option>
                                    <option value="12">CÓRDOBA</option>
                                    <option value="13">CUNDINAMARCA</option>
                                    <option value="14">HUILA</option>
                                    <option value="15">META</option>
                                    <option value="16">NARIÑO</option>
                                    <option value="17">NORTE DE SANTANDER</option>
                                    <option value="18">OTRO</option>
                                    <option value="19">OTRO DEP</option>
                                    <option value="20">SANTANDER</option>
                                    <option value="21">VALLE DEL CAUCA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Categoria Alimentos</label>
                                <select class="form-select" v-model="aux.categoria" @change="getAlimentos()" >
                                    <option value="Verduras y hortalizas">Verduras y hortalizas</option>
                                    <option value="Frutas Frescas">Frutas Frescas</option>
                                    <option value="Tubérculos, raíces y plátanos">Tubérculos, raíces y plátanos</option>
                                    <option value="Granos y Cereales">Granos y Cereales</option>
                                    <option value="Huevos y Lácteos">Huevos y Lácteos</option>
                                    <option value="Carnes">Carnes</option>
                                    <option value="Pescados">Pescados</option>
                                    <option value="Productos procesados">Productos procesados</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <label class="form-label">Alimentos</label>
                            <select class="form-select" v-model="data.alimento_departamento_id" >
                                <option v-for="(alimento, index) in alimentos" :key="index" :value="alimento.id">{{ alimento.alimento.nombre }}</option>
                            </select>
                        </div>

                        <div class="col-12 col-sm-6">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" v-model="data.cantidad">
                        </div>

                        <div class="col-12 col-sm-6">
                            <label class="form-label">Fecha</label>
                            <input type="date" class="form-control" v-model="data.fecha">
                        </div>

                    </div>
                </div>
                <div class="modal-footer" v-if="!loading">
                    <button type="button" id="cierrame" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                    </button>
                    <button type="button" class="btn btn-primary" @click="action">{{ (tipo == 'insert') ?  'Agregar' : 'Editar' }}</button>
                </div>
                <div class="modal-footer" v-else>
                    <spinner-view></spinner-view>
                </div>
            </div>
            <div class="modal-content" v-else>
                <div class="row my-5">
                    <div class="col-12 text-center">
                        <spinner-view></spinner-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import Spinner from '../Spinner.vue'


export default{
    components:{
        'spinner-view' : Spinner
    },
    data(){
        return{
            data:{},
            alimentos: {},
            tipo: 'insert',
            loading: false,
            loading_data : false,
            aux:{}
        }
    },
    methods:{
        setData(tipo, id){
            if(tipo == 'edit'){
                this.loading_data = true
                this.getData(id)
                this.tipo = tipo
            }
            if(tipo == 'insert'){
                this.loading_data = true
                this.resetData()
                this.tipo = tipo
            }
        },
        resetData(){
            this.data = {}
            this.alimentos = {}
            this.aux = {}
            setTimeout(()=>{
                this.loading_data = false
            },200)
        },
        getData(id){
            axios.get(`/departamento-alimento-departamento/get/data/${id}`).then(res=>{
                this.aux.id = res.data.data.id
                this.data.alimento_departamento_id = res.data.data.alimento_departamento_id
                this.data.departamento_id = res.data.data.departamento_id
                this.data.cantidad = res.data.data.cantidad
                this.data.fecha = res.data.data.fecha
                this.aux.departamento_id = res.data.data.alimento.departamento.id
                this.aux.categoria = res.data.data.alimento.alimento.categoria
                this.getAlimentos()
            }).catch(res=>{
                console.log(res.response)
            })
        },
        getAlimentos(){
            axios.get(`/departamento-alimento-departamento/get/alimentos/${this.aux.categoria}/${this.aux.departamento_id}`).then(res=>{
                this.alimentos = res.data.data
                this.loading_data = false
            }).catch(error=>{
                console.log(error.response)
            })
        },
        action(){
            this.loading = true
            axios.post((this.tipo == 'insert') ? `/departamento-alimento-departamento/store` : `departamento-alimento-departamento/update/${this.aux.id}`, this.data).then(res=>{
                this.loading = false
                if(res.data.status){
                    this.alert('Registro', (this.tipo=='insert') ? 'Agregado' : 'Actualizado', 'success')
                }
                this.$parent.getData()
                setTimeout(()=>{
                    document.getElementById("cierrame").click()
                },200)
            }).catch(res=>{
                this.alert('Registro', 'Error en el servidor', 'error')
                console.log(res.response)
                this.loading = false
            })
        },

        alert(title, text, icon){
            this.$swal({
                title: title,
                text: text,
                icon: icon,
                timer: 3000
            })
        }
    }
}
</script>

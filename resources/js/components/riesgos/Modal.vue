<template>
    <!-- Modal -->
    <div class="modal fade" id="modalRiesgo" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
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
                                <select class="form-select" v-model="aux.departamento_id" @change="getMunicipios()">
                                    <option value="3">TOLIMA</option>
                                    <option value="4">CALDAS</option>
                                    <option value="2">QUINDIO</option>
                                    <option value="1">RISARALDA</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Municipios</label>
                                <select class="form-select" v-model="data.municipio_id">
                                    <option v-for="(municipio, index) in municipios" :key="index" :value="municipio.id">{{ municipio.nombre }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Fecha</label>
                                <input type="date" v-model="data.fecha" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Evento</label>
                                <input type="text" class="form-control" v-model="data.evento">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Muertos</label>
                                <input type="number" class="form-control" v-model="data.muertos">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Heridos</label>
                                <input type="number" class="form-control" v-model="data.heridos">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Desaparecidos</label>
                                <input type="number" class="form-control" v-model="data.desaparecidos">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Personas</label>
                                <input type="number" class="form-control" v-model="data.personas">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Familias</label>
                                <input type="number" class="form-control" v-model="data.familias">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Viv.destri</label>
                                <input type="number" class="form-control" v-model="data.viv_destru">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Viv.aver</label>
                                <input type="number" class="form-control" v-model="data.viv_aver">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Vias</label>
                                <input type="number" class="form-control" v-model="data.vias">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Ptes.vehic</label>
                                <input type="number" class="form-control" v-model="data.ptes_vehic">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Ptes.peat</label>
                                <input type="number" class="form-control" v-model="data.ptes_peat">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Acued</label>
                                <input type="number" class="form-control" v-model="data.acued">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Alcant</label>
                                <input type="number" class="form-control" v-model="data.alcant">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">C.salud</label>
                                <input type="number" class="form-control" v-model="data.c_salud">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">C.comunit</label>
                                <input type="number" class="form-control" v-model="data.c_comunit">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">C.educat</label>
                                <input type="number" class="form-control" v-model="data.c_educat">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Hectareas</label>
                                <input type="number" class="form-control" v-model="data.hectareas">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Otros</label>
                                <input type="text" class="form-control" v-model="data.otros">
                            </div>
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
                <div class="row mt-5">
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
            municipios: {},
            tipo: 'insert',
            loading: false,
            loading_data : false,
            aux:{}
        }
    },
    methods:{

        getMunicipios(){
            axios.get(`/riesgo/get/municipios/${this.aux.departamento_id}`).then(res=>{
                this.municipios = res.data.data
                this.loading_data = false
            }).catch(error=>{
                console.log(error.response)
            })
        },
        setData(tipo, id){
            console.log(tipo + ' ' + id)
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
            axios.get(`/riesgo/get/data/${id}`).then(res=>{
                console.log(res.data.data)
                this.data = {
                    id : res.data.data.id,
                    municipio_id : res.data.data.municipio_id,
                    fecha : res.data.data.fecha,
                    evento : res.data.data.evento,
                    muertos : res.data.data.muertos,
                    heridos : res.data.data.heridos,
                    desaparecidos : res.data.data.desaparecidos,
                    personas : res.data.data.personas,
                    familias : res.data.data.familias,
                    viv_destru : res.data.data.viv_destru,
                    viv_aver : res.data.data.viv_aver,
                    vias : res.data.data.vias,
                    ptes_aver : res.data.data.ptes_aver,
                    ptes_peat : res.data.data.ptes_peat,
                    acued : res.data.data.acued,
                    ptes_vehic : res.data.data.ptes_vehic,
                    alcant : res.data.data.alcant,
                    c_salud : res.data.data.c_salud,
                    c_educat : res.data.data.c_educat,
                    c_comunit : res.data.data.c_comunit,
                    hectareas : res.data.data.hectareas,
                    otros : res.data.data.otros,
                }
                this.aux.departamento_id = res.data.data.municipio.departamento_id
                this.getMunicipios()
            }).catch(res=>{
                console.log(res.response)
            })
        },
        action(){
            this.loading = true
            axios.post((this.tipo == 'insert') ? `/riesgo/store` : `/riesgo/update/${this.data.id}`, this.data).then(res=>{
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

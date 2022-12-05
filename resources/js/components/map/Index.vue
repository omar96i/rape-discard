<template>
    <div class="row">
        <div class="col-12 col-sm-5" v-if="selected_map == 'turismo'">
            <div class="col-12 w-100 h-100" style="position:relative; z-index: 1;">
                <div class="map" v-if="loading">
                    <map-colores></map-colores>
                    <map-estilos class="background-services"></map-estilos>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-5" v-if="selected_map == 'riesgo'">
            <map-riesgos v-if="load_map" :datos="data_riesgos"></map-riesgos>
            <div class="col-12 text-center mt-5" v-else>
                <h5>Selecciona las fechas a calcular</h5>
            </div>
        </div>

        <div :class="['col-12', {'col-sm-7' : selected_map != ''}]">
            <div class="card">
                <div class="card-body">
                    <div class="col-12">
                        <label for="categoria">Categoria de mapa</label>
                        <select class="form-control" id="categoria" v-model="selected_map">
                            <option value="">Selecciona un mapa</option>
                            <option value="turismo">Mapa de turismo</option>
                            <option value="riesgo">Mapa de riesgos</option>
                            <option value="abastecimiento">Mapa de abastecimiento</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card mt-4" v-if="selected_map == 'turismo'">
                <div class="card-body" v-if="!loading_data">
                    <div class="col-12">
                        <h6>Departamento</h6>
                        <p>{{ (selected_departamento == '') ? 'Sin seleccionar' : selected_departamento }}</p>
                    </div>
                    <div class="col-12">
                        <h6>Ofertas turisticas de tipo "Turismo verde y experiencias"</h6>
                        <p>{{ (selected_departamento == '') ? 'Sin seleccionar' : data['turismo_verde'] }}</p>
                    </div>
                    <div class="col-12">
                        <h6>Ofertas turisticas de tipo "Aventura"</h6>
                        <p>{{ (selected_departamento == '') ? 'Sin seleccionar' : data['aventura'] }}</p>
                    </div>
                    <div class="col-12">
                        <h6>Ofertas turisticas de tipo "Atractivo turistico"</h6>
                        <p>{{ (selected_departamento == '') ? 'Sin seleccionar' : data['atractivo_turistico'] }}</p>
                    </div>
                    <div class="col-12">
                        <h6>Ofertas turisticas de tipo "Hospedaje"</h6>
                        <p>{{ (selected_departamento == '') ? 'Sin seleccionar' : data['hospedaje'] }}</p>
                    </div>
                    <div class="col-12">
                        <h6>Operadores turisticos activos</h6>
                        <p>{{ (selected_departamento == '') ? 'Sin seleccionar' : data['estado_true'] }}</p>
                    </div>
                    <div class="col-12">
                        <h6>Operadores turisticos inactivos</h6>
                        <p>{{ (selected_departamento == '') ? 'Sin seleccionar' : data['estado_false'] }}</p>
                    </div>
                    <div class="col-12 text-center" v-if="selected_departamento != ''">
                        <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#mapModal" @click="openModal()">Ver mas...</button>
                    </div>
                </div>
                <div class="card-body text-center" v-else>
                    <spinner-view></spinner-view>
                </div>
            </div>
            <div class="card mt-4" v-if="selected_map == 'riesgo'">
                <div class="card-body" v-if="!loading_data">
                    <div class="col-12 mb-2">
                        <label for="fecha">Fecha inicio</label>
                        <input type="date" class="form-control" v-model="selected_day.inicio">
                    </div>
                    <div class="col-12 mb-2">
                        <label for="fecha">Fecha final</label>
                        <input type="date" class="form-control" v-model="selected_day.fin">
                    </div>
                    <div class="col-12 mb-4">
                        <button class="btn btn-primary" @click="getDatos()">Buscar datos</button>
                    </div>
                    <div class="row" v-if="selected_day.inicio != '' && selected_day.fin != ''">
                        <div class="col-12 col-sm-6">
                            <h6>Departamento</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.municipio.departamento.nombre }}</p>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Municipio</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.municipio.nombre }}</p>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Muertos</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.muertos }}</p>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Heridos</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.heridos }}</p>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Desaparecidos</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.desaparecidos }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Personas</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.personas }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Familias</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.familias }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Viv.destru</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.viv_destru }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Viv.aver</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.viv_aver }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Vias</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.vias }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Ptes.vehic</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.ptes_vehic }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Ptes.peat</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.ptes_peat }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Acued</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.acued }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Alcantarillado</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.alcant }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>C.salud</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.c_salud }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>C.educat</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.c_educat }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>C.comunit</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.c_comunit }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Hectareas</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.hectareas }}</p>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Otros</h6>
                            <p>{{ (data_riesgo_municipio == null) ? 'Sin datos' : data_riesgo_municipio.otros }}</p>

                        </div>

                    </div>
                </div>
                <div class="card-body text-center" v-else>
                    <spinner-view></spinner-view>
                </div>
            </div>
        </div>
    </div>



    <map-modal ref="modal_map"></map-modal>
</template>
<script>
import Modal from "./Modal.vue"
import Spinner from "../Spinner.vue"
import MapRiesgos from "./svg/MapRiesgos.vue"
import MapEstilos from "./svg/MapEstilos.vue"
import MapColores from "./svg/MapColores.vue"
export default{
    components:{
        'map-modal' : Modal,
        'spinner-view' : Spinner,
        'map-riesgos' : MapRiesgos,
        'map-estilos' : MapEstilos,
        'map-colores' : MapColores
    },
    data(){
        return{
            current_image : 0,
            loading: true,
            selected_map : '',
            data : {},
            selected_departamento : '',
            loading_data : false,
            selected_day : {
                inicio : '',
                fin : ''
            },
            data_riesgos : {},
            data_riesgo_municipio : null,
            load_map : false
        }
    },
    methods:{
        action(departamento){
            this.loading_data = true
            this.selected_departamento = departamento
            axios.get(`/ofertas-turisticas/get/departamento/${this.selected_departamento}`).then(res=>{
                this.data = res.data.data
                this.loading_data = false
            }).catch(res=>{
                console.log(res.response)
                this.loading_data = false
            })
        },
        openModal(){
            this.$refs.modal_map.setData(this.selected_departamento)
        },
        getDataMunicipio(municipio){
            axios.post(`/riesgo/get/by/municipio/${municipio}`, this.selected_day).then(res=>{
                this.data_riesgo_municipio = res.data.data
            }).catch(error=>{
                console.log(error.response)
            })
        },
        getDatos(){
            this.load_map = false
            axios.post('/riesgo/get/by/date', this.selected_day).then(res=>{
                this.data_riesgos = res.data.data
                this.load_map = true
            }).catch(error=>{
                console.log(error.response)
            })
        },
        resetData(){
            this.loading= true
            this.selected_map = ''
            this.data = {}
            this.selected_departamento = ''
            this.loading_data = false
            this.data_riesgos = {}
            this.data_riesgo_municipio = null
            this.load_map = false
        }
    }
}
</script>

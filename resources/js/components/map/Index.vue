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

         <div class="col-12 col-sm-5" v-if="selected_map == 'abastecimiento'">
            <map-abastecimiento></map-abastecimiento>
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
                    <div class="row" v-if="load_chart">
                        <div class="col-12 col-sm-6">
                            <h6>Departamento: {{this.data_riesgo_municipio.municipio.departamento.nombre}}</h6>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h6>Municipio: {{this.data_riesgo_municipio.municipio.nombre}}</h6>
                        </div>
                        <BarChart :chartData="chartData" :options="options" />
                    </div>
                    <div class="col-12 text-center" v-else>
                        <h4>Sin datos seleccionados</h4>
                    </div>
                </div>
                <div class="card-body text-center" v-else>
                    <spinner-view></spinner-view>
                </div>
            </div>
            <div class="card mt-4" v-if="showFiltros == true && selected_map == 'abastecimiento'">
                <div class="card-body row" v-if="!loading_data">
                    <div class="col-12">
                        <h5 class="text-capitalize">{{abastecimiento_departamento}}</h5>
                    </div>
                    <div class="col-12 col-sm-6 mb-2">
                        <label class="form-label">Fecha Inicio <span style="color: red;">*</span></label>
                        <input type="date" class="form-control" v-model="filtros_abastecimiento.fecha_inicio">
                    </div>
                    <div class="col-12 col-sm-6 mb-2">
                        <label class="form-label">Fecha Final <span style="color: red;">*</span></label>
                        <input type="date" class="form-control" v-model="filtros_abastecimiento.fecha_final">
                    </div>
                    <div class="col-12 col-sm-6 mb-2">
                        <label class="form-label">Departamento proveedor</label>
                        <select class="form-select" v-model="filtros_abastecimiento.departamento_id">
                            <option value="">Selecciona departamento</option>
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
                    <div class="col-12 col-sm-6 mb-2">
                        <label for="categoria">Categoria</label>
                        <select class="form-select" id="categoria" v-model="filtros_abastecimiento.categoria" @change="getAlimentos()">
                            <option value="">Selecciona una categoria</option>
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
                    <div class="col-12 mb-2">
                        <label for="fecha">Alimentos</label>
                        <select class="form-select" id="categoria" v-model="filtros_abastecimiento.nombre">
                            <option value="">Selecciona un alimento</option>
                            <option v-for="(alimento, index) in options_alimentos" :key="index" :value="alimento.nombre">{{ alimento.nombre }}</option>
                        </select>
                    </div>

                    <div class="col-12 mb-4">
                        <button class="btn btn-primary" @click="getByFiltros()">Buscar datos</button>
                    </div>
                    <div class="card mt-4" v-if="abastecimiento_alert">
                        <div class="col-12 text-center"><h4>Sin datos a analizar</h4></div>
                    </div>
                    <div class="row" v-if="load_chart_abastecimiento">
                        <div class="col-12">
                            <DoughnutChart :chartData="chartDataAbastecimiento" :options="optionsAbastecimiento"/>
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
import MapAbastecimiento from "./svg/MapAbastecimiento.vue"
import {DoughnutController} from 'chart.js';
import { DoughnutChart } from 'vue-chart-3';
import { BarChart } from 'vue-chart-3';
import { Chart, BarController, BarElement,ArcElement,Tooltip, CategoryScale, LinearScale } from 'chart.js';
Chart.register(BarController, DoughnutController, ArcElement, Tooltip,BarElement, CategoryScale, LinearScale);

export default{
    components:{
        'map-modal' : Modal,
        'spinner-view' : Spinner,
        'map-riesgos' : MapRiesgos,
        'map-estilos' : MapEstilos,
        'map-colores' : MapColores,
        BarChart,
        DoughnutChart,
        'map-abastecimiento' : MapAbastecimiento
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
            load_map : false,
            chartData: {
                labels: ['Muertos', 'Heridos', 'Desaparecidos', 'Personas', 'Familias', 'Viv.destru', 'Viv.aver', 'Vias', 'Ptes.vehic', 'Ptes.peat', 'Acued', 'Alcant', 'C.Salud', 'C.Comunit', 'Hectareas'],
                datasets: [
                    {
                        data: [],
                        backgroundColor: ['#FDB92E', '#80384F', '#28744B', '#00A859'],
                    },
                ],
            },
            options : {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Municipios Riesgos',
                    },
                },
            },
            chartDataAbastecimiento: {
                labels: [],
                datasets: [
                    {
                        data: [],
                        backgroundColor: ['#FDB92E', '#80384F', '#28744B', '#00A859'],
                    },
                ],
            },
            optionsAbastecimiento: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Departamento Abastecimientos',
                    },
                },
            },
            load_chart : false,
            filtros_abastecimiento : {
                'categoria' : '',
                'nombre' : '',
                'departamento_id' : '',
                'fecha_inicio' : '',
                'fecha_final' : ''
            },
            options_alimentos : [],
            alimentos : {},
            load_chart_abastecimiento : false,
            showFiltros : false,
            noData : true,
            abastecimiento_departamento : '',
            abastecimiento_alert : false
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
        getAbastecimientoData(departamento){
            this.abastecimiento_departamento = departamento
            this.filtros_abastecimiento.categoria = ''
            this.filtros_abastecimiento.nombre = ''
            this.showFiltros = true
            // this.load_chart_abastecimiento = false
            // this.selected_departamento = departamento
            // axios.get(`/abastecimiento/get/data/by/departamento/${this.selected_departamento}`).then(res=>{
            //     this.chartDataAbastecimiento.datasets[0].data = []
            //     this.chartDataAbastecimiento.labels = []
            //     this.alimentos = res.data.departamento.alimentos
            //     this.alimentos.forEach(alimento => {
            //         this.chartDataAbastecimiento.labels.push(alimento.nombre)
            //         this.chartDataAbastecimiento.datasets[0].data.push(alimento.pivot.cantidad)
            //     });
            //     if(this.alimentos.length > 0){
            //         this.showFiltros = true
            //         this.load_chart_abastecimiento = true
            //         this.noData = false
            //     }else{
            //         this.noData = true
            //     }
            // }).catch(error=>{
            //     console.log(error.response)
            // })
        },
        getDataMunicipio(municipio){
            this.load_chart = false
            axios.post(`/riesgo/get/by/municipio/${municipio}`, this.selected_day).then(res=>{
                this.data_riesgo_municipio = res.data.data
                this.chartData.datasets[0].data = []
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.muertos)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.heridos)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.desaparecidos)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.personas)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.familias)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.viv_destru)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.viv_aver)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.vias)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.ptes_vehic)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.ptes_peat)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.acued)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.alcant)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.c_salud)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.c_comunit)
                this.chartData.datasets[0].data.push(this.data_riesgo_municipio.hectareas)
                this.load_chart = true
            }).catch(error=>{
                console.log(error.response)
            })
        },
        getAlimentos(){
            axios.post(`/abastecimiento/get/data/by/categoria`, this.filtros_abastecimiento).then(res=>{
                this.options_alimentos = res.data.alimentos
            }).catch(error=>{
                console.log(error.response)
            })
        },
        getByFiltros(){
            this.load_chart_abastecimiento = false
            this.abastecimiento_alert = false
            axios.post(`/departamento-alimento-departamento/get/by/filtros/${this.abastecimiento_departamento}`, this.filtros_abastecimiento).then(res=>{
                this.chartDataAbastecimiento.datasets[0].data = []
                this.chartDataAbastecimiento.labels = []
                console.log(res.data)
                if(res.data.status == 'find_departamento'){
                    if (res.data.data.length > 0) {
                        res.data.data.forEach(element => {
                            this.chartDataAbastecimiento.datasets[0].data.push(element.cantidad)
                            this.chartDataAbastecimiento.labels.push(element.alimento.alimento.nombre)
                        });
                        this.load_chart_abastecimiento = true
                    }else{
                        this.abastecimiento_alert = true
                    }
                }
                if(res.data.status == 'find_sin_departamento'){
                    if(res.data.data.length > 0){
                        for (let index = 0; index < res.data.header.length; index++) {
                            this.chartDataAbastecimiento.datasets[0].data.push(res.data.data[index])
                            this.chartDataAbastecimiento.labels.push(res.data.header[index])
                        }
                        this.load_chart_abastecimiento = true
                    }else{
                        this.abastecimiento_alert = true
                    }
                }

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

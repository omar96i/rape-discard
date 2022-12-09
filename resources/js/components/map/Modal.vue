<template>
    <!-- Modal -->
    <div class="modal fade" id="mapModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content" >
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize" id="modalFullTitle">{{ departamento }}</h5>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <div class="w-100 text-center">
                                <caldas-svg v-if="departamento == 'caldas'"></caldas-svg>
                                <quindio-svg v-if="departamento == 'quindio'"></quindio-svg>
                                <risaralda-svg v-if="departamento == 'risaralda'"></risaralda-svg>
                                <tolima-svg v-if="departamento == 'tolima'"></tolima-svg>
                            </div>
                        </div>
                        <div class="col-12 col-sm-7">
                            <div class="card">
                                <div class="row p-4">
                                    <div class="col-12 text-center">
                                        <h5>Filtrar por:</h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label class="form-label">Tipo de turismo</label>
                                        <select class="form-select" v-model="filtros.tipo_de_turismo">
                                            <option value="">Selecciona un tipo de turismo</option>
                                            <option value="turismo verde y experiencias">Turismo verde y experiencias</option>
                                            <option value="aventura">Aventura</option>
                                            <option value="atractivo turistico">Atractivo turistico</option>
                                            <option value="hospedaje">Hospedaje</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label class="form-label" for="basic-default-phone">Estado</label>
                                        <select class="form-select" v-model="filtros.estado">
                                            <option value="">Selecciona un estado</option>
                                            <option value="activo">Activo</option>
                                            <option value="inactivo">Inactivo</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label for="tipo_turismo">Nombre</label>
                                        <input type="text" class="form-control" v-model="filtros.nombre">
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label for="tipo_turismo">RNT</label>
                                        <input type="text" class="form-control" v-model="filtros.rnt">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary" @click="find()">Buscar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-2"  v-for="(oferta, index) in ofertas" :key="index">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="img-container">
                                            <img :src="(oferta.logo == null) ? ((oferta.tipo_de_turismo == 'aventura')? './assets/default_icons/aventura.svg' : ((oferta.tipo_de_turismo == 'turismo verde y experiencias')? './assets/default_icons/turismo_verde.svg' : ((oferta.tipo_de_turismo == 'atractivo turistico')? './assets/default_icons/atractivo_turistico':((oferta.tipo_de_turismo == 'hospedaje')? './assets/default_icons/hospedaje.svg':'')))) : `./public/logo/${oferta.logo}`"  style="position: absolute; z-index: 1; border-radius: 50%; border: solid 0.2em; height: 80px;">
                                            <div class="col-12">
                                                <img :src="(oferta.foto_portada == null) ? './assets/img/default_portada.png' : `./public/portada/${oferta.foto_portada}`" alt="" style="width: 100%; height: 150px;">
                                            </div>
                                        </div>
                                        <h4 class="mt-2">{{ oferta.nombre }}</h4>
                                        <p>{{ oferta.descripcion }}</p>
                                        <div class="text-center mb-2">
                                            <a
                                                class="btn btn-primary me-1 btn-sm"
                                                data-bs-toggle="collapse"
                                                :href="`#collapse${oferta.id}`"
                                                role="button"
                                                aria-expanded="false"
                                                :aria-controls="`collapse${oferta.id}`"
                                                >
                                                Ver mas...
                                            </a>
                                        </div>
                                        <div class="collapse" :id="`collapse${oferta.id}`">
                                            <div class="d-grid d-sm-flex p-3 border">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Departamento:</h6>
                                                            {{ oferta.departamento }}
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Tipo de turismo:</h6>
                                                            {{ oferta.tipo_de_turismo }}
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Nombre:</h6>
                                                            {{ oferta.nombre }}
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Estado:</h6>
                                                            {{ oferta.estado }}
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Descripcion:</h6>
                                                            {{ oferta.descripcion }}
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Contacto:</h6>
                                                            {{ oferta.contacto }}
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Telefono:</h6>
                                                            {{ oferta.telefono }}
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Website:</h6>
                                                            {{ oferta.website }}
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Correo:</h6>
                                                            {{ oferta.correo }}
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>RNT:</h6>
                                                            {{ oferta.rnt }}
                                                        </div>
                                                        <div class="col-12">
                                                            <h6>Ubicacion:</h6>
                                                            <div class="text-center">
                                                                Definiendo libreria a usar
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-3" v-if="!load_more">
                                <button class="btn btn-primary" @click="loadMore()">Cargar mas</button>
                            </div>
                            <div class="col-12 text-center mt-3" v-if="set_title">
                                Actualmente no hay registros
                            </div>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" id="cierrame" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

import axios from 'axios';
import Spinner from '../Spinner.vue'
import CaldasSvg from './svg/Caldas.vue'
import QuindioSvg from './svg/Quindio.vue'
import RisaraldaSvg from './svg/Risaralda.vue'
import TolimaSvg from './svg/Tolima.vue'


export default{
    components:{
        'spinner-view' : Spinner,
        'caldas-svg' : CaldasSvg,
        'quindio-svg' : QuindioSvg,
        'risaralda-svg' : RisaraldaSvg,
        'tolima-svg' : TolimaSvg
    },
    data(){
        return{
            departamento : '',
            ofertas : [],
            cantidad : 0,
            inicio: 0,
            fin: 2,
            load_more : false,
            set_title : false,
            filtros : {
                'tipo_de_turismo' : '',
                'estado' : '',
                'nombre' : '',
                'rnt' : ''
            }
        }
    },
    methods:{
        setData(departamento){
            this.filtros = {
                'tipo_de_turismo' : '',
                'estado' : '',
                'nombre' : '',
                'rnt' : ''
            }
            this.resetData()
            this.departamento = departamento
            this.getData()
        },

        resetData(){
            this.set_title = false
            this.inicio = 0
            this.fin = 2
            this.load_more = false
        },

        find(){
            this.resetData()
            this.getData()
        },

        getData(){
            axios.post(`ofertas-turisticas/get/por/departamento/${this.departamento}/${this.inicio}/${this.fin}`, this.filtros).then(res=>{
                console.log(res.data)
                if(this.inicio == 0 && res.data.data.length == 0){
                    this.load_more = true
                    this.set_title = true
                }
                if(this.inicio != 0 && res.data.data.length > 0){
                    for (let index = 0; index < res.data.data.length; index++) {
                        this.ofertas.push(res.data.data[index])
                    }
                }else if(this.inicio == 0){
                    this.ofertas = res.data.data
                }else{
                    this.load_more = true
                }
            }).catch(error=>{
                console.log(error.response)
            })
        },

        loadMore(){
            this.inicio = this.inicio+2
            this.fin = this.fin+2
            this.getData()
        }
    }
}
</script>

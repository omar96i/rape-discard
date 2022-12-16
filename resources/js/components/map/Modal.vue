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
                        <div class="col-12 col-sm-6">
                            <label for="">Localizaciones</label>
                            <GoogleMap api-key="AIzaSyArbGiMxuFAfhAEgh0Gsp3Ap3Ezr9a2S5Q" style="width: 100%; height: 575px" :center="center" :zoom="zoom"  v-if="loading_map">
                                <MarkerCluster>
                                    <Marker v-for="(market, i) in markers" :options="{ position: market }" :key="i">
                                        <InfoWindow>
                                            <div style="width: 500px;">
                                                <div class="card-header">
                                                    <div class="d-flex justify-content-between">
                                                        <h1 class="text-capitalize">{{markers_info[i].nombre}}</h1>
                                                        <img :src="(markers_info[i].logo == null) ? ((markers_info[i].tipo_de_turismo == 'aventura')? './assets/default_icons/aventura.svg' : ((markers_info[i].tipo_de_turismo == 'turismo verde y experiencias')? './assets/default_icons/turismo_verde.svg' : ((markers_info[i].tipo_de_turismo == 'atractivo turistico')? './assets/default_icons/atractivo_turistico.svg':((markers_info[i].tipo_de_turismo == 'hospedaje')? './assets/default_icons/hospedaje.svg':'./assets/img/default_logo.png')))) : `./public/logo/${markers_info[i].logo}`"  style="border-radius: 50%; border: solid 0.2em; height: 55px;">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-12">
                                                        <h6>Categoria: <span class="text-capitalize">{{markers_info[i].tipo_de_turismo}}</span></h6>
                                                        {{ (markers_info[i].descripcion == 'undefined') ? 'Descripcion sin definir' : markers_info[i].descripcion }}
                                                        <h6 class="mt-3">Website: <a :href="(markers_info[i].website == 'undefined')? '#' : markers_info[i].website">{{(markers_info[i].website == 'undefined')? 'Sin definir' : markers_info[i].website}}</a></h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </InfoWindow>
                                    </Marker>
                                </MarkerCluster>
                            </GoogleMap>
                            <GoogleMap api-key="AIzaSyArbGiMxuFAfhAEgh0Gsp3Ap3Ezr9a2S5Q" style="width: 100%; height: 575px" :center="center" :zoom="zoom"  v-if="loading_second_map">
                                <MarkerCluster>
                                    <Marker :options="{ position: selected_ubicacion.coordenadas }">
                                        <InfoWindow>
                                            <div style="width: 500px;">
                                                <div class="card-header">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="text-capitalize">{{selected_ubicacion.datos.nombre}}</h5>
                                                        <img :src="(selected_ubicacion.datos.logo == null) ? ((selected_ubicacion.datos.tipo_de_turismo == 'aventura')? './assets/default_icons/aventura.svg' : ((selected_ubicacion.datos.tipo_de_turismo == 'turismo verde y experiencias')? './assets/default_icons/turismo_verde.svg' : ((selected_ubicacion.datos.tipo_de_turismo == 'atractivo turistico')? './assets/default_icons/atractivo_turistico.svg':((selected_ubicacion.datos.tipo_de_turismo == 'hospedaje')? './assets/default_icons/hospedaje.svg':'./assets/img/default_logo.png')))) : `./public/logo/${selected_ubicacion.datos.logo}`"  style="border-radius: 50%; border: solid 0.2em; height: 55px;">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-12">
                                                        <h6>Categoria: <span class="text-capitalize">{{selected_ubicacion.datos.tipo_de_turismo}}</span></h6>
                                                        {{ (selected_ubicacion.datos.descripcion == 'undefined') ? 'Descripcion sin definir' : selected_ubicacion.datos.descripcion }}
                                                        <h6 class="mt-3">Website: <a :href="(selected_ubicacion.datos.website == 'undefined')? '#' : selected_ubicacion.datos.website">{{(selected_ubicacion.datos.website == 'undefined')? 'Sin definir' : selected_ubicacion.datos.website}}</a></h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </InfoWindow>
                                    </Marker>
                                </MarkerCluster>
                            </GoogleMap>
                        </div>
                        <div class="col-12 col-sm-6" >
                            <div class="card">
                                <div class="row p-4">
                                    <div class="col-12 text-center">
                                        <h6>Filtrar por:</h6>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label class="">Tipo de turismo</label>
                                        <select class="form-select" v-model="filtros.tipo_de_turismo">
                                            <option value="">Selecciona un tipo de turismo</option>
                                            <option value="turismo verde y experiencias">Turismo verde y experiencias</option>
                                            <option value="aventura">Aventura</option>
                                            <option value="atractivo turistico">Atractivo turistico</option>
                                            <option value="hospedaje">Hospedaje</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label class="">Estado</label>
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
                                        <button class="btn btn-primary m-2" @click="find()">Buscar</button>
                                        <button class="btn btn-primary" @click="resetMap()" v-if="loading_second_map">Limpiar Map</button>
                                    </div>
                                </div>
                            </div>
                            <div style="overflow-y: scroll; height:400px;" >
                                <div class="col-12 mt-2"  v-for="(oferta, index) in ofertas" :key="index" >
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="img-container">
                                                <img :src="(oferta.logo == null) ? ((oferta.tipo_de_turismo == 'aventura')? './assets/default_icons/aventura.svg' : ((oferta.tipo_de_turismo == 'turismo verde y experiencias')? './assets/default_icons/turismo_verde.svg' : ((oferta.tipo_de_turismo == 'atractivo turistico')? './assets/default_icons/atractivo_turistico.svg':((oferta.tipo_de_turismo == 'hospedaje')? './assets/default_icons/hospedaje.svg':'./assets/img/default_logo.png')))) : `./public/logo/${oferta.logo}`"  style="position: absolute; z-index: 1; border-radius: 50%; border: solid 0.2em; height: 80px;">
                                                <div class="col-12">
                                                    <img :src="(oferta.foto_portada == null) ? './assets/img/default_portada.png' : `./public/portada/${oferta.foto_portada}`" alt="" style="width: 100%; height: 150px;">
                                                </div>
                                            </div>
                                            <h4 class="mt-2">{{ oferta.nombre }}</h4>
                                            <p>{{ (oferta.descripcion == 'undefined') ? 'Sin definir' : oferta.descripcion }}</p>
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
                                                                {{ (oferta.descripcion == 'undefined') ? 'Sin definir' : oferta.descripcion }}
                                                            </div>
                                                            <div class="col-12 col-sm-6 mb-4">
                                                                <h6>Contacto:</h6>
                                                                {{ (oferta.contacto == 'undefined') ? 'Sin definir' : oferta.contacto  }}
                                                            </div>
                                                            <div class="col-12 col-sm-6 mb-4">
                                                                <h6>Telefono:</h6>
                                                                {{ (oferta.telefono == 'undefined') ? 'Sin definir' : oferta.telefono  }}
                                                            </div>
                                                            <div class="col-12 col-sm-6 mb-4">
                                                                <h6>Website:</h6>
                                                                {{ (oferta.website == 'undefined') ? 'Sin definir' : oferta.website  }}
                                                            </div>
                                                            <div class="col-12 col-sm-6 mb-4">
                                                                <h6>Correo:</h6>
                                                                {{ (oferta.correo == 'undefined') ? 'Sin definir' : oferta.correo  }}
                                                            </div>
                                                            <div class="col-12 col-sm-6 mb-4">
                                                                <h6>RNT:</h6>
                                                                {{ (oferta.rnt == 'undefined') ? 'Sin definir' : oferta.rnt  }}
                                                            </div>
                                                            <div class="col-12">
                                                                <h6>Ubicacion:</h6>
                                                                <button class="btn btn-primary btn-sm" @click="fijarMapa(oferta)" v-if="oferta.lat != null">Fijar en mapa</button>
                                                                <p v-else>Localizacion sin definir</p>
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
import { GoogleMap, Marker, MarkerCluster, InfoWindow, CustomMarker} from "vue3-google-map";


export default{
    components:{
        'spinner-view' : Spinner,
        GoogleMap,
        Marker,
        MarkerCluster,
        InfoWindow
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
            },
            markers : [],
            markers_info : [],
            center : {lat: 4.338292532471442, lng: -74.11473565004208},
            zoom : 5,
            loading_map : false,
            loading_second_map : false,
            selected_ubicacion : {
                coordenadas : {lat: 4.338292532471442, lng: -74.11473565004208},
                datos : {}
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
            this.markers = []
            this.markers_info = []
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
            this.loading_map = false
            this.loading_second_map = false
            axios.post(`ofertas-turisticas/get/por/departamento/${this.departamento}/${this.inicio}/${this.fin}`, this.filtros).then(res=>{
                if(this.inicio == 0 && res.data.data.length == 0){
                    this.load_more = true
                    this.set_title = true
                }
                if(this.inicio != 0 && res.data.data.length > 0){
                    for (let index = 0; index < res.data.data.length; index++) {
                        this.ofertas.push(res.data.data[index])
                        if(res.data.data[index].lat != null){
                            this.markers.push({
                                'lat' : res.data.data[index].lat,
                                'lng' : res.data.data[index].lng
                            })
                            this.markers_info.push(res.data.data[index])
                        }

                    }
                }else if(this.inicio == 0){
                    this.ofertas = res.data.data
                    res.data.data.forEach(oferta => {
                        if(oferta.lat != null ){
                            this.markers.push({
                                'lat' : oferta.lat,
                                'lng' : oferta.lng
                            })
                            this.markers_info.push(oferta)
                        }

                    });
                }else{
                    this.load_more = true
                }
                this.loading_map = true
            }).catch(error=>{
                console.log(error.response)
            })
        },

        fijarMapa(oferta){
            this.loading_second_map = false
            this.loading_map = false
            this.selected_ubicacion.coordenadas.lat = oferta.lat
            this.selected_ubicacion.coordenadas.lng = oferta.lng
            this.selected_ubicacion.datos = oferta
            setTimeout(() => {
                this.loading_second_map = true
            }, 200);
        },
        resetMap(){
            this.loading_second_map = false
            this.loading_map = false
            setTimeout(() => {
                this.loading_map = true
            }, 200);
        },
        loadMore(){
            this.inicio = this.inicio+2
            this.fin = this.fin+2
            this.getData()
        }
    }
}
</script>

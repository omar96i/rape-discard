<template>
    <!-- Modal -->
    <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
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
                        <div class="col-12 mb-3">
                            <div>
                                <img :src="(load_image == false) ? '/assets/img/default_logo.png' : img_icono" alt="" style="position: absolute; right: 10; botton: 20; z-index: 1; border-radius: 50%; border: solid 0.2em; height: 100px;">
                                <div class="col-12">
                                    <img :src="(load_image_portada == false) ? '/assets/img/default_portada.png' : img_portada" alt="" style="width: 100%; height: 300px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="mb-3 col">
                                    <label class="form-label btn btn-primary" for="file_portada">Selecciona una imagen para la portada</label>
                                    <input type="file" @change="onPortadaChange" id="file_portada" style="display:none">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Departamento</label>
                                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" v-model="data.departamento" required>
                                    <option value="tolima">TOLIMA</option>
                                    <option value="caldas">CALDAS</option>
                                    <option value="quindio">QUINDIO</option>
                                    <option value="risaralda">RISARALDA</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tipo de turismo</label>
                                <select class="form-select" v-model="data.tipo_de_turismo" required>
                                    <option value="turismo verde y experiencias">Turismo verde y experiencias</option>
                                    <option value="aventura">Aventura</option>
                                    <option value="atractivo turistico">Atractivo turistico</option>
                                    <option value="hospedaje">Hospedaje</option>
                                    <option value="agencias de viajes">Agencias de viajes</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-email">Nombre</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control" v-model="data.nombre" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Estado</label>
                                <select class="form-select" v-model="data.estado">
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Descripcion</label>
                                <textarea id="basic-default-message" class="form-control" placeholder="" v-model="data.descripcion"></textarea>
                            </div>

                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3 col">
                                <label class="form-label btn btn-primary btn-block" for="file">Selecciona una imagen para el Logo</label>
                                <input type="file" @change="onLogoChange" id="file" style="display:none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Contacto</label>
                                <input type="text" class="form-control" id="basic-default-fullname" v-model="data.contacto">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Telefono</label>
                                <input type="text" class="form-control" id="basic-default-company" v-model="data.telefono">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Website</label>
                                <input type="text" id="basic-default-phone" class="form-control phone-mask" v-model="data.website">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Correo</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" v-model="data.correo">
                                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">RNT</label>
                                <input type="text" id="basic-default-phone" class="form-control phone-mask" v-model="data.rnt">
                            </div>
                        </div>
                        <div class="col-12" v-if="selected_map">
                            <h5>Selecciona la localizacion</h5>
                            <GoogleMap api-key="AIzaSyArbGiMxuFAfhAEgh0Gsp3Ap3Ezr9a2S5Q" style="width: 100%; height: 500px" :center="center" :zoom="zoom" @click="clicked">
                                <Marker :options="{ position: markers }" />
                            </GoogleMap>
                        </div>

                    </div>
                </div>
                <div class="modal-footer" v-if="!loading">
                    <button type="button" id="cierrame" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                    </button>
                    <button type="submit" class="btn btn-primary" @click="action">{{ (tipo == 'insert') ?  'Agregar' : 'Editar' }}</button>
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
import { GoogleMap, Marker } from "vue3-google-map";


export default{
    components:{
        'spinner-view' : Spinner,
        GoogleMap,
        Marker,
    },
    data(){
        return{
            img_icono: '',
            file_icono: '',
            file_portada: '',
            img_portada: '',
            load_image: false,
            load_image_portada: false,
            data:{},
            tipo: 'insert',
            loading: false,
            loading_data : false,
            markers : { lat : null , lng : null},
            center : {lat: 4.338292532471442, lng: -74.11473565004208},
            zoom : 5,
            selected_map : true
        }
    },
    methods:{
        setData(tipo, id){
            if(tipo == 'edit'){
                this.loading_data = true
                this.markers = { lat : null , lng : null}
                this.center = {lat: 4.338292532471442, lng: -74.11473565004208}
                this.zoom = 5
                this.getData(id)
                this.tipo = tipo
            }
            if(tipo == 'insert'){
                this.loading_data = true
                this.tipo = tipo
                this.resetData()
            }
        },
        getData(id){
            axios.get(`/ofertas-turisticas/getData/${id}`).then(res=>{
                this.data = res.data.proyect
                if(this.data.logo != null){
                    this.img_icono = `./public/logo/${this.data.logo}`
                    this.load_image = true
                }
                if(this.data.foto_portada != null){
                    this.img_portada = `./public/portada/${this.data.foto_portada}`
                    this.load_image_portada = true
                }
                if(res.data.proyect.lat != null && res.data.proyect.lng != null){
                    this.markers.lat = res.data.proyect.lat
                    this.markers.lng = res.data.proyect.lng
                    this.center.lat = res.data.proyect.lat
                    this.center.lng = res.data.proyect.lng
                    this.zoom = 15
                }
                this.loading_data = false
            }).catch(res=>{
                console.log(res.response)
            })
        },
        clicked(event){
            this.selected_map = false
            this.markers.lat = event.latLng.lat()
            this.markers.lng = event.latLng.lng()
            this.center.lat = event.latLng.lat()
            this.center.lng = event.latLng.lng()
            this.zoom = 15
            setTimeout(()=>{
                this.selected_map = true
            },200)
        },
        resetData(){
            this.data = {}
            this.img_icono = ''
            this.file_portada = ''
            this.load_image = false,
            this.load_image_portada = false
            this.file_icono = ''

            this.loading = false
            this.markers = { lat : null , lng : null}
            this.center = {lat: 4.338292532471442, lng: -74.11473565004208}
            this.zoom = 5
            setTimeout(() => {
                this.loading_data = false
            }, 200);
        },
        onLogoChange(e){
            let files = e.target.files[0]
            this.file_icono = files
            // Image Preview
            this.img_icono = URL.createObjectURL(files);
            this.load_image = false
            setTimeout(() => {
                this.load_image = true
            }, 200)
        },
        onPortadaChange(e){
            let files = e.target.files[0]
            this.file_portada = files

            // Image Preview
            this.img_portada = URL.createObjectURL(files);
            this.load_image_portada = false
            setTimeout(() => {
                this.load_image_portada = true
            }, 200)
        },
        action(){
            this.loading = true
            let data = new FormData();
            data.append("departamento", this.data.departamento)
            data.append("tipo_de_turismo", this.data.tipo_de_turismo)
            data.append("nombre", this.data.nombre)
            data.append("estado", this.data.estado)
            data.append("descripcion", this.data.descripcion)
            data.append("contacto", this.data.contacto)
            data.append("telefono", this.data.telefono)
            data.append("website", this.data.website)
            data.append("correo", this.data.correo)
            data.append("rnt", this.data.rnt)

            if(this.markers.lat != null && this.markers.lng){
                data.append("lat", this.markers.lat)
                data.append("lng", this.markers.lng)
            }
            if(this.file_icono != ''){
                data.append("logo", this.file_icono, this.file_icono.name)
            }

            if(this.file_portada != ''){
                data.append("foto_portada", this.file_portada, this.file_portada.name)
            }


            axios.post((this.tipo == 'insert') ? '/ofertas-turisticas/store' : `/ofertas-turisticas/update/${this.data.id}`, data).then(res=>{
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

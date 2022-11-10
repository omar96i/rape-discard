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
                        <div class="col-12 col-sm-7" data-bs-spy="scroll">
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="img-container">
                                            <img src="https://talent2win.com/wp-content/uploads/2021/09/LogoDefault.png" alt="" style="position: absolute; z-index: 1; border-radius: 50%; border: solid 0.2em; height: 50px;">
                                            <div class="col-12">
                                                <img src="https://pits-agroforestal.net/wp-content/themes/merlin/images/default-slider-image.png" alt="" style="width: 100%; height: 100px;">
                                            </div>
                                        </div>
                                        <h4 class="mt-2">Title</h4>
                                        <p>descripcion..</p>
                                        <div class="text-center mb-2">
                                            <a
                                                class="btn btn-primary me-1 btn-sm"
                                                data-bs-toggle="collapse"
                                                href="#collapseExample"
                                                role="button"
                                                aria-expanded="false"
                                                aria-controls="collapseExample"
                                                >
                                                Ver mas...
                                            </a>
                                        </div>
                                        <div class="collapse" id="collapseExample">
                                            <div class="d-grid d-sm-flex p-3 border">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Departamento:</h6>
                                                            Risaralda
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Tipo de turismo:</h6>
                                                            sin definir
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Nombre:</h6>
                                                            sin definir
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Estado:</h6>
                                                            sin definir
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Descripcion:</h6>
                                                            sin definir
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Contacto:</h6>
                                                            sin definir
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Telefono:</h6>
                                                            sin definir
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Website:</h6>
                                                            sin definir
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>Correo:</h6>
                                                            sin definir
                                                        </div>
                                                        <div class="col-12 col-sm-6 mb-4">
                                                            <h6>RNT:</h6>
                                                            sin definir
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

                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="img-container">
                                            <img src="https://talent2win.com/wp-content/uploads/2021/09/LogoDefault.png" alt="" style="position: absolute; z-index: 1; border-radius: 50%; border: solid 0.2em; height: 50px;">
                                            <div class="col-12">
                                                <img src="https://pits-agroforestal.net/wp-content/themes/merlin/images/default-slider-image.png" alt="" style="width: 100%; height: 100px;">
                                            </div>
                                        </div>
                                        <h4 class="mt-2">Title</h4>
                                        <p>descripcion..</p>
                                        <div class="text-center">
                                            <button class="btn btn-primary btn-sm">Ver mas...</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation" class="mt-3">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item prev">
                                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">1</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">2</a>
                                  </li>
                                  <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0);">3</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">4</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">5</a>
                                  </li>
                                  <li class="page-item next">
                                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                                  </li>
                                </ul>
                              </nav>
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
            departamento : ''
        }
    },
    methods:{
        setData(departamento){
            this.departamento = departamento
        }
    }
}
</script>

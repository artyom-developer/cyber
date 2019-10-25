<template>

  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">Administración equipos </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                       <label for="exampleFormControlSelect1">Usuario</label>
                       <select v-model="selectUser" class="form-control" id="exampleFormControlSelect1">

                         <option :value="usuario.id" v-for="usuario in JSON.parse(usuarios)">{{usuario.nombre}} {{usuario.apellido}}</option>

                       </select>

                       <div style="height:20px"/>

                       <div class="input-group input-group-lg">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg">Tiempo</span>
                          </div>
                          <input v-model="tiempo" type="number" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                        </div>
                     </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-primary" v-on:click="clickAdicionar()" data-dismiss="modal">Adicionar</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body row justify-content">

                  <!-- Split dropright button -->

                  <div v-for="equip in equipos" class="btn-group-vertical dropright col-md-4" style="margin-bottom:20px;">

                      <template v-if="equip.ids==1" >
                        <button type="button" class="btn btn-danger btn-block">
                          {{equip.nombre_pc}}
                        </button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{equip.nombre}} {{equip.apellido}}
                        </button>
                      </template>

                      <template v-else-if="equip.ids==2" >
                        <button type="button" class="btn btn-success btn-block">
                          {{equip.nombre_pc}}
                        </button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{equip.estado}}
                        </button>
                      </template>

                      <template v-else>
                        <button type="button" class="btn btn-secondary btn-block">
                          {{equip.nombre_pc}}
                        </button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{equip.estado}}
                        </button>
                      </template>

                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" v-on:click="selectEquip=equip.idpc" data-toggle="modal" data-target="#exampleModal">Adicionar</a>
                        <a class="dropdown-item" href="#" v-on:click="clickTerm(2,equip.idpc)">Terminar sesión</a>
                        <a class="dropdown-item" href="#" v-on:click="clickTerm(2,equip.idpc)">Reiniciar Terminal</a>
                        <a class="dropdown-item" href="#" v-on:click="clickTerm(3,equip.idpc)">Apagar Terminal</a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>

</template>

<script>
    export default {

      props: ['usuarios'],
        data(){
          return {
            equipos:[],
            selectEquip:0,
            selectUser:0,
            tiempo:0
          }
        },
        mounted() {
            console.log('Component mounted.')
            this.listarTerminal()
        },
        methods: {
          listarTerminal(){
              axios.get(Laravel.baseUrl+"api/Equipos/listar")
              .then(response=>{
                  this.equipos = response.data
              })
              .catch(error => {
                alert(error)
              })
          },
          clickTerm(status,equipo){

            console.log(equipo)

            const formData = new FormData();
            formData.append("statu",status);
            formData.append("equipo",equipo);
            axios.post(Laravel.baseUrl+"api/Equipos/status",formData)
            .then(response=>{
                this.listarTerminal()
            })
            .catch(error => {
              alert(error)
            })

          },
          clickAdicionar(){

            const formData = new FormData();
            formData.append("equipo",this.selectEquip);
            formData.append("usuario",this.selectUser);
            formData.append("tiempo",this.tiempo);

            axios.post(Laravel.baseUrl+"api/Equipos/iniciar",formData)
            .then(response=>{
                this.listarTerminal()
            })
            .catch(error => {
              alert(error)
            })

          }
      },
    }
</script>

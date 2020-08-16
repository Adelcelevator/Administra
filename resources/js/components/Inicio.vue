<template>
    <main>
        <h1>Bienvenido</h1>
        <br />
        <input @click="abrirModal('facturas','nueva')" class="btn btn-success" type="button" value="Nuevo" />
        <br />
        <br />
        <table border="1">
            <tr>
                <th>Factura</th>
                <th>Socio</th>
                <th class="espacio">Valor</th>
                <th class="espacio"> Estado</th>
                <th>Acciones</th>
            </tr>
            <tr v-for="item in lista" :key="item.id">
                <td v-text="item.IdFactura"></td>
                <td v-text="item.Socio"></td>
                <td v-text="item.Valor"></td>
                <td style="color:green !important;" v-if="item.Estado=='i'" >Por Pagar</td>
                <td style="color:red !important;" v-if="item.Estado=='p'" >Todo Pagado</td>
                <td>
                    <ul class="listaTabla">
                        <li><input class="btn btn-warning" @click="abrirModal('libro','actual',item)" type="submit" value="Editar" /></li>
                        <li>&nbsp;</li>
                        <li><input class="btn btn-success" @click="borrarL(item)" type="submit" value="Pagar" /></li>
                    </ul>
                </td>
            </tr>
        </table>
        <!--Aqui empieza el modal-->
        <div class="modal" :class="{'mostrar':modal}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" v-text="TituloM"></h5>
        <button type="button" class="close" @click="cerrarModal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ci Socio: &nbsp;<input type="text" v-model="Socio" v-if="boton==1" placeholder="Socio"/>
        <input type="text" v-model="Socio" v-if="boton==2" disabled placeholder="Socio"/>
        <br/>
        <br/>
        Valor: &nbsp;<input type="text" v-model="Valor" v-if="boton==1" placeholder="Valor"/>
        <input type="text" v-model="Valor" v-if="boton==2" disabled placeholder="Valor"/>
        <br/>
        <br/>
        Precio de Venta: &nbsp;<input type="text" v-model="PrecioVenta" placeholder="Stock"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" @click="cerrarModal">Cerrar</button>
        <button type="button" class="btn btn-primary" v-if="boton==1" @click="registrar()">Guardar</button>
        <button type="button" class="btn btn-primary" v-if="boton==2" @click="actualiLi()">Pagar</button>
      </div>
    </div>
  </div>
</div>
    </main>
</template>

<script>
export default {
    data() {
        return {
            modal:0,
            idFactura: 0,
            Valor:0,
            Socio:0
        };
    },
    methods: {
        registrar(){
            let cosas = this;
            axios.post('/factura/guardar', {
                idFactura:cosas.idFactura,
                Valor:cosas.Valor,
                Socio:cosas.Socio
        })
        .then(function (response) {
            alert("Se registro Correctamente");
            cosas.todo();
            cosas.categorias();
            cosas.cerrarModal();
            cosas.limpiar();
            console.log(response);
        })
        .catch(function (error) {
            alert("ERROR AL GUARDAR: "+error);
            console.log(error);
        });
        },
        actualiFac(){
            let libro=this;
            console.log(libro.id);
            axios.put('/factura/actuali', {
                idFactura:cosas.idFactura,
                Valor:cosas.Valor,
                Socio:cosas.Socio
                })
                .then(function (response) {
                   alert("Se Ha Actualizado Con exito");
                    libro.cerrarModal();
                })
                .catch(function (error) {
                    alert("Error Al Actualizar: "+error);
                    console.log(error);
                });
        },
        borrarL(libro){
            let cosas = this;
            if(confirm("Seguro que Desea Eliminar El Libro: "+libro.Titulo)){
                axios.put('/libro/borrar', {
                idFactura:cosas.idFactura
                })
                .then(function (response) {
                   alert("Se Ha Eliminado Con exito");
                    cosas.todo();
                    cosas.categorias();
                    console.log(response);
                })
                .catch(function (error) {
                    alert("Error Al Borrar: "+error);
                    console.log(error);
                });
            }
            
        }
        ,
        todo() {
            let esto = this;
            axios
                .get("/factura")
                .then(function(response) {
                    esto.lista=response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        categorias(){
            let esto = this;
            axios
                .get("/categoria")
                .then(function(response) {
                    esto.listaCat=response.data;
                    console.log(esto.listaCat);
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
    cerrarModal(){
                this.modal=0;
                this.TituloM='';
                this.limpiar();
            },
            limpiar(){
                this.modal=0;
                this.idFactura= 0;
                this.Valor=0;
                this.Socio=0;
            }
            ,
            abrirModal(modelo,accion,data=[]){
                switch (modelo) {
                    case "libro":
                        switch (accion) {
                            case 'nuevo':
                                this.modal=1;
                                break;
                            case 'actual':
                                this.modal=1;

                                break;
                                console.log("Opcion no Definida");
                                break;
                        }
                        break;
                
                    default:
                        console.log("Opcion no Definida");
                        break;
                }
            }
    },
    mounted() {
        console.log("Component mounted.");
        this.todo();
        this.categorias();
    }
};
</script>

<style>
.modal-content{
    width:100% !important;
    position: absolute !important;
}
    .mostrar{
        display:list-item !important;
        opacity:1 !important;
        position:absolute !important;
        background-color: rgba( 60, 236, 172 ,0.5) !important;
    }
</style>

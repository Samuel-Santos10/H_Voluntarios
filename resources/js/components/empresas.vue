
<template>
    <div class="container">
        <vue-resizable :width="500" :drag-selector="toolbar">
            <form v-on:submit.prevent="guardarEmpresa" v-on:reset="limpiar">
                <div class="card border-dark mb-3">
                    <div class="card-header bg-dark text-white toolbar">
                        <div class="row">
                            <div class="col-1">
                                <img src="" alt="Empresas">
                            </div>
                            <div class="col-10">
                                <h5>REGISTRO DE EMPRESAS</h5>
                            </div>
                            <div class="col-1">
                                <button type="button" @click="cerrar" class="btn-close bg-white" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-dark">
                        <div class="row p-2">
                            <div class="col-sm">CODIGO:</div>
                            <div class="col-sm">
                                <input v-model="empresa.codigo" required type="text" class="form-control form-control-sm" >
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm">NOMBRE ENTIDAD: </div>
                            <div class="col-sm">
                                <input v-model="empresa.nombre_entidad" required pattern="[A-ZÑña-z0-9, ]{5,65}" type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm">MISION: </div>
                            <div class="col-sm">
                                <input v-model="empresa.mision" required  type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm">PAIS: </div>
                            <div class="col-sm">
                                <input v-model="empresa.pais" required  type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm">DIRECCION: </div>
                            <div class="col-sm">
                                <input v-model="empresa.direccion" required  type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm">EMAIL: </div>
                            <div class="col-sm">
                                <input v-model="empresa.email" required  type="email" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm">NOMBRE ENCARGADO: </div>
                            <div class="col-sm">
                                <input v-model="empresa.nombre_encargado" required type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="row p-2">
                            <div class="col-sm text-center">
                                <input type="submit" value="Guardar" class="btn btn-dark">
                                <input type="reset" value="Limpiar" class="btn btn-warning">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm text-center">
                                <mensajes-component :msg="msg" :error="error" v-show="status" ></mensajes-component>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </vue-resizable>
        <vue-resizable :width="900" :drag-selector="toolbar">
            <div class="card border-dark mb-3">
                <div class="card-header bg-dark text-white toolbar">
                    <div class="row">
                        <div class="col-1">
                            <img src="" alt="Empresas">
                        </div>
                        <div class="col-10">
                            <h5>EMPRESAS REGISTRADOS</h5>
                        </div>
                        <div class="col-1">
                            <button type="button" @click="cerrar" class="btn-close bg-white" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <td colspan="5">
                                    <input v-model="buscar" v-on:keyup="buscandoEmpresa" type="text" class="form-control form-contro-sm" placeholder="Buscar empresas">
                                </td>
                            </tr>
                            <tr>
                                <th>CODIGO</th>
                                <th>NOMBRE ENTIDAD</th>
                                <th>MISION</th>
                                <th>PAIS</th>
                                <th>DIRECCION</th>
                                <th>EMAIL</th>
                                <th>NOMBRE ENCARGADO</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="pro in empresas" v-bind:key="pro.idEmpresa" v-on:click="mostrarEmpresa(pro)">
                                <td>{{ pro.codigo }}</td>
                                <td>{{ pro.nombre_entidad }}</td>
                                <td>{{ pro.mision }}</td>
                                <td>{{ pro.pais }}</td>
                                <td>{{ pro.direccion }}</td>
                                <td>{{ pro.email }}</td>
                                <td>{{ pro.nombre_encargado }}</td>
                                <td>
                                    <a @click.stop="eliminarEmpresa(pro)" class="btn btn-danger">DEL</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </vue-resizable>
    </div>
</template>

<script> 
//https://github.com/nikitasnv/vue-resizable
    Vue.component('vue-resizable',VueResizable.default);
    export default {
        props:['form'],
        data(){
            return {
                toolbar: '.toolbar',
                accion : 'nuevo',
                msg    : '',
                status : false,
                error  : false,
                buscar : "",
                empresa:{
                    id        : 0,
                    idEmpresa : 0,
                    codigo    : '',
                    nombre_entidad    : '',
                    mision : '',
                    pais  : '',
                    direccion    : '',
                    email : '',
                    nombre_encargado  : '',
                },
                empresas:[]
            }
        },
        methods:{
            buscandoEmpresa(){
                this.empresas = this.empresas.filter((element,index,empresas) => element.nombre_entidad.toUpperCase().indexOf(this.buscar.toUpperCase())>=0 || element.codigo.toUpperCase().indexOf(this.buscar.toUpperCase())>=0 || element.mision.toUpperCase().indexOf(this.buscar.toUpperCase())>=0 || element.pais.toUpperCase().indexOf(this.buscar.toUpperCase())>=0 || element.nombre_encargado.toUpperCase().indexOf(this.buscar.toUpperCase())>=0 || element.direccion.toUpperCase().indexOf(this.buscar.toUpperCase())>=0);
                if( this.buscar.length<=0){
                    this.obtenerDatos();
                }
            },
            cerrar(){
                this.form['empresa'].mostrar=false;
            },
            buscandoCodigoEmpresa(store){
                let buscarCodigo = new Promise( (resolver,rechazar)=>{
                    let index = store.index("codigo"),
                        data = index.get(this.empresa.codigo);
                    data.onsuccess=evt=>{
                        resolver(data);
                    };
                    data.onerror=evt=>{
                        rechazar(data);
                    };
                });
                return buscarCodigo;
            },
            async guardarEmpresa(){
                /**
                 * webSQL -> DB Relacional en el navegador
                 * localStorage -> BD NOSQL clave/valor
                 * indexedDB -> BD NOSQL clave/valor
                 */
                let store = this.abrirStore("tblempresas",'readwrite'),
                    duplicado = false;
                if( this.accion=='nuevo' ){
                    this.empresa.idEmpresa = generarIdUnicoDesdeFecha();
                    
                    let data = await this.buscandoCodigoEmpresa(store);
                    duplicado = data.result!=undefined;
                }
                if( duplicado==false){
                    if( this.accion=='nuevo' ){
                        const resp = await axios.post('empresas',this.empresa);
                        this.empresa.id = resp.data;
                    } else {
                        const resp = await axios.put(`empresas/${this.empresa.id}`,this.empresa);
                    }
                    let tabla = this.abrirStore("tblempresas",'readwrite'),
                        query = tabla.put(this.empresa);
                    query.onsuccess=event=>{
                        this.obtenerDatos();
                        this.limpiar();
                        
                        this.mostrarMsg('Registro se guardo con exito',false);
                    };
                    query.onerror=event=>{
                        this.mostrarMsg('Error al guardar el registro',true);
                        console.log( event );
                    };
                } else{
                    this.mostrarMsg('Codigo de empresa duplicado',true);
                }
            },
            mostrarMsg(msg, error){
                this.status = true;
                this.msg = msg;
                this.error = error;
                this.quitarMsg(3);
            },
            quitarMsg(time){
                setTimeout(()=>{
                    this.status=false;
                    this.msg = '';
                    this.error = false;
                }, time*1000);
            },
            obtenerDatos(){
                let store = this.abrirStore('tblempresas','readonly'),
                    data = store.getAll();
                data.onsuccess=async resp=>{
                    if( data.result.length===0 ){
                        const empresas = await axios.get('empresas');
                        this.empresas = empresas.data;

                        let tabla = this.abrirStore('tblempresas','readwrite');
                        this.empresas.forEach(element => {
                            let empresa = {
                                id        : element.id,
                                idEmpresa : element.idEmpresa,
                                codigo    : element.codigo,
                                nombre_entidad    : element.nombre_entidad,
                                mision : element.mision,
                                pais  : element.pais,
                                direccion    : element.direccion,
                                email : element.email,
                                nombre_encargado  : element.nombre_encargado,
                            };
                            tabla.put(empresa);
                        });
                    } else {
                        this.empresas = data.result;
                    }
                };
            },
            mostrarEmpresa(pro){
                this.empresa = pro;
                this.accion='modificar';
            },
            limpiar(){
                this.accion='nuevo';
                this.empresa.idEmpresa='';
                this.empresa.codigo='';
                this.empresa.nombre_entidad='';
                this.empresa.mision='';
                this.empresa.pais='';
                this.empresa.direccion='';
                this.empresa.email='';
                this.empresa.nombre_encargado='';
                this.obtenerDatos();
            },
            async eliminarEmpresa(pro){
                if( confirm(`Esta seguro que desea eliminar el empresa:  ${pro.nombre_entidad}`) ){
                    const data = await axios.delete(`empresas/${pro.id}`);
                    
                    let store = this.abrirStore("tblempresas",'readwrite'),
                        req = store.delete(pro.idEmpresa);
                    req.onsuccess=resp=>{
                        this.mostrarMsg('Registro eliminado con exito',true);
                        this.obtenerDatos();
                    };
                    req.onerror=resp=>{
                        this.mostrarMsg('Error al eliminar el registro',true);
                        console.log( resp );
                    };
                }
            },
            abrirStore(store,modo){
                let tx = db.transaction(store,modo);
                return tx.objectStore(store);
            }
        },
        created(){
            //this.obtenerDatos();
        },
    }
</script>

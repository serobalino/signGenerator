<template>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Generador de Firmas</h1>
            <p class="lead">Completa el formulario</p>
            <hr class="my-4">
            <p>Los campos con asterisco son obligatorios</p>
            <form @submit.prevent="validar">
                <fieldset :disabled="cargando">
                    <div class="form-group">
                        <label><span>*</span>Nombre</label>
                        <input type="text" v-model="formulario.nombre" name="nombre" class="form-control" placeholder="Carlos" v-validate="{required:true,alpha:true}"/>
                        <small class="form-text text-danger">{{ errors.first('nombre') }}</small>
                    </div>
                    <div class="form-group">
                        <label><span>*</span>Apellido</label>
                        <input type="text" v-model="formulario.apellido" name="apellido" class="form-control" placeholder="Rosales" v-validate="{required:true,alpha:true}"/>
                        <small class="form-text text-danger">{{ errors.first('apellido') }}</small>
                    </div>
                    <div class="form-group">
                        <label><span>*</span>Celular</label>
                        <input type="text" v-model="formulario.celular" name="celular" class="form-control" placeholder="0998978458" v-validate="{required:true,regex: /^[0][8-9][0-9]{7}[0-9]/,max:10}"/>
                        <small class="form-text text-danger">{{ errors.first('celular') }}</small>
                    </div>
                    <div class="form-group">
                        <label><span>*</span>Correo Electónico</label>
                        <input type="email" v-model="formulario.email" name="email" class="form-control" placeholder="crosales@google.com" v-validate="{required:true}"/>
                        <small class="form-text text-danger">{{ errors.first('email') }}</small>
                    </div>
                    <div class="form-group">
                        <label>Extensión telefónica</label>
                        <input type="text" v-model="formulario['extención']" name="extensión" class="form-control" placeholder="1020" v-validate="{digits:true}" />
                        <small class="form-text text-danger">{{ errors.first('extensión') }}</small>
                    </div>
                    <div class="form-group">
                        <label><span>*</span>Empresa</label>
                        <select class="form-control" v-model="empresa" v-validate="{required:true}" name="empresa">
                            <option :value="null" disabled>Selecciona</option>
                            <option :value="item" v-for="item in empresas" :key="item.id_em">{{item.nombre_em}}</option>
                        </select>
                        <small class="form-text text-danger">{{ errors.first('empresa') }}</small>
                    </div>
                    <div class="form-group">
                        <label><span>*</span>Área</label>
                        <select class="form-control" v-model="departamento" v-validate="{required:true}" name="área">
                            <option :value="null" disabled>Selecciona</option>
                            <option :value="item" v-for="item in departamentos" :key="item.id_de">{{item.titulo_de}}</option>
                        </select>
                        <small class="form-text text-danger">{{ errors.first('área') }}</small>
                    </div>
                    <div class="form-group">
                        <label><span>*</span>Cargo</label>
                        <select class="form-control" v-model="formulario.cargo" v-validate="{required:true}" name="cargo">
                            <option :value="null" disabled>Selecciona</option>
                            <option :value="item.id_ca" v-for="item in cargos" :key="item.id_ca">{{item.nombre_ca}}</option>
                        </select>
                        <small class="form-text text-danger">{{ errors.first('cargo') }}</small>
                    </div>
                    <div class="form-group">
                        <label>Skype(usuario)</label>
                        <input type="text" v-model="formulario.skype" name="skype" class="form-control" placeholder="carlos.rosales" v-validate="{regex:/^[a-z][a-z0-9\.,\-_]{5,31}$/i}" />
                        <small class="form-text text-danger">{{ errors.first('skype') }}</small>
                    </div>
                    <div class="form-group">
                        <label>Github (link)</label>
                        <input type="text" v-model="formulario.github" name="github" class="form-control" placeholder="https://github.com/crosales" v-validate="{url:true}"  />
                        <small class="form-text text-danger">{{ errors.first('github') }}</small>
                    </div>
                    <div class="form-group">
                        <label>LinkedIn (link)</label>
                        <input type="text" v-model="formulario.linkedin" name="linkedin" class="form-control" placeholder="https://ec.linkedin.com/in/ricardo-rosales-18317123" v-validate="{url:true}" />
                        <small class="form-text text-danger">{{ errors.first('linkedin') }}</small>
                    </div>
                    <button type="submit" class="btn btn-primary" >Generar</button>
                    <pre class="text-danger" v-if="cargando">{{texto}}</pre>
                </fieldset>
            </form>
        </div>
    </div>
</template>

<script>
    import es from 'vee-validate/dist/locale/es';
    import VeeValidate, { Validator } from 'vee-validate';
    import servicios from "../servicios";
    Vue.use(VeeValidate,{
        events: 'change|blur'
    });
    Validator.localize('es', es);
    export default {
        name: "formulario",
        data:()=>({
            empresas:[],
            departamentos:[],
            cargos:[],

            empresa:null,
            departamento:null,
            cargo:null,
            formulario:{
                nombre:null,
                apellido:null,
                celular:null,
                'extención':null,
                email:null,
                skype:null,
                linkedin:null,
                github:null,
                cargo:null,
            },
            cargando:false,
            texto:'Procesando',
        }),
        watch:{
            empresa:function(){
                this.cargarDepartamentos();
            },
            departamento:function(){
                this.cargarCargos()
            }
        },
        methods:{
            cargarEmpresas:function(){
                servicios.empresas().then(response=>{
                    this.empresas=response.data;
                });
            },
            cargarDepartamentos:function(){
                servicios.departamentos(this.empresa).then(response=>{
                    this.departamentos=response.data;
                });
            },
            cargarCargos:function(){
                servicios.cargos(this.departamento).then(response=>{
                    this.cargos=response.data;
                });
            },
            validar:function(){
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        this.cargando=true;
                        servicios.guardarRegistro(this.formulario).then(response=>{
                            this.cargando=false;
                            window.location.href = response.data.data;
                        });
                    }
                });
            }
        },
        mounted() {
            this.cargarEmpresas();
        }
    }
</script>

<style scoped>
    .form-group>label>span{
        content: "*";
        color: red;
    }
</style>

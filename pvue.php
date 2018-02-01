<!DOCTYPE html>
<html>
<head>
    <title>Vue Axios Oracle uno</title>
   
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
<div id="main" class="container container-info" >
<h5 style="color: #ec33ff">Oracle william Contreritas Moncadita</h5>
<br>
<div class="panel panel-primary" >
 <form class="form-inline" >
  <div class="form-group">
    <label class="control-label col-sm-2"  for="nombre" >Nombre:</label>
      <div class="col-sm-10">
    <input type="text" class="form-control" v-model="snombre" >
     </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="telefono" >Telefono:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" v-model="stelefono">
  </div>
   </div>
    <div class="form-group">
    <label  class="control-label col-sm-2" for="Direccion" >Direccion:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" v-model="sdireccion">
  </div>
    </div>
     <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 row">
      <div class="btn-group">
  <button type="submit" @click="saveForm" class="btn btn-info " v-if="!activado" >Grabar</button>
    <button type="submit" class="btn btn-success  btn-xs" v-if="activado" >Actualiza socio</button>
      <button type="submit" class="btn btn-danger btn-xs" v-if="activado" >volver a grabar</button>
        </div>
  </div>
    </div>
</form> 
</div>


 <table class="table table-bordered table-responsive table-striped table-hover" style="margin: 0 auto;
    width: 65%;" >
                      <tr>
                          <th>ID</th>
                          <th>NOMBRE</th>
                           <th>TELEFONO</th> 
                          <th>DIRECCION</th>
                         
                          <th>ACCIONES</th> 
                     </tr>
                     <tr v-for="(x, index) in socios">
                          <td>{{ x.ID }}</td>
                          <td>{{ x.NOMBRE}}</td>
                          <td>{{ x.TELEFONO}}</td>
                          <td>{{ x.DIRECCION}}</td>
                        
                      <td>
                    
                       <button   class="btn btn-primary btn-xs" @click="showsocio(x.NOMBRE,x.TELEFONO,x.DIRECCION
                       )">Editar</button>
                       <button  class="btn btn-danger btn-xs" @click="">Eliminar</button>
                      </td>
                   </tr>


</table>

</div>
<script type="text/javascript" src="./node_modules/vue/dist/vue.js"></script>
<script type="text/javascript" src="./node_modules/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script>


 new Vue({


  
  el: '#main',
  data: {
                activado:false,
                   socios: [],
                 snombre: '',
               stelefono: '',
              sdireccion: '',
             
 

  },
created: function(){
    this.getAllMembers();
  },

  methods:{
        getAllMembers: function(){
        var vm = this
        axios.get('oracle2.php')
         .then(function (response) {
            vm.socios = response.data



         });
      
           },

          saveForm : function() {
                
                axios.post('insertarsocio.php', 
           {
            'snombre': this.snombre,
           'stelefono': this.stelefono,
           'sdireccion': this.sdireccion
           }

                    )
                    .then(function (resp) {
                

                       this.reset();
                    

                    }

                    )
                    .catch(function (resp) {
                        console.log(resp);
                        alert("no tiene perimiso crear socio");
                    });
            },

            reset : function()
            {
               this.snombre = '';
               this.stelefono = '';
               this.sdireccion = '';
            },
            editForm : function()
            {
                     this.activado=true;
         
       
              axios.get('showsocio.php'+numero).then(response => {
              this.snombre= response.data.NOMBRE;
              this.stelefono= response.data.TELEFONO;
              this.sdireccion= response.data.DIRECCION;
              
            });

            },
            cancelarForm  : function()
            {
              this.activado=false;
            },
           showsocio(snombre,stelefono,sdireccion){
     
   this.activado=true;

      
              this.snombre= snombre;
              this.stelefono= stelefono;
              this.sdireccion= sdireccion;
              
            

            
           }


  },



});
     



   
</script>
</body>
</html>
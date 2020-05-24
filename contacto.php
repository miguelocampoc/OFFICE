<?php include 'header.php'; ?>
<?php include 'file.php'; ?>


<body>
<?php include 'nav.php'?>
<div class="p-2 mb-2 bg-dark ">  </div>

  <script src="validar.js"></script>
  <div id="responsive">
<div class="pb-5"> </div>
<div class="pb-3"> </div>
</div>
      <div class="container-fluid">
             <?php include 'encabezado.php'; ?>

             <div class="row py-3" >
                        <div class="col-md-2">
                        </div>                        
                        <div class="col-md-8 bg-primary ">
                      
                        </div>
                      </div>

                
                  <div class="row pt-4 pb-4"style="background-color:#D8E0DD" >

                               <div class="col-md-2">
                                  </div>  
                                  <div class="col-md-8" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgrey; background: #FFF7F7">
                                  <h5 >Contactenos</h5>
                                      <form  action="validar.php" method="POST" >
                                             <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                    <p style="font-size:20px;">Nombre</p>
                                                    <input type="text"   name="nombre"  class="form-control " placeholder="Ingrese su Nombre"  >
                                                  </div>
                                                   
                                                </div>
                                                <div class="col-md-6">
                                                           <div class="form-group">
                                                            <p style="font-size:20px;">Email</p>
                                                            <input type="email" name="email"   class="form-control " placeholder="Ingrese su Email" >
                                                          </div>
                                                </div>
                                               
            
                                             </div> 

                                             <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                            <p style="font-size:20px;">Telefono</p>
                                                            <input type="text"   name="contacto"class="form-control  " placeholder="Ingrese su celular o telefono" >
                                                          </div>
                                                </div>
                                                <div class="col-md-6">
                                                              <div class="form-group">
                                                                <p style="font-size:20px;">Motivo del contacto</p>
                                                                <input type="text"  name="asunto" class="form-control " placeholder="Ingrese su motivo de contacto" >
                                          </div>
                                                </div>
                                             </div>

                                              <div class="row " >
                                                <div class="col-md-6">
                                                       <div class="form-group">
                                                        <p style="font-size:20px;">Mensaje</p>
                                                        
                                                          <textarea  name="mensaje" class="form-control form-control" >
                                                          </textarea>
                                                         </div>
                                                         <button type="submit" class="btn btn-primary btn-block">Enviar
                                                        </button>

                                                </div>
                                                        <div class="col-md-6">
                                                              <div class="text-center">
                                                                    <img src="<?php echo $logo?>" class="  py-5 text-center" style="opacity:0.5">
                                                              </div>
                                                        </div>

                                             </div>
                                        </form>
                                              <br>
                                             </div>       
                                        <br>
                                 
                                    <div class="col-md-2" style="background-color:#D8E0DD">

                                  </div>  
                                    

                  </div>




       
<?php include 'footer.php' ?>

</div> 
</body>

</html>
<?php include 'header.php'; ?>
<?php include 'file.php'; ?>


<body>
<div id="nav">
<?php include 'nav.php'?>
</div>    
<div class="p-2 mb-2 bg-dark ">  </div>

  <script src="validar.js"></script>

      <div class="container-fluid">
             <?php include 'encabezado.php'; ?>

             <div class="row py-3" >
                        <div class="col-md-2">
                        </div>                        
                        <div class="col-md-8 bg-primary ">
                        <ul id="button" class="nav">
                        <a href="index.php">
                       <li class="nav-item active " > <i class="fa fa-home" aria-hidden="true"></i>
                        INICIO</li>
                       </a>
                       <a href="nosotros.php">
                       <li class="nosotros" > <i class="fa fa-users" aria-hidden="true"></i>
                        NOSOTROS</li>
                       </a>
                       <a href="mision.php">
                       <li class="mision"> <i class="fa fa-spinner" aria-hidden="true"></i>
                        MISION</li>
                       </a>
                       <a href="vision.php">
                       <li class="vision"> <i class="fa fa-eye" aria-hidden="true"></i>
                        VISION</li>
                       </a>
                         <a href="contacto.php">
                       <li class="contactos" style=" background-color:#AFAFF1;"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    CONTACTENOS</li>
                       </a>
               

                       </ul>
                        </div>
                      </div>

                
                  <div class="row " >

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

                                              <div class="row">
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
                                 
                                    <div class="col-md-2">

                                  </div>  
                                    

                  </div>
<br>



       
<?php include 'footer.php' ?>

</div> 
</body>

</html>
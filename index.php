<?php include 'header.php'; ?>
<?php include 'file.php'; ?>


<body>  
<div id="nav">
<?php include 'nav.php'?>
</div>  
<div class="p-2 mb-2 bg-dark ">  </div>

      <div class="container-fluid">
         <div id="encabezado">
             <?php include 'encabezado.php'; ?>
              </div>

                <div class="row py-3" >
                        <div class="col-md-2">
                        </div>                        
                        <div class="col-md-8 bg-primary ">
                        <ul id="button" class="nav">
                        <a href="index.php">
                       <li class="nav-item active " style=" background-color:#AFAFF1;" > <i class="fa fa-home" aria-hidden="true"></i>
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
                       <li class="contactos" ><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    CONTACTENOS</li>
                       </a>
               

                       </ul>
               
                        </div>
                        <div class="col-md-2">
                     </div>
                </div>
                  <div class="row " >
                     <div class="col-md-2">
                        </div>  
                      <div class="col-md-8">
                      <?php include 'banner.php'; ?>

                        </div>  
                          <div class="col-md-2">

                        </div>  
                          

                  </div>




        <div class="row  " style="background-color:#D0E7E7">
                   <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                <P class="p-2 mb-2 bg-dark text-white text-center"> SERVICIOS </p>

                      <?php include 'servicios.php'?> 
                      <br>
                     </div>
                    <div class="col-md-2">
                    </div>
        </div>
         <?php include 'footer.php' ?>
</div> 

</body>

</html>
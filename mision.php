<?php include 'header.php'; ?>
<?php include 'file.php'; ?>
<body>
<div id="nav">
<?php include 'nav.php'?>
</div>      
<div class="p-2 mb-2 bg-dark ">  </div>

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
                       <li class="mision"  style=" background-color:#AFAFF1;"> <i class="fa fa-spinner" aria-hidden="true"></i>
                        MISION</li>
                       </a>
                       <a href="vision.php">
                       <li class="vision"> <i class="fa fa-eye" aria-hidden="true"></i>
                        VISION</li>
                       </a>
                         <a href="contacto.php">
                       <li class="contactos"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    CONTACTENOS</li>
                       </a>
               

                       </ul>
                        </div>
                      </div>
        <div  class="row" style="background-color:#D0E7E7" >

                        <div class="col-md-2">
                        </div>  
                        <div class="col-md-8">
                        <br>
                               <div class="row bg-light">
                                          <div class="col-md-8" style=" padding:1.2%">
                                          <P class="p-2 mb-2 bg-dark text-white text-center"> MISION </p>

                                           <p style="  font-size: 13.5px; font-weight: normal; "> 
                                           
                                           OFFICESERVICES M&C S.A.S tiene como misión única y exclusiva, ofrecer al
                                       sector empresarial, contratista e independiente, las mejores alternativas para la
                                          protección en seguros generales de salud, pensiones, riesgos profesionales, cajas
                                         de compensación y salud ocupacional, facilitando las afiliaciones y pagos de
                                          seguridad social integral con varios de nuestros servicios complementarios para
                                            garantizar el bienestar a nuestros clientes a través de un equipo humano
                                            altamente calificado que se caracteriza por su profesionalismo, compromiso,
                                             honradez y cumplimiento.
                                             </p>
                                            </div>
                                           <div class="col-md-4 text-center">
                                           <br><br>
                                           <img  src="<?php echo $mision?>" width="201px" heiht="201px" style="opacity:0.4;">
                                           </div>  
                                 </div>  
                                 <br>
                        </div>  
                        

                        <div class="col-md-2">
                        </div>
        </div>
               <?php include 'footer.php'; ?>
</div>
<script>
   
 
</script>   
</body>

</html>
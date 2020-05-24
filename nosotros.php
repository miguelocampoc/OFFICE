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
                       <li class="nav-item active "> <i class="fa fa-home" aria-hidden="true"></i>
                        INICIO</li>
                       </a>
                       <a href="nosotros.php">
                       <li class="nosotros"  style=" background-color:#AFAFF1;" > <i class="fa fa-users" aria-hidden="true"></i>
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
                                          <div class="col-md-8" style=" padding:1.5%">
                                          <P class="p-2 mb-2 bg-dark text-white text-center"> NOSOTROS </p>

                                           <p style="  font-size: 13.5px; font-weight: normal; "> 
                                           
                                               OFFICESERVICEM&C es una empresa que presta servicios de tramites y asesorias en temas de salud. Se caracteriza por ser una entidad solidaria y especializada en prestar servicios integrales y empresariales, con el fin de mejorar la calidad de vida de su equipo de trabajo y familias en general. 
                                                Nuestra propuesta va enfocada para que por intermedio de OFFICESERVICES M&C S.A.S ingresen como asociados sus colaboradores y poder minimizar su carga prestacional. 
                                               <br><br>
                                               En primera instancia, nos permitimos dar a conocer de manera breve, pero muy precisa la imagen institucional de OFFICESERVICES M&C S.A.S con lo cual queremos garantizar la seguridad y seriedad frente a los servicios ofrecidos, servicios que tienen el aval de los organismos de control, nuestros clientes y nuestros usuarios finales: los trabajadores-asociados. 
                                               Igualmente estamos acogidos a la LEY 1429 exentos de pago de aportes parafiscales autorizados por el ministerio de la protección social.</p>
                                            </div>
                                           <div class="col-md-4 text-center">
                                           <br><br><br>

                                           <img  src="<?php echo $logo?>" width="254.4px" heiht="600px" style="opacity:0.5;">
                                           </div>  
                                 </div>  
                                 <br>
                        </div>  
                        <div class="col-md-2">
                        
                        </div>
        </div>

         <?php include  'footer.php'; ?>
</div>
<script>
   
 
</script>   
</body>

</html>
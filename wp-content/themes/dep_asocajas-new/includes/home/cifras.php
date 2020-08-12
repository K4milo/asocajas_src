<?php
/*

titulo_cifras
cifras

*/

$titulo=get_field('titulo_cifras');
$cifras=get_field('cifras');
 ?>
 <section id="cifras">
   <div class="cifras_titulo container">
     <div>
       <h2><?php echo $titulo; ?></h2>
      </div>
     <div class="cifras__wrapper row">

       <?php while(have_rows('cifras')): the_row();
        $icono=get_sub_field('icono');
        $cifra=get_sub_field('cifra');
        $info=get_sub_field('info');
       ?>

         <div class="cifras__wrapper-item  col-xs-6 col-md-3 col-lg-3 ">
           <div>
            <img src="<?php echo $icono; ?>" alt="">
<<<<<<< HEAD
            <h1 class="counter"><?php echo $cifra; ?></h1>
=======
            <h1><span class="counter"><?php echo $cifra; ?></span></h1>
>>>>>>> 0512caf5b594eeeaed7cb568ef857236577b9699
            <p><?php echo $info; ?></p>
           </div>
         </div>
       <?php endwhile;?>
     </div>
   </div>
 </section>

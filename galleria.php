<div class="flexGalleria">
 
 <?php 
 // Image extensions
 $image_extensions = array("png","jpg","jpeg","gif");

 // Target directory
 $dir = 'uploads/';
 if (is_dir($dir)){

  if ($dh = opendir($dir)){
   $count = 1;

   // Read files
   while (($file = readdir($dh)) !== false){

    if($file != '' && $file != '.' && $file != '..'){

     // Thumbnail image path
     $thumbnail_path = "uploads/".$file;

     // Image path
     $image_path = "uploads/".$file;

     $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
     $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

     // Check its not folder and it is image file
     if(!is_dir($image_path) && 
        in_array($thumbnail_ext,$image_extensions) && 
        in_array($image_ext,$image_extensions)){
  ?>
  
       <!-- Image -->
       <div id="flexKuva">
       <a href="<?php echo $image_path; ?>">
        <img src="<?php echo $thumbnail_path; ?>" alt="" title="<?php echo $file ?>"/>
       </a>
       <p><strong>Tiedoston nimi:</strong></p>
       <p><?php echo $file ?><p>
        </div>
       <!-- --- -->
       <?php

       // Break
       if( $count%4 == 0){
       ?>
         <div class="clear"></div>
       <?php 
       }
       $count++;
      }
     }
 
    }
    closedir($dh);
   }
  }
 ?>
 </div>
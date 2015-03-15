<div class="container report">
  <h2 class="text-center">Donations List</h2>
  <hr/>
  <?php 
  if(!empty($methodsList)){?>
  <div id="accordion">  
     <?php foreach($methodsList as $r): ?>        
       <h2><?php echo $r->name; echo "<a class='float-right'>$r->created_at</a>";?></h2>       
       <div class="accordion_sub"> <p ><?php echo $r->description; ?></p> 
       <a class="btn btn-default float-right" href="<?php echo base_url();?>method/show_full_method/<?php echo $r->id;?>" role="button"><i class="glyphicon glyphicon-search padding-7px"> </i>Full Method</a> </div>              
   <?php endforeach; ?>
   </div>
   <?php } else{ 
   echo "<h3>No Methods Yet!</h3>"; 
   } ?>
   <hr/>
   <div class='btn-group btn-group-lg' >
   <a class='btn btn-default' role='button' href="<?php echo base_url();?>method/form_method">New Method</a>
   </div>
   
<hr/>
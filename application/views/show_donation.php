<div class="container report">
  <h2 class="text-center">Donations List</h2>
  <hr/>
  <?php 
  if(!empty($donationsList)){?>
  <div id="accordion">  
     <?php foreach($donationsList as $r): ?>        
       <h2><?php echo "(".$r->created_at.") : "; echo $r->description; echo "<a class='float-right'>$r->current_state</a>";?></h2> 
       
       <div class="accordion_sub"> <p ><?php echo $r->observations; ?></p> </div>       
        
   <?php endforeach; ?>
   </div>
   <?php } else{ 
   echo "<h3>No Donations Yet!</h3>"; 
   } ?>
   <hr/>
   <div class='btn-group btn-group-lg' >
   <a class='btn btn-default' role='button' href="<?php echo base_url();?>donation/form_donation">New Donation</a>
   </div>
   <div class='btn-group btn-group-lg float-right' >
   <a class='btn btn-default' role='button' href="<?php echo base_url();?>donation/submit_donations">Donations Received</a>
   </div>
   
<hr/>
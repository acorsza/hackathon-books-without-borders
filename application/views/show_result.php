<div class="container report">
  <h2 class="text-center">Reports List</h2>
  <hr/>
  <?php 
  if(!empty($resultsList)){?>
  <div id="accordion">  
     <?php foreach($resultsList as $r): ?>       
       <h2><?php echo $r->description; ?></h2> 
       <div class="accordion_sub"> <p ><?php echo $r->about; ?></p> 
       <p><a class="btn btn-default float-right" href="<?php echo base_url();?>result/show_full_report/<?php echo "$r->id"?>" role="button"><i class="glyphicon glyphicon-search padding-7px"></i>View Full Report  
       </a></p>
       </div>
        
   <?php endforeach; ?>
   </div>
   <?php } else{ 
   echo "<h3>No Reports Yet!</h3>"; 
   } ?>
   <hr/>
   <?php if($type == "T") {?>
   <div>
   <a class='btn btn-default' role='button' href="<?php echo base_url();?>result/form_result">New Report</a>
   </div>
   <?php } ?>
<hr/>
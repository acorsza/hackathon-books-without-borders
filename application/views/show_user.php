<div class="container user">
<br/><br/><br/>
  <h2 class="text-center">Donors List</h2>
  <hr/>
  <?php 
  if(!empty($donnorsList)){?>
  <div id="accordion1">  
     <?php foreach($donnorsList as $r): ?>       
       <h2><?php echo $r->name; echo "<a class='float-right'>$r->country</a>";?></h2> 
       <div class="accordion_sub2"> <b>Email:</b> <?php echo $r->email; ?> , <b>Telephone:</b> <?php echo $r->phone1; ?> , <b>Mobile:</b> <?php echo $r->phone2; ?> , <b>Since:</b> <?php echo $r->since; ?></div>  
        
   <?php endforeach; } ?>
   </div>

   <h2 class="text-center">Teachers List</h2>
  <hr/>
  <?php 
  if(!empty($teachersList)){?>
  <div id="accordion2">  
     <?php foreach($teachersList as $r): ?>       
       <h2><?php echo $r->name; echo "<a class='float-right'>$r->country</a>";?></h2> 
       <div class="accordion_sub2">  <b>Email:</b> <?php echo $r->email; ?> , <b>Telephone:</b> <?php echo $r->phone1; ?> , <b>Mobile:</b> <?php echo $r->phone2; ?></div>  
        
   <?php endforeach; } ?>
   </div>

   <h2 class="text-center">Staffs List</h2>
  <hr/>
  <?php 
  if(!empty($staffsList)){?>
  <div id="accordion3">  
     <?php foreach($staffsList as $r): ?>       
       <h2><?php echo $r->name; echo "<a class='float-right'>$r->country</a>";?></h2> 
       <div class="accordion_sub2">  <b>Email:</b> <?php echo $r->email; ?> , <b>Telephone:</b> <?php echo $r->phone1; ?> , <b>Mobile:</b> <?php echo $r->phone2; ?></div>     
        
   <?php endforeach; } ?>
   </div>
   <hr/>
   <div class='btn-group btn-group-lg' >
   <a class='btn btn-default' role='button' href="<?php echo base_url();?>user/new_user">New User</a>
   </div>
   
<hr/>

<?php echo validation_errors(); ?>
<div class="container donation">
<form class="form-resultcreation" enctype="multipart/form-data" role="form" action="<?php echo base_url();?>donation/create_donation" method="post">
<br/><br/><br/> 
<h1>Donations</h1>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar">Description</span>
  <input type="text" class="form-control alinhar_campo" placeholder="description" name="description" id="description" size="500">
</div>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar" >More</span>
            <textarea rows="7" cols ="500" class="form-control" name="observations">
            </textarea>  
</div>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar " >Amount</span>
  <input type="text" class="form-control alinhar_campo" placeholder="USD 1,00" name="amount" id="amount" size="500">
</div>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar">Type</span>
  <select class="input-group input-group-lg form-control alinhar_campo" name="type">
     <option>Select Payment Method</option>
     <option>Paypal</option>
     <option>Wire Transfer</option>
       
  </select>
</div>

<center><button type="submit" class="btn btn-default" name="submit"><i class="glyphicon glyphicon-book padding-7px"></i> Make a Donation</button></center>

   <!-- <center><input type="submit" class="form-control" name="Make a Donation" value="Make a Donation"></center> -->
   <!-- <center><p><a class="btn btn-default" href="submit" role="button"> <i class="glyphicon glyphicon-book padding-7px"></i> Make a Donation</a></p></center> -->
   
</div>
</form>


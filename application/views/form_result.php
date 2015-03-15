<?php echo validation_errors(); ?>
<div class="container result">
<form class="form-resultcreation" enctype="multipart/form-data" role="form" action="<?php echo base_url();?>result/create_result" method="post">

<h1>Reports</h1>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar">Description</span>
  <input type="text" class="form-control alinhar_campo" placeholder="description" name="description" id="description" size="500">
</div>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar" >About</span>
            <textarea rows="7" cols ="500" class="form-control" name="about">
            </textarea>

  
</div>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar " >Teacher</span>
  <input type="text" class="form-control alinhar_campo" placeholder="<?php echo $name; ?>" value="<?php echo $name; ?>" name="teacher_id" id="teacher_id" readonly size="500">
</div>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar">Method</span>
  <select class="input-group input-group-lg form-control alinhar_campo" name="method_id">
     <option>Method of Teaching</option>
        <?php foreach($methodsList  as $r): ?>
           <option value=<?php echo $r->id; ?>>
           <?php            
              echo "' ".$r->name.", (".$r->created_at.") '";
           ?>
           </option>
        <?php endforeach; ?>
  </select>
</div>
<div class="panel-heading span-thales">Report Files</div>
<div class="panel panel-default" id="list-groups">
<div class="input-group" id="files_upload">
    <p>        
        <input type="file" name="userfile[]" size="20" multiple="true"/>
        <p id="files_list"> 
        	<?php
              

            ?>
        </p>        
    </p>
    </div>
    </div>




<br/>
<center><button type="submit" class="btn btn-default" name="submit"><i class="glyphicon glyphicon-book padding-7px"></i> Send Report</button></center>
</div>
</form>


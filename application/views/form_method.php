<?php echo validation_errors(); ?>
<div class="container result">
<form class="form-resultcreation" enctype="multipart/form-data" role="form" action="<?php echo base_url();?>method/create_method" method="post">

<h1>Methods</h1>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar">Name</span>
  <input type="text" class="form-control alinhar_campo" placeholder="Name" name="name" id="name" size="500">
</div>
<br/>
<div class="input-group">
  <span class="input-group-addon alinhar" >Description</span>
            <textarea rows="7" cols ="500" class="form-control" name="description">
            </textarea>
  
</div>
<br/>
<div class="input-group" id="filepath">
    <p>        
        <input type="file" name="userfile" size="20" multiple="false"/>             
    </p>
    </div>
<!--<div class="input-group">
  <span class="input-group-addon alinhar " >Filepath</span>
  <input type="text" class="form-control alinhar_campo" placeholder="Filepath" name="Filepath" id="name" size="500">
</div>-->
<br/>
<!-- <p>
<embed name="plugin" src="<?php echo base_url();?>/assets/uploads/test.pdf#zoom=25&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf" width="50%" height="50%">
</p> -->
<!-- 
<object
   data="<?php echo base_url();?>/assets/uploads/test.pdf#toolbar=1&amp;navpanes=0&amp;scrollbar=0&amp;page=0&amp;zoom='auto'"
   type="application/pdf" width=100>
   <p>It appears you don't have a PDF plugin for this browser. 
      No problem though... 
      You can <a href="/path/to/file.pdf">click here to download the PDF</a>.
   </p>
</object>
 -->
<br/>
<center><button type="submit" class="btn btn-default" name="submit">Create a Method</button></center>
</div>
</form>


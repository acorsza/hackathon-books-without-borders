<div class="container method">
<br />
<br />
<br />
<br />
  <h2 class="title-thales">Method Number <?php echo $post_id; ?></h2>
  
  <hr/>

  <form class="form-show-report" role="form" action="create_user" method="post">
      <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales ">Title</span>
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $name; ?>" requires autofocus readonly>
      </div>
      <br />
      <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales">Description</span>
            <input type="text" class="form-control" placeholder="Description" name="login" value="<?php echo $description; ?>" required readonly>
      </div>  
      <br />
      <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales">Method</span>
            <input type="text" class="form-control" placeholder="Method" name="login" value="<?php echo $name; ?>" required readonly>
      </div> 
      <br />
      <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales">Staff</span>
            <input type="text" class="form-control" placeholder="Staff" name="login" value="<?php echo $staffname; ?>" required readonly>
      </div> 
      
          </form>
          <aside class="aside-right">
          <div><h3>Actions available</h3></div>
        <div class="btn-group button-nav">
              <a class="btn btn-warning btn-lg size-location" href="<?php echo base_url(); ?>method/edit">
                <i class="glyphicon glyphicon-pencil padding-7px"></i>Edit Method</a>
            </div>
            <br />
            <div class="btn-group button-nav">
              <a class="btn btn-danger btn-lg size-location" href="<?php echo base_url(); ?>method/delete_result/<?php echo $post_id; ?>">
                <i class="glyphicon glyphicon-trash padding-7px"></i>Delete Method</a>
            </div>
            <br />
          

      </aside>
          <div class="list_files">
        
          
      <div class="panel panel-default" id="list-groups">

        <div class="panel-heading span-thales">Submitted File</div>

        <div class="row">

          
            <div class="col-lg-4 padding-top padding-bottom">

            <center><iframe src="<?php echo $filepath; ?>"></iframe>
              <br/><p class="padding-bottom"><a role="button" class="btn btn-default" href="<?php echo $filepath; ?>">
              <i class="glyphicon glyphicon-cloud-download padding-7px"></i>Open document</a></p>       
             </center>  
             </div>
              
         
          
        </div>
      </div>
      </div>
      <br />
              
  
<hr/>-
<div class="container report">
<br />
<br />
<br />
<br />
  <h2 class="title-thales">Report Number <?php echo $post_id; ?></h2>
  <hr/>

  <form class="form-show-report" role="form" action="create_user" method="post">
      <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales">Title</span>
            <input type="text" class="form-control" placeholder="Title" name="name" value="<?php echo $description; ?>" requires autofocus readonly>
      </div>
      <br />
<!--       <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales">Description</span>
            <input type="text" class="form-control" placeholder="Description" name="description" value="<?php echo $about; ?>" required readonly>
      </div>   -->
      <div class="input-group input-group-lg" >
      <span class="input-group-addon span-thales" style="height:'125px'">About</span>
            <textarea rows="7" cols ="500" class="form-control " name="about"  readonly="true" >
            <?php echo $about; ?>
            </textarea>  
      </div>
      <br />
      <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales">Method</span>
            <input type="text" class="form-control" placeholder="Method" name="methodname" value="<?php echo $methodname; ?>" required readonly>
      </div> 
      <br />
      <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales">Teacher</span>
            <input type="text" class="form-control" placeholder="Teacher" name="teachername" value="<?php echo $teachername; ?>" required readonly>
      </div> 
      <br />
      <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales">Created at</span>
            <input type="text" class="form-control" placeholder="Created at" name="created_at" value="<?php echo $created_at; ?>" required readonly>
      </div>
      <br />
      <div class="input-group input-group-lg">
          <span class="input-group-addon span-thales">Accepted</span>
            <input type="text" class="form-control" placeholder="Accepted" name="accepted" value="<?php if($accepted==0) {echo "Pending"; } else{echo "Approved"; }?>" required readonly>
      </div>
          </form>
          <aside class="aside-right">
          <div><h3>Actions available</h3></div>
        <div class="btn-group button-nav">
              <a class="btn btn-warning btn-lg size-location" href="<?php echo base_url(); ?>result/edit">
                <i class="glyphicon glyphicon-pencil padding-7px"></i>Edit report</a>
            </div>
            <br />
            <div class="btn-group button-nav">
              <a class="btn btn-danger btn-lg size-location" href="<?php echo base_url(); ?>result/delete_result/<?php echo $post_id; ?>">
                <i class="glyphicon glyphicon-trash padding-7px"></i>Delete report</a>
            </div>
            <br />
            <div class="btn-group button-nav">
              <a class="btn btn-success btn-lg size-location" href="<?php echo base_url(); ?>result/accept_result/<?php echo $post_id; ?>">
                <i class="glyphicon glyphicon-trash padding-7px"></i>Accept report</a>
            </div>

      </aside>
          <div class="list_files">
        
          
      <div class="panel panel-default" id="list-groups">

        <div class="panel-heading span-thales">Submitted Files</div>

        <div class="row">
        <?php if($filelist){ ?>

          <?php foreach($filelist as $r): ?>
            <div class="col-lg-4 padding-top padding-bottom">
            <center><iframe src="http://localhost/bwb/assets/uploads/<?php echo substr( $r->filepath, strrpos( $r->filepath, '/' )+1 ); ?>#view=Fit" class="iframe"></iframe>
              <br/><p class="padding-bottom"><a role="button" class="btn btn-default" href="http://localhost/bwb/assets/uploads/<?php echo substr( $r->filepath, strrpos( $r->filepath, '/' )+1 ); ?>">
              <i class="glyphicon glyphicon-cloud-download padding-7px"></i>Open document</a></p>       
             </center>  
             </div>
              
         <?php endforeach; ?>
          <?php } ?>
        </div>
      </div>
      </div>
      <br />
              
  
<hr/>
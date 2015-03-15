<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">

            <div class="navbar-header">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="<?php echo base_url(); ?>">Books without borders</a>
            </div>
            <div class="navbar-collapse collapse">
            <div class="btn-group right button-nav">
              <a class="btn btn-danger" href="<?php echo base_url(); ?>home/logout">
                <i class="glyphicon glyphicon-off padding-7px"></i>Logout</a>
            </div>
            <div class="btn-group right button-nav">
              <a class="btn btn-warning" href="<?php echo base_url(); ?>result">
                <i class="glyphicon glyphicon-file padding-7px"></i>Reports</a>
            </div>
            
            <div class="btn-group right button-nav">
              <a class="btn btn-success" href="<?php echo base_url(); ?>user/new_user">
                <i class="glyphicon glyphicon-usd padding-7px"></i>Manage User</a>
            </div>

            <div class="btn-group right button-nav">
              <a class="btn btn-success" href="<?php echo base_url(); ?>method/form_method">
                <i class="glyphicon glyphicon-book padding-7px"></i>Insert Method</a>
            </div>
              
              
            </div>
          </div>
        </div>

      </div>
    </div>
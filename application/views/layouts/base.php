<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{page_title}}</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/toggle-switch.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">
                <div class="navbar">
                    <div class="navbar-inner">
                        <a class="brand" href="<?php echo base_url(); ?>">Demo</a>
                        <ul class="nav">
                            <li><a href="<?php echo base_url(); ?>users/">Users</a></li>
                        </ul>
                        <a href="<?php echo base_url(); ?>{{creator}}" role="button" data-toggle="modal" class="navbar-text pull-right" data-target="#main_modal">
                            <i class="icon-plus icon-large"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row-fluid">
            {{> layout}}
        </div>
    </div> 

    <!-- the hidden main modal here -->
    <div id="main_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-header">
            <h3>{{modal_title}}</h3>
        </div>

        <div class="modal-body">
            <!-- loading content via the modal remote feature in bootstrap -->
        </div>

    </form>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>

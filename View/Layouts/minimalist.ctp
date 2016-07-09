        <?
            $controller = $this->request->params['controller'];
            $action = $this->request->params['action']; 
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?php echo $title_for_layout; ?></title>

        <meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="/igud/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/igud/assets/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="/igud/assets/css/jquery-ui.min.css" />
        <link rel="stylesheet" href="/igud/assets/css/datepicker.css" />
        <link rel="stylesheet" href="/igud/assets/css/ui.jqgrid.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="/igud/assets/css/ace-fonts.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="/igud/assets/css/ace.min.css" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="/igud/assets/css/ace-part2.min.css" />
        <![endif]-->
        <link rel="stylesheet" href="/igud/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="/igud/assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="/igud/assets/css/chosen.css" />
         

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="/igud/assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="/igud/assets/js/ace-extra.min.js"></script>
        
        
        

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="/igud/assets/js/html5shiv.min.js"></script>
        <script src="/igud/assets/js/respond.min.js"></script>
        <![endif]-->
        <?
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');   
        
        
             
        ?>
        
        
        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?=fullSiteAddress?>/assets/js/jquery.min.js'>"+"<"+"/script>");
             window.jQuery || document.write("<script src='<?=fullSiteAddress?>/assets/js/bootstrap.min.js'>"+"<"+"/script>");
        </script>
 
        
     
        
    </head>

    <body class="no-skin rtl">
    

<div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <!-- #section:basics/sidebar.mobile.toggle -->
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <!-- /section:basics/sidebar.mobile.toggle -->
                <div class="navbar-header ">
                    <!-- #section:basics/navbar.layout.brand -->
                    <a href="#" class="navbar-brand">
                        <small>
                           <img src="http://b2estorage.blob.core.windows.net/media/26/images/logo%20IAA%20new%202015.gif" width="80px">
                           <i>איגוד האתלטיקה בישראל ע"ר - מערכת המידע</i> 
                           
                        </small>
                    </a>
                       
 
                </div>
   
                </div>

                <!-- #section:basics/navbar.dropdown -->
                <div class="navbar-buttons navbar-header pull-left" role="navigation">
                  
                </div>

                <!-- /section:basics/navbar.dropdown -->
            </div>    
    
    
        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

   
            <div class="main-content">
                <!-- #section:basics/content.breadcrumbs -->
              

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                    <!-- #section:settings.box
                    
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-150"></i>
                        </div>

                        
                    </div> 
                    
                    /.ace-settings-container -->

                    <!-- /section:settings.box -->
                    <div class="page-content-area">
                        <div class="page-header">
                            <h1><?=$page_title?>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                
                                
                                <?php echo $this->fetch('content'); ?>
                               
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content-area -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content -->

           

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->
        
 
<script>
      <?if($printScript=='1') {
             echo "window.print();";
      }?>
</script>  



      
        
       
 
    </body>
    
   
</html>

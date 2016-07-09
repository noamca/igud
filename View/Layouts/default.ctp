        <?
            $controller = $this->request->params['controller'];
            $action = $this->request->params['action']; 
            
            $translatedController = array (
            
            'associations' =>'אגודות',
            'athlets'=>'ספורטאים',
            'referees'=>'שופטים',
            'coachers'=>'מאמנים',
            'professions'=>'מקצועות',
            'competitions'=>'תחרויות',
            'purchases'=>'רכישות כרטיסים',
            'campaigns'=>'אירועים',
            'users'=>'משתמשים',

            
            ) ;
            
            $translatedAction = array(
            'index'=>'אינדקס',
            'edit'=>'עריכה' ,
            'add'=>'הוספה'
            );
            
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
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/jquery-ui.min.css" />
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/datepicker.css" />
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/ui.jqgrid.css" />

        <!-- text fonts -->
        
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/ace-fonts.css" />

        <!-- ace styles -->
        

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/ace-part2.min.css" />
        <![endif]-->
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/ace.min.css" id="main-ace-style" />
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/chosen.css" />
         

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?=fullSiteAddress?>/assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?=fullSiteAddress?>/assets/js/ace-extra.min.js"></script>
        
        
        

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="<?=fullSiteAddress?>/assets/js/html5shiv.min.js"></script>
        <script src="<?=fullSiteAddress?>/assets/js/respond.min.js"></script>
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
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script type="text/javascript">
         window.jQuery || document.write("<script src='<?=fullSiteAddress?>/assets/js/jquery1x.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?=fullSiteAddress?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?=fullSiteAddress?>/assets/js/bootstrap.min.js"></script>

              <!-- ace scripts -->
        <script src="<?=fullSiteAddress?>/assets/js/ace-elements.min.js"></script>
        <script src="<?=fullSiteAddress?>/assets/js/ace.min.js"></script>
        <script src="<?=fullSiteAddress?>/assets/js/chosen.jquery.min.js"></script>
        <script src="<?=fullSiteAddress?>/assets/js/date-time/bootstrap-datepicker.min.js"></script>    
        <script src="<?=fullSiteAddress?>/assets/js/jquery.maskedinput.min.js"></script>    
        
    </head>

    <body class="no-skin rtl">
    
    
       
    
        <!-- #section:basics/navbar.layout -->
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
                           <i>איגוד האתלטיקה בישראל  - מערכת המידע</i> 
                           
                          
 
                           </div>
                        </small>
                    </a>

                    <!-- /section:basics/navbar.layout.brand -->

                    <!-- #section:basics/navbar.toggle -->

                    <!-- /section:basics/navbar.toggle -->
                </div>

                <!-- #section:basics/navbar.dropdown -->
                <div class="navbar-buttons navbar-header pull-left" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="grey">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-tasks"></i>
                                <span class="badge badge-grey">4</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-check"></i>
                                    4 משימות לביצוע
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-right">דוח ספורטאים</span>
                                            <span class="pull-left">65%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:65%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-right">חידושי חברות</span>
                                            <span class="pull-left">35%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-right">שיבוץ ספורטאים לתחרות</span>
                                            <span class="pull-left">15%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-right">תוצאות </span>
                                            <span class="pull-left">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-striped active">
                                            <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </a>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="#">
                                        הצג דוח ספורטאים
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-exclamation-triangle"></i>
                                    8 הודעות
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-right">
                                                <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                הודעות חדשות
                                            </span>
                                            <span class="pull-left badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-xs btn-primary fa fa-user"></i>
                                        עוד הודעה ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-right">
                                                <i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
                                                נרשימים חדשים
                                            </span>
                                            <span class="pull-left badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>
            

                                <li class="dropdown-footer">
                                    <a href="#">
                                        הצג הכל..
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

 

                        <!-- #section:basics/navbar.user_menu -->
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?=fullSiteAddress?>/assets/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>שלום,</small>
                                    נועם
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog"></i>
                                        הגדרות
                                    </a>
                                </li>

                                <li>
                                    <a href="profile.html">
                                        <i class="ace-icon fa fa-user"></i>
                                        פרופיל
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        יציאה
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- /section:basics/navbar.user_menu -->
                    </ul>
                </div>

                <!-- /section:basics/navbar.dropdown -->
            </div><!-- /.navbar-container -->
       

        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <!-- #section:basics/sidebar -->
            <div id="sidebar" class="sidebar                  responsive">
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <!-- #section:basics/sidebar.layout.shortcuts -->
                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>

                        <!-- /section:basics/sidebar.layout.shortcuts -->
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->

                <ul class="nav nav-list">
                    <li class="">
                        <a href="<?=fullSiteAddress?>/associations/dashboard/">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> לוח בקרה </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li <? if($controller=='associations') echo "class=\"active\"; "; ?> >
                        <a href="<?=fullSiteAddress?>/associations/" >
                            <i class="menu-icon fa fa-university"></i>
                            <span class="menu-text"> אגודות </span>
                       </a>
                        <b class="arrow"></b>
                    </li>
                    
                    <li <? if($controller=='athlets') echo "class=\"active\"; "; ?> >
                        <a href="<?=fullSiteAddress?>/athlets/" >
                            <i class="menu-icon fa fa-male"></i>
                            <span class="menu-text"> ספורטאים </span>
                       </a>
                        <b class="arrow"></b>
                    </li>   
                    
                    <li <? if($controller=='referees') echo "class=\"active\"; "; ?> >
                        <a href="<?=fullSiteAddress?>/referees/" >
                            <i class="menu-icon fa fa-male"></i>
                            <span class="menu-text"> שופטים </span>
                       </a>
                        <b class="arrow"></b>
                    </li>      
                    
                   <li <? if($controller=='coachers') echo "class=\"active\"; "; ?> >
                        <a href="<?=fullSiteAddress?>/coachers/" >
                            <i class="menu-icon fa fa-male"></i>
                            <span class="menu-text"> מאמנים </span>
                       </a>
                        <b class="arrow"></b>
                    </li>    
                    
                 <li <? if($controller=='professions') echo "class=\"active\"; "; ?> >
                        <a href="<?=fullSiteAddress?>/professions/" >
                            <i class="menu-icon fa fa-gears"></i>
                            <span class="menu-text"> מקצועות </span>
                       </a>
                        <b class="arrow"></b>
                    </li>                                           
                                                                               
                    
                  <li <? if($controller=='competitions') echo "class=\"active\"; "; ?> >
                        <a href="<?=fullSiteAddress?>/competitions/" >
                            <i class="menu-icon fa fa-trophy"></i>
                            <span class="menu-text"> תחרויות </span>
                       </a>
                        <b class="arrow"></b>
                    </li>       

                  <li <? if($controller=='purchases') echo "class=\"active\"; "; ?>>
                        <a href="<?=fullSiteAddress?>/purchases/" >
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text"> רכישות/כרטיסים </span>
                       </a>
                        <b class="arrow"></b>
                    </li>    

                  <li <? if($controller=='campaigns') echo "class=\"active\"; "; ?>>
                        <a href="<?=fullSiteAddress?>/campaigns/" >
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text"> אירועים </span>
                       </a>
                        <b class="arrow"></b>
                    </li>    

                    
                  <li <? if($controller=='users') echo "class=\"active\"; "; ?> >
                        <a href="<?=fullSiteAddress?>/users/" >
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text"> משתמשים </span>
                       </a>
                        <b class="arrow"></b>
                    </li>    
                    
               <li >
                        <a href="<?=fullSiteAddress?>/system/" >
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text"> ניהול מערכת </span>
                       </a>
                        <b class="arrow"></b>
                    </li>                                                                                  
             <li >
                        <a href="<?=fullSiteAddress?>/models_fields_meta_data/" >
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text"> ניהול שדות </span>
                       </a>
                        <b class="arrow"></b>
                    </li>    
        

                  
                </ul><!-- /.nav-list -->

                <!-- #section:basics/sidebar.layout.minimize -->
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <!-- /section:basics/sidebar.layout.minimize -->
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
            </div>

            <!-- /section:basics/sidebar -->
            <div class="main-content">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">בית</a>
                        </li>

                        <li>
                            <a href="<?=fullSiteAddress?>/<?=$controller;?>"><?=$translatedController[$controller]?></a>
                        </li>
                        <li class="active"><?=$translatedAction[$action]?></li>
                    </ul><!-- /.breadcrumb -->

                    <!-- #section:basics/content.searchbox -->
                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="חפש ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div><!-- /.nav-search -->

                    <!-- /section:basics/content.searchbox -->
                </div>

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

            <div class="footer">
                <div class="footer-inner">
                    <!-- #section:basics/footer -->
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Application  By  EyeInTheSky Technologies &copy; 2016  </span>
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>

                    <!-- /section:basics/footer -->
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
 
        
        
         <script> 
         
         jQuery(function($) {

                $('.chosen-select').chosen({allow_single_deselect:true}); 
                //resize the chosen on window resize
            
                $(window)
                .off('resize.chosen')
                .on('resize.chosen', function() {
                    $('.chosen-select').each(function() {
                         var $this = $(this);
                         $this.next().css({'width': $this.parent().width()});
                    })
                }).trigger('resize.chosen');
            
            
                $('#chosen-multiple-style').on('click', function(e){
                    var target = $(e.target).find('input[type=radio]');
                    var which = parseInt(target.val());
                    if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                     else $('#form-field-select-4').removeClass('tag-input-style');
                });
                
              
                $('#AthletBornDate').datepicker({
                   autoclose: true,
                   todayHighlight: true
                })  
                $('#AthletImmigrationDate').datepicker({
                   autoclose: true,
                   todayHighlight: true
                }) 
                $('#AthletPassportExpired').datepicker({
                   autoclose: true,
                   todayHighlight: true
                }) 
                  $('#AthletHeightDate').datepicker({
                   autoclose: true,
                   todayHighlight: true
                }) 
                  $('#AthletWeightDate').datepicker({
                   autoclose: true,
                   todayHighlight: true
                }) 
                
                $('#my-file-input').ace_file_input();
                  
                
                $('#ReportFile1').ace_file_input();
                $('#ReportFile2').ace_file_input();    
                
                $('#my-file-input').ace_file_input({
                    style: 'well',
                    no_file: 'Click to choose or drag & drop',
                    droppable: true, //html5 browsers only
                    thumbnail: 'small', //html5 browsers only

                    maxSize: 100000, //~100 KB
                    allowExt:  ['jpg', 'jpeg', 'png', 'gif', 'tif', 'tiff', 'bmp'],
                    allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif', 'image/tif', 'image/tiff', 'image/bmp'] //html5 browsers only
                });
                
            
               $("input[rel='date']").datepicker({ dateFormat: "dd/mm/yy", autoclose: true, }).val()
     
              
                
                
                
                
                
                          

                
                

         });
         
         
         function callAjax(controller,action,id,params) {
                 $.post("<?=fullSiteAddress?>/" + controller + "/" + action + "/" + id, 
                    {
                        params:params
                     
                    })
                    .done(function( data ) {
                        $("#pageModalArea").html(data);
                        $('#pageModalArea').modal('show');
                    }); 
                         
         }
         
         
         
         
          </script>

     
     <div class="modal fade" id="pageModalArea" role="dialog"></div>
 
    </body>
    
    <?php echo $this->element('sql_dump'); ?>
</html>

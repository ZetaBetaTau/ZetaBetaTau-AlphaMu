  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <link href='http://fonts.googleapis.com/css?family=Lobster|Kaushan+Script&subset=all' rel='stylesheet' type='text/css'>
  </head>
  <body>

<div class="navbar navbar-static-top">
  
  <div class="navbar-inner">
	<div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="nav-collapse collapse">
	 
        <ul class="nav">
		 <li>
	  <a class="brand" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/bootstrap/img/logo.jpg"></a>
	  </li>
<?php wp_list_pages(array('title_li' => '', 'exclude' => 6)); ?>
		<li><a href="#contact">Contact Us</a></li>
		<li id="join"><a href="#myModal" data-toggle="modal">Join Us</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

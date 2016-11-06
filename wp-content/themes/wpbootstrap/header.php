<head>
    <meta charset="utf-8">
    <title>Koki Joni</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
  
<!-- this is navbar support line and contact -->

   <div class="navbar navbar-default navbar-static-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse collapse">
          <ul id="menu" class="nav nav-pills">

              <li role="presentation" class="disabled">
                        <a href="#" class="v4-tease">Support Line : +62 274 555666</a>
              </li>

              <li role="presentation" class="disabled"><a href="#">Email : suppoer@kokijoni.com</a></li>
              
              <li role="presentation" class="disabled" ><a href="#" class="">Email : suppoer@kokijoni.com</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- this is navbar brand title -->
<div class="bs-docs-header static" id="content" tabindex="-1">
    <div class="container">
      <h1>KOKI JONI</h1>
    </div>
</div>

<!-- this is navbar menu -->
  <div class="navbar navbar-default navbar-static-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <!-- <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a> -->
        <div class="nav-collapse collapse">
          <ul class="nav">

              <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">

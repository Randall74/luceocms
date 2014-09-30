<html>
    <head>
        
    <title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/stylesheet.css" type="text/css" />    
        
        
    </head>
<body>    
  <div id="main">
      <div id="logo">
        <div id="logo_text">
          <img src="<?php echo base_url(); ?>images/luceo.png">
          <!-- <h2>A work in progress...</h2> -->
        </div>
      </div>
        
       
        <div id="header"><div id="luceocms"><a href="<?php echo base_url(); ?>">
           
            
            
                
            
            
            </div>
            <nav>
              <div id="menu_container">  
                <ul class="sf-menu" id="nav">
                    <li><a href="<?php echo base_url(); ?>homepage">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>about">About the CMS</a></li>
                    <li><a href="<?php echo base_url(); ?>">Some Link</a></li>
                    <li><a href="<?php echo base_url(); ?>">Some Link</a></li>
                    <li><a href="<?php echo base_url(); ?>cheatsheets">Cheat Sheets</a></li>
                    <li><a href="<?php echo base_url(); ?>contactus">Contact Us</a></li>
                </ul>
              </div>
            </nav>
        </div>
        
        
       
       <div id="stage">
                
        <?php
        if (!isset($view_file)) {
            $view_file = "";
        }
        
        
        if (!isset($module)) {
            $module = $this->uri->segment(1);
        }
        
        
        if (($view_file!="") && ($module!="")) {
            $path = $module."/".$view_file;
            $this->load->view($path);
        } else {
            echo nl2br($page_content);
        }
        ?>
         
            
            
        </div>
        
            <footer>Luceo BrainTrust &COPY; 2014</footer>
  </div> 
</body>
</html>
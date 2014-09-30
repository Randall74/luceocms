<h2>Create New Page</h2>
<?php

echo validation_errors("<p style='color: red;'>", "</p>");


echo form_open('webpages/submit/'.$update_id);
?>

<table width="900" cellpadding="8" cellspacing="0" border="0">
    <tr><td>Page Headline: 
          <?php  
           $data = array(
              'name'        => 'page_headline',
              'id'          => 'page_headline',
              'value'       =>  $page_headline,
              'maxlength'   => '230',
              'size'        => '50',
              'style'       => 'width:320px',
            );

        echo form_input($data); 
        ?>
            
            
            
        </td><td>
            
            
          Page Title: 
          <?php  
           $data = array(
              'name'        => 'page_title',
              'id'          => 'page_title',
              'value'       =>  $page_title,
              'maxlength'   => '230',
              'size'        => '50',
              'style'       => 'width:320px',
            );

        echo form_input($data); 
        ?>  
            
            
            
        </td</tr>
    <tr><td colspan="2">Keywords: <?php  
           $data = array(
              'name'        => 'keywords',
              'id'          => 'keywords',
              'value'       =>  $keywords,
              'maxlength'   => '230',
              'size'        => '50',
              'style'       => 'width:800px',
            );

        echo form_input($data); 
        ?>  </td></tr>
    <tr><td colspan="2">
            
            
            Page Description: <?php  
           $data = array(
              'name'        => 'description',
              'id'          => 'description',
              'value'       =>  $description,
              'maxlength'   => '230',
              'size'        => '50',
              'style'       => 'width:750px',
            );

        echo form_input($data); 
        ?>
            
            
        </td></tr>
    <tr><td colspan="2">Page Content: <br>
        
        <?php  
           $data = array(
              'name'        => 'page_content',
              'id'          => 'page_content',
              'value'       =>  $page_content,
              'rows'   => '30',
              'cols'        => '50',
              'style'       => 'width:890px',
            );

        echo form_textarea($data); 
        ?>
        
        
        
        
        </td></tr>
    
    
    
    
    <tr><td colspan="2" align="center">
        <?php echo form_submit('submit', 'Submit'); ?>
    </td></tr>
    
    
    
</table>

<?php
echo form_close();
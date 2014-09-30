<h2>Content Management System</h2>

<?php
echo anchor('webpages/create', '<p>Create New Page</p>');
?>


<table width="600" cellspacing="0" cellpadding="8" border="1">
    <tr style="background-color: peru; color: white;"><th>Page Headline</th><th>Edit</th><th>Delete</th></tr>
    <?php
    foreach($query->result() as $row) {
        
        $edit_url = base_url()."webpages/create/".$row->id;
        $delete_url = base_url()."webpages/deleteconf/".$row->id;
        $page_headline = $row->page_headline;
        
       ?>
    <tr><td><?php echo $page_headline; ?></td><td><?php 
    echo anchor($edit_url, 'Edit');
    ?></td><td><?php
    
    
    
    $page_url = $row->page_url;
    if (($page_url=="homepage") || ($page_url=="contactme") || ($page_url=="thankyou") || ($page_url=="cheatsheets") ) {
        //this is a special page - don't let them delete it!
        echo "-";
    } else {
        echo anchor($delete_url, 'Delete');
    }
    
    ?></td></tr>
    <?php
    }
    ?>
   
</table>
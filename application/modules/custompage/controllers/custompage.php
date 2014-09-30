<?php
class Custompage extends MX_Controller 
{

function __construct() {
parent::__construct();
}



function index() {
    
    $first_bit = $this->uri->segment(1);
    $second_bit = $this->uri->segment(2);
    
    
    
    
    if ($second_bit=="") {
        //this must be a custom page from the CMS
        
            if ($first_bit=="") {
                $first_bit = "homepage";
            }
        
        
        
        $this->load->module('webpages');
        $query = $this->webpages->get_where_custom('page_url', $first_bit);
        foreach($query->result() as $row) {
            //page_headline	page_title	keywords	description	
            //page_url	page_content
            $data['page_headline'] = $row->page_headline;
            $data['page_title'] = $row->page_title;
            $data['keywords'] = $row->keywords;
            $data['description'] = $row->description;
            $data['page_url'] = $row->page_url;
            $data['page_content'] = $row->page_content;
        }
    }
    
    $this->load->module('templates');
    $this->templates->public_one_col($data);
}




}
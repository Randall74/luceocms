<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Templates extends MX_Controller
{

function __construct() {
parent::__construct();
}



function public_one_col($data) {
    
    if (!isset($data['page_title'])) {
        $data['page_title'] = "Default Page Title";
    }
    
    if (!isset($data['keywords'])) {
        $data['keywords'] = "some, cool, keywords";
    }
    
    if (!isset($data['description'])) {
        $data['description'] = "here is a default meta description";
    }
    
    $this->load->view('public_one_col', $data);
}
 

function admin($data) {
    $this->load->view('admin', $data);
}




































function test() {
    
   $mtime = microtime(); 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
   $starttime = $mtime;     
    
    
    $string = "hello";
    $number = 1;
    for ($i=1; $i<=1000; $i++) {
    
    $string = CRYPT($string, 'ad');
    
    $str = md5($string);
    
    $number = $number+1;
    
    echo $string."<br>";
    }
    echo $string;
    echo "<br><br>";
    
    $this->show_execution_time();
    
    
   $mtime = microtime(); 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
   $endtime = $mtime; 
   $totaltime = ($endtime - $starttime); 
   echo "This page was created in ".$totaltime." seconds"; 
   echo "<br>number ".$number;
    
    
}




function show_execution_time() {

// Script start
$rustart = getrusage();

// Code ...

// Script end
function rutime($ru, $rus, $index) {
    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
     -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
}

$ru = getrusage();
echo "This process used " . rutime($ru, $rustart, "utime") .
    " ms for its computations\n";
echo "It spent " . rutime($ru, $rustart, "stime") .
    " ms in system calls\n";
}




}
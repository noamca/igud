<?    header('Content-Type: text/csv');
    header("Content-type:application/vnd.ms-excel");
   // header("Content-disposition:attachment;filename=".$this->filename);
    
    header("Pragma: public"); 
    header("Expires: 0"); 
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
    header("Content-Type: application/force-download"); 
    header("Content-Type: application/octet-stream"); 
    header("Content-Type: application/download");; 
    header("Content-Disposition: attachment;filename=index.php"); 
    header("Content-Transfer-Encoding: binary ");     
    
    
    
    
    ?>
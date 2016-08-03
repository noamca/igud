<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('AuthComponent', 'Controller/Component'); 
App::uses('TimeComponent', 'I18n/Time'); 


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
   public $uses=  array('City','User','RefereesLevel'); 
   
   public $workingYear;  
      
   public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'athlets', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'index', 'home')
        )
    );

    public function beforeFilter() {       
        // Security::setHash('md5');
        //echo  Security::getHash(); die();
        if(!session_id()) session_start();
        $this->Auth->authError = 'You must be logged in to view this page.';
        $this->Auth->loginError = __('Invalid Username or Password entered, please try again.');
        
        
        $this->set("leages",array(""=>"בחר", "1"=>"על","2"=>"ליגה א","3"=>"לאומית","4"=>"ארצית"));
        
        $this->Auth->allow( 'view');
        $this->User->id = $this->Auth->user('id'); // target correct record
       // $this->User->saveField('last_activity', date(DATE_ATOM));
       
       $this->workingYear = date('Y');
       if (date('m') > 8) { $this->workingYear ++; }
       
       $this->set('RefereersJobs',array('מאמן','שופט','שופט ראשי','פעיל','חבר הנהלה','עיתונות','טלויזיה','שופט עזר','מנהל טכני'));
       $this->set('refereesLevels',$this->RefereesLevel->find('list'));
       
       
        
                       
        
    }      
    
    function autocomplete() { 
    if($this->request->is('ajax')) {
        
            //echo "fields:".$this->data['model']; die();
            //print_r($this->params);
            
           //die();
            $fields = explode(",",$this->data['fields']); 
            //$results = $this->City->find('all',$this->data['search'].' LIKE \''.$this->data['query'].'%\'',$fields,$this->data['search'].' ASC',5);  
            
            $results = $this->City->find('all', array('conditions' => array('City.cityname LIKE ' => $this->data['query']."%" ) ));            
           // print_r($results) ;die();
            $this->set('results',$results); 
            $this->set('fields',$fields); 
            $this->set('model',$this->data['model']); 
            $this->set('input_id',$this->data['rand']); 
            $this->set('search',$this->data['search']); 
            $this->render('autocomplete','ajax','/common/autocomplete');                 
            //print_r($results);
    }
  }
  
      public function time_diff($dt1,$dt2){
            $y1 = substr($dt1,0,4);
            $m1 = substr($dt1,5,2);
            $d1 = substr($dt1,8,2);
            $h1 = substr($dt1,11,2);
            $i1 = substr($dt1,14,2);
            $s1 = substr($dt1,17,2);    

            $y2 = substr($dt2,0,4);
            $m2 = substr($dt2,5,2);
            $d2 = substr($dt2,8,2);
            $h2 = substr($dt2,11,2);
            $i2 = substr($dt2,14,2);
            $s2 = substr($dt2,17,2);    

            $r1=date('U',mktime($h1,$i1,$s1,$m1,$d1,$y1));
            $r2=date('U',mktime($h2,$i2,$s2,$m2,$d2,$y2));
            return ($r1-$r2);

        } 
        
    public function sendSms($sender,$reciever,$msg) {
          $xmlMsg = "
                <Inforu>
                 <User>
                 <Username>araccounting</Username>
                 <Password>arsms2016</Password>
                 </User>
                 <Content Type=\"sms\">
                 <Message>$msg</Message>
                 </Content>
                 <Recipients>
                 <PhoneNumber>$reciever</PhoneNumber>
                 </Recipients>
                 <Settings>
                 <SenderNumber>$sender</SenderNumber>
                 </Settings>
                </Inforu>
            
            ";       
            $url = 'http://api.smsim.co.il/SendMessageXml.ashx';
            $fields = array(
                'InforuXML' => urlencode($xmlMsg),
             );

            //url-ify the data for the POST
            foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
            rtrim($fields_string, '&');

            //open connection
            $ch = curl_init();

            //set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_POST, count($fields));
            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

            //execute post
            $result = curl_exec($ch);

            //close connection
            curl_close($ch);            
    } 
    
    
     /**
 * uploads files to the server
 * @params:
 *        $folder     = the folder to upload the files e.g. 'img/files'
 *        $formdata     = the array containing the form files
 *        $itemId     = id of the item (optional) will create a new sub folder
 * @return:
 *        will return an array with the success of each file upload
 */
    function uploadFiles($folder, $formdata, $itemId = null) {
        // setup dir names absolute and relative
        $folder_url = WWW_ROOT.$folder;
        $rel_url = $folder;
        
        // create the folder if it does not exist
        if(!is_dir($folder_url)) {
            mkdir($folder_url);
        }
            
        // if itemId is set create an item folder
        if($itemId) {
            // set new absolute folder
            $folder_url = WWW_ROOT.$folder.'/'.$itemId; 
            // set new relative folder
            $rel_url = $folder.'/'.$itemId;
            // create directory
            if(!is_dir($folder_url)) {
                mkdir($folder_url);
            }
        }
        
        // list of permitted file types, this is only images but documents can be added
        $permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');
        
        // loop through and deal with the files
        foreach($formdata as $file) {
            // replace spaces with underscores
            $filename = str_replace(' ', '_', $file['name']);
            // assume filetype is false
            $typeOK = false;
            // check filetype is ok
            foreach($permitted as $type) {
                if($type == $file['type']) {
                    $typeOK = true;
                    break;
                }
            }
            
            // if file type ok upload the file
            if($typeOK) {
                // switch based on error code
                switch($file['error']) {
                    case 0:
                        // check filename already exists
                        if(!file_exists($folder_url.'/'.$filename)) {
                            // create full filename
                            $full_url = $folder_url.'/'.$filename;
                            $url = $rel_url.'/'.$filename;
                            // upload the file
                            $success = move_uploaded_file($file['tmp_name'], $url);
                        } else {
                            // create unique filename and upload file
                            ini_set('date.timezone', 'Europe/London');
                            $now = date('Y-m-d-His');
                            $full_url = $folder_url.'/'.$now.$filename;
                            $url = $rel_url.'/'.$now.$filename;
                            $success = move_uploaded_file($file['tmp_name'], $url);
                        }
                        // if upload was successful
                        if($success) {
                            // save the url of the file
                            $result['urls'][] = $url;
                        } else {
                            $result['errors'][] = "Error uploaded $filename. Please try again.";
                        }
                        break;
                    case 3:
                        // an error occured
                        $result['errors'][] = "Error uploading $filename. Please try again.";
                        break;
                    default:
                        // an error occured
                        $result['errors'][] = "System error uploading $filename. Contact webmaster.";
                        break;
                }
            } elseif($file['error'] == 4) {
                // no file was selected for upload
                $result['nofiles'][] = "No file Selected";
            } else {
                // unacceptable file type
                $result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
            }         
        }
    return $result;
    }
    
    
    public function saysome() {
        echo "somthing";
    }
    
    
    function search() {
        // the page we will redirect to
        $url['action'] = 'index';
        
        // build a URL will all the search elements in it
        // the resulting URL will be 
        // example.com/cake/posts/index/Search.keywords:mykeyword/Search.tag_id:3
        foreach ($this->data as $k=>$v){ 
            foreach ($v as $kk=>$vv){ 
                if ($vv) {
                    $url[$k.'.'.$kk]=$vv; 
                }
            } 
        }

        // redirect the user to the url
        $this->redirect($url, null, true);
    }    
    
    
    
}

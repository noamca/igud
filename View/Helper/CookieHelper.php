<?php
App::uses('AppHelper', 'View/Helper');
App::uses('CakeSession', 'Model/Datasource');
class CookieHelper extends AppHelper 
{
         public function write($name, $value = null) 
         {
               return CakeSession::write($name, $value);
         }
         public function read($name)
         {
               return CakeSession::read($name);
         }
}
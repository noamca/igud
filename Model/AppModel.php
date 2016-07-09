<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
 
 define("CURRENTYEAR",date("Y"));
 
class AppModel extends Model {
    
    
    
    public function ValidID($id) {
    if(strlen($id) == 9 && $this->CheckDigit(substr($id, 0, 8)) == $id[8])
        return TRUE;
    else
        return FALSE;
    }

    public function CheckDigit($id) {
        for($i = 0; $i < strlen($id); $i++)
            if($i % 2 != 0)
                $Sum .= $id[$i] * 2;
            else
                $Sum .= $id[$i];

        for($i = 0; $i <= strlen($Sum)-1; $i++)
            $Digit = $Digit + $Sum[$i];

        return ( $Digit % 10 > 0 ? 10 - ($Digit % 10) : 0);
    }
    
    
}

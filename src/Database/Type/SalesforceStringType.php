<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         3.1.2
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Salesforce\Database\Type;

use Cake\Database\Type\StringType;

/**
 * String type converter.
 *
 * Use to convert string data between PHP and the database types.
 */
class SalesforceStringType extends StringType
{
    /**
     * Marshalls request data into PHP strings.
     *
     * @param mixed $value The value to convert.
     * @return mixed Converted value.
     */
    public function marshal($value)
    {
        if ($value === null) {
            return null;
        }
        if (is_array($value)) {
            return '';
        }

        if(is_object($value)) {
            return '';
        }

        return (string)$value;
    }
}

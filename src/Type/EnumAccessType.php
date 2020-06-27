<?php
namespace App\Type;

class EnumAccessType extends EnumType
{
    protected $name = 'enumaccess';
    protected $values = array('deny', 'allow');
}
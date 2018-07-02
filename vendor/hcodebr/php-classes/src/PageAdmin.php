<?php
/**
 * Created by PhpStorm.
 * User: andrei.vupt
 * Date: 02/07/2018
 * Time: 01:51
 */

namespace Hcode;

class PageAdmin extends Page{


    public function __construct(array $opts = array(), $tpl_dir = "/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }

}
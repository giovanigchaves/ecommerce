<?php
    /**
     *
     * User: Giovani G. Chaves
     * Date: 22/04/2018
     * Time: 16:49
     */

    namespace Hcode;

    class PageAdmin extends Page
    {

        public function __construct(array $opts = array(), $tpl_dir = "/views/admin/")
        {
            parent::__construct($opts, $tpl_dir);
        }

    }

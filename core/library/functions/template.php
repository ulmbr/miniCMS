<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function load_template(\M\Template $template) {

    echo $template->display();
}

function load_layout() {
    global $template;

    require_once(DIR_TEMPLATE . \M\Config::get('layout') . '.php');
}

/*
 * ashiglagdah layout iig tohiruulna
 * @param $name string onooh layout iin ner
 */

function set_layout($name) {

    //tuhain layout bgaa esehiig shalgaad bval onoono
    if (file_exists(DIR_TEMPLATE . $name . '.php')) {

        return \M\Config::set('layout', $name);
    }

    return false;
}
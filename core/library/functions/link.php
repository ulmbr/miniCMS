<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Umnu onooj ugsun URI path tohirgoog duudna.
 * huvisagch damjuulj bolno.
 *
 * @param $route_name string tuhain route iin ner. Ex: category_new
 * @param $var array nemelt utguud. Ex: array('id'=>15)
 *
 * @return string Ugugdsun route iin zamiig butsaana.
 */
function get_url($route_name, $var = array()) {

    return get_route($route_name, $var);
}

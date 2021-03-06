<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * idevhtei,idevhgui geh met zuilsiig todorhoiloh
 *
 * @param integer $type 1,0 utgiig avna. 1 gedeg n biyelsen icon
 */
function icon_1_0($type = 0, $link = '#') {

    $buf = '';

    switch ($type) {
        case 0:
            $buf .= '<a href="' . $link . '"><i class="fa fa-times"></i></a>';
            break;
        case 1:
            $buf .= '<a href="' . $link . '"><i class="fa fa-check"></i></a>';
            break;
    }

    return $buf;
}

/**
 * Content-iin toroliig hewleh
 *
 * @param string $type article, photo, video ii negiig avna
 */
function icon_content_type($type = '') {

    $buf = '';

    $type_class = 'badge ';
    $type_icon = 'fa ';
 
    switch ($type) {
        case 'article':
            $type_class .= 'bg-primary';
            $type_icon .= 'fa-edit';
            break;
        case 'photo':
            $type_class .= 'bg-info';
            $type_icon .= 'fa-picture-o';
            break;
        case 'video':
            $type_class .= 'bg-success';
            $type_icon .= 'fa-film';
            break;
        default:
            $type_class .= 'bg-default';
            $type_icon .= 'fa-edit';
            break;
    }

    $buf .= '<span data-original-title="'.__('Content type').'" data-content="'.__($type).'"
            data-placement="top"
            data-trigger="hover"
            class="' . $type_class . ' popovers" >';
    $buf .= '<i class="' . $type_icon . '"></i>';
    $buf .= '</span>';

    return $buf;
}

/**
 * Content-iin publish date bolon, uussen ognoog hewleh
 *
 * @param string $type publishDate, createdDate
 * @param string $date Ognoog awah
 */
function icon_date($type, $date) {

    $buf = '';

    $type_class = 'badge ';
    $type_icon = 'fa fa-clock-o';
    $type_title = '';
 
    switch ($type) {
        case 'publishDate':
            $type_class .= 'bg-warning';
            $type_title = 'Publish date';
            break;
        case 'createdDate':
            $type_class .= 'bg-success';
            $type_title = 'Created date';
            break;
        default:
            $type_class .= 'bg-default';
            $type_title = 'Date';
            break;
    }

    $buf .= '<span data-original-title="'.__($type_title).'" data-content="'.__($date).'"
            data-placement="top"
            data-trigger="hover"
            class="' . $type_class . ' popovers" >';
    $buf .= '<i class="' . $type_icon . '"></i>';
    $buf .= '</span>';

    return $buf;
}

function print_tag($tag_value, $tag_score, $max_score) {

    $bg_style = Array('','bg-primary','bg-success','bg-info','bg-inverse','bg-warning','bg-important');
    
    $buf = '<span class="badge '.$bg_style[array_rand($bg_style)].'">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>';
    if ($tag_score < $max_score / 5) {
        $buf .='<h6>' . $tag_value . '&nbsp;</h6>';
    }
    if ($tag_score < $max_score / 5 * 2 && $tag_score >= $max_score / 5) {
        $buf .='<h5>' . $tag_value . '&nbsp;</h5>';
    }
    if ($tag_score < $max_score / 5 * 3 && $tag_score >= $max_score / 5 * 2) {
        $buf .='<h4>' . $tag_value . '&nbsp;</h4>';
    }
    if ($tag_score < $max_score / 5 * 4 && $tag_score >= $max_score / 5 * 3) {
        $buf .='<h3>' . $tag_value . '&nbsp;</h3>';
    }
    if ($tag_score <= $max_score / 5 * 5 && $tag_score >= $max_score / 5 * 4) {
        $buf .='<h2>' . $tag_value . '&nbsp;</h2>';
    }
    if ($tag_score > $max_score) {
        $buf .='<h1>' . $tag_value . '&nbsp;</h1>';
    }

    $buf .= '</span>';
    
    return $buf;
}
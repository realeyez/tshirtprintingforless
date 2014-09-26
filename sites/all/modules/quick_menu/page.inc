<?php

function quick_menu_goto($nid, $destination) {
    drupal_goto('admin/structure/types/manage/' . $nid->type . '/' . $destination);
    //drupal_goto($node->nid  . '#overlay=admin/structure/types/manage/' . $node->type . '/display');
    return '';
}
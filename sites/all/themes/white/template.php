<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_theme().
 */
function white_theme()
{
    $items = array();
    // create custom user-login.tpl.php
    $items['user_login'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'white') . '/templates',
        'template' => 'user-login',
        'preprocess functions' => array(
            'white_preprocess_user_login'
        ),
    );
    $items['user_register_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'white') . '/templates',
        'template' => 'user-register',
        'preprocess functions' => array(
            'white_preprocess_user_register'
        ),
    );
    $items['user_pass'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'white') . '/templates',
        'template' => 'user-pass',
        'preprocess functions' => array(
            'white_preprocess_user_pass'
        ),
    );
    return $items;
}

/**
 * Implements hook_preprocess_page().
 * Change page titles for login, register and change password pages.
 */
function white_preprocess_page(&$vars)
{
    if (arg(0) == 'user') {
        switch (arg(1)) {
            case 'register':
                $vars['title'] = t('Create a new account');
                break;
            case 'password':
                $vars['title'] = t('Retrieve lost password');
                break;
            case '':
            case 'login':
                $vars['title'] = t('User login');
                break;
        }
    }

    // Use the template for the 404 page.
    $status = drupal_get_http_header("status");
    if ($status == "404 Not Found") {
        $vars['theme_hook_suggestions'][] = 'page__404';
    }

    if (!empty($vars['node']) && !empty($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] = 'page__node__' . $vars['node']->type;

        /*if ($vars['node']->type == 'embroidery_product') {
            $vars['theme_hook_suggestions'][] = 'page__node__' . 'website_product';
        }*/
    }



}


/**
 * Implements hook_preprocess_node().
 * Creates node teaser and full templates used for styling.
 */
function white_preprocess_node(&$variables) {
    $variables['theme_hook_suggestions'][] = 'node__' . $variables['type'] . '__' . $variables['view_mode'];

    /*

        //if ($variables['created']) {
            $timestamp = $variables->created;
            $difference = time() - $timestamp;
            $periods = array("second", "minute", "hour", "day", "week", "month", "years", "decade");
            $lengths = array("60","60","24","7","4.35","12","10");
            for($j = 0; $difference >= $lengths[$j]; $j++)
                $difference /= $lengths[$j];
            $difference = round($difference);
            if($difference != 1) $periods[$j].= "s";
            $text = "$difference $periods[$j] ago";
            $variables->created = $text;
        //}

        kpr($variables);*/


    if ($variables['page']) {
        $site_name = variable_get('site_name');
        $og_title = $variables['node']->title . ($site_name ? ' | ' . $site_name : '');
        $og_description = isset($variables['node']->body[LANGUAGE_NONE][0]) ? drupal_substr(check_plain(strip_tags($variables['node']->body[LANGUAGE_NONE][0]['safe_value'])), 0, 100) . '..' : '';
        drupal_add_html_head(array(
            '#tag' => 'meta',
            '#attributes' => array(
                'property' => 'og:title',
                'content' => $og_title,
            ),
        ), 'node_' . $variables['node']->nid . '_og_title');
        drupal_add_html_head(array(
            '#tag' => 'meta',
            '#attributes' => array(
                'property' => 'og:description',
                'content' => $og_description,
            ),
        ), 'node_' . $variables['node']->nid . '_og_description');
    }




    /*if (array_key_exists('content', $variables)) {
        $content = &$variables['content'];
        //kpr($content);
        if (array_key_exists('field_product_category', $content)) {
            foreach ($content['field_product_category']['#items'] as $index => $info) {
                $tid = $info['tid'];
                //kpr($info['taxonomy_term']->name);
                $content['field_product_category'][$index]['#href'] = 'products?field_product_category_tid[0]=' . $tid;
            }
        }
    }*/

}


/**
 * Implements hook_form_alter
 */
function white_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id) {
    $price = '$' . $form['line_item_fields']['commerce_unit_price']['und'][0]['amount']['#default_value'];

    if ($form['line_item_fields']['field_artwork']) {
        $form['submit']['#prefix'] = '<div class="cart-blocker"></div>';
    }

    //$form['submit']['#title'] = $form['submit']['#value'] = '<span class="price"><span class="icon icon-cart"></span> &nbsp;Add to cart</span>';
}


function white_css_alter(&$css) {
    $path = drupal_get_path('module', 'field_group');
    unset($css[$path . '/horizontal-tabs/horizontal-tabs.css']);
}

/*function white_table($variables) {
    kpr($variables);
}*/

function white_form_alter(&$form, &$form_state, $form_id) {

    if ($form_id == 'contact_site_form') {
        $form['#attributes']['class'] = 'col-lg-6';

        //$form['name']['preffix'] = '<h1>sadfasdasdf</h1>';

        /*$form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
        $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
        $form['search_block_form']['#size'] = 40;  // define size of the textfield
        $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
        $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
        $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');
        // Add extra attributes to the text box
        $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
        $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
        // Prevent user from searching the default text
        $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";
        // Alternative (HTML5) placeholder attribute instead of using the javascript
        $form['search_block_form']['#attributes']['placeholder'] = t('Search');*/
    }

//kpr($form_id);
    switch ($form_id) {
        // This is our form ID.
        case 'user_login':



            // Our kickin' mods go here.
            //$form['actions']['submit']['#attributes'] = array('class' => 'btn-lg');

            $form['actions']['submit']['#attributes'] = array('class' => array('btn-lg', 'btn'));

            break;

        case 'mailchimp_signup_subscribe_block_signup_form':
            //kpr($form);
            // Our kickin' mods go here.
            //$form['actions']['submit']['#attributes'] = array('class' => 'btn-lg');

            //$form['#attributes'] = array('class' => array('btn-lg', 'btn'));

            break;
    }

    // target a single form
    if(isset($form_state['view']->name) && $form_state['view']->name == 'drupal_themes') {
        $form['tid']['#options']['All'] = t('All Delicious themes');
    }

    if(isset($form_state['view']->name) && $form_state['view']->name == 'blog') {
        $form['tid']['#options']['All'] = t('All Delicious posts');
    }
    if(isset($form_state['view']->name) && $form_state['view']->name == 'tutorials') {
        $form['tid']['#options']['All'] = t('All Delicious tutorials');
    }

}


function white_preprocess_field(&$variables) {
    if($variables['element']['#field_name'] == 'field_image' || $variables['element']['#field_name'] == 'field_teaser_image'){
        foreach($variables['items'] as $key => $item){
            $variables['items'][ $key ]['#item']['attributes']['class'][] = 'img-responsive'; // http://getbootstrap.com/css/#overview-responsive-images
        }
    }
}



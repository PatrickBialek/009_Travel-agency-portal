<?php

    date_default_timezone_set('Europe/Warsaw');
    $today = date('Y-m-d H:i:s');
    $postPopup = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => 'popup',
        'meta_query' => array(
            'relation' => 'AND' ,
            array(
                'key' => 'popup_starting_data',
                'compare' => '<=',
                'value' => $today,
                'type' => 'DATETIME'
            ),
            array(
                'key' => 'popup_ending_data',
                'compare' => '>=',
                'value' => $today,
                'type' => 'DATETIME'
            )
        )
    ));

?>
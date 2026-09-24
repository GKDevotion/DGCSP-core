<?php

/**
 * get dynamic jurisdiction links
 */
function getJurisditionLink( $jurisdiction="" ){
    $jurisdictionArr =[
        'singapore' => ( MODE == "local" ) ? '/singapore' : 'singapore.devotionglobalcsp.com',
        'hongkong' => ( MODE == "local" ) ? '/hongkong' : 'hongkong.devotionglobalcsp.com',
        'mauritius' => ( MODE == "local" ) ? '/mauritius' : 'mauritius.devotionglobalcsp.com',
        'india' => ( MODE == "local" ) ? '/india' : 'india.devotionglobalcsp.com',
        'uae' => ( MODE == "local" ) ? '/uae' : 'uae.devotionglobalcsp.com',
        'uk' => ( MODE == "local" ) ? '/uk' : 'uk.devotionglobalcsp.com',
    ];

    return $jurisdictionArr[$jurisdiction];
}
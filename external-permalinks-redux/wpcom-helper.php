<?php
/**
 * Use the postmeta keys associated with the old External Permalinks plugin
 */
add_filter( 'epr_meta_key_target', function() { return '_external_permalink'; } );
add_filter( 'epr_meta_key_type', function() { return '_external_permalink_status_code'; } );

/**
 * Extend the status codes to add a 307 status
 */
add_filter( 'epr_status_codes', function( $status_codes ) { $status_codes[307] = __( 'Temporary (307)' ); return $status_codes; } );

/**
 * Temporarily alias old global variable $external_permalinks_redux to new singleton version of plugin
 * nbcthegrio-mobile and nbcthegrio-mobile-preprod reference the global directly at the moment
 */
global $external_permalinks_redux;
$external_permalinks_redux = external_permalinks_redux::get_instance();

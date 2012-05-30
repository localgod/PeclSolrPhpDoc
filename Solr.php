<?php
/**
 * Pecl solr stub
 *
 * PHP version 5
 *
 * @category Stub
 * @package  Solr
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 * @since    2012-05-30
 */

define('SOLR_MAJOR_VERSION', 1);
define('SOLR_MINOR_VERSION', 0);
define('SOLR_PATCH_VERSION', 2);

define('SOLR_EXTENSION_VERSION', '1.0.2');

/**
 * Returns the current version of the Apache Solr extension
 *
 * @return string
 */
function solr_get_version() {
	return SOLR_EXTENSION_VERSION;
}
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
/**
 * This is the base class for all exception thrown by the Solr extension classes.
 *
 * @category Stub
 * @package  Solr
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class SolrException extends Exception {

	/**
	 * Source line
	 * @var integer
	 */
	protected $sourceline;
	/**
	 * Source file
	 * @var string
	 */
	protected $sourcefile;
	/**
	 * Zif name
	 * @var string
	 */
	protected $zif_name;

	/**
	 * Get internal info
	 *
	 * @return An array containing internal information where the error was thrown.
	 *         Used only for debugging by extension developers.
	 */
	public function  getInternalInfo() {
	}
}
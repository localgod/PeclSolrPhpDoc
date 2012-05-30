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
 * This represents a field in a Solr document.
 *
 * All its properties are read-only.
 *
 * @category Stub
 * @package  Solr
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class SolrDocumentField {

	/**
	 * The name of the field.
	 * @var string
	 */
	public $name;
	/**
	 * The boost value for the field
	 * @var float
	 */
	public $boost;
	/**
	 * An array of values for this field
	 * @var array
	 */
	public $values;

	/**
	 * Constructer
	 *
	 * @return void
	 */
	public function __construct() {
	}
	/**
	 * Deconstructor
	 *
	 * @return void
	 */
	public function __destruct() {
	}
}
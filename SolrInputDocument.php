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
 * This class represents a Solr document that is about to be submitted to the Solr index.
 *
 * @category Stub
 * @package  Solr
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class SolrInputDocument {

	/**
	 * Sorts the fields in ascending order.
	 * @var integer
	 */
	const  SORT_DEFAULT = 1;
	/**
	 * Sorts the fields in ascending order.
	 * @var integer
	 */
	const  SORT_ASC = 1;
	/**
	 * Sorts the fields in descending order.
	 * @var integer
	 */
	const  SORT_DESC = 2;
	/**
	 * Sorts the fields by name
	 * @var integer
	 */
	const  SORT_FIELD_NAME = 1;
	/**
	 * Sorts the fields by number of values.
	 * @var integer
	 */
	const  SORT_FIELD_VALUE_COUNT = 2;
	/**
	 * Sorts the fields by boost value.
	 * @var integer
	 */
	const  SORT_FIELD_BOOST_VALUE = 4;

	/**
	 * Adds a field to the document
	 *
	 * For multi-value fields, if a valid boost value is specified, the specified value will be
	 * multiplied by the current boost value for this field.
	 *
	 * @param string $fieldName       The name of the field
	 * @param string $fieldValue      The value for the field.
	 * @param float  $fieldBoostValue The index time boost for the field.
	 *                                Though this cannot be negative, you can still pass values less than 1.0
	 *                                but they must be greater than zero.
	 *
	 * @return boolean true on success
	 */
	public function addField($fieldName, $fieldValue, $fieldBoostValue) {
	}
	/**
	 * Resets the input document
	 *
	 * Resets the document by dropping all the fields and resets the document boost to zero.
	 *
	 * @return boolean true on success
	 */
	public function clear() {
	}
	public function __clone() {
	}
	public function __construct() {
	}
	public function deleteField($fieldName) {
	}
	public function __destruct() {
	}
	public function fieldExists($fieldName) {
	}
	public function getBoost() {
	}

	/**
	 * Retrieves a field by name
	 *
	 * @param string $fieldName
	 * @return SolrDocumentField
	 */
	public function getField($fieldName) {
	}
	public function getFieldBoost($fieldName) {
	}
	public function getFieldCount() {
	}
	public function getFieldNames() {
	}
	public function merge(SolrInputDocument &$sourceDoc,  $overwrite) {
	}
	public function reset() {
	}
	public function setBoost($documentBoostValue) {
	}
	public function setFieldBoost($fieldName, $fieldBoostValue) {
	}
	public function sort(int $sortOrderBy, $sortDirection) {
	}
	public function toArray() {
	}
}
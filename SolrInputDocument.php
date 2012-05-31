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
	/**
	 * Creates a copy of a SolrDocument
	 * 
	 * @return SolrInputDocument
	 */
	public function __clone() {
	}
	/**
	 * Constructor
	 * 
	 * @return void
	 */
	public function __construct() {
	}
	/**
	 * Removes a field from the document
	 * 
	 * @param string $fieldName The name of the field.
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function deleteField($fieldName) {
	}
	/**
	 * Destrutor
	 * 
	 * @return void
	 */
	public function __destruct() {
	}
	/**
	 * Checks if a field exists
	 * 
	 * @param string $fieldName The name of the field.
	 * 
	 * @return boolean TRUE on success or FALSE on failure.
	 */
	public function fieldExists($fieldName) {
	}
	/**
	 * Retrieves the current boost value for the document
	 * 
	 * @return mixed the boost value on success and FALSE on failure. 
	 */
	public function getBoost() {
	}

	/**
	 * Retrieves a field by name
	 *
	 * @param string $fieldName The name of the field.
	 * 
	 * @return SolrDocumentField|boolean FALSE on failure. 
	 */
	public function getField($fieldName) {
	}
	/**
	 * Retrieves the boost value for a particular field
	 * 
	 * @param string $fieldName The name of the field.
	 * 
	 * @return mixed the boost value for the field or FALSE if there was an error. 
	 */
	public function getFieldBoost($fieldName) {
	}
	/**
	 * Get the number of fields in the document
	 * 
	 * @return integer
	 */
	public function getFieldCount() {
	}
	/**
	 * Get an array containing all the fields in the document
	 * 
	 * @return SolrDocumentField[]|boolean FALSE on failure. 
	 */
	public function getFieldNames() {
	}
	/**
	 * Merges one input document into another
	 * 
	 * @param SolrInputDocument &$sourceDoc The source document. 
	 * @param boolean           $overwrite  If this is TRUE it will replace matching fields in the destination document.
	 * 
	 * @return boolean TRUE on success or FALSE on failure. In the future, this will be modified to return the number of fields in the new document. 
	 */
	public function merge(SolrInputDocument &$sourceDoc,  $overwrite = true) {
	}
	/**
	 * This is an alias of SolrInputDocument::clear
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function reset() {
	}
	/**
	 * Sets the boost value for this document
	 * 
	 * @param float $documentBoostValue The index-time boost value for this document. 
	 * 
	 * @return boolean TRUE on success or FALSE on failure.
	 */
	public function setBoost($documentBoostValue) {
	}
	/**
	 * Sets the index-time boost value for a field
	 * 
	 * @param string $fieldName       The name of the field.
	 * @param float  $fieldBoostValue The index time boost value.
	 * 
	 * @return void
	 */
	public function setFieldBoost($fieldName, $fieldBoostValue) {
	}
	/**
	 * Sorts the fields within the document
	 * 
	 * @param integer $sortOrderBy   The sort criteria 
	 * @param integer $sortDirection The sort direction
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function sort($sortOrderBy, $sortDirection) {
	}
	/**
	 * Get an array representation of the input document
	 * 
	 * @return array|boolean FALSE on failure. 
	 */
	public function toArray() {
	}
}
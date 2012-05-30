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
 * Represents a Solr document retrieved from a query response.
 *
 * @category Stub
 * @package  Solr
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class SolrDocument implements ArrayAccess, Iterator, Traversable, Serializable {

	/**
	 * Default mode for sorting fields within the document.
	 * @var integer
	 */
	const SORT_DEFAULT = 1;
	/**
	 * Sorts the fields in ascending order
	 * @var integer
	 */
	const SORT_ASC = 1;
	/**
	 * Sorts the fields in descending order
	 * @var integer
	 */
	const SORT_DESC = 2;
	/**
	 * Sorts the fields by field name.
	 * @var integer
	 */
	const SORT_FIELD_NAME = 1;
	/**
	 * Sorts the fields by number of values in each field.
	 * @var integer
	 */
	const SORT_FIELD_VALUE_COUNT = 2;
	/**
	 * Sorts the fields by thier boost values.
	 * @var integer
	 */
	const SORT_FIELD_BOOST_VALUE = 4;

	/**
	 * Adds a field to the document
	 * 
	 * This method adds a field to the SolrDocument instance. 
	 * 
	 * @param string $fieldName  The name of the field 
	 * @param string $fieldValue The value of the field. 
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function addField($fieldName,  $fieldValue) {
	}
	/**
	 * Drops all the fields in the document
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function clear() {
	}
	/**
	 * Creates a copy of a SolrDocument object
	 * 
	 * Creates a copy of a SolrDocument object. Not to be called directly. 
	 * 
	 * @return void
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
	 * Retrieves the current field
	 * 
	 * @see Iterator::current()
	 * @return SolrDocumentField
	 */
	public function current() {
	}
	/**
	 * Removes a field from the document
	 *  
	 * @param string $fieldName Name of the field 
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function deleteField($fieldName) {
	}
	/**
	 * Destructor
	 * 
	 * @return void
	 */
	public function __destruct() {
	}
	/**
	 * Checks if a field exists in the document
	 * 
	 * @param string $fieldName The name of the field. 
	 * 
	 * @return boolean TRUE if the field is present and FALSE if it does not. 
	 */
	public function fieldExists($fieldName) {
	}
	
	/**
	 * Acess the field as a property
	 * 
	 * @param string $fieldName The name of the field.
	 * 
	 * @return SolrDocumentField
	 */
	public function __get($fieldName) {
	}

	/**
	 * Retrieves a field by name
	 *
	 * @param string $fieldName Name of the field. 
	 * 
	 * @return SolrDocumentField|boolean
	 */
	public function getField($fieldName) {
	}
	/**
	 * Get field count
	 * 
	 * Get the number of fields in this document. Multi-value fields are only counted once. 
	 * 
	 * @return integer|boolean The number of fields in this document or false
	 */
	public function getFieldCount() {
	}
	/**
	 * Get field names
	 * 
	 * @return array of fields names in the document. 
	 */
	public function getFieldNames() {
	}

	/**
	 * Get a SolrInputDocument equivalent of the object
	 * 
	 * This is useful if one wishes to resubmit/update a document retrieved from a query. 
	 * 
	 * @return SolrInputDocument|null
	 */
	public function getInputDocument() {
	}
	/**
	 * Checks if a field exists 
	 * 
	 * @param string $fieldName Name of the field. 
	 * 
	 * @return boolean
	 */
	public function __isset($fieldName) {
	}
	/**
	 * Retrieves the current key
	 * 
	 * @see Iterator::key()
	 * @return mixed
	 */
	public function key() {
	}
	/**
	 * Merges source to the current SolrDocument
	 * 
	 * @param SolrDocument &$sourceDoc The source document. 
	 * @param unknown_type $overwrite  If this is TRUE then fields with the same name in the destination document will be overwritten.
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function merge(SolrDocument &$sourceDoc, $overwrite) {
	}
	/**
	 * Moves the internal pointer to the next field
	 * 
	 * @see Iterator::next()
	 * @return void
	 */
	public function next() {
	}
	/**
	 * Checks if a particular field exists
	 * 
	 * This is used when the object is treated as an array. 
	 * 
	 * @param string $fieldName The name of the field. 
	 * 
	 * @see ArrayAccess::offsetExists()
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function offsetExists($fieldName) {
	}
	/**
	 * Retrieves a field
	 * 
	 * This is used to retrieve the field when the object is treated as an array. 
	 * 
	 * @param string $fieldName The name of the field.
	 * 
	 * @see ArrayAccess::offsetGet()
	 * @return SolrDocumentField
	 */
	public function offsetGet($fieldName) {
	}
	/**
	 * Adds a field to the document
	 * 
	 * Used when the object is treated as an array to add a field to the document. 
	 * 
	 * @param string $fieldName  The name of the field.
	 * @param string $fieldValue The value for this field.
	 * 
	 * @see ArrayAccess::offsetSet()
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function offsetSet($fieldName,  $fieldValue) {
	}
	/**
	 * Removes a field
	 * 
	 * Removes a field from the document. 
	 * 
	 * @param string $fieldName The name of the field.
	 * 
	 * @see ArrayAccess::offsetUnset()
	 * @return void
	 */
	public function offsetUnset($fieldName) {
	}
	/**
	 * This is an alias to SolrDocument::clear()
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function reset() {
	}
	/**
	 * Resets the internal pointer to the beginning
	 * 
	 * @see Iterator::rewind()
	 * @return void
	 */
	public function rewind() {
	}
	/**
	 * Used for custom serialization
	 * 
	 * @see Serializable::serialize()
	 * 
	 * @return string a representing the serialized Solr document. 
	 */
	public function serialize() {
	}
	/**
	 * Adds another field to the document
	 * 
	 * Used to set the fields as new properties.
	 * 
	 * @param string $fieldName  The name of the field.
	 * @param string $fieldValue The value for this field.
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function __set($fieldName,  $fieldValue) {
	}
	/**
	 * Sorts the fields in the document
	 * 
	 * @param unknown_type $sortOrderBy   The sort criteria. 
	 * @param unknown_type $sortDirection The sort direction.
	 * 
	 * @return booelan TRUE on success or FALSE on failure. 
	 */
	public function sort($sortOrderBy, $sortDirection) {
	}
	/**
	 * Returns an array representation of the document
	 * 
	 * @return array representation of the document. 
	 */
	public function toArray() {
	}
	/**
	 * Custom serialization of SolrDocument objects
	 * 
	 * @param string $serialized An XML representation of the document. 
	 * 
	 * @see Serializable::unserialize()
	 * @return void
	 */
	public function unserialize($serialized) {
	}
	/**
	 * Removes a field from the document
	 * 
	 * @param string $fieldName The name of the field.
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function __unset($fieldName) {
	}
	/**
	 * Checks if the current position internally is still valid
	 * 
	 * @see Iterator::valid()
	 * @return boolean TRUE on success and FALSE if the current position is no longer valid. 
	 */
	public function valid() {
	}
}
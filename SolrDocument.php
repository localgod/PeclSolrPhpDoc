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

	const SORT_DEFAULT = 1 ;
	const SORT_ASC = 1 ;
	const SORT_DESC = 2 ;
	const SORT_FIELD_NAME = 1 ;
	const SORT_FIELD_VALUE_COUNT = 2 ;
	const SORT_FIELD_BOOST_VALUE = 4 ;

	public function  addField($fieldName,  $fieldValue) {
	}
	public function  clear() {
	}
	public function  __clone() {
	}
	public function  __construct() {
	}
	public function  current() {
	}
	public function  deleteField($fieldName) {
	}
	public function  __destruct() {
	}
	public function  fieldExists($fieldName) {
	}
	public function   __get($fieldName) {
	}

	/**
	 * Retrieves a field by name
	 *
	 * @param string $fieldName
	 * @return SolrDocumentField
	 */
	public function   getField($fieldName) {
	}
	public function   getFieldCount() {
	}
	public function   getFieldNames() {
	}

	/**
	 *
	 * @return SolrInputDocument
	 */
	public function  getInputDocument() {
	}
	public function  __isset($fieldName) {
	}
	public function   key() {
	}
	public function  merge(SolrDocument &$sourceDoc, $overwrite) {
	}
	public function  next() {
	}
	public function  offsetExists($fieldName) {
	}
	public function   offsetGet($fieldName) {
	}
	public function  offsetSet($fieldName,  $fieldValue) {
	}
	public function  offsetUnset($fieldName) {
	}
	public function  reset() {
	}
	public function  rewind() {
	}
	public function   serialize() {
	}
	public function  __set($fieldName,  $fieldValue) {
	}
	public function  sort($sortOrderBy, $sortDirection) {
	}
	public function   toArray() {
	}
	public function  unserialize($serialized) {
	}
	public function  __unset($fieldName) {
	}
	public function  valid() {
	}
}
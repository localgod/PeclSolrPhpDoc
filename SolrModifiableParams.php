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
 * Represents a collection of name-value pairs sent to the Solr server during a request.
 *
 * @category Stub
 * @package  Solr
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class SolrModifiableParams extends SolrParams implements Serializable {
	/**
	 * Constructor
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

	/**
	 * This is an alias for SolrParams::addParam
	 *
	 * @param string $name  The name of the parameter 
	 * @param string $value The value of the parameter
	 * 
	 * @return SolrModifiableParams
	 */
	public function add($name, $value) {
	}

	/**
	 * Adds a parameter to the object
	 *
	 * @param string $name  The name of the parameter 
	 * @param string $value The value of the parameter
	 * 
	 * @return SolrModifiableParams
	 */
	public function addParam($name, $value) {
	}

	/**
	 * This is an alias for SolrParams::getParam
	 * 
	 * @param string $param_name Then name of the parameter 
	 *
	 * @return array|string depending on the type of parameter
	 */
	public function get($param_name) {
	}

	/**
	 * Get Param
	 * 
	 * @param string $param_name Then name of the parameter 
	 *
	 * @return array|string depending on the type of parameter
	 */
	public function getParam($param_name) {
	}

	/**
	 * Returns an array of non URL-encoded parameters
	 *
	 * @return array
	 */
	public function getParams() {
	}

	/**
	 * Returns an array on URL-encoded parameters
	 *
	 * @return array
	 */
	public function getPreparedParams() {
	}

	/**
	 * Used for custom serialization
	 *
	 * @return string
	 */
	public function serialize() {
	}

	/**
	 * An alias of SolrParams::setParam
	 * 
	 * @param string $name  The name of the parameter 
	 * @param string $value The value of the parameter
	 * 
	 * @return SolrModifiableParams
	 */
	public function set($name, $value) {
	}

	/**
	 * Sets the parameter to the specified value
	 * 
	 * @param string $name  The name of the parameter 
	 * @param string $value The value of the parameter
	 * 
	 * @return SolrModifiableParams
	 */
	public function setParam($name, $value) {
	}

	/**
	 * Returns all the name-value pair parameters in the object
	 * 
	 * @param boolean $url_encode Whether to return URL-encoded values 
	 *
	 * @return string
	 */
	public function toString($url_encode = false) {
	}

	/**
	 * Used for Custom serialization
	 *
	 * @param string $serialized The serialized representation of the object 
	 * 
	 * @return void
	 */
	public function unserialize($serialized) {
	}
}
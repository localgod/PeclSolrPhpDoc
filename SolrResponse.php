<?php
/**
 * Pecl solr stub
 *
 * PHP version 5
 *
 * @category Stub
 * @package  Solr
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 * @since  2012-05-30
 */
/**
 * Represents a response from the Solr server.
 *
 * @category Stub
 * @package  Solr
 * @author Johannes Skov Frandsen <localgod@heaven.dk>
 */
class SolrResponse {

	/**
	 * Documents should be parsed as SolrObject instances
	 * @var integer
	 */
	const PARSE_SOLR_OBJ = 0;
	/**
	 * Documents should be parsed as SolrDocument instances.
	 * @var integer
	 */
	const PARSE_SOLR_DOC = 1;

	/**
	 * The http status of the response.
	 * @var integer
	 */
	protected  $http_status;
	/**
	 * Whether to parse the solr documents as SolrObject or SolrDocument instances.
	 * @var integer
	 */
	protected  $parser_mode;
	/**
	 * Was there an error during the request
	 * @var boolean
	 */
	protected  $success;
	/**
	 * Detailed message on http status
	 * @var string
	 */
	protected  $http_status_message;
	/**
	 * The request URL
	 * @var string
	 */
	protected  $http_request_url;
	/**
	 * A string of raw headers sent during the request.
	 * @var string
	 */
	protected  $http_raw_request_headers;
	/**
	 * The raw request sent to the server
	 * @var string
	 */
	protected  $http_raw_request;
	/**
	 * Response headers from the Solr server.
	 * @var array
	 */
	protected  $http_raw_response_headers;
	/**
	 * The response message from the server.
	 * @var string
	 */
	protected  $http_raw_response;
	/**
	 * The response in PHP serialized format.
	 * @var mixed
	 */
	protected  $http_digested_response;

	/**
	 * Constructor
	 * 
	 * @return void
	 */
	public function __construct() {
	}
	/**
	 * Destructor
	 * 
	 * @return void
	 */
	public function __destruct() {
	}

	/**
	 * Get the XML response as serialized PHP data
	 *
	 * @return string
	 */
	public function getDigestedResponse() {
	}
	/**
	 * Get the HTTP status of the response
	 * 
	 * @return integer
	 */
	public function getHttpStatus() {
	}
	/**
	 * Get more details on the HTTP status
	 * 
	 * @return mixed
	 */
	public function getHttpStatusMessage() {
	}
	/**
	 * Get the raw request sent to the Solr server
	 * 
	 * @return string
	 */
	public function getRawRequest() {
	}
	/**
	 * Get the raw request headers sent to the Solr server
	 * 
	 * @return array
	 */
	public function getRawRequestHeaders() {
	}
	/**
	 * Get the raw response from the server
	 * 
	 * @return string
	 */
	public function getRawResponse() {
	}
	/**
	 * Get the raw response headers from the server
	 * 
	 * @return array
	 */
	public function getRawResponseHeaders() {
	}
	/**
	 * Get the full URL the request was sent to
	 * 
	 * @return string
	 */
	public function getRequestUrl() {
	}
	/**
	 * Get a SolrObject representing the XML response from the server
	 * 
	 * @return SolrObject
	 */
	public function getResponse() {
	}
	/**
	 * Sets the parse mode
	 * 
	 * @param integer $parser_mode SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. 
	 *                             SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.
	 * 
	 * @return boolean TRUE on success or FALSE on failure. 
	 */
	public function setParseMode($parser_mode = 0) {
	}
	/**
	 * Was the request a success
	 * 
	 * @return boolean TRUE if it was successful and FALSE if it was not. 
	 */
	public function success() {
	}
}

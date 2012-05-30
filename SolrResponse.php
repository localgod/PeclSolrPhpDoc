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
 * Represents a response from the Solr server.
 *
 * @category Stub
 * @package  Solr
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class SolrResponse {

	const PARSE_SOLR_OBJ = 0 ;
	const PARSE_SOLR_DOC = 1 ;

	protected  $http_status ;
	protected  $parser_mode ;
	protected  $success ;
	protected  $http_status_message ;
	protected  $http_request_url ;
	protected  $http_raw_request_headers ;
	protected  $http_raw_request ;
	protected  $http_raw_response_headers ;
	protected  $http_raw_response ;
	protected  $http_digested_response ;

	public function   __construct() {
	}
	public function   __destruct() {
	}

	public function   getDigestedResponse() {
	}
	public function   getHttpStatus() {
	}
	public function   getHttpStatusMessage() {
	}
	public function   getRawRequest() {
	}
	public function   getRawRequestHeaders() {
	}
	public function   getRawResponse() {
	}
	public function   getRawResponseHeaders() {
	}
	public function   getRequestUrl() {
	}
	public function   getResponse() {
	}
	public function   setParseMode($parser_mode) {
	}
	public function   success() {
	}
}

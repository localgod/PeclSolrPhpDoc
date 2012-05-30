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
 * Contains utility methods for retrieving the current extension version and preparing query phrases.
 *
 * Also contains method for escaping query strings and parsing XML responses.
 *
 * @category Stub
 * @package  Solr
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
abstract class SolrUtils {
	/**
	 * Parses an response XML string into a SolrObject
	 *
	 * @param string  $xmlresponse The XML response string from the Solr server.
	 * @param integer $parse_mode  Use SolrResponse::PARSE_SOLR_OBJ or SolrResponse::PARSE_SOLR_DOC
	 *
	 * @return SolrObject
	 */
	public static function digestXmlResponse($xmlresponse, $parse_mode) {
	}

	/**
	 * Escapes a lucene query string
	 *
	 * @param string $str This is the query string to be escaped.
	 *
	 * @return string|boolean
	 */
	public static function escapeQueryChars($str) {
	}

	/**
	 * Get solr version
	 *
	 * @return string The current Solr version.
	 */
	public static function getSolrVersion() {
	}

	/**
	 * Prepares a phrase from an unescaped lucene string.
	 *
	 * @param string $str The lucene phrase
	 * 
	 * @return string The phrase contained in double quotes. 
	 */
	public static function queryPhrase($str) {
	}
}
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
 * Used to send requests to a Solr server. Currently, cloning and serialization of SolrClient instances is not supported.
 *
 * @category Stub
 * @package  Solr
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 */
class SolrClient {
	/**
	 * Used when updating the search servlet.
	 * @var integer
	 */
	const SEARCH_SERVLET_TYPE = 1;
	/**
	 * Used when updating the update servlet.
	 * @var integer
	 */
	const UPDATE_SERVLET_TYPE = 2;
	/**
	 * Used when updating the threads servlet.
	 * @var integer
	 */
	const THREADS_SERVLET_TYPE = 4;
	/**
	 * Used when updating the ping servlet.
	 * @var integer
	 */
	const PING_SERVLET_TYPE = 8;
	/**
	 * Used when updating the terms servlet.
	 * @var integer
	 */
	const TERMS_SERVLET_TYPE = 16;
	/**
	 * This is the intial value for the search servlet.
	 * @var string
	 */
	const DEFAULT_SEARCH_SERVLET = 'select';
	/**
	 * This is the intial value for the update servlet.
	 * @var string
	 */
	const DEFAULT_UPDATE_SERVLET = 'update';
	/**
	 * This is the intial value for the threads servlet.
	 * @var string
	 */
	const DEFAULT_THREADS_SERVLET = 'admin/threads';
	/**
	 * This is the intial value for the ping servlet.
	 * @var string
	 */
	const DEFAULT_PING_SERVLET = 'admin/ping';
	/**
	 * This is the intial value for the terms servlet used for the TermsComponent
	 * @var string
	 */
	const DEFAULT_TERMS_SERVLET = 'terms';

	/**
	 * Constructor for the SolrClient object
	 *
	 * @param array $clientOptions Array with options
	 *
	 * @return void
	 */
	public function __construct(array $clientOptions) {
	}

	/**
	 * Destructor for SolrClient
	 *
	 * @return void
	 */
	public function __destruct() {
	}

	/**
	 * Adds a document to the index
	 *
	 * @param SolrInputDocument &$doc         The SolrInputDocument instance.
	 * @param boolean           $allowDups    If FALSE duplicates will be overwritten.
	 * @param integer           $commitWithin Number of milliseconds within which to commit this document. Available since Solr 1.4
	 *
	 * @return SolrUpdateResponse
	 */
	public function addDocument(SolrInputDocument &$doc, $allowDups, $commitWithin) {
	}

	/**
	 * Adds a collection of SolrInputDocument instances to the index
	 *
	 * @param SolrInputDocument[] &$docs        An array containing the collection of SolrInputDocument instances. This array must be an actual variable.
	 * @param boolean             $allowDups    If FALSE duplicates will be overwritten.
	 * @param integer             $commitWithin Number of milliseconds within which to commit this document. Available since Solr 1.4
	 *
	 * @return SolrUpdateResponse
	 */
	public function addDocuments(array &$docs, $allowDups, $commitWithin) {
	}


	/**
	 * Finalizes all add/deletes made to the index
	 *
	 * @param integer $maxSegments  Optimizes down to at most this number of segments. Since Solr 1.3
	 * @param boolean $waitFlush    Block until index changes are flushed to disk.
	 * @param boolean $waitSearcher Block until a new searcher is opened and registered as the main query searcher, making the changes visible.
	 *
	 * @return SolrUpdateResponse
	 */
	public function commit($maxSegments = 1, $waitFlush = true, $waitSearcher = true) {
	}

	/**
	 * Deletes the document with the specified ID.
	 *
	 * Where ID is the value of the uniqueKey field declared in the schema
	 *
	 * @param string $id The value of the uniqueKey field declared in the schema
	 *
	 * @return SolrUpdateResponse
	 */
	public function deleteById($id) {
	}

	/**
	 * Deletes a collection of documents with the specified set of ids
	 *
	 * @param array $ids An array of IDs representing the uniqueKey field declared in the schema for each document to be deleted.
	 *                   This must be an actual php variable.
	 *
	 * @return SolrUpdateResponse
	 */
	public function deleteByIds(array $ids) {
	}

	/**
	 * Removes all documents matching any of the queries
	 *
	 * @param array $queries The array of queries. This must be an actual php variable.
	 *
	 * @return SolrUpdateResponse
	 */
	public function deleteByQueries(array $queries) {
	}

	/**
	 * Deletes all documents matching the given query
	 *
	 * @param string $query The query
	 *
	 * @return SolrUpdateResponse
	 */
	public function deleteByQuery($query) {
	}

	/**
	 * Returns the debug data for the last connection attempt
	 *
	 * @return string
	 */
	public function getDebug() {
	}

	/**
	 * Returns the client options set internally
	 *
	 * @return array
	 */
	public function getOptions() {
	}

	/**
	 * Defragments the index for faster search performance
	 *
	 * @param integer $maxSegments  Optimizes down to at most this number of segments. Since Solr 1.3
	 * @param boolean $waitFlush    Block until index changes are flushed to disk.
	 * @param boolean $waitSearcher Block until a new searcher is opened and registered as the main query searcher, making the changes visible.
	 *
	 * @return SolrUpdateResponse
	 */
	public function optimize($maxSegments = 1, $waitFlush = true, $waitSearcher = true) {
	}

	/**
	 * Checks if Solr server is still up
	 *
	 * @return SolrPingResponse
	 */
	public function ping() {
	}

	/**
	 * Sends a query to the server
	 *
	 * @param SolrParams &$query A SolrParam object. It is recommended to use SolrQuery for advanced queries.
	 *
	 * @return SolrQueryResponse
	 */
	public function query(SolrParams &$query) {
	}

	/**
	 * Sends a raw XML update request to the server
	 *
	 * @param string $raw_request An XML string with the raw request to the server.
	 *
	 * @return SolrUpdateResponse
	 */
	public function request($raw_request) {
	}

	/**
	 * Rollbacks all add/deletes made to the index since the last commit
	 *
	 * @return SolrUpdateResponse
	 */
	public function rollback() {
	}

	/**
	 * Changes the specified servlet type to a new value
	 *
	 * @param integer $type  One of the following :
	 *                       - SolrClient::SEARCH_SERVLET_TYPE
	 *                       - SolrClient::UPDATE_SERVLET_TYPE
	 *                       - SolrClient::THREADS_SERVLET_TYPE
	 *                       - SolrClient::PING_SERVLET_TYPE
	 *                       - SolrClient::TERMS_SERVLET_TYPE
	 * @param string  $value The new value for the servlet
	 * 
	 * @return boolean
	 **/
	public function setServlet($type, $value) {
	}

	/**
	 * Checks the threads status
	 * 
	 * @return SolrGenericResponse
	 */
	public function threads() {
	}
}
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
class SolrQuery extends SolrModifiableParams implements Serializable {

	/* Constants */
	const ORDER_ASC = 0 ;
	const ORDER_DESC = 1 ;
	const FACET_SORT_INDEX = 0 ;
	const FACET_SORT_COUNT = 1 ;
	const TERMS_SORT_INDEX = 0 ;
	const TERMS_SORT_COUNT = 1 ;

	/**
	 *
	 * @param string $q Query string
	 */
	public function  __construct($q = null) {
	}

	public function  __destruct() {
	}

	/**
	 * This is an alias for SolrParams::addParam
	 *
	 * @param $name
	 * @param $value
	 * @return SolrQuery
	 */
	public function add($name, $value) {
	}

	/**
	 * Adds a parameter to the object
	 *
	 * @param $name
	 * @param $value
	 * @return SolrQuery
	 */
	public function addParam($name, $value) {
	}

	/**
	 * This is an alias for SolrParams::getParam
	 *
	 * Returns an array or string depending on the type of parameter
	 *
	 * @return mixed
	 */
	public function get($param_name) {
	}

	/**
	 * Get Param
	 *
	 * Returns an array or string depending on the type of parameter
	 *
	 * @return mixed
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
	 *
	 * @param $name
	 * @param $value
	 * @return SolrQuery
	 */
	public function set($name, $value) {
	}

	/**
	 *
	 * @param $name
	 * @param $value
	 * @return SolrQuery
	 */
	public function setParam($name, $value) {
	}

	/**
	 * Returns all the name-value pair parameters in the object
	 *
	 * @return string
	 */
	public function toString($url_encode) {
	}

	/**
	 * Used for Custom serialization
	 *
	 * @param string $serialized
	 * @return void
	 */
	public function unserialize($serialized) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addFacetDateField($dateField) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addFacetDateOther($value, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addFacetField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addFacetQuery($facetQuery) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addFilterQuery($fq) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addHighlightField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addMltField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addMltQueryField($field, $boost) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addSortField($field, $order) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addStatsFacet($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  addStatsField($field) {
	}

	public function  getFacet() {
	}
	public function  getFacetDateEnd($field_override) {
	}
	public function  getFacetDateFields() {
	}
	public function  getFacetDateGap($field_override) {
	}
	public function  getFacetDateHardEnd($field_override) {
	}
	public function  getFacetDateOther($field_override) {
	}
	public function  getFacetDateStart($field_override) {
	}
	public function  getFacetFields() {
	}
	public function  getFacetLimit($field_override) {
	}
	public function  getFacetMethod($field_override) {
	}
	public function  getFacetMinCount($field_override) {
	}
	public function  getFacetMissing($field_override) {
	}
	public function  getFacetOffset($field_override) {
	}
	public function  getFacetPrefix($field_override) {
	}
	public function  getFacetQueries() {
	}
	public function  getFacetSort($field_override) {
	}
	public function  getFields() {
	}
	public function  getFilterQueries() {
	}
	public function  getHighlight() {
	}
	public function  getHighlightAlternateField($field_override) {
	}
	public function  getHighlightFields() {
	}
	public function  getHighlightFormatter($field_override) {
	}
	public function  getHighlightFragmenter($field_override) {
	}
	public function  getHighlightFragsize($field_override) {
	}
	public function  getHighlightHighlightMultiTerm() {
	}
	public function  getHighlightMaxAlternateFieldLength($field_override) {
	}
	public function  getHighlightMaxAnalyzedChars() {
	}
	public function  getHighlightMergeContiguous($field_override) {
	}
	public function  getHighlightRegexMaxAnalyzedChars() {
	}
	public function  getHighlightRegexPattern() {
	}
	public function  getHighlightRegexSlop() {
	}
	public function  getHighlightRequireFieldMatch() {
	}
	public function  getHighlightSimplePost($field_override) {
	}
	public function  getHighlightSimplePre($field_override) {
	}
	public function  getHighlightSnippets($field_override) {
	}
	public function  getHighlightUsePhraseHighlighter() {
	}
	public function  getMlt() {
	}
	public function  getMltBoost() {
	}
	public function  getMltCount() {
	}
	public function  getMltFields() {
	}
	public function  getMltMaxNumQueryTerms() {
	}
	public function  getMltMaxNumTokens() {
	}
	public function  getMltMaxWordLength() {
	}
	public function  getMltMinDocFrequency() {
	}
	public function  getMltMinTermFrequency() {
	}
	public function  getMltMinWordLength() {
	}
	public function  getMltQueryFields() {
	}
	public function  getQuery() {
	}
	public function  getRows() {
	}
	public function  getSortFields() {
	}
	public function  getStart() {
	}
	public function  getStats() {
	}
	public function  getStatsFacets() {
	}
	public function  getStatsFields() {
	}
	public function  getTerms() {
	}
	public function  getTermsField() {
	}
	public function  getTermsIncludeLowerBound() {
	}
	public function  getTermsIncludeUpperBound() {
	}
	public function  getTermsLimit() {
	}
	public function  getTermsLowerBound() {
	}
	public function  getTermsMaxCount() {
	}
	public function  getTermsMinCount() {
	}
	public function  getTermsPrefix() {
	}
	public function  getTermsReturnRaw() {
	}
	public function  getTermsSort() {
	}
	public function  getTermsUpperBound() {
	}
	public function  getTimeAllowed() {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeFacetDateField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeFacetDateOther($value, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeFacetField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeFacetQuery($value) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeFilterQuery($fq) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeHighlightField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeMltField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeMltQueryField($queryField) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeSortField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeStatsFacet($value) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  removeStatsField($field) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setEchoHandler($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setEchoParams($type) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setExplainOther($query) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacet($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetDateEnd($value, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetDateGap($value, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetDateHardEnd($value, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetDateStart($value, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetEnumCacheMinDefaultFrequency($frequency, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetLimit($limit, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetMethod($method, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetMinCount($mincount, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetMissing($flag, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetOffset($offset, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetPrefix($prefix, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setFacetSort($facetSort, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlight($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightAlternateField($field, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightFormatter($formatter, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightFragmenter($fragmenter, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightFragsize($size, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightHighlightMultiTerm($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightMaxAlternateFieldLength($fieldLength, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightMaxAnalyzedChars($value) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightMergeContiguous($flag, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightRegexMaxAnalyzedChars($maxAnalyzedChars) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightRegexPattern($value) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightRegexSlop(float $factor) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightRequireFieldMatch($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightSimplePost($simplePost, $field_override) {
	}


	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightSimplePre($simplePre, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightSnippets($value, $field_override) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setHighlightUsePhraseHighlighter($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setMlt($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setMltBoost($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setMltCount($count) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setMltMaxNumQueryTerms($value) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setMltMaxNumTokens($value) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setMltMaxWordLength($maxWordLength) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setMltMinDocFrequency($minDocFrequency) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setMltMinTermFrequency($minTermFrequency) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setMltMinWordLength($minWordLength) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setOmitHeader($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setQuery($query) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setRows($rows) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setShowDebugInfo($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setStart($start) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setStats($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTerms($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsField($fieldname) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsIncludeLowerBound($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsIncludeUpperBound($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsLimit($limit) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsLowerBound($lowerBound) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsMaxCount($frequency) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsMinCount($frequency) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsPrefix($prefix) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsReturnRaw($flag) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsSort($sortType) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTermsUpperBound($upperBound) {
	}

	/**
	 *
	 * @return SolrQuery
	 */
	public function  setTimeAllowed($timeAllowed) {
	}
}
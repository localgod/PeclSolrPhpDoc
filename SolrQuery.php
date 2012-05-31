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
	/**
	 * Used to specify that the sorting should be in acending order
	 * @var integer
	 */
	const ORDER_ASC = 0;
	/**
	 * Used to specify that the sorting should be in descending order
	 * @var integer
	 */
	const ORDER_DESC = 1;
	/**
	 * Used to specify that the facet should sort by index
	 * @var integer
	 */
	const FACET_SORT_INDEX = 0;
	/**
	 * Used to specify that the facet should sort by count
	 * @var integer
	 */
	const FACET_SORT_COUNT = 1;
	/**
	 * Used in the TermsComponent
	 * @var integer
	 */
	const TERMS_SORT_INDEX = 0;
	/**
	 * Used in the TermsComponent
	 * @var integer
	 */
	const TERMS_SORT_COUNT = 1;

	/**
	 * Constructer
	 *
	 * @param string $q Query string Optional search query
	 *
	 * @return void
	 */
	public function __construct($q = null) {
	}

	/**
	 * Deconstructor
	 *
	 * @return void
	 * @see SolrModifiableParams::__destruct()
	 */
	public function __destruct() {
	}

	/**
	 * This is an alias for SolrParams::addParam
	 *
	 * @param string $name  The name of the parameter
	 * @param string $value The value of the parameter
	 *
	 * @return SolrQuery
	 * @see SolrModifiableParams::add()
	 */
	public function add($name, $value) {
	}

	/**
	 * Adds a parameter to the object
	 *
	 * @param string $name  The name of the parameter
	 * @param string $value The value of the parameter
	 *
	 * @return SolrQuery
	 * @see SolrModifiableParams::addParam()
	 */
	public function addParam($name, $value) {
	}

	/**
	 * This is an alias for SolrParams::getParam
	 *
	 * @param string $param_name Then name of the parameter
	 *
	 * @return array|string depending on the type of parameter
	 * @see SolrModifiableParams::get()
	 */
	public function get($param_name) {
	}

	/**
	 * Get Param
	 *
	 * @param string $param_name Then name of the parameter
	 *
	 * @return array|string depending on the type of parameter
	 * @see SolrModifiableParams::getParam()
	 */
	public function getParam($param_name) {
	}

	/**
	 * Returns an array of non URL-encoded parameters
	 *
	 * @return array
	 * @see SolrModifiableParams::getParams()
	 */
	public function getParams() {
	}

	/**
	 * Returns an array on URL-encoded parameters
	 *
	 * @return array
	 * @see SolrModifiableParams::getPreparedParams()
	 */
	public function getPreparedParams() {
	}

	/**
	 * Used for custom serialization
	 *
	 * @return string
	 * @see SolrModifiableParams::serialize()
	 */
	public function serialize() {
	}

	/**
	 * An alias of SolrParams::setParam
	 * 
	 * @param string $name  The name of the parameter 
	 * @param string $value The value of the parameter
	 * 
	 * @return SolrQuery
	 * @see SolrModifiableParams::set()
	 */
	public function set($name, $value) {
	}

	/**
	 * Sets the parameter to the specified value
	 * 
	 * @param string $name  The name of the parameter 
	 * @param string $value The value of the parameter
	 * 
	 * @return SolrQuery
	 * @see SolrModifiableParams::setParam()
	 */
	public function setParam($name, $value) {
	}

	/**
	 * Returns all the name-value pair parameters in the object
	 * 
	 * @param boolean $url_encode Whether to return URL-encoded values 
	 *
	 * @return string
	 * @see SolrModifiableParams::toString()
	 */
	public function toString($url_encode) {
	}

	/**
	 * Used for Custom serialization
	 *
	 * @param string $serialized The serialized representation of the object 
	 * 
	 * @return void
	 * @see SolrModifiableParams::unserialize()
	 */
	public function unserialize($serialized) {
	}

	/**
	 * Maps to facet.date
	 *
	 * @param string $dateField The name of the date field.
	 *
	 * @return SolrQuery
	 */
	public function addFacetDateField($dateField) {
	}

	/**
	 * Adds another facet.date.other parameter
	 *
	 * Sets the facet.date.other parameter. Accepts an optional field override
	 *
	 * @param string $value          The value to use.
	 * @param string $field_override The field name for the override.
	 *
	 * @return SolrQuery
	 */

	public function addFacetDateOther($value, $field_override = '') {
	}

	/**
	 * Adds another field to the facet
	 *
	 * @param string $field The name of the field
	 *
	 * @return SolrQuery
	 */
	public function addFacetField($field) {
	}

	/**
	 * Adds a facet query
	 *
	 * @param string $facetQuery The facet query
	 *
	 * @return SolrQuery
	 */
	public function addFacetQuery($facetQuery) {
	}

	/**
	 * Specifies which fields to return in the result
	 *
	 * This method is used to used to specify a set of fields to return,
	 * thereby restricting the amount of data returned in the response.
	 * It should be called multiple time, once for each field name.
	 *
	 * @param string $field The name of the field
	 *
	 * @return SolrQuery
	 */
	public function addField($field) {
	}

	/**
	 * Specifies a filter query
	 * 
	 * @param string $fq The filter query
	 * 
	 * @return SolrQuery
	 */
	public function addFilterQuery($fq) {
	}

	/**
	 * Maps to hl.fl
	 * 
	 * Maps to hl.fl. This is used to specify that highlighted snippets should be generated for a particular field 
	 * 
	 * @param string $field Name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function addHighlightField($field) {
	}

	/**
	 * Sets a field to use for similarity
	 * 
	 * @param string $field Name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function addMltField($field) {
	}

	/**
	 * Maps to mlt.qf
	 * 
	 * Maps to mlt.qf. It is used to specify query fields and their boosts 
	 * 
	 * @param string $field Name of the field 
	 * @param float  $boost Its boost value 
	 * 
	 * @return SolrQuery
	 */
	public function addMltQueryField($field, $boost) {
	}

	/**
	 * Used to control how the results should be sorted. 
	 * 
	 * @param string  $field Name of the field 
	 * @param integer $order The sort direction. This should be either SolrQuery::ORDER_ASC or SolrQuery::ORDER_DESC. 
	 *  
	 * @return SolrQuery
	 */
	public function addSortField($field, $order) {
	}

	/**
	 * Requests a return of sub results for values within the given facet 
	 * 
	 * @param string $field Name of the field
	 * 
	 * @return SolrQuery
	 */
	public function addStatsFacet($field) {
	}

	/**
	 * Maps to stats.field parameter
	 * 
	 * This methods adds another stats.field parameter. 
	 * 
	 * @param string $field Name of the field
	 * 
	 * @return SolrQuery
	 */
	public function addStatsField($field) {
	}

	/**
	 * Get the value of the facet parameter
	 * 
	 * @return boolean|null
	 */
	public function getFacet() {
	}
	/**
	 * Get the value for the facet.date.end parameter
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetDateEnd($field_override) {
	}
	/**
	 * Get all the facet.date fields
	 * 
	 * @return array|null
	 */
	public function getFacetDateFields() {
	}
	/**
	 * Get the value of the facet.date.gap parameter
	 * 
	 * It accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetDateGap($field_override) {
	}
	/**
	 * Get the value of the facet.date.hardend parameter
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetDateHardEnd($field_override) {
	}
	/**
	 * Get the value for the facet.date.other parameter
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetDateOther($field_override) {
	}
	/**
	 * Get the lower bound for the first date range for all date faceting on this field
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetDateStart($field_override) {
	}
	/**
	 * Get all the facet fields
	 * 
	 * @return array|null
	 */
	public function getFacetFields() {
	}
	/**
	 * Get the maximum number of constraint counts that should be returned for the facet fields
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetLimit($field_override) {
	}
	/**
	 * Get the value of the facet.method parameter
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetMethod($field_override) {
	}
	/**
	 * Get the minimum counts for facet fields should be included in the response
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetMinCount($field_override) {
	}
	/**
	 * Get the current state of the facet.missing parameter
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetMissing($field_override) {
	}
	/**
	 * Get an offset into the list of constraints to be used for pagination
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetOffset($field_override) {
	}
	/**
	 * Get the facet prefix
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getFacetPrefix($field_override) {
	}
	/**
	 * Get all the facet queries
	 * 
	 * @return array|null
	 */
	public function getFacetQueries() {
	}
	/**
	 * Get facet sort type
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return integer|null
	 */
	public function getFacetSort($field_override) {
	}
	/**
	 * Get the list of fields that will be returned in the response
	 * 
	 * @return integer|null
	 */
	public function getFields() {
	}
	/**
	 * Get an array of filter queries
	 * 
	 * @return array|null
	 */
	public function getFilterQueries() {
	}
	/**
	 * Get the state of the hl parameter
	 * 
	 * @return boolean on success and NULL if not set. 
	 */
	public function getHighlight() {
	}
	/**
	 * Get the highlight field to use as backup or default
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getHighlightAlternateField($field_override) {
	}
	/**
	 * Get all the fields that Solr should generate highlighted snippets for
	 * 
	 * @return array|null
	 */
	public function getHighlightFields() {
	}
	/**
	 * Get the formatter for the highlighted output
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getHighlightFormatter($field_override) {
	}
	/**
	 * Get the text snippet generator for highlighted text
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getHighlightFragmenter($field_override) {
	}
	/**
	 * Get the number of characters of fragments to consider for highlighting
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return integer|null
	 */
	public function getHighlightFragsize($field_override) {
	}
	/**
	 * Get whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
	 * 
	 * @return boolean|null
	 */
	public function getHighlightHighlightMultiTerm() {
	}
	/**
	 * Get the maximum number of characters of the field to return
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return integer|null
	 */
	public function getHighlightMaxAlternateFieldLength($field_override) {
	}
	/**
	 * Get the maximum number of characters into a document to look for suitable snippets
	 * 
	 * @return integer|null
	 */
	public function getHighlightMaxAnalyzedChars() {
	}
	/**
	 * Get whether or not the collapse contiguous fragments into a single fragment
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return boolean|null
	 */
	public function getHighlightMergeContiguous($field_override) {
	}
	/**
	 * Get the maximum number of characters from a field when using the regex fragmenter
	 * 
	 * @return integer|null
	 */
	public function getHighlightRegexMaxAnalyzedChars() {
	}
	/**
	 * Get the regular expression for fragmenting
	 * 
	 * @return string|null
	 */
	public function getHighlightRegexPattern() {
	}
	/**
	 * Get the deviation factor from the ideal fragment size
	 * 
	 * @return double|null
	 */
	public function getHighlightRegexSlop() {
	}
	/**
	 * Get if a field will only be highlighted if the query matched in this particular field
	 * 
	 * @return boolean|null
	 */
	public function getHighlightRequireFieldMatch() {
	}
	/**
	 * Get the text which appears after a highlighted term
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getHighlightSimplePost($field_override) {
	}
	/**
	 * Get the text which appears before a highlighted term
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return string|null
	 */
	public function getHighlightSimplePre($field_override) {
	}
	/**
	 * Get the maximum number of highlighted snippets to generate per field
	 * 
	 * Accepts an optional field override 
	 * 
	 * @param string $field_override The name of the field 
	 * 
	 * @return integer|null
	 */
	public function getHighlightSnippets($field_override) {
	}
	/**
	 * Get the state of the hl.usePhraseHighlighter parameter
	 * 
	 * @return boolean|null
	 */
	public function getHighlightUsePhraseHighlighter() {
	}
	/**
	 * Get whether or not MoreLikeThis results should be enabled
	 * 
	 * @return boolean|null
	 */
	public function getMlt() {
	}
	/**
	 * Get whether or not the query will be boosted by the interesting term relevance
	 * 
	 * @return boolean|null
	 */
	public function getMltBoost() {
	}
	/**
	 * Get the number of similar documents to return for each result
	 * 
	 * @return integer|null
	 */
	public function getMltCount() {
	}
	/**
	 * Get all the fields to use for similarity
	 * 
	 * @return array|null
	 */
	public function getMltFields() {
	}
	/**
	 * Get the maximum number of query terms that will be included in any generated query
	 * 
	 * @return integer|null
	 */
	public function getMltMaxNumQueryTerms() {
	}
	/**
	 * Get the maximum number of tokens to parse in each document field that is not stored with TermVector support
	 * 
	 * @return integer|null
	 */
	public function getMltMaxNumTokens() {
	}
	/**
	 * Get the maximum word length above which words will be ignored
	 * 
	 * @return integer|null
	 */
	public function getMltMaxWordLength() {
	}
	/**
	 * Get the treshold frequency at which words will be ignored which do not occur in at least this many docs
	 * 
	 * @return integer|null
	 */
	public function getMltMinDocFrequency() {
	}
	/**
	 * Get the treshold frequency at which words will be ignored which do not occur in at least this many docs
	 * 
	 * @return integer|null
	 */
	public function getMltMinTermFrequency() {
	}
	/**
	 * Get the treshold frequency at which words will be ignored which do not occur in at least this many docs
	 * 
	 * @return integer|null
	 */
	public function getMltMinWordLength() {
	}
	/**
	 * Get the query fields and their boosts
	 * 
	 * @return array|null
	 */
	public function getMltQueryFields() {
	}
	/**
	 * Get the main query
	 * 
	 * @return string|null
	 */
	public function getQuery() {
	}
	/**
	 * Get the maximum number of documents
	 * 
	 * @return integer|null
	 */
	public function getRows() {
	}
	/**
	 * Get all the sort fields
	 * 
	 * @return array|null
	 */
	public function getSortFields() {
	}
	/**
	 * Get the offset in the complete result set 
	 * 
	 * @return integer|null
	 */
	public function getStart() {
	}
	/**
	 * Get whether or not stats is enabled
	 * 
	 * @return boolean|null
	 */
	public function getStats() {
	}
	/**
	 * Get all the stats facets that were set
	 *
	 * @return array|null
	 */
	public function getStatsFacets() {
	}
	/**
	 * Get all the statistics fields
	 *
	 * @return array|null
	 */
	public function getStatsFields() {
	}
	/**
	 * Get whether or not the TermsComponent is enabled
	 *
	 * @return boolean|null
	 */
	public function getTerms() {
	}
	/**
	 * Get the field from which the terms are retrieved
	 *
	 * @return string|null
	 */
	public function getTermsField() {
	}
	/**
	 * Get whether or not to include the lower bound in the result set
	 *
	 * @return boolean|null
	 */
	public function getTermsIncludeLowerBound() {
	}
	/**
	 * Get whether or not to include the upper bound term in the result set
	 *
	 * @return boolean|null
	 */
	public function getTermsIncludeUpperBound() {
	}
	/**
	 * Get the maximum number of terms Solr should return
	 *
	 * @return integr|null
	 */
	public function getTermsLimit() {
	}
	/**
	 * Get the term to start at
	 *
	 * @return string|null
	 */
	public function getTermsLowerBound() {
	}
	/**
	 * Get the maximum document frequency
	 *
	 * @return integer|null
	 */
	public function getTermsMaxCount() {
	}
	/**
	 * Get the minimum document frequency to return in order to be included
	 *
	 * @return integer|null
	 */
	public function getTermsMinCount() {
	}
	/**
	 * Get the term prefix
	 *
	 * @return string|null
	 */
	public function getTermsPrefix() {
	}
	/**
	 * Get whether or not to return raw characters
	 *
	 * @return boolean|null
	 */
	public function getTermsReturnRaw() {
	}
	/**
	 * Get an integer indicating how terms are sorted
	 *
	 * @return integer|null
	 */
	public function getTermsSort() {
	}
	/**
	 * Get the term to stop at
	 *
	 * @return integer|null
	 */
	public function getTermsUpperBound() {
	}
	/**
	 * Get the time in milliseconds allowed for the query to finish
	 *
	 * @return integer|null
	 */
	public function getTimeAllowed() {
	}

	/**
	 * Removes one of the facet date fields
	 * 
	 * @param string $field The name of the date field to remove 
	 * 
	 * @return SolrQuery
	 */
	public function removeFacetDateField($field) {
	}

	/**
	 * Removes one of the facet.date.other parameters
	 * 
	 * @param string $value          The value 
	 * @param string $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function removeFacetDateOther($value, $field_override = '') {
	}

	/**
	 * Removes one of the facet.date parameters
	 * 
	 * @param string $field The name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function removeFacetField($field) {
	}

	/**
	 * Removes one of the facet.query parameters
	 * 
	 * @param string $value The value
	 * 
	 * @return SolrQuery
	 */
	public function removeFacetQuery($value) {
	}

	/**
	 * Removes a field from the list of fields
	 * 
	 * @param string $field The name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function removeField($field) {
	}

	/**
	 * Removes a filter query
	 * 
	 * @param string $fq The filter query to remove 
	 * 
	 * @return SolrQuery
	 */
	public function removeFilterQuery($fq) {
	}

	/**
	 * Removes one of the fields used for highlighting
	 * 
	 * @param string $field The name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function removeHighlightField($field) {
	}

	/**
	 * Removes one of the moreLikeThis fields
	 * 
	 * @param string $field The name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function removeMltField($field) {
	}

	/**
	 * Removes one of the moreLikeThis query fields
	 * 
	 * @param string $queryField The query field 
	 * 
	 * @return SolrQuery
	 */
	public function removeMltQueryField($queryField) {
	}

	/**
	 * Removes one of the sort fields
	 * 
	 * @param string $field The name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function removeSortField($field) {
	}

	/**
	 * Removes one of the stats.facet parameters
	 * 
	 * @param string $value The value
	 * 
	 * @return SolrQuery
	 */
	public function removeStatsFacet($value) {
	}

	/**
	 * Removes one of the stats.field parameters
	 * 
	 * @param string $field The name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function removeStatsField($field) {
	}

	/**
	 * Toggles the echoHandler parameter
	 * 
	 * @param boolean $flag TRUE or FALSE
	 * 
	 * @return SolrQuery
	 */
	public function setEchoHandler($flag) {
	}

	/**
	 * Determines what kind of parameters to include in the response
	 * 
	 * Instructs Solr what kinds of Request parameters should be included in the response for debugging purposes, 
	 * legal values include: 
	 *  - none     - don't include any request parameters for debugging
	 *  - explicit - include the parameters explicitly specified by the client in the request
	 *  - all      - include all parameters involved in this request, either specified explicitly by the client, 
	 *               or implicit because of the request handler configuration.
	 * 
	 * @param string $type The type of parameters to include
	 * 
	 * @return SolrQuery
	 */
	public function setEchoParams($type) {
	}

	/**
	 * Sets the explainOther common query parameter
	 * 
	 * @param string $query The Lucene query to identify a set of documents 
	 * 
	 * @return SolrQuery
	 */
	public function setExplainOther($query) {
	}

	/**
	 * Maps to the facet parameter. Enables or disables facetting
	 * 
	 * @param boolean $flag TRUE enables faceting and FALSE disables it. 
	 * 
	 * @return SolrQuery
	 */
	public function setFacet($flag) {
	}

	/**
	 * Maps to facet.date.end
	 * 
	 * This method accepts optional field override. 
	 * 
	 * @param string $value          See facet.date.end 
	 * @param string $field_override Name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetDateEnd($value, $field_override = '') {
	}

	/**
	 * Maps to facet.date.gap
	 * 
	 * This method accepts optional field override. 
	 * 
	 * @param string $value          See facet.date.gap 
	 * @param string $field_override Name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetDateGap($value, $field_override = '') {
	}

	/**
	 * Maps to facet.date.hardend
	 * 
	 * This method accepts optional field override. 
	 * 
	 * @param string $value          See facet.date.hardend 
	 * @param string $field_override Name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetDateHardEnd($value, $field_override = '') {
	}

	/**
	 * Maps to facet.date.start
	 * 
	 * This method accepts optional field override. 
	 * 
	 * @param string $value          See facet.date.start 
	 * @param string $field_override Name of the field 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetDateStart($value, $field_override = '') {
	}

	/**
	 * Sets the minimum document frequency used for determining term count
	 * 
	 * This method accepts optional field override. 
	 * 
	 * @param integer $frequency      The minimum frequency 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetEnumCacheMinDefaultFrequency($frequency, $field_override = '') {
	}

	/**
	 * Maps to facet.limit
	 * 
	 * This method accepts optional field override. 
	 * 
	 * @param integer $limit          The maximum number of constraint counts 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetLimit($limit, $field_override = '') {
	}

	/**
	 * Specifies the type of algorithm to use when faceting a field
	 * 
	 * This method accepts optional field override. 
	 * 
	 * @param string $method         The method to use. 
	 * @param string $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetMethod($method, $field_override = '') {
	}

	/**
	 * Maps to facet.mincount
	 * 
	 * Sets the minimum counts for facet fields that should be included in the response 
	 * 
	 * @param integer $mincount       The minimum count 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetMinCount($mincount, $field_override = '') {
	}

	/**
	 * Maps to facet.missing
	 * 
	 * Used to indicate that in addition to the Term-based constraints of a facet field, a count of 
	 * all matching results which have no value for the field should be computed 
	 * 
	 * @param boolean $flag           TRUE turns this feature on. FALSE disables it. 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetMissing($flag, $field_override = '') {
	}

	/**
	 * Sets the offset into the list of constraints to allow for pagination
	 * 
	 * @param integer $offset         The offset 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetOffset($offset, $field_override = '') {
	}

	/**
	 * Specifies a string prefix with which to limits the terms on which to facet
	 * 
	 * @param string $prefix         The prefix string 
	 * @param string $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetPrefix($prefix, $field_override = '') {
	}

	/**
	 * Determines the ordering of the facet field constraints
	 * 
	 * @param integer $facetSort      Use SolrQuery::FACET_SORT_INDEX for sorting by index order or SolrQuery::FACET_SORT_COUNT for sorting by count. 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setFacetSort($facetSort, $field_override = '') {
	}

	/**
	 * Enables or disables highlighting
	 * 
	 * Setting it to TRUE enables highlighted snippets to be generated in the query response.
	 * Setting it to FALSE disables highlighting
	 * 
	 * @param boolean $flag Enable or disable highlighting 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlight($flag) {
	}

	/**
	 * Specifies the backup field to use
	 * 
	 * If a snippet cannot be generated because there were no matching terms, 
	 * one can specify a field to use as the backup or default summary 
	 * 
	 * @param string $field          The name of the backup field 
	 * @param string $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightAlternateField($field, $field_override = '') {
	}

	/**
	 * Specify a formatter for the highlight output
	 * 
	 * @param string $formatter      Currently the only legal value is "simple" 
	 * @param string $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightFormatter($formatter, $field_override = '') {
	}

	/**
	 * Sets a text snippet generator for highlighted text
	 * 
	 * Specify a text snippet generator for highlighted text. 
	 * 
	 * @param string $fragmenter     The standard fragmenter is gap. Another option is regex, which tries to create 
	 *                               fragments that resembles a certain regular expression 
	 * @param string $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightFragmenter($fragmenter, $field_override = '') {
	}

	/**
	 * The size of fragments to consider for highlighting
	 * 
	 * Sets the size, in characters, of fragments to consider for highlighting. 
	 * "0" indicates that the whole field value should be used (no fragmenting). 
	 * 
	 * @param integer $size           The size, in characters, of fragments to consider for highlighting 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightFragsize($size, $field_override = '') {
	}

	/**
	 * Use SpanScorer to highlight phrase terms
	 * 
	 * Use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document. 
	 * 
	 * @param boolean $flag Whether or not to use SpanScorer to highlight phrase terms only when they appear 
	 *                      within the query phrase in the document. 
	 *                      
	 * @return SolrQuery
	 */
	public function setHighlightHighlightMultiTerm($flag) {
	}

	/**
	 * Sets the maximum number of characters of the field to return
	 * 
	 * If SolrQuery::setHighlightAlternateField() was passed the value TRUE, 
	 * this parameter specifies the maximum number of characters of the field to return 
	 * Any value less than or equal to 0 means unlimited. 
	 * 
	 * @param integer $fieldLength    The length of the field 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightMaxAlternateFieldLength($fieldLength, $field_override = '') {
	}

	/**
	 * Specifies the number of characters into a document to look for suitable snippets
	 * 
	 * @param integer $value The number of characters into a document to look for suitable snippets 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightMaxAnalyzedChars($value) {
	}

	/**
	 * Whether or not to collapse contiguous fragments into a single fragment
	 * 
	 * @param boolean $flag           Whether or not to collapse contiguous fragments into a single fragment 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightMergeContiguous($flag, $field_override = '') {
	}

	/**
	 * Specify the maximum number of characters to analyze
	 * 
	 * Specify the maximum number of characters to analyze from a field when using the regex fragmenter 
	 * 
	 * @param integer $maxAnalyzedChars The maximum number of characters to analyze from a field when using the regex fragmenter
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightRegexMaxAnalyzedChars($maxAnalyzedChars) {
	}

	/**
	 * Specify the regular expression for fragmenting
	 * 
	 * Specifies the regular expression for fragmenting. This could be used to extract sentences 
	 * 
	 * @param string $value The regular expression for fragmenting. This could be used to extract sentences 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightRegexPattern($value) {
	}

	/**
	 * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
	 * 
	 * The factor by which the regex fragmenter can stray from the ideal fragment size 
	 * (specfied by SolrQuery::setHighlightFragsize ) to accomodate the regular expression
	 *  
	 * @param float $factor The factor by which the regex fragmenter can stray from the ideal fragment size
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightRegexSlop($factor) {
	}

	/**
	 * Require field matching during highlighting
	 * 
	 * If TRUE, then a field will only be highlighted if the query matched in this particular field.
	 * This will only work if SolrQuery::setHighlightUsePhraseHighlighter() was set to TRUE
	 * 
	 * @param boolean $flag TRUE or FALSE
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightRequireFieldMatch($flag) {
	}

	/**
	 * Sets the text which appears after a highlighted term
	 * 
	 * The default is </em>
	 * 
	 * @param string $simplePost     Sets the text which appears after a highlighted term
	 * @param string $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightSimplePost($simplePost, $field_override = '') {
	}


	/**
	 * Sets the text which appears before a highlighted term
	 * 
	 * The default is <em>
	 * 
	 * @param string $simplePre      The text which appears before a highlighted term 
	 * @param string $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightSimplePre($simplePre, $field_override = '') {
	}

	/**
	 * Sets the maximum number of highlighted snippets to generate per field
	 * 
	 * @param integer $value          The maximum number of highlighted snippets to generate per field 
	 * @param string  $field_override The name of the field. 
	 * 
	 * @return SolrQuery
	 */
	public function setHighlightSnippets($value, $field_override = '') {
	}

	/**
	 * Whether to highlight phrase terms only when they appear within the query phrase
	 * 
	 * Sets whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document 
	 * 
	 * @param boolean $flag Whether or not to use SpanScorer to highlight phrase terms only when they appear 
	 *                      within the query phrase in the document
	 *                      
	 * @return SolrQuery
	 */
	public function setHighlightUsePhraseHighlighter($flag) {
	}

	/**
	 * Enables or disables moreLikeThis
	 * 
	 * @param boolean $flag TRUE enables it and FALSE turns it off. 
	 * 
	 * @return SolrQuery
	 */
	public function setMlt($flag) {
	}

	/**
	 * Set if the query will be boosted by the interesting term relevance
	 * 
	 * @param boolean $flag TRUE enables it and FALSE turns it off. 
	 * 
	 * @return SolrQuery
	 */
	public function setMltBoost($flag) {
	}

	/**
	 * Set the number of similar documents to return for each result
	 * 
	 * @param integer $count The number of similar documents to return for each result 
	 * 
	 * @return SolrQuery
	 */
	public function setMltCount($count) {
	}

	/**
	 * Sets the maximum number of query terms included
	 * 
	 * Sets the maximum number of query terms that will be included in any generated query. 
	 * 
	 * @param integer $value The maximum number of query terms that will be included in any generated query 
	 * 
	 * @return SolrQuery
	 */
	public function setMltMaxNumQueryTerms($value) {
	}

	/**
	 * Specifies the maximum number of tokens to parse
	 * 
	 * Specifies the maximum number of tokens to parse in each example doc field that is not stored with TermVector support. 
	 * 
	 * @param integer $value The maximum number of tokens to parse 
	 * 
	 * @return SolrQuery
	 */
	public function setMltMaxNumTokens($value) {
	}

	/**
	 * Sets the maximum word length
	 * 
	 * Sets the maximum word length above which words will be ignored. 
	 * 
	 * @param integer $maxWordLength The maximum word length above which words will be ignored 
	 * 
	 * @return SolrQuery
	 */
	public function setMltMaxWordLength($maxWordLength) {
	}

	/**
	 * Sets the mltMinDoc frequency
	 * 
	 * The frequency at which words will be ignored which do not occur in at least this many docs. 
	 * 
	 * @param integer $minDocFrequency Sets the frequency at which words will be ignored 
	 *                                 which do not occur in at least this many docs.
	 *                                 
	 * @return SolrQuery
	 */
	public function setMltMinDocFrequency($minDocFrequency) {
	}

	/**
	 * Sets the frequency below which terms will be ignored in the source docs
	 * 
	 * @param integer $minTermFrequency The frequency below which terms will be ignored in the source docs 
	 * 
	 * @return SolrQuery
	 */
	public function setMltMinTermFrequency($minTermFrequency) {
	}

	/**
	 * Sets the minimum word length
	 * 
	 * Sets the minimum word length below which words will be ignored. 
	 * 
	 * @param integer $minWordLength The minimum word length below which words will be ignored 
	 * 
	 * @return SolrQuery
	 */
	public function setMltMinWordLength($minWordLength) {
	}

	/**
	 * Exclude the header from the returned results
	 * 
	 * @param boolean $flag TRUE excludes the header from the result. 
	 * 
	 * @return SolrQuery
	 */
	public function setOmitHeader($flag) {
	}

	/**
	 * Sets the search query
	 * 
	 * @param atring $query The search query 
	 * 
	 * @return SolrQuery
	 */
	public function setQuery($query) {
	}

	/**
	 * Specifies the maximum number of rows to return in the result
	 * 
	 * @param integer $rows The maximum number of rows to return
	 *  
	 * @return SolrQuery
	 */
	public function setRows($rows) {
	}

	/**
	 * Flag to show debug information
	 * 
	 * Whether to show debug info 
	 * 
	 * @param boolean $flag Whether to show debug info. TRUE or FALSE
	 * 
	 * @return SolrQuery
	 */
	public function setShowDebugInfo($flag) {
	}

	/**
	 * Specifies the number of rows to skip
	 * 
	 * Specifies the number of rows to skip. Useful in pagination of results. 
	 * 
	 * @param integer $start The number of rows to skip. 
	 * 
	 * @return SolrQuery
	 */
	public function setStart($start) {
	}

	/**
	 * Enables or disables the Stats component
	 * 
	 * @param boolean $flag TRUE turns on the stats component and FALSE disables it. 
	 * 
	 * @return SolrQuery
	 */
	public function setStats($flag) {
	}

	/**
	 * Enables or disables the TermsComponent
	 * 
	 * @param boolean $flag TRUE enables it. FALSE turns it off 
	 * 
	 * @return SolrQuery
	 */
	public function setTerms($flag) {
	}

	/**
	 * Sets the name of the field to get the Terms from
	 * 
	 * @param string $fieldname The field name
	 *  
	 * @return SolrQuery
	 */
	public function setTermsField($fieldname) {
	}

	/**
	 * Include the lower bound term in the result set
	 * 
	 * @param integer $flag Include the lower bound term in the result set
	 *  
	 * @return SolrQuery
	 */
	public function setTermsIncludeLowerBound($flag) {
	}

	/**
	 * Include the upper bound term in the result set
	 * 
	 * @param boolean $flag TRUE or FALSE
	 * 
	 * @return SolrQuery
	 */
	public function setTermsIncludeUpperBound($flag) {
	}

	/**
	 * Sets the maximum number of terms to return
	 * 
	 * @param integer $limit The maximum number of terms to return. All the terms will be returned if the limit is negative. 
	 * 
	 * @return SolrQuery
	 */
	public function setTermsLimit($limit) {
	}

	/**
	 * Specifies the Term to start from
	 * 
	 * @param string $lowerBound The lower bound Term
	 *  
	 * @return SolrQuery
	 */
	public function setTermsLowerBound($lowerBound) {
	}

	/**
	 * Sets the maximum document frequency
	 * 
	 * @param integer $frequency The maximum document frequency. 
	 * 
	 * @return SolrQuery
	 */
	public function setTermsMaxCount($frequency) {
	}

	/**
	 * Sets the minimum document frequency
	 * 
	 * @param integer $frequency The minimum frequency 
	 *  
	 * @return SolrQuery
	 */
	public function setTermsMinCount($frequency) {
	}

	/**
	 * Restrict matches to terms that start with the prefix
	 * 
	 * @param string $prefix Restrict matches to terms that start with the prefix 
	 * 
	 * @return SolrQuery
	 */
	public function setTermsPrefix($prefix) {
	}

	/**
	 * Get the raw characters of the indexed term
	 * 
	 * @param boolean $flag TRUE or FALSE
	 *  
	 * @return SolrQuery
	 */
	public function setTermsReturnRaw($flag) {
	}

	/**
	 * Specifies how to sort the returned terms
	 * 
	 * If SolrQuery::TERMS_SORT_COUNT, sorts the terms by the term frequency (highest count first). 
	 * If SolrQuery::TERMS_SORT_INDEX, returns the terms in index order
	 *  
	 * @param integer $sortType SolrQuery::TERMS_SORT_INDEX or SolrQuery::TERMS_SORT_COUNT 
	 * 
	 * @return SolrQuery
	 */
	public function setTermsSort($sortType) {
	}

	/**
	 * Sets the term to stop at
	 * 
	 * @param string $upperBound The term to stop at 
	 * 
	 * @return SolrQuery
	 */
	public function setTermsUpperBound($upperBound) {
	}

	/**
	 * The time allowed for search to finish
	 * 
	 * The time allowed for a search to finish. This value only applies to the search and not to requests in general. Time is in milliseconds. 
	 * Values less than or equal to zero implies no time restriction. Partial results may be returned, if there are any.
	 *  
	 * @param integer $timeAllowed The time allowed for a search to finish. 
	 * 
	 * @return SolrQuery
	 */
	public function setTimeAllowed($timeAllowed) {
	}
}
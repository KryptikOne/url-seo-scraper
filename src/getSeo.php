<?php
if( isset( $_GET['getUrl'] ) ) {

	$getUrl = $_GET['getUrl'];
	

	function getMetaData( $url ) {
		
		// get meta tags
		$meta = get_meta_tags( $url );
		
		// store page
		$page = file_get_contents( $url );
		
		// find where the title CONTENT begins
		$titleStart = strpos( $page, '<title>' ) + 7;
		
		// find how long the title is
		$titleLength = strpos( $page, '</title>' ) - $titleStart;
		
		// extract title from $page
		$meta['title'] = substr( $page, $titleStart, $titleLength );
		
		// return array of data
		return $meta;
	}

	// Get Meta Information from Given URL
	$tags = getMetaData( $getUrl );

	// Setup SEO Info Array
	$seoInfo = array();

	// If Title Exisit Set It Up
	if( array_key_exists( 'title', $tags ) ) {
	    $seoInfo['pageTitle'] = $tags['title'];
	}

	// If Description Exisit Set It Up
	if( array_key_exists( 'description', $tags ) ) {
	    $seoInfo['metaDesc'] = $tags['description'];
	}

	// If Keywords Exisit Set It Up
	if( array_key_exists( 'keywords', $tags ) ) {
	    $seoInfo['metaKeys'] = $tags['keywords'];
	}

	// Encode to Array JSON
	$response = json_encode( $seoInfo );

	// Set Header to Be JSON
	header( 'Content-Type: application/json' );
	
	// Echo back to AJAX
	echo $response;
}

?>
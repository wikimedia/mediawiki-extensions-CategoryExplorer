<?php
use MediaWiki\MediaWikiServices;

// PHP unit does not understand code coverage for this file
// as the @covers annotation cannot cover a specific file
// This is fully tested in ServiceWiringTest.php
// @codeCoverageIgnoreStart

return [
	'CategoryExplorer.Config' => static function ( MediaWikiServices $services ) {
		return $services->getConfigFactory()
				->makeConfig( 'categoryexplorer' );
	},
];

// @codeCoverageIgnoreEnd

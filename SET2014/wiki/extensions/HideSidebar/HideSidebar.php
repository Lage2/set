<?php
 
if ( !defined( 'MEDIAWIKI' ) ) {
        echo "Not a valid entry point";
        exit( 1 );
}
 
$wgExtensionCredits['other'][] = array(
        'path' => __FILE__,
        'name' => 'HideSidebar',
        'version' => '1.0.1',
        'author' => 'Jlerner',
        'url' => 'http://www.mediawiki.org/wiki/Extension:HideSidebar',
        'description' => 'Allows to hide the sidebar from anonymos users',
);
 
$wgHooks['SkinBuildSidebar'][] = 'efHideSidebar';
 
function efHideSidebar($skin, &$bar) {
        global $wgUser;
        // Hide sidebar for anonymous users
        if (!$wgUser->isLoggedIn()) {
                $url = Title::makeTitle(NS_SPECIAL, 'UserLogin')->getLocalUrl();
                $bar = array(
                        'navigation' => array(
                                array('text'   => 'Login',
                                      'href'   => $url,
                                      'id'     => 'n-login',
                                      'active' => '')
                        )
                );
        }
        return true;
}
<?php

	/**
	 * @package Region Halland Nav Site
	 */
	/*
	Plugin Name: Region Halland Nav Site
	Description: Front-end-plugin som returnerar en parent-child-array för hela webbplatsen
	Version: 1.0.0
	Author: Roland Hydén
	License: MIT
	Text Domain: regionhalland
	*/

	// Returnera alla page children
	function get_region_halland_nav_site() {
		
		// Wordpress funktion för aktuell sida
		global $post;
        
        // Om det inte är en post, returnera ingenting
        if (!is_a($post, 'WP_Post')) {
            return;
        }

        // Hämta aktuell framsida
        $frontpage = (int)get_option('page_on_front');
		
		// Hämta alla sidor
		$pages = get_pages();
		
		// Skapa hela parent-child-arrayen
		$navigationTree = buildRegionHallandSiteTree($pages, 0, $post->ID, $frontpage);
			
		// Returnera arrayen
		return $navigationTree;		

	}

	// Bygg ihop arrayen
    function buildRegionHallandSiteTree(array &$posts, $parentId = 0, $currentID = 0, $frontpage = 0) 
    {
        
    	// Lagra i en temporär array
        $branch = array();

        // Loopa igenom alla poster
        foreach ($posts as &$post) {
            
            // Om sidan är aktuell sida, sätt den som aktiv
            if ($currentID === $post->ID && !isset($post->active)) {
                $post->active = true;
            }

            // Lägga till alla barn
            if ($post->post_parent == $parentId) {
                $children = buildRegionHallandSiteTree($posts, $post->ID, $currentID);
                if ($children) {
                    $post->children = $children;
	            	$myPost->children = $children;
                }
                $branch[$post->ID] = $post;
                unset($post);
            }
        }

        // Returnera den temporära arrayen
        return $branch;
    }

	// Metod som anropas när pluginen aktiveras
	function region_halland_nav_site_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_nav_site_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_nav_site_activate');
	
	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_nav_site_deactivate');

?>
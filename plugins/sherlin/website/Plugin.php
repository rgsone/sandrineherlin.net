<?php

namespace SHerlin\Website;

use Backend\Facades\Backend;
use System\Classes\PluginBase;

/**
 * Class Plugin
 * @package SHerlin\Website
 */
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'SHerlinWebsite',
            'description' => 'Gestion du site',
            'author' => 'rgsone',
            'icon' => 'icon-desktop'
        ];
    }

    public function boot()
    {
		# set foreign keys management in sqlite
		#if ( config( 'database.default' ) == 'sqlite' )
		#	DB::statement( DB::raw( 'PRAGMA foreign_keys=1' ) );
    }

    public function registerComponents()
    {
        return [
        	'SHerlin\Website\Components\PagesContent' => 'pagesContent'
        ];
    }

    public function registerPermissions()
    {
		return [
			'sherlin.website.access_contents' => [
				'tab' => 'Site',
				'label' => 'Gestion du contenu du site'
			]
		];
    }

    public function registerNavigation()
    {
        return [
            'website' => [
                'label' => 'Site',
                'url' => Backend::url( 'sherlin/website/contents' ),
                'icon' => 'icon-desktop',
                'permissions' => [ 'sherlin.website.access_contents' ],
                'order' => 11
            ]
        ];
    }
}

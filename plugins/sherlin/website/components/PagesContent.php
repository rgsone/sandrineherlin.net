<?php

namespace SHerlin\Website\Components;

use Cms\Classes\ComponentBase;
use SHerlin\Website\Models\Content;

/**
 * Class PagesContent
 * @package SHerlin\Website\Components
 */
class PagesContent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Composant : Contenu des pages',
            'description' => 'Gestion du contenu des pages'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

	public function onRun()
	{
		# inject vars
		$this->page[ 'contents' ] = [
			'exhibition' => Content::get( 'exhibition_content' ),
			'specimen' => Content::get( 'specimen_content' ),
			'shelter' => Content::get( 'shelter_content' ),
			'etching' => Content::get( 'etching_content' ),
			'painting' => Content::get( 'painting_content' )
		];
	}
}

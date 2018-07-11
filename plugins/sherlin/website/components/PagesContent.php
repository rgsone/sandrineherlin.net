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

		$content = Content::instance();

		$this->page[ 'contents' ] = [
			'exhibition' => $content->getAttributeTranslated( 'exhibition_content' ),
			'specimen' => $content->getAttributeTranslated( 'specimen_content' ),
			'shelter' => $content->getAttributeTranslated( 'shelter_content' ),
			'etching' => $content->getAttributeTranslated( 'etching_content' ),
			'painting' => $content->getAttributeTranslated( 'painting_content' )
		];
	}
}

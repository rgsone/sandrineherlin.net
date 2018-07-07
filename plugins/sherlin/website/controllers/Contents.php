<?php

namespace SHerlin\Website\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;
use SHerlin\Website\Models\Content as ContentModel;

/**
 * Class Contents
 * @package SHerlin\Website\Controllers
 */
class Contents extends Controller
{
    public $implement = [ 'Backend.Behaviors.FormController' ];
    public $formConfig = 'config_form.yaml';
	public $requiredPermissions = [ 'sherlin.website.access_contents' ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext( 'SHerlin.Website', 'website', 'contents' );
    }

	public function index()
	{
		$this->asExtension( 'FormController' )->update();
	}

	public function index_onSave()
	{
		return $this->asExtension( 'FormController' )->update_onSave();
	}

	public function formFindModelObject()
	{
		return ContentModel::instance();
	}
}

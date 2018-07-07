<?php

namespace SHerlin\Website\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\Validation;

/**
 * Class Content
 * @package SHerlin\Website\Models
 */
class Content extends Model
{
	use Validation;

	public $implement = [ 'System.Behaviors.SettingsModel' ];
	public $settingsCode = 'sherlin_website_contents';
	public $settingsFields = 'fields.yaml';

	public $rules = [
		#'email' => 'required|email'
	];

	public $customMessages = [
		#'email.required' => 'L\'email n\'est pas renseigné.',
		#'email.email' => 'L\'email n\'est pas valide.'
	];
}

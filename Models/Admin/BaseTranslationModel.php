<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\I18n\Models\Admin;

abstract class BaseTranslationModel extends \BasicApp\I18n\Models\TranslationModel
{

    protected $returnType = Translation::class;

    protected $allowedFields = [
        'translation_category',
        'translation_source',
        'translation_value',
        'translation_lang'
    ];

    protected $validationRules = [
        'translation_category' => 'trim|max_length[255]|required',
        'translation_source' => 'trim|max_length[255]|required',
        'translation_value' => 'trim|max_length[255]|required'
    ];

}
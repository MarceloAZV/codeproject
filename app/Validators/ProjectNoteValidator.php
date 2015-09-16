<?php
/**
 * Created by PhpStorm.
 * User: azv
 * Date: 08/09/15
 * Time: 15:21
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{
    protected $rules = [
        'project_id' => 'required|integer',
        'title' => 'required',
        'name' => 'required'
    ];

}
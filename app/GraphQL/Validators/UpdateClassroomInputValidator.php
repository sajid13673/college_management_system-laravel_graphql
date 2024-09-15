<?php declare(strict_types=1);

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

final class UpdateClassroomInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'id' => [
                'required'
            ],
            'name' => [
                Rule::unique('classrooms','name')->ignore($this->arg('id'),'id'),
            ],
            'year' => [
                "numeric", 
                "digits:4"
            ]
        ];
    }
}

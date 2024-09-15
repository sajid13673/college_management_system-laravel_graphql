<?php declare(strict_types=1);

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

final class UpdateStudentInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'id'=> [
                'required'
            ],
            'phone_number' => [
                "numeric",
                "digits_between:10,13",
                Rule::unique('students','phone_number')->ignore($this->arg('id'),'id'),
            ],
            'date_of_birth' => [
                'date'
            ],
        ];
    }
}

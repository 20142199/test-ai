<?php

namespace App\Http\Requests\User\Auth;

use App\Rules\Password;
use App\Rules\UserUnique;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:' . config('validate.max_length.name')],
            'email' => ['required', 'string', 'email', 'max:' . config('validate.max_length.email'), new UserUnique()],
            'password' => ['required', 'confirmed', new Password()],
        ];
    }
}

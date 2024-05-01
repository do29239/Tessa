<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChangeAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'address' => ['string', 'max:255'],
            'city' => ['string', 'max:255'],
            'phone' => ['string', 'max:255',Rule::unique(User::class)->ignore($this->user()->id)],
            'postcode' => ['string', 'max:255'],
        ];
    }
}

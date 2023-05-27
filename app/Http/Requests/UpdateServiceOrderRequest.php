<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateServiceOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $method = $this->method();

        if ($method == "PUT") {
            return [
                "vehiclePlate" => "required",
                "entryDateTime" => "required|date",
                "exitDateTime" => "nullable|date",
                "priceType" => ["required", Rule::in(["u"])],
                "price" => "decimal:2|nullable",
                "userId" => "numeric|nullable"
            ];
        } else {
            return [
                "vehiclePlate" => "sometimes|required",
                "entryDateTime" => "sometimes|required|date",
                "exitDateTime" => "sometimes|nullable|date",
                "priceType" => ["sometimes|required", Rule::in(["u"])],
                "price" => "sometimes|decimal:2|nullable",
                "userId" => "sometimes|numeric|nullable"
            ];
        }
        
    }
}

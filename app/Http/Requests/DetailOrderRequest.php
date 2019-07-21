<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'order_id' => 'integer',
            'menu_id' => 'required|integer',
            'table_id' => 'required|integer',
            'quantity' => 'required|integer',
            'message' => 'string|max:100',
        ];
    }
}

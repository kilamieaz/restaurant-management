<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        $order_code = $this->request->get('order_code') ? ',' . $this->request->get('order_code') : '';
        return [
            'order_code' => 'required',
            'cashier_id' => 'integer',
            'chef_id' => 'integer',
            'waiter_id' => 'integer',
            'member_id' => 'nullable|integer',
        ];
    }
}

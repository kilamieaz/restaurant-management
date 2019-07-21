<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
        $formRequests = [
            OrderRequest::class,
            DetailOrderRequest::class
        ];
        $rules = [];
        foreach ($formRequests as $source) {
            $rules = array_merge(
                $rules,
                (new $source)->rules()
            );
        }
        return $rules;
    }
}

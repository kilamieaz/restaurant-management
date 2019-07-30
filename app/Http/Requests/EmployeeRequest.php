<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class EmployeeRequest extends FormRequest
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
        $user = User::find($this->id);

        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'role_id' => 'required',
                    'name' => 'required|string|max:50',
                    'email'=>'required|email|unique:users,email',
                    'password' => 'required',
                    'handphone' => 'required',
                    'photo' => 'image',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'role_id' => 'required',
                    'name' => 'required|string|max:50',
                    'email' => 'required|unique:users,email,'.$user->id,
                    'password' => 'required',
                    'handphone' => 'required',
                    'photo' => 'image',
                ];
            }
            default:break;
        }
    }
}

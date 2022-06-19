<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdatePostRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::check();
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'published_at' => 'required',
            'picture' => 'sometimes'
        ];
    }
}


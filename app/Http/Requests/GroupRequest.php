<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    public function rules()
    {
        return [
            'group.title' => 'required|string|max:100',
            'group.overview' => 'required|string|max:4000',
            'group.image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}

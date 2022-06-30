<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtRequest extends FormRequest
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
            'art.image' => 'required',
            'art.title' => 'required|string',
            'art.body' => 'required|string',
            'art.quiz' => 'required|string',
            'art.ans1' => 'required|string',
            'art.ans2' => 'required|string',
            'art.ans3' => 'required|string',
            'art.ans4' => 'required|string',
        ];
    }
}

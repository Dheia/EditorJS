<?php namespace ReaZzon\Editor\Classes\Requests\ImageTool;

use Illuminate\Foundation\Http\FormRequest;

class FetchRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'url' => 'string|required'
        ];
    }
}
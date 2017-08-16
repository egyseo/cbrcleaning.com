<?php

namespace cbrcleaning\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
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
            'backgroundimage' => 'required',         
            'iconimage' => 'required',          
            'iconimage_position' => 'required',
            'iconimage_col_size' => 'required',
            'text_h1' => 'required',
            'text_h2' => 'required',
            'read_more_link' => 'required',
            'text_col_size' => 'required'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListsLinkRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title_oz' => 'max:255|required_without_all:title_uz,title_ru,title_en',
            'title_uz' => 'max:255|required_without_all:title_oz,title_ru,title_en',
            'title_ru' => 'max:255|required_without_all:title_oz,title_uz,title_en',
            'title_en' => 'max:255|required_without_all:title_oz,title_uz,title_ru',
            'pdf_title_oz' => 'max:255|nullable',
            'pdf_title_uz' => 'max:255|nullable',
            'pdf_title_ru' => 'max:255|nullable',
            'pdf_title_en' => 'max:255|nullable',
            'lists_category_id' => 'required',
            'date' => 'required',
            'link' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'title_oz.max' => tr('No more than 255 characters'),
            'title_uz.max' => tr('No more than 255 characters'),
            'title_ru.max' => tr('No more than 255 characters'),
            'title_en.max' => tr('No more than 255 characters'),
            'title_oz.required_without_all' => tr('At least one language should be filled'),
            'title_uz.required_without_all' => tr('At least one language should be filled'),
            'title_ru.required_without_all' => tr('At least one language should be filled'),
            'title_en.required_without_all' => tr('At least one language should be filled'),
            'pdf_title_oz.max' => tr('No more than 255 characters'),
            'pdf_title_uz.max' => tr('No more than 255 characters'),
            'pdf_title_ru.max' => tr('No more than 255 characters'),
            'pdf_title_en.max' => tr('No more than 255 characters'),
            'lists_category_id.required' => tr('The Category field is required'),
            'date.required' => tr('The Date field is required'),
            'link.required' => tr('The Link field is required')
        ];
    }
}

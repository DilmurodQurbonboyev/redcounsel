<?php

namespace App\Http\Requests;

use App\Services\MessageService;
use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title_oz' => 'max:255|required_without_all:title_uz,title_ru,title_en',
            'title_uz' => 'max:255|required_without_all:title_oz,title_ru,title_en',
            'title_ru' => 'max:255|required_without_all:title_oz,title_uz,title_en',
            'title_en' => 'max:255|required_without_all:title_oz,title_uz,title_ru',
            'link' => 'required|max:255',
            'menus_category_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title_oz.max' => MessageService::tr('No more than 255 characters'),
            'title_uz.max' => MessageService::tr('No more than 255 characters'),
            'title_ru.max' => MessageService::tr('No more than 255 characters'),
            'title_en.max' => MessageService::tr('No more than 255 characters'),
            'title_oz.required_without_all' => MessageService::tr('At least one language should be filled'),
            'title_uz.required_without_all' => MessageService::tr('At least one language should be filled'),
            'title_ru.required_without_all' => MessageService::tr('At least one language should be filled'),
            'title_en.required_without_all' => MessageService::tr('At least one language should be filled'),
            'link.required' => MessageService::tr('The Link field is required'),
            'link.max' => MessageService::tr('No more than 255 characters'),
            'menus_category_id.required' => MessageService::tr('The Category field is required'),
        ];
    }
}

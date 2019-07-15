<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckISBN;

class BookRequest extends FormRequest
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
        // dd($this);
        $id = !empty($this->book) ? $this->book->id : null;
        return [
            'name' => 'required',
            'author' => 'required',
            'price' => 'required|min:0',
            'category' => 'required',
            'amount'  => 'required',
            'isbn' => [
                'required',
                new CheckISBN(),
                'unique:books,isbn,' . $id,
            ],
            'images' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name not null',
            'author.required' => 'The :attribute not null',
            'price.required' => 'The :attribute not null',
            'amount.required' => 'The :attribute not null',
            'name.required' => 'The :attribute not null',
            'isbn.required' => 'The :attribute not null',
            'category.required' => 'The :attribute not null',
            'images.required' => 'Image not null',

        ];
    }
}

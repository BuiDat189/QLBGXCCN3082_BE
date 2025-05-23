<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhapXeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id'                 => 'required|exists:xes,id',
            'id_cu_dan'          => 'required|integer',
            'bien_so_xe'         => 'required|string|max:255',
            'id_loai_xe'         => 'required|integer',
        ];
    }
    public function messages(): array
    {
        return [
            'id.required'                 => 'ID là bắt buộc.',
            'id.exists'                 => 'ID phải nằm trong bảng xe.',
            'id_cu_dan.required'         => 'ID cư dân là bắt buộc.',
            'id_cu_dan.integer'         => 'ID cư dân là là integer.',
            'bien_so_xe.required'        => 'Biển số xe là bắt buộc.',
            'bien_so_xe.string'        => 'Biển số là ký tự nhỏ hơn 225.',
            'id_loai_xe.required'        => 'ID loại xe là bắt buộc.',
            'id_loai_xe.integer'        => 'ID loại xe là integer.',

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetsRequest extends FormRequest
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
            'namaBarang'    => 'required|string|max:255',
            'kodeAsset'     => 'required|string|max:255',
            'qrCode'        => 'required|string|max:255',
            'kodeTelkom'    => 'required|string|max:255',
            'serialNumber'  => 'required|string|max:255',
            'lokasi'        => 'required|string|max:255',
            'keterangan'    => 'nullable|string|max:500',
            'kondisi'       => 'required|string|max:255',
            'status'        => 'required|string|max:255',
            'pelabuhan'     => 'required|string|max:255',
        ];
    }
}

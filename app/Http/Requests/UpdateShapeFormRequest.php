<?php
declare(strict_types=1);
/**
 * File: UpdateShapeFormRequest.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShapeFormRequest extends FormRequest
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
            "data" => "array"
        ];
    }
}

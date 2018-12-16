<?php
// класс валидции
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CreateShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // здесь true
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // возвращаем список правил
        return [

            'img' => 'required',
            'name' => 'required',
            'city' => 'required',
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'URL' => 'required'

        ];
    }
    public function messages()
    {
        // возвращаем список сообщений
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Поле :attribute должно быть не менее 6 символов',
        ];
    }

    public function attributes()
    {
        // возвращаем список аттрибутов которые мы переименовали
        /*return [
            'title' => 'Название продукта'
        ];*/
    }

}

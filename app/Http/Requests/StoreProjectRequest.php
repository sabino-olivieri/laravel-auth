<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|min:5|unique:projects,title',
            'description' => 'nullable|min:10',
            'image_url' => 'required|active_url',
            'site_url' => 'nullable|active_url',
            'start_date' => 'nullable|date|before_or_equal:today',
            'finish_date' => 'nullable|date|after_or_equal:start_date',
        
        ];
    }

    public function messages() {
        return	[ 
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno 5 caratteri',
            'title.unique' => 'Esiste già un progetto con lo stesso titolo',
            'description.min' => 'La descrizione deve contenere almeno 10 caratteri',
            'image_url.required' => "Il link dell'immmagine è obbligatorio",
            'image_url.active_url' => "Il link dell'immmagine non è valido",
            'site_url.active_url' => 'Il link del sito non è valido',
            'start_date.date' => 'Inserisci una data corretta',
            'start_date.before_or_equal' => 'Inserisci una data uguale o precedente a oggi',
            'finish_date.after_or_equal' => 'Inserisci una data uguale o successiva a oggi',
            'finish.date' => 'Inserisci una data corretta',          

        ];
        
    }
}

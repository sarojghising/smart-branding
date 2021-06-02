<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostSelectionPerInfluencerRequest extends FormRequest
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
            'influencer_id' => 'required',
            'campaign_id' => 'required',
            'product_service_id' => 'required',
            'post_type' => 'required',
            'no_of_post' => 'required'
        ];
    }
}

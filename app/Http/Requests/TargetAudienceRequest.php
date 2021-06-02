<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TargetAudienceRequest extends FormRequest
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
            'gender' => 'required',
            'age_specification' => 'required',
            'total_followers' => 'required',
            'average_engagement_per_post' => 'required',
            'average_views_per_video_post' => 'required',
            'locations' => 'required',
            'posting_time' => 'required'

        ];
    }
}

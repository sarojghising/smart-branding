<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetAudience extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender',
        'age_specification',
        'total_followers',
        'average_engagement_per_post',
        'average_views_per_video_post',
        'locations',
        'posting_time'
    ];
}

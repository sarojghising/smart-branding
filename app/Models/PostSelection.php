<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostSelection extends Model
{
    use HasFactory;

    protected $fillable = [
        'influencer_id',
        'campaign_id',
        'product_service_id',
        'campaign_cost',
        'estimated_impression',
        'cost_per_impression',
        'post_type',
        'no_of_post'];


    /**
     * Get the influencer that owns the PostSelection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function influencer()
    {
        return $this->belongsTo(Influencer::class, 'influencer_id', 'id');
    }


    /**
     * Get the campaign that owns the PostSelection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'id');
    }

     /**
     * Get the campaign that owns the PostSelection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productService()
    {
        return $this->belongsTo(ProductService::class, 'product_service_id', 'id');
    }
}

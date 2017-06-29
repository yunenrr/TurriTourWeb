<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchParameters extends Model
{
    protected $table = "SearchParameters";
    protected $fillable = ['type_activity','max_distance','max_duration', 'everage_cost','class','user_email'];
    protected $guarded = 'tableid';
}

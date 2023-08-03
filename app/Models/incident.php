<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incident extends Model
{
    use HasFactory;
    protected $table = 'incident';
    protected $fillable=[

 'number',
 'contact_type',
 'caller',
 'state',
 'category',
 'impact',
 'sub_category',
 'urgency',
 'business_service',
 'priority',
 'configuration_item',
 'assignment_group',
 'assignment_to',
 'short_description',
 'description',
    ];
}

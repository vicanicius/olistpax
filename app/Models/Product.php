<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public const TABLE_NAME = 'product';

    public const PRIMARY_KEY = 'prod_id';

    public const FILLABLE = [
        'type' => 'prod_type_id',
        'quantity' => 'prod_quantity',
        'name' => 'prod_name'
    ];

    public $fillable = self::FILLABLE;

    protected $primaryKey = self::PRIMARY_KEY;

    protected $table = self:: TABLE_NAME;
}

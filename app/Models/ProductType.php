<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'product_type';

    public const PRIMARY_KEY = 'prod_type_id';

    public const FILLABLE = [
        'type_name' => 'prod_type_name'
    ];

    public $fillable = self::FILLABLE;

    protected $primaryKey = self::PRIMARY_KEY;

    protected $table = self:: TABLE_NAME;
}

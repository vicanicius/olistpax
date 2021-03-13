<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'state';

    public const PRIMARY_KEY = 'state_id';

    public const FILLABLE = [
        'name' => 'state_name',
        'uf' => 'state_uf'
    ];

    public $fillable = self::FILLABLE;

    protected $primaryKey = self::PRIMARY_KEY;

    protected $table = self:: TABLE_NAME;
}

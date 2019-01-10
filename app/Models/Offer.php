<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';

    const REMEMBER_TRUE = 'ON';
    const REMEMBER_FALSE = 'OFF';

    const CURRENCY_UAH = 'UAH';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_USD = 'USD';

    public static $typeCurrency = [
        self::CURRENCY_UAH, self::CURRENCY_USD, self::CURRENCY_EUR,
    ];

    const OBJECT_FLAT = 'flat';
    const OBJECT_HOUSE = 'house';

    public static $typeObject = [
        self::OBJECT_FLAT, self::OBJECT_HOUSE,
    ];

    protected $fillable = [
       'type_object', 'price', 'type_price', 'type_wall', 'number_rooms', 'user_id', 'phone', 'information','remember','photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}

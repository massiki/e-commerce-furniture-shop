<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;

#[Guarded([])]
class Order extends Model
{
    protected $with = ['orderItems', 'transaction'];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'delivered_date' => 'date',
            'cancelled_date' => 'date',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}

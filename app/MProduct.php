<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MProduct extends Model
{
    //「商品(products)はカテゴリ(category)に属する」というリレーション関係を定義する
    public function category()
    {
        return $this->belongsTo(MCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sale_status()
    {
        return $this->belongsTo(MSales_status::class);
    }

    public function product_status()
    {
        return $this->belongsTo(MProduct_status::class);
    }
}

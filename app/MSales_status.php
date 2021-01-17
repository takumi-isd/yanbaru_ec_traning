<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSales_status extends Model
{
    public function getLists()
    {
        $sale_statuses = MSales_status::pluck('sale_status_name', 'id');

        return $sale_statuses;
    }

    protected $table = 'm_sales_statuses';

    public function products()
    {
        return $this->hasMany(MProduct::class);
    }
}

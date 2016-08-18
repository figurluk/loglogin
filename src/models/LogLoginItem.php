<?php
/**
 * User: Lukas Figura
 * Date: 18.08.16
 * Time: 1:33.
 */
namespace Figurluk\LogLogin\Models;

use Illuminate\Database\Eloquent\Model;

class LogLoginItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
    ];

    protected $date = ['logged_at'];

    public function getLoggedAtAttribute($value)
    {
        $value = date('j.n.Y G:i:s', strtotime($value));

        return $value;
    }

    public function user()
    {
        return $this->belongsTo(config('loglogin.belongs_class'), 'user_id', config('loglogin.belongs_class_id'));
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_login_log extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_login_log';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'login_user_name', 'login_user_email', 'login_client_ip'
    ];

    /**
     * Get the format for database stored dates.
     *
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }

    /**
     * Convert a DateTime to a storable string.
     * SQL Server will not accept 6 digit second fragment (PHP default: see getDateFormat Y-m-d H:i:s.u)
     * trim three digits off the value returned from the parent.
     *
     * @param  \DateTime|int $value
     * @return string
     */
    public function fromDateTime($value)
    {
        return substr(parent::fromDateTime($value), 0, -3);
    }
}

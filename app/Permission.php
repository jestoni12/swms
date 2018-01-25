<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_jobs',
            'add_jobs',
            'edit_jobs',
            'delete_jobs',

            'view_employees',
            'add_employees',
            'edit_employees',
            'delete_employees',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_trucks',
            'add_trucks',
            'edit_trucks',
            'delete_trucks',

            'view_user_logs',
            'add_user_logs',
            'edit_user_logs',
            'delete_user_logs',  

            'view_fertilizers',
            'add_fertilizers',
            'edit_fertilizers',
            'delete_fertilizers',
 
            'view_garbages',
            'add_garbages',
            'edit_garbages',
            'delete_garbages',

            'view_fertilizer_report',
            'add_fertilizer_report',
            'edit_fertilizer_report',
            'delete_fertilizer_report',

            'view_garbage_report',
            'add_garbage_report',
            'edit_garbage_report',
            'delete_garbage_report',

            'view_emp_dtr_report',
            'add_emp_dtr_report',
            'edit_emp_dtr_report',
            'delete_emp_dtr_report',
        ];
    }
}

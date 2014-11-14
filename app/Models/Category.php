<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model {

    protected $fillable = [

        'name'

    ];

    public $timestamps = false;

    public function deleteProjectRelation()
    {
        DB::table('project_categories')->where('category_id', $this->id)->delete();
    }

} 
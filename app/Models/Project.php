<?php namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model {

    protected $fillable = [

        'parent_id', 'name', 'description'

    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'project_categories');
    }

    public function availableCategories()
    {
        $ids = DB::table('project_categories')->where('project_id', $this->id)->lists('category_id');
        if (!empty($ids))
            return Category::whereNotIn('id', $ids)->orderBy('name')->get();
        else
            return Category::all();
    }

} 
<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;
use App\Models\Project;
use App\Libraries\Breadcrumb;

class AbysseInit implements Middleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		/**
         * Set app language
         */
        Lang::setLocale(Config::get('abysse.lang'));

        /**
         * Set app theme
         */
        View::addLocation(Config::get('abysse.theme_path') . Config::get('abysse.theme') . '/views');

        /**
         * Generate breadcrumbs
         */
        $breadcrumb = new Breadcrumb();
        View::share('breadcrumb', $breadcrumb->build());

        /**
         * Root projects list for the sidebar
         */
        View::share('projects_list', Project::where('parent_id', 0)->get());

        return $next($request);
	}

}

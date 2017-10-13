<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Hash;
use App\Models\Settings;
use App\Models\ArticlesCate;
use App\Models\Articles;
use App\Models\District;
use App\Models\CustomLink;
use App\Models\Services;
use App\Models\Menu;
use App\Models\CateParent;
use App\Models\Text;
use App\Models\Product;
use Auth, Session;
class ViewComposerServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//Call function composerSidebar
		$this->composerMenu();	
		
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Composer the sidebar
	 */
	private function composerMenu()
	{
		
		view()->composer( '*' , function( $view ){	
			
			$locale = App::getLocale();
	        $routeName = \Request::route()->getName();	

			$view->with( [					
					'routeName' => $routeName,					
					'locale' => $locale
			] );
			
		});
	}
	
}

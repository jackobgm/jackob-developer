<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;
use App\Repositories\TldRepository;
use App\Repositories\LanguageRepository;
use App\Repositories\CartRepository;
use App\Repositories\WebsiteRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Response;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Language;
use App\Models\Tld;
use App\Models\Website;
use Illuminate\Support\Facades\DB;

class BuyController extends AppBaseController
{
	/** @var  CategoryRepository */
    private $categoryRepository;

    private $tldRepository;

    private $languageRepository;

    private $cartRepository;

    private $websiteRepository;

    public $slugs = [];
    public $cateslug = [];

    public function __construct(CategoryRepository $categoryRepo, TldRepository $tldRepo, LanguageRepository $languageRepo, CartRepository $cartRepo, WebsiteRepository $websiteRepository)
    {
        $this->categoryRepository = $categoryRepo;
        $this->tldRepository = $tldRepo;
        $this->languageRepository = $languageRepo;
        $this->cartRepository = $cartRepo;
        $this->websiteRepository = $websiteRepository;
    }

	public function index() {
		$categories = $this->categoryRepository->all();

		$slugs = $this->slugs;

        $websiteTops = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type')
                            ->orderBy('websites.id', 'desc')
                            ->take(6)
                            ->get();

        $websiteRecommends = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type')
                            ->orderBy('websites.id', 'desc')
                            ->take(12)
                            ->get();

        $websiteHighs = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type')
                            ->orderBy('websites.page_authority', 'asc')
                            ->take(15)
                            ->get();

		foreach ($categories as $category) {

            array_push($slugs, strtolower(strtr($category->name, " ", "-")));
        }

        $tlds = $this->tldRepository->all();

        $languages = $this->languageRepository->all();

        $numCarts = 0;


        if (auth()->user() == null) {
            $numCarts = 0;
        } else {

            $carts = Cart::where('user_id', auth()->user()->id)->get();

            $numCarts = sizeof($carts);
        }

        $counter = $numCarts;

		return view('livewire.marketplaces')->with('categories', $categories)->with('slugs', $slugs)->with('tlds', $tlds)->with('languages', $languages)->with('websiteTops', $websiteTops)->with('websiteRecommends', $websiteRecommends)->with('websiteHighs', $websiteHighs)->with('numCarts', $numCarts)->with('counter', $counter);
	}

    public function show($categories) {
        $cateslug = ucwords(strtr($categories, "-", " "));

        $catego = $categories;

    	$categories = $this->categoryRepository->all();

    	$tlds = $this->tldRepository->all();

        $languages = $this->languageRepository->all();

        $websites2 = [];

        //$cart = Cart::where('user_id', auth()->user()->id)->first();

        $numCarts = 0;

        /*if (auth()->user() == null) {
            $numCarts = 0;
        } else {

            $carts = Cart::where('user_id', auth()->user()->id)->get();

            $numCarts = sizeof($carts);
        }*/

    	return view('buy.index')->with('cateslug', $cateslug)->with('categories', $categories)->with('tlds', $tlds)->with('languages', $languages)->with('websites2', $websites2)->with('catego', $catego)->with('numCarts', $numCarts);
    }

    public function marketplace(Request $request){

        $tld = Tld::where('name', $request->tlds)->first();

        $language = Language::where('name', $request->languages)->first();

        if ($request->categories != 'All') {

            $cateslug = Category::where('name', $request->categories)->first();

        } else {
            $cateslug = 'All';
        }




        /*->where('websites.tld_id', $tld->id)
        ->where('websites.language_id', $language->id)*/
        if ($request->categories == 'All' && $request->tlds == 'All' && $request->languages == 'All') {

            $websites2 = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->join('post_contents', 'post_contents.id', '=', 'websites.post_content_id')
                            ->join('category_website', 'category_website.website_id', '=', 'websites.id')
                            ->join('categories', 'categories.id', '=', 'category_website.category_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type', 'post_contents.name as post_content', 'categories.name as category')
                            ->orderBy('websites.id', 'desc')
                            ->get();

        } elseif ($request->categories == 'All' && $request->tlds == 'All' && $request->languages != 'All') {

            $websites2 = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->join('post_contents', 'post_contents.id', '=', 'websites.post_content_id')
                            ->join('category_website', 'category_website.website_id', '=', 'websites.id')
                            ->join('categories', 'categories.id', '=', 'category_website.category_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type', 'post_contents.name as post_content', 'categories.name as category')
                            ->where('websites.language_id', $language->id)
                            ->orderBy('websites.id', 'desc')
                            ->get();
        } elseif ($request->categories == 'All' && $request->tlds != 'All' && $request->languages == 'All') {

            $websites2 = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->join('post_contents', 'post_contents.id', '=', 'websites.post_content_id')
                            ->join('category_website', 'category_website.website_id', '=', 'websites.id')
                            ->join('categories', 'categories.id', '=', 'category_website.category_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type', 'post_contents.name as post_content', 'categories.name as category')
                            ->where('websites.tld_id', $tld->id)
                            ->orderBy('websites.id', 'desc')
                            ->get();

        } elseif ($request->categories != 'All' && $request->tlds == 'All' && $request->languages == 'All') {

            $websites2 = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->join('post_contents', 'post_contents.id', '=', 'websites.post_content_id')
                            ->join('category_website', 'category_website.website_id', '=', 'websites.id')
                            ->join('categories', 'categories.id', '=', 'category_website.category_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type', 'post_contents.name as post_content', 'categories.name as category')
                            ->where('categories.name', $cateslug->name)
                            ->orderBy('websites.id', 'desc')
                            ->get();

        } elseif ($request->categories != 'All' && $request->tlds != 'All' && $request->languages == 'All') {

            $websites2 = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->join('post_contents', 'post_contents.id', '=', 'websites.post_content_id')
                            ->join('category_website', 'category_website.website_id', '=', 'websites.id')
                            ->join('categories', 'categories.id', '=', 'category_website.category_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type', 'post_contents.name as post_content', 'categories.name as category')
                            ->where('categories.name', $cateslug->name)
                            ->where('websites.tld_id', $tld->id)
                            ->orderBy('websites.id', 'desc')
                            ->get();

        } elseif ($request->categories != 'All' && $request->tlds = 'All' && $request->languages != 'All') {

            $websites2 = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->join('post_contents', 'post_contents.id', '=', 'websites.post_content_id')
                            ->join('category_website', 'category_website.website_id', '=', 'websites.id')
                            ->join('categories', 'categories.id', '=', 'category_website.category_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type', 'post_contents.name as post_content', 'categories.name as category')
                            ->where('categories.name', $cateslug->name)
                            ->where('websites.language_id', $language->id)
                            ->orderBy('websites.id', 'desc')
                            ->get();

        } elseif ($request->categories != 'All' && $request->tlds != 'All' && $request->languages != 'All') {

            $websites2 = Website::join('link_types', 'link_types.id', '=', 'websites.link_type_id')
                            ->join('post_contents', 'post_contents.id', '=', 'websites.post_content_id')
                            ->join('category_website', 'category_website.website_id', '=', 'websites.id')
                            ->join('categories', 'categories.id', '=', 'category_website.category_id')
                            ->select('websites.id as web_id', 'websites.name as web_name', 'websites.domain_authority as da', 'websites.page_authority as pa', 'websites.price as price', 'link_types.name as link_type', 'post_contents.name as post_content', 'categories.name as category')
                            ->where('categories.name', $cateslug->name)
                            ->where('websites.tld_id', $tld->id)
                            ->where('websites.language_id', $language->id)
                            ->orderBy('websites.id', 'desc')
                            ->get();
        }

    	$categories = $this->categoryRepository->all();

    	$tlds = $this->tldRepository->all();

        $languages = $this->languageRepository->all();

        $catego = '';



    	return view('buy.index')->with('cateslug', $cateslug)->with('categories', $categories)->with('tlds', $tlds)->with('languages', $languages)->with('websites2', $websites2)->with('catego', $catego);
    }

    /*
      public function cart() {

        if (sizeof($carts) == 0) {

            return redirect()->route('marketplace');

        } else {

            $websites = [];
            $precioTotal = 0;
            foreach ($carts as $cart) {
                $web = Website::where('id', $cart->website_id)->first();
                $precioTotal = $precioTotal + $web->price;
                array_push($websites, $web);
            }

            return view('buy.cart')->with('carts', $carts)->with('websites', $websites)->with('precioTotal', $precioTotal);
        }

    }
    */
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Website;
use App\Models\Category;
use App\Models\Tld;
use App\Models\Language;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class FilterWebsite extends Component
{
	public $cateslug;
	public $categories;
	public $tlds;
	public $languages;
	public $websites2 = [];
	public $catego;

	public $numberDa = 1;
	public $numberPa = 1;
	public $selectCategory = 'All';
	public $selectTld = 'All';
	public $selectLanguage = 'All';
	public $selectMinPrice = 5;
	public $selectMaxPrice = 25;

	public $websites;
	public $filterWebsites;

	public $cates;
	public $nTlds;
	public $nLang;

	public $webname;
	public $da;
	public $pa;
	public $postc;
	public $price;

	public $testing;
	
	public $counter;
	public $numCarts;

	protected $listeners = [
		'webname' => 'addToCart',
	];

	public function mount($cateslug, $categories, $tlds, $languages, $websites2, $catego, $numCarts)
	{
		$this->cateslug = $cateslug;
		$this->categories = $categories;
		$this->tlds = $tlds;
		$this->languages = $languages;
		$this->websites2 = $websites2;
		$this->catego = $catego;
		$this->numCarts = $numCarts;
		$this->counter = $this->numCarts;

		$this->selectCategory = $this->cateslug;

		$cates = Category::join('category_website', 'category_website.category_id', '=', 'categories.id')
					->join('websites', 'websites.id', '=', 'category_website.website_id')
			->where('categories.name', 'LIKE', '%'.$cateslug.'%')
			->get();

		if (sizeof($this->websites2) > 0) {
			$this->websites = $this->websites2;
		} else {

			$this->websites = DB::table('websites as w')
										->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
                     					->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->where('c.name', $this->cateslug)
										->orderBy('w.id', 'desc')
										->get();
		}


		$this->cates = $cates;
		
	}

	/*public function authority($numberDa, $numberPa) {
		$this->numberDa = $numberDa;
		$this->$numberPa = $numberPa;
	}*/

	public function fetch()
	{


		if ($this->selectCategory != $this->cateslug) {

			if ($this->selectCategory == 'All') {
				$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->orderBy('w.id', 'desc')
										->get();
			} else {

				$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
											->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
											->join('category_website as cw', 'cw.website_id', '=', 'w.id')
											->join('categories as c', 'c.id', '=', 'cw.category_id')
											->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
											->where('c.name', $this->selectCategory)
											->orderBy('w.id', 'desc')
											->get();
			}


			if ($this->selectMinPrice != 5 || $this->selectMaxPrice != 25) {

				$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->where('c.name', $this->selectCategory)
										->whereBetween('w.price', [$this->selectMinPrice, $this->selectMaxPrice])
										->orderBy('w.id', 'desc')
										->get();
			}
			
			
		}

		if ($this->selectCategory == 'All') {

			$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->orderBy('w.id', 'desc')
										->get();

			if ($this->selectMinPrice != 5 || $this->selectMaxPrice != 25) {

				$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->whereBetween('w.price', [$this->selectMinPrice, $this->selectMaxPrice])
										->orderBy('w.id', 'desc')
										->get();
			}

		}

		if ($this->selectTld == 'All' && $this->selectLanguage != 'All') {

			$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->join('languages as l', 'l.id', '=', 'w.language_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->where('c.name', $this->selectCategory)
										->where('l.name', $this->selectLanguage)
										->orderBy('w.id', 'desc')
										->get();


			if ($this->selectMinPrice != 5 || $this->selectMaxPrice != 25) {

				$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->join('languages as l', 'l.id', '=', 'w.language_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->where('c.name', $this->selectCategory)
										->where('l.name', $this->selectLanguage)
										->whereBetween('w.price', [$this->selectMinPrice, $this->selectMaxPrice])
										->orderBy('w.id', 'desc')
										->get();
			}

		} elseif ($this->selectTld != 'All' && $this->selectLanguage == 'All') {

			$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->join('tlds as t', 't.id', '=', 'w.tld_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->where('c.name', $this->selectCategory)
										->where('t.name', $this->selectTld)
										->orderBy('w.id', 'desc')
										->get();


			if ($this->selectMinPrice != 5 || $this->selectMaxPrice != 25) {

				$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->join('tlds as t', 't.id', '=', 'w.tld_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->where('c.name', $this->selectCategory)
										->where('t.name', $this->selectTld)
										->whereBetween('w.price', [$this->selectMinPrice, $this->selectMaxPrice])
										->orderBy('w.id', 'desc')
										->get();
			}

		} elseif ($this->selectTld == 'All' && $this->selectLanguage == 'All') {

			$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->where('c.name', $this->selectCategory)
										->orderBy('w.id', 'desc')
										->get();


			if ($this->selectMinPrice != 5 || $this->selectMaxPrice != 25) {

				$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->where('c.name', $this->selectCategory)
										->whereBetween('w.price', [$this->selectMinPrice, $this->selectMaxPrice])
										->orderBy('w.id', 'desc')
										->get();
			}

		} elseif ($this->selectTld == 'All' && $this->selectLanguage == 'All' && $this->selectLanguage == 'All') {

			$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->orderBy('w.id', 'desc')
										->get();

			if ($this->selectMinPrice != 5 || $this->selectMaxPrice != 25) {

				$this->websites = DB::table('websites as w')->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
										->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->whereBetween('w.price', [$this->selectMinPrice, $this->selectMaxPrice])
										->orderBy('w.id', 'desc')
										->get();
			}
			
		}
		
	}

	public function addToCart($webname) {
	    
	    $this->websites = DB::table('websites as w')
										->join('link_types as lt', 'lt.id', '=', 'w.link_type_id')
										->join('post_contents as pc', 'pc.id', '=', 'w.post_content_id')
										->join('category_website as cw', 'cw.website_id', '=', 'w.id')
                     					->join('categories as c', 'c.id', '=', 'cw.category_id')
										->select('w.name as web_name','w.domain_authority as da','w.page_authority as pa', 'lt.name as link_type', 'pc.name as post_content', 'w.price as price', 'c.name as category')
										->where('c.name', $this->cateslug)
										->orderBy('w.id', 'desc')
										->get();

		$this->webname = $webname;

		$web = Website::where('name', $this->webname)->first();

		Cart::create([
			'user_id' => auth()->user()->id,
			'website_id' => $web->id,
			'quantity' => 1
		]);
	}

    public function render()
    {
        return view('livewire.filter-website');
    }
}
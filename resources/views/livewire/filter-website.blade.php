<div>
	<livewire:heading-category site="marketplace" currentlySite="{{ $cateslug }}"/>

<div class="container">
	<div class="row">
		<div class="col-md-3 noP aside-c">
			<p>
				<strong style="text-transform: uppercase;">
					<i class="fa fa-filter" style="color: #f70"></i> 
					Refine Results
				</strong>
			</p>

			<hr>

			<div class="form-row">
				<label>Categories</label>
				<select name="categories" id="categories" class="form-select" wire:model="selectCategory" wire:change="fetch">
					@foreach($categories as $category)

						@if($category != $cateslug)
							<option value="{{ $category->name }}">
								{{ $category->name }}
							</option>	
						@endif


					@endforeach
				</select>
			</div>

			<div class="form-row">
				<label>Country TLDs</label>
				<select name="tlds" id="tlds" class="form-select" wire:model="selectTld" wire:change="fetch">
					@foreach($tlds as $key => $tld)

						<option value="{{ $tlds[$key]['name'] }}">
							{{ $tlds[$key]['name'] }}
						</option>

					@endforeach
				</select>
			</div>

			<div class="form-row">
				<label>Language</label>
				<select name="languages" id="languages" class="form-select" wire:model="selectLanguage" wire:change="fetch">
					@foreach($languages as $language)

						<option value="{{ $language->name }}">
						{{ $language->name }}
						</option>

					@endforeach
				</select>
			</div>

			<div class="form-row range-form range-form-sm">
				<div class="title">
					<label class="pull-left">Domain Authority</label>
					<input type="number" name="dan" id="dan" value="1" class="pull-right form-number" style="width: 40px;" wire:model="numberDa" wire:change="fetch">
				</div>
				<input type="range" name="dar" id="dar" class="range form-range" data-value="dar" value="1" step="1" max="100" min="1" autocomplete="off" wire:model="numberDa" wire:change="fetch">
			</div>

			<div class="form-row range-form range-form-sm">
				<div class="title">
					<label class="pull-left">Page Authority</label>
					<input type="number" name="pan" id="pan" value="1" class="pull-right form-number" style="width: 40px;" wire:model="numberPa" wire:change="fetch">
				</div>
				<input type="range" name="par" id="par" class="range form-range" data-value="par" value="1" step="1" max="100" min="1" autocomplete="off" wire:model="numberPa" wire:change="fetch">
			</div>

			<hr>

			<p>
				<strong class="text-uppercase px-2">Price Range</strong>
				(min. $5)
			</p>

			<div class="form-row">
				<div class="col-md-1 noP text-center lh-input colsm1">
					$
				</div>
				<div class="col-md-3 noP col-sm-3">
					<input type="number" id="lowLimit"  wire:model="selectMinPrice" wire:change="fetch"  class="form-control low-limit" value="5" min="5" max="10000">
				</div>
				<div class="col-md-2 noP text-center lh-input col-sm-2">
					to $
				</div>
				<div class="col-md-3 noP col-sm-3">
					<input type="number" id="highLimit"  wire:model="selectMaxPrice" wire:change="fetch" class="form-control high-limit" value="25" min="99999" max="10000">
				</div>
				<div class="col-md-3 noP col-sm-3">
					<span class="btn-price" id="priceFilter">
						<i class="fa fa-chevron-right"></i>
					</span>
				</div>

				<hr>

				<p class="my-3 mt-4 px-2">
					<strong class="text-uppercase">Sort Results</strong>
				</p>
				<div class="form-row px-3">
					<label class="pointer fw">
						<input type="radio" name="orderby" id="orderby" value="added_date" autocomplete="off" checked="">
						Show New Websites First
					</label>
					<label class="pointer fw">
						<input type="radio" name="orderby" id="orderby" value="site_da" autocomplete="off">
						Domain Authority
						<span class="text-muted" style="font-weight: 400;">(High to Low)</span>
					</label>
					<label class="pointer fw">
						<input type="radio" name="orderby" id="orderby" value="site_pa" autocomplete="off">
						Page Authority
						<span class="text-muted" style="font-weight: 400;">(High to Low)</span>
					</label>
				</div>

			</div>

		</div>

		<div id="resultsSec" class="col noPonM div-result">
			<ul class="list-images-5 list-images-big-5 row">
				<table class="table table-bordered text-center rTable" style="position: relative;">
					<tbody>
						<tr class="bg-info">
							<td class="text-left title-td">Website</td>
							<td width="8%" class="title-td">DA</td>
							<td width="8%" class="title-td">PA</td>
							<td width="10%" class="title-td">Link Type</td>
							<td width="22%" class="title-td">Category</td>
							<td width="10%" class="title-td">Post Content</td>
							<td width="7%" class="title-td">Price</td>
							<td width="17%" class="title-td">Buy Guest Post</td>
						</tr>
					</tbody>
					<tbody class="sitesList">

							@if(sizeof($websites) <= 0)

								<tr style="column-span: all;">
									<td width="100%" style="column-span: all; text-align: center;">Not found Matches</td>
								</tr>

							@endif

							@foreach($websites as $website)
							<div id="form-website">
								<tr class="item-row">
									<td class="text-left">
										<input type="text" name="webname{{ (string)$counter }}" value="{{ $website->web_name }}" id="webname{{ (string)$counter }}" style="display: none;">
										<a href="{{ $webname }}" target="_blank">{{ $website->web_name }}</a> 
										<i class="fa fa-external-link"></i>
										<br>
										<span>
										» 
											<a href="#" target="_blank" class="web-detail">view site details</a></span>
										</td>
										<td>
											<input type="text" name="da{{ (string)$counter }}" value="{{ $website->da }}" wire:model="da" style="display: none;" disabled>
											{{ $website->da }}
										</td>
										<td>
											<input type="text" name="pa{{ (string)$counter }}" value="{{ $website->pa }}" wire:model="pa" style="display: none;" disabled>
											{{ $website->pa }}
										</td>
										<td>{{ $website->link_type }}</td>
										<td style="font-size:12px;font-family:sans-serif !important;">
											@if(isset($website->category))
												{{ $website->category }}
												@else
												{{ '' }}
											@endif
											
											<br>
											
										</td>
										<td>
											<input type="text" name="postc{{ (string)$counter }}" value="{{ $website->post_content }}" wire:model="postc" style="display: none;" disabled>
											{{ $website->post_content }}
										</td>
										<td>
											<strong>
												<input type="text" name="price{{ (string)$counter }}" value="{{ $website->price }}" wire:model="price" style="display: none;">
												{{ $website->price }}
											</strong>
										</td>
										<td id="td_addtocart">
											<button type="submit" class="btn-success btn-sm addtocart">Buy Guest Post {{ $website->price }}</button>
										</td>
									</tr>
								</div>
								@php $counter = $counter + 1; @endphp
							@endforeach

							
					</tbody>
				</table>
			</ul>
			<div class="col-md-12 links">
				
			</div>
		</div>

		<hr style="margin: 2.5rem auto">

		<div class="col-md-12 row noP">
			<p>
				If you need quality traffic then welcome to our buy-sell guest post services. Our outrageous guest posting techniques have been fully approved by google penguin techniques. Means we don't have intentions to do Black Hat SEO or don't have connections to any private networking authority. Our guest posting will focus on building your brand name, building your relation with top blogs and to get you inspiration among clients of the relevant market. We have the history of building online stronger influences of our clients by just being fair in our dealings and operations.
			</p>
			<p>
				Being average business holder in Web Design & Development domain, we will suggest you buy our Web Design guest post backlinking services. We have got hundreds of relevant websites having top ranks. So just think of that your business is being discussed on that form can bring you leads. Being our client, you just need to sit and witness your success. We have solved all the hectic work of you by keeping in mind following steps. 100% original blogs, no private blogging network, only relevant websites with top PA, DA and MOZ rank and quality content writing. Yes, it is true, once you pick Web Design & Development category then relevant blogs having top ranks will be visible to you. You can filter them and select your target website.
			</p>
			<p>
				Stronger and precise content will guarantee to fetch attention of existing and new users. Our professionals do this very often and know the ways that how to address every aspect of any particular business. So we have saved your time and efforts, as you just need to select your category, target website and time domain according to your budget.
			</p>
			<p>
				You can sell Web Design & Development guest post through our website as well. We will be directing only relevant and serious users to you after finalizing the deal. Plus, you will be having upper hand being a host, whether to accept or reject any guest post.
			</p>
		</div>

		<hr style="margin: 2.5rem auto">

		<div class="col-md-5 contact-message">
			<h3 class="main-heading">
				Let us help you rank
				<strong>your website</strong>
			</h3>
			<p class="big-text">
				Join world-renowned media companies. It's time to give your sales team a platform that lets them sell guaranteed inventory in the most efficient way possible.
			</p>
			<p class="big-text">
				Fill out the form, and we'll be in touch. 
			</p>
		</div>

		<div class="col-md-7 mb-4" style="border-left: 1px solid #ccc; padding: 0px 45px;">
			<div class="form">
				<form action="">
					@csrf
					<div class="form-row">
						<div class="col-md-6 contact-form-div" style="padding: 0;">
							<label>First Name</label>
							<input type="text" name="f_name" id="f_name" class="form-control" placeholder="First Name">
						</div>
						<div class="cols-md-6">
							<label>Last Name</label>
							<input type="text" name="l_name" id="l_name" class="form-control" placeholder="Last Name">
						</div>
					</div>

					<div class="form-row">
						<label>Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="info@yourcompany.com">
					</div>

					<div class="form-row">
						<label>Website</label>
						<input type="text" name="website" id="website" class="form-control" placeholder="https://">
					</div>

					<div class="form-row">
						<label>Message</label>
						<textarea name="message" id="message" class="form-control" placeholder="Type your message here..."></textarea>
					</div>
					<br>

					<div class="form-row">
						<input type="submit" class="btn-submit-message" value="Submit" name="submit">
					</div>

				</form>
			</div>
		</div>

	</div>		
</div>
@section('custom_js')

	<script>
		
		const $rangeDa = document.getElementById('dar'),
				$rangePa = document.getElementById('par');

		const $numberDa = document.getElementById('dan'),
				$numberPa = document.getElementById('pan');

		const $categories = document.getElementById('categories'),
				$tlds = document.getElementById('tlds'),
				$languages = document.getElementById('languages');

		const $table = document.querySelector('.sitesList');

		const $btnAddToCart = document.querySelector('.addtocart');

		const $tdAddToCart = document.getElementById('td_addtocart');

		const $formWebsite = document.getElementById('form-website');

		let counter = {{ $numCarts }};

		const $fetching = document.createElement('div');
		$fetching.className = 'fetching';
		$fetching.style.position = 'absolute';
		$fetching.style.backgroundColor = 'gray';
		$fetching.style.opacity = '.7';
		$fetching.style.display = 'inline-block';
		$fetching.style.width = '600px';
		$fetching.style.padding = '15rem 320px';
		$fetching.style.color = '#FFF';
		$fetching.style.textAlign = 'center';
		$fetching.style.width = 'inherit';
		$fetching.textContent = 'Fetching...';

		$rangeDa.addEventListener('change', () => {
			$numberDa.value = $rangeDa.value;

			$table.insertAdjacentElement('afterbegin', $fetching);

			setTimeout(() => {
				$table.removeChild($fetching)
			}, 5000);
		});

		$rangePa.addEventListener('change', () => {
			$numberPa.value = $rangePa.value;

			$table.insertAdjacentElement('afterbegin', $fetching);

			setTimeout(() => {
				$table.removeChild($fetching)
			}, 5000);
		});

		$numberDa.addEventListener('change', () => {
			$rangeDa.value = $numberDa.value;

			$table.insertAdjacentElement('afterbegin', $fetching);

			setTimeout(() => {
				$table.removeChild($fetching)
			}, 5000);
		});
	
		$numberPa.addEventListener('change', () => {
			$rangePa.value = $numberPa.value;

			$table.insertAdjacentElement('afterbegin', $fetching);

			setTimeout(() => {
				$table.removeChild($fetching)
			}, 5000);
		});

		$categories.addEventListener('change', () => {
			$table.insertAdjacentElement('afterbegin', $fetching);

			setTimeout(() => {
				$table.removeChild($fetching)
			}, 5000);
		});

		$tlds.addEventListener('change', () => {
			$table.insertAdjacentElement('afterbegin', $fetching);

			setTimeout(() => {
				$table.removeChild($fetching)
			}, 5000);
		});

		$languages.addEventListener('change', () => {
			$table.insertAdjacentElement('afterbegin', $fetching);

			setTimeout(() => {
				$table.removeChild($fetching)
			}, 5000);
		});


		document.addEventListener('click', (e) => {
			if (e.target.matches('button')) {
				let webname = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.firstElementChild.value;

				let td = e.target.parentElement;

				console.log(td)

				window.livewire.emit('webname', webname);

				counter = counter + 1;

				td.style.textAlign = 'center';

				e.target.style.display = 'none'; 	

				let item = document.querySelector('.cart-item');

				item.textContent = `${counter} item`;

				td.insertAdjacentText('afterbegin','Added to your cart');
			}
		})

		/*$tdAddToCart.addEventListener('click', () => {

			//let webname = document.getElementById(`webname1`);

			//counter = counter + 1;

			//webname = webname.value;

			//console.log(webname)

			
			
			

			
			
		});*/

		//window.livewire.emit('dAuth-pAuth', $numberDa.value, $numberPa.value);

	</script>

@endsection('custom_js')
</div>

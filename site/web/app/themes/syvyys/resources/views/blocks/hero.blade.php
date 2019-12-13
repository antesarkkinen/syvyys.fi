<section class="hero">
  <div class="flex">
	<div class="w-full md:w-5/12 py-24 px-12 bg-gray-100">
      @include('components.logo', array('class' => 'max-w-full'))
	  <h1 class="mt-12 text-4xl">{{ $hero_items['title'] }}</h1>
	  <p class="mt-3">
	    {{ $hero_items['intro'] }}
	  </p>
	  <div class="mt-5">
	    <a href="{{ $hero_items['hero_cta_url'] }}" class="button inline-block px-5 py-4 text-white text-xs tracking-widest font-semibold uppercase rounded-full bg-purple-600 hover:bg-purple-500">
	      {{ $hero_items['hero_cta_text'] }}
	    </a>
	  </div>
	</div>
	<div class="hidden md:block md:w-7/12 md:relative">
	  <img class="absolute inset-0 h-full w-full object-cover object-center" src="{{ $hero_items['bg_image'] }}"/>
	  <svg class="absolute inset-y-0 h-full fill-current text-gray-100 w-32 -ml-16" preserveAspectRatio="none" viewBox="0 0 100 100">
	  	<polygon points="50,0 100,0 50,100 0,100"/>
	  </svg>
	</div>
  </div>
</section>
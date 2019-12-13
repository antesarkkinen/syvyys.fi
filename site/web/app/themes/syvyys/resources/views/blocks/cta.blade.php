@if ($position === 'top')
  @foreach($cta_top as $cta)
    <section class="cta-top bg-purple-700 shadow-md">
      <div class="container mx-auto">
      	<div class="p-3 text-purple-100 flex items-center justify-center">
          <span class="text-sm">{{ $cta['content'] }}</span>
          <div>
            <a href="{{ $cta['button_link'] }}" class="button inline-block ml-3 px-3 py-2 text-xs tracking-wide font-semibold uppercase rounded-full bg-purple-600 hover:bg-purple-500">{{ $cta['button_text'] }}</a>
          </div>
        </div>
      </div>
    </section>
  @endforeach
@elseif ($position === 'block')
  @foreach($cta_block as $cta)
    <section class="cta-block pt-8 pb-12 bg-purple-700 text-white text-center">
      <div class="container mx-auto max-w-3xl">
        <h2 class="text-gray-100 text-center text-3xl">{{ $cta['header'] }}</h2>
        <p class="mt-3">{{ $cta['content'] }}</p>
        <div class="mt-5">
          <a href="{{ $cta['button_link'] }}" class="button inline-block px-5 py-4 text-xs tracking-widest font-semibold uppercase rounded-full bg-purple-600 hover:bg-purple-500">{{ $cta['button_text'] }}</a>
        </div>
      </div>
    </section>
  @endforeach
@endif
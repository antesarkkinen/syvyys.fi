<h2 class="text-grey-darkest text-center uppercase text-3xl font-bold">Yogis</h2>
<div class="flex flex-wrap items-center justify-center m-2 yogis">
  @foreach($yogi_items as $yogi_item)
    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange rounded-lg max-w-xs shadow-lg">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
        <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
        <img class="relative w-40 rounded-full shadow border-8 border-white" src="{{ $yogi_item['thumbnail_url'] }}" alt="{{ $yogi_item['slug'] }}">
      </div>
      <div class="text-white px-6 pb-2 mt-6">
        <span class="block opacity-75 capitalize">{{ $yogi_item['post_type'] }}</span>
        <span class="block font-semibold text-xl mb-2">{{ $yogi_item['title'] }}</span>
        <p class="text-base">{{ $yogi_item['content'] }}</p>
      </div>
      @if($yogi_item['related_yogas'])
        <div class="px-6 pb-6">
        @foreach($yogi_item['related_yogas'] as $related_yoga)
          <a class="inline-block border-0 bg-white rounded-full text-orange text-xs font-bold px-3 py-2 yogas-badge mr-1 hover:bg-grey-lighter" href="{{ get_permalink($related_yoga) }}">{{ get_the_title($related_yoga) }}</a>
        @endforeach
        </div>
      @endif
    </div>
  @endforeach
</div>

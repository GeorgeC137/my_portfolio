<div class="w-full px-4 md:w-1/2 xl:w-1/3" x-data="{ categories: {{ json_encode($categories) }} }"
    :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden'">
    <div class="relative mb-12">
        <a href="{{ $github }}" target="_blank">
            <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
                <img src="{{ $image }}" alt="portfolio" class="w-full h-[260px] object-cover">
            </div>
        </a>
        <div class="text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]">
            <span class="font-semibold text-primary mb-2 block text-sm">
                {{ implode(', ', $categories) }}
            </span>
            <h3 class="font-bold text-lg mb-4 text-dark dark:text-gray-300">
                {{ $title }}
            </h3>
            <x-button-link :href="$github" variant="outline-primary" target="_blank">View Details</x-button-link>
        </div>
    </div>
</div>

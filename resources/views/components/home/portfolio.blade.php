{{-- Porfolio Section Starts Here  --}}
<section id="portfolio" x-data="{ selectedTab: 'all', activeClasses: 'bg-primary text-white', inactiveClasses: 'text-body-color hover:bg-primary hover:text-white' }" class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                    <h2 class="text-white mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]">
                        My Recent Projects
                    </h2>
                    <p class="text-body-color text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit voluptas fugit cum delectus
                        ab, totam provident atque numquam placeat minima.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <ul class="mb-12 flex flex-wrap justify-center space-x-1">
                    <li class="mb-1">
                        <button
                            class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8 hover:bg-purple-500"
                            @click="selectedTab = 'all'"
                            :class="'seletedTab == '
                            all ' ? activeClasses : inactiveClasses">
                            All Projects
                        </button>
                    </li>
                    @foreach ($tabs as $tab)
                        <li>
                            <button
                                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8 hover:bg-purple-500"
                                :class="seletctedTab == '{{ $tab }}' ? activeClasses : inactiveClasses"
                                @click="selectedTab = '{{ $tab }}'">
                                {{ $tab }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach ($items as $item)
                <x-portfolio-item :title="$item['title']" :categories="$item['category']" :image="$item['image']"
                    :github="$item['github']"></x-portfolio-item>
            @endforeach
        </div>
    </div>
</section>
{{-- Porfolio Section Ends Here  --}}

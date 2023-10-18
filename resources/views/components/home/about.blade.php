<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('https://picsum.photos/300') }}" alt="" class="rounded-2xl w-full" />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('https://picsum.photos/300') }}" alt="" class="rounded-2xl w-full" />
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img src="{{ url('https://picsum.photos/300') }}" alt="" class="rounded-2xl w-full" />
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                            "Hardwork and perseverance they ain't related"
                        </blockquote>
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
                        About Me
                    </h2>
                    <p class="text-base dark:text-gray-400 mb-8">
                        I'm George Omollo, a junior Fullstack Web developer specializing in <span class="text-red-500 font-bold">Laravel</span> and <span class="text-green-500 font-bold">Vue</span> frameworks. With a solid foundation in web development principles from Egerton University, I've actively contributed to a range of projects, from crafting user-friendly interfaces with Vue.js to building robust backend systems using Laravel. My passion for technology is matched only by my commitment to learning, constantly adapting to new challenges and staying updated with the latest industry trends.
                    </p>
                    <p class="text-base dark:text-gray-400 mb-8">
                        I thrive in collaborative environments, valuing teamwork as an essential ingredient for creating innovative solutions. As I embark on my career journey, my goal is to continue shaping cutting-edge web applications while making a positive impact in the field. I'm always open to new opportunities and connections within the web development community. Feel free to reach out, and let's explore the limitless possibilities of web development together. Thank you for visiting my portfolio, and I look forward to connecting with you.
                    </p>
                    <x-button-link href="https://github.com" variant="red" target="_blank">
                        View My GitHub
                    </x-button-link>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== About Section End -->

<x-app-layout>
    {{-- Portada--}}
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/portadacurso.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-black font-bold text-4xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus</h1>
                <p class="text-black text-lg mt-2 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat repellendus architecto, totam, aut blanditiis facere nemo, maiores debitis distinctio </p>
                @livewire('search')
            </div>
        </div>
    </section>
    @livewire('courses-index')
</x-app-layout>
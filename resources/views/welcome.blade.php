<x-app-layout>

    <section class="bg-cover" style="background-image: url({{asset('img/home/portada.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-black font-bold text-4xl">Familias fuertes</h1>
                <p class="text-black text-lg mt-2 mb-4">Para aquellas personas que quieren tener un matrimonio chido</p>
                   @livewire('search')
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8 ">

            <article>
                <figure>
                    <img class="rounded-xl h-50 w-full object-cover" src="img/home/cat-6463284_640.jpg" alt="">
                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-50 w-full object-cover" src="img/home/kitten-6479019_640.jpg" alt="">
                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-50 w-full object-cover" src="img/home/naranjo-de-bulnes-6489260_640.jpg" alt="">
                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-50 w-full object-cover" src="img/home/kitten-6479019_640.jpg" alt="">
                </figure>
            </article>

        </div>
    </section>


    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">No sabes que curso llevar</h1>
        <p class="text-center text-white">Dirigete al catalogo de cursos o webinars</p>

        <div class="flex justify-center mt-5 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            <div class="mr-5">
                <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ver catalogo de cursos
                </a>
            </div>

            <div>
                <a href="{{route('courses.webinar')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ver catalogo de webinars
                </a>
            </div>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">Ultimos cursos</h1>
        <p class="text-center text-gray-500 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reprehenderit tenetur quas, 
            dignissimos ex odit
        </p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($cursos as $curso)
                <x-course-card :curso='$curso'/>
            @endforeach
        </div>
    </section>


</x-app-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Content -->
            <div class="container py-8 grid grid-cols-5">

                <aside>
                    <h1 class="font-bold text-lg mb-3">Edicion del curso</h1>
                        <ul class="text-sm text-gray-700">
                            <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.edit',$course) border-indigo-400 @else border-transparent  @endif pl-2">
                                <a href="{{route('instructor.courses.edit',$course)}}">Informacion</a>
                            </li>
                            <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.curriculum', $course) border-indigo-400 @else border-transparent  @endif pl-2">
                                <a href="{{route('instructor.courses.curriculum', $course)}}">Lecciones</a>
                            </li>
                            <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.goals', $course) border-indigo-400 @else border-transparent  @endif pl-2">
                                <a href="{{route('instructor.courses.goals', $course)}}">Metas</a>
                            </li>
                            <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.students', $course) border-indigo-400 @else border-transparent  @endif pl-2">
                                <a href="{{route('instructor.courses.students', $course)}}">Estudiantes</a>
                            </li>
                        </ul>
                </aside>
        
                <div class="col-span-4 card">
                    <main class="card-body text-gray-600">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)

            {{$js}}
            
        @endisset
      
    </body>
</html>
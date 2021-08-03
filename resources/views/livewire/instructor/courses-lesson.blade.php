<div>
    @foreach ($section->lessons as $item)
        <article class="card mt-4">
            <div class="card-body">

                @if ($lesson->id == $item->id)
                    Se va a mostrar el formulario de editar

                @else
                    <header>
                        <h1><i class="far fa-play-circle text-blue-500 mr-1"></i> Leccion: {{$item->name}}</h1>
                    </header>

                    <div>
                        <hr class="my-3">
                        <p class="text-sm">Plataforma: {{$item->platform->name}}</p>
                        <p class="text-sm">Enlace: <a class="text-blue-600"href="{{$item->url}}" target="_blank">{{$item->url}}</a></p>

                        <div class="mt-3">
                            <button class="btn btn-primary text-sm" wire:click="edit({{$item}})">Editar</button>
                            <button class="btn btn-danger text-sm">Eliminar</button>
                        </div>
                    </div>
                @endif
            </div>
        </article>
    @endforeach
</div>
 
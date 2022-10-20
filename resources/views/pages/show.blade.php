<x-layouts.layout-main :title="$book->title">
    <div class="mx-[34.5rem] my-10">
        <img alt="{{ $book->title }}" class="max-w-lg" src="{{ $book->image }}">
        <div class="text-center">
                <p class="py-8 text-3xl font-black">{{ $book->title }}</p>
                <p>{!! nl2br(e($book->description))  !!}</p>
                <div class="">
                    <p class="text-2xl font-bold">{{ $book->author }}</p>
                    <p class="font-semibold">Prix : <span class="font-normal">{{ $book->price }}$</span></p>
                    <p class="font-semibold">Nombre de pages : <span class="font-normal">{{ $book->nombre_pages }}</span></p>
                </div>
            {{-- @auth --}}
                <div class="pt-6 flex space-x-4 justify-center">
                    <x-btn-delete :book="$book" />
                    <a href="{{ $book->id }}/edit" class="btn bg-black text-white p-2 rounded">Modifier</a>
                </div>
            {{-- @endauth --}}
        </div>
</div>



</x-layouts.layout-main>

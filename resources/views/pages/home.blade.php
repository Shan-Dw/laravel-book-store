<x-layouts.layout-main title="Accueil">
<div>
<h1 class="text-5xl text-center font-extrabold my-8 ">Book<span class="text-blue-500">Store</span></h1>
<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Titre du livre
                </th>
                <th scope="col" class="py-3 px-6">
                    Auteur
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Editer
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($books as $book)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $book->title }}
                </th>
                <td class="py-4 px-6">
                    {{ $book->author }}
                </td>
                <td class="py-4 px-6">
                    {{ $book->price }}
                </td>
                <td class="py-4 px-6">
                    <a href="books/{{ $book->id }}" class="btn bg-blue-500 p-2 rounded text-white hover:bg-blue-400">Editer</a>
                </td>
            </tr>
            @empty
                 <p class="text-center">Aucun livre disponible actuellement</p>
            @endforelse
        </tbody>
    </table>
</div>
<div class="text-black font-bold">
{{ $books->links() }}
</div>



</div>
</x-layouts.layout-main>

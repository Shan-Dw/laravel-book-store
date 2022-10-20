@props(['book'])
<div class="">
		<form  method="POST"
				>
				@csrf
				@method('DELETE')
				<button class="bg-black btn text-white p-2 rounded" type="submit">Supprimer</button>
		</form>
</div>

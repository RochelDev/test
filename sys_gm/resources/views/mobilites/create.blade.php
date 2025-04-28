<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex items-center justify-center">
    @if (session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

    <form action="{{ route('mobilite.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        @csrf

        <h2 class="text-2xl font-bold mb-6 text-center">Demande de Mobilité</h2>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Nom de l'agent :</label>
            <input type="text" name="nom_agent" required class="w-full border border-gray-300 p-2 rounded-md">
            @error('nom_agent')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Poste actuel :</label>
            <input type="text" name="poste_actuel" required class="w-full border border-gray-300 p-2 rounded-md">
            @error('poste_actuel')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Poste souhaité :</label>
            <input type="text" name="poste_souhaite" required class="w-full border border-gray-300 p-2 rounded-md">
            @error('poste_souhaite')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Motif :</label>
            <textarea name="motif" required class="w-full border border-gray-300 p-2 rounded-md" rows="4"></textarea>
            @error('motif')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Documents à joindre :</label>
            <input type="file" name="documents[]" multiple required class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-indigo-50 file:text-indigo-700 file:rounded-md file:cursor-pointer">
            @error('documents[]')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition">
            Soumettre la demande
        </button>
    </form>

</body>
<script>
    setTimeout(() => {
        const alert = document.querySelector('.bg-green-100');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 3000); // Disparaît après 3 secondes
</script>

</html>

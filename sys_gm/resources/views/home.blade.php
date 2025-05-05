<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
    <nav class="bg-blue-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-blue-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none focus:ring-inset" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Ouvrir le menu principal</span>
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-start">
                    <div class="flex items-center shrink-0">
                        <img src="{{ asset('images/DRAPEAU.jpg') }}" alt="Drapeau du Bénin" class="w-8 h-8 rounded mr-2">
                        <span class="font-semibold text-white text-lg">Sys_gm</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="#" class="rounded-md bg-blue-900 px-3 py-2 text-sm font-medium text-white">Tableau de Bord</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Demandes</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Agents</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Utilisateurs</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Paramètres</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button" class="relative rounded-full bg-blue-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-800 focus:outline-none">
                        <span class="sr-only">Voir les notifications</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" /></svg>
                    </button>
                    <div class="relative ml-3">
                        <button type="button" class="relative flex rounded-full bg-blue-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-800 focus:outline-none">
                            <svg class="h-6 w-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-7 9a7 7 0 1 1 14 0H3Z" clip-rule="evenodd" /></svg>
                            <span class="ml-2 text-white">Admin User</span>
                        </button>
                        <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Votre Profil</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Paramètres</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Déconnexion</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative w-full h-auto md:h-[300px] overflow-hidden">
        <img src="{{ asset('images/femme.jpg') }}" alt="Image de la plateforme" class="absolute inset-0 w-full h-full object-contain">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-6 px-4 md:px-8">
        <div class="bg-white rounded-lg shadow-md p-4">
            <h3 class="font-semibold text-blue-700 mb-2">À Propos</h3>
            <p class="text-gray-600 text-sm mb-2">
                Cette plateforme vous permet de gérer vos demandes de mobilité au sein de la fonction publique. Vous pourrez consulter les offres disponibles, soumettre vos candidatures et suivre l'état de vos demandes.
            </p>
            <p class="text-gray-600 text-sm mb-2 font-semibold">
                <span class="text-red-500">*</span> Veuillez noter qu'une authentification est obligatoire avant de pouvoir effectuer toute activité sur cette plateforme. Vous trouverez le lien de connexion en haut à droite de la page.
            </p>
            <a href="#" class="text-blue-500 hover:underline text-sm">Se connecter</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4">
            <h3 class="font-semibold text-blue-700 mb-2">Qu'est-ce que la Mobilité ?</h3>
            <p class="text-gray-600 text-sm mb-2">
                La mobilité dans le contexte de la fonction publique ou des ressources humaines désigne le déplacement ou le changement de position d'un agent (employé) au sein d'une organisation ou entre différentes organisations.
            </p>
            <div id="mobilityDetails" class="hidden mt-2 text-gray-700 text-sm">
                <p>Elle peut prendre plusieurs formes, notamment les mutations, les détachements, les mises à disposition.</p>
                <p>Chacune est encadrée par des dispositions légales et réglementaires, comme la Loi n° 2015-18.</p>
            </div>
            <a href="#" class="text-blue-500 hover:underline text-sm" onclick="document.getElementById('mobilityDetails').classList.toggle('hidden')">En savoir plus</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4">
            <h3 class="font-semibold text-blue-700 mb-2">Lois et Réglementations</h3>
            <p class="text-gray-600 text-sm">
                L'application se base sur la Loi n° 2015-18 du 1er septembre 2017 portant statut général de la Fonction Publique en République du Bénin, notamment les articles 77 à 86 qui encadrent la mobilité des agents de l'État.
            </p>
        </div>
    </div>

    <footer class="bg-blue-800 text-gray-300 py-6 mt-10 text-center text-sm">
        &copy; {{ date('Y') }} - Ministère de l'Économie. Tous droits réservés.
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
         <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
              <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                  <!-- Mobile menu button-->
                  <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

                  <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                      <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Acceuil</a>
                      <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
                      <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Mobilité</a>
                      <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"></a>
                    </div>
                  </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                  <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                  </button>

                  <!-- Profile dropdown -->
                  <div class="relative ml-3">
                    <div>
                      <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                      </button>
                    </div>

                    <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                      <!-- Active: "bg-gray-100 outline-hidden", Not Active: "" -->
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
              <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
              </div>
            </div>
          </nav>


          <div class="relative w-full h-auto md:h-[300px] overflow-hidden">
            <img src="{{ asset('images/collab.jpg') }}" alt="Image de la plateforme" class="absolute inset-0 w-full h-full object-cover ">
            <div class="absolute inset-0 flex items-center justify-between px-4 md:px-8 text-white">
                {{-- <div class="text-left">
                    <h1 class="text-xl md:text-3xl font-bold mb-2">Gestion des Mobilités</h1>
                    <p class="text-sm md:text-lg">Suivi des déplacements des agents</p>
                </div>
                <div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                        Commencer une demande
                    </button>
                </div> --}}
            </div>
        </div>







    <!-- Contenu -->
    <main class="max-w-7xl mx-auto p-6">
        @yield('content')
    </main>

    <section class="py-16 bg-blue-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-blue-800 mb-4">Notre Mission</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    La modernisation de l'administration publique béninoise passe par la digitalisation de ses processus. Notre plateforme permet une gestion efficace et transparente des demandes de mobilité des agents.
                </p>
                <div class="bg-blue-100 p-4 rounded-md">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">Nos objectifs</h3>
                    <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                        <li>Simplifier les démarches administratives</li>
                        <li>Assurer la transparence des processus</li>
                        <li>Optimiser le traitement des demandes</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-blue-800 mb-4">Critères d'éligibilité</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Les agents doivent répondre à des critères spécifiques pour être éligibles à une demande de mobilité, conformément aux réglementations en vigueur.
                </p>
                <div class="bg-blue-100 p-4 rounded-md">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">Processus de traitement</h3>
                    <p class="text-gray-700 leading-relaxed mb-2">
                        Délai moyen de traitement : 2 à 4 semaines
                    </p>
                    <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                        <li>Étude approfondie de chaque dossier</li>
                        <li>Validation par les services compétents</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>//Gérer l'interaction au clic
        document.addEventListener('DOMContentLoaded', function() {
          const userMenuButton = document.getElementById('user-menu-button');
          const userMenuItems = document.querySelector('[aria-labelledby="user-menu-button"]'); // Sélectionne le dropdown par son aria-labelledby

          if (userMenuButton && userMenuItems) {
            userMenuButton.addEventListener('click', function() {
              userMenuItems.classList.toggle('hidden');
              const isExpanded = userMenuButton.getAttribute('aria-expanded') === 'true' || false;
              userMenuButton.setAttribute('aria-expanded', !isExpanded);
            });

            // Fermer le dropdown si on clique en dehors
            document.addEventListener('click', function(event) {
              if (userMenuItems.classList.contains('hidden') === false && !userMenuButton.contains(event.target) && !userMenuItems.contains(event.target)) {
                userMenuItems.classList.add('hidden');
                userMenuButton.setAttribute('aria-expanded', false);
              }
            });
          }
        });
      </script>
    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-6 mt-10 text-center text-sm">
        &copy; {{ date('Y') }} - Ministère de l'Économie. Tous droits réservés.
    </footer>


    </body>
</html>

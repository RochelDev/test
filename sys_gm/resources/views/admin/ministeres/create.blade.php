@extends('page')

@section('title', '| Ministère')

@section('content')
    <!-- Affectation -->
    <div class="">
        Enregistrer un Ministère
        <form class="space-y-8">
            <!-- Subject -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Nom du ministère <span class="text-red-500">*</span>
                </label>
                <input type="text"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
            </div>


            <!-- Contact Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Code du ministère <span class="text-red-500">*</span>
                    </label>
                    <input type="email"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Sites ou localisation <span class="text-red-500">*</span>
                    </label>
                    <input type="tel"
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
                </div>
            </div>


            <!-- Form Actions -->
            <div class="flex justify-end gap-4">
                <button type="button"
                    class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                    Abandonner
                </button>
                <button type="submit"
                    class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
@endsection
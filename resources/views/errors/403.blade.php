<x-app-layout>
  <div class="min-h-screen flex items-center justify-center bg-gray-100">
      <div class="max-w-md w-full text-center">
          <h1 class="text-6xl font-bold text-red-500">403</h1>
          <h2 class="mt-2 text-2xl font-semibold text-gray-800">Forbidden</h2>
          <p class="mt-4 text-gray-600">
              Sorry, you don't have permission to access this page.
          </p>
          <a href="{{ url()->previous() }}" class="mt-6 inline-block px-6 py-3 text-sm font-medium leading-5 text-white bg-blue-600 hover:bg-blue-500 rounded-lg focus:outline-none focus:bg-blue-500">
              Go Back
          </a>
      </div>
  </div>
</x-app-layout>

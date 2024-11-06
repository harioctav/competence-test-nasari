<x-guest-layout>
  <!-- Login Content -->
  <section class="relative z-10 bg-transparent">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Silahkan Login
          </h1>

          <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
            @csrf

            <div>
              <div class="flex items-center gap-4">
                <img src="{{ asset('assets/icons/mail.svg') }}" alt="Email Icon" class="w-5 h-5 text-gray-500">
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Email" required autofocus wire:model="email">
              </div>
              <x-input-error for="email" class="mt-2" />
            </div>

            <div>
              <div class="flex items-center gap-4">
                <img src="{{ asset('assets/icons/lock.svg') }}" alt="Password Icon" class="w-5 h-5 text-gray-500">
                <input type="password" name="password" id="password" placeholder="Masukkan Password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
              </div>
              <x-input-error for="password" class="mt-2" />
            </div>

            <div class="flex items-center justify-between">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember_me" name="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                </div>
                <div class="ml-3 text-sm">
                  <label for="remember_me" class="text-gray-500 dark:text-gray-300">
                    Ingat Saya
                  </label>
                </div>
              </div>
            </div>

            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
              Sign in
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>

<x-app-layout>
    <body>
      
      <!-- tailwind.config.js -->
<!--module.exports = {-->
<!--    darkMode: 'class',-->
<!--};-->



<!-- component -->
<!--<div>-->
<!--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>-->
    
<!--    <div x-data="{ sidebarOpen: false, darkMode: false }" :class="{ 'dark': darkMode }">-->
<!--        <div class="flex h-screen bg-gray-100 dark:bg-gray-800 font-roboto">-->
<!--            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"-->
<!--                class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>-->
    
<!--            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"-->
<!--                class="fixed z-30 inset-y-0 left-0 w-60 transition duration-300 transform bg-white dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">-->
<!--                <div class="flex items-center justify-center mt-8">-->
<!--                    <div class="flex items-center">-->
<!--                        <span class="text-gray-800 dark:text-white text-2xl font-semibold">Dashboard</span>-->
<!--                    </div>-->
<!--                </div>-->
    
<!--                <nav class="flex flex-col mt-10 px-4 text-center">-->
<!--                    <a href="#"-->
<!--                        class="py-2 text-sm text-gray-700 dark:text-gray-100 bg-gray-200 dark:bg-gray-800 rounded">Overview</a>-->
<!--                    <a href="#"-->
<!--                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100  hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Tickets</a>-->
<!--                    <a href="#"-->
<!--                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Ideas</a>-->
<!--                    <a href="#"-->
<!--                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Contacts</a>-->
<!--                    <a href="#"-->
<!--                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Settings</a>-->
<!--                </nav>-->
<!--            </div>-->
    
<!--            <div class="flex-1 flex flex-col overflow-hidden">-->
<!--                <header class="flex justify-between items-center p-6">-->
<!--                    <div class="flex items-center space-x-4 lg:space-x-0">-->
<!--                        <button @click="sidebarOpen = true"-->
<!--                            class="text-gray-500 dark:text-gray-300 focus:outline-none lg:hidden">-->
<!--                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"-->
<!--                                    stroke-linecap="round" stroke-linejoin="round" />-->
<!--                            </svg>-->
<!--                        </button>-->
    
<!--                        <div>-->
<!--                            <h1 class="text-2xl font-medium text-gray-800 dark:text-white">Overview</h1>-->
<!--                        </div>-->
<!--                    </div>-->
    
<!--                    <div class="flex items-center space-x-4">-->
<!--                        <button @click="darkMode = !darkMode"-->
<!--                            class="flex text-gray-600 dark:text-gray-300 focus:outline-none" aria-label="Color Mode">-->
<!--                            <svg x-show="darkMode" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                <path fill-rule="evenodd"-->
<!--                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"-->
<!--                                    clip-rule="evenodd" />-->
<!--                            </svg>-->
<!--                            <svg x-show="!darkMode" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />-->
<!--                            </svg>-->
<!--                        </button>-->
<!--                        <button class="flex text-gray-600 dark:text-gray-300 focus:outline-none">-->
<!--                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">-->
<!--                                <path-->
<!--                                    d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"-->
<!--                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />-->
<!--                            </svg>-->
<!--                        </button>-->
    
<!--                        <button class="flex text-gray-600 dark:text-gray-300 focus:outline-none">-->
<!--                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path-->
<!--                                    d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"-->
<!--                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />-->
<!--                            </svg>-->
<!--                        </button>-->
    
<!--                        <div x-data="{ dropdownOpen: false }" class="relative">-->
<!--                            <button @click="dropdownOpen = ! dropdownOpen"-->
<!--                                class="flex items-center space-x-2 relative focus:outline-none">-->
<!--                                <h2 class="text-gray-700 dark:text-gray-300 text-sm hidden sm:block">Jones Ferdinand</h2>-->
<!--                                <img class="h-9 w-9 rounded-full border-2 border-purple-500 object-cover"-->
<!--                                    src="https://images.unsplash.com/photo-1553267751-1c148a7280a1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"-->
<!--                                    alt="Your avatar">-->
<!--                            </button>-->
    
<!--                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"-->
<!--                                x-show="dropdownOpen" x-transition:enter="transition ease-out duration-100 transform"-->
<!--                                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"-->
<!--                                x-transition:leave="transition ease-in duration-75 transform"-->
<!--                                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"-->
<!--                                @click.away="dropdownOpen = false">-->
<!--                                <a href="#"-->
<!--                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white">Profile</a>-->
<!--                                <a href="#"-->
<!--                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white">Tickets</a>-->
<!--                                <a href="/login"-->
<!--                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white">Logout</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </header>-->
    
<!--                <main class="flex-1 overflow-x-hidden overflow-y-auto">-->
<!--                    <div class="container mx-auto px-6 py-8">-->
<!--                        <div-->
<!--                            class="grid place-items-center h-96 text-gray-500 dark:text-gray-300 text-xl border-4 border-gray-300 border-dashed">-->
<!--                            Content-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </main>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
      
      
        <div class="hours">
            @foreach ($hours as $hour)
            
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
  <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-4 font-sans text-gray-900">年月</th>
        <th scope="col" class="px-6 py-4 font-sans text-gray-900">自由に使えた時間</th>
        <th scope="col" class="px-6 py-4 font-sans text-gray-900">目標値</th>
        <th scope="col" class="px-6 py-4 font-sans text-gray-900">生活費</th>
        <th scope="col" class="px-6 py-4 font-sans text-gray-900"></th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      <tr class="hover:bg-gray-50">
        <th class="flex gap-3 px-6 py-4 font-normal text-gray-1000">
          <div class="relative h-10 w-10">
            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
              <span class="py-2 font-semibold title-font text-gray-900">{{ $hour->month->month }}</span>
            </div>
          </div>
          <div class="text-sm">
            <div class="py-2 font-medium text-gray-600">{{ $hour->year->year }}</div>
          </div>
        </th>
        <td class="px-6 py-4 text-gray-600">{{ $hour->amount }}時間</td>
        <td class="px-6 py-4 text-gray-600">{{ $hour->target_value }}時間</td>
        <td class="px-6 py-4 text-gray-600">{{ $hour->total_cost }}円</td>
        <td class="px-6 py-4">
          <div class="flex justify-end gap-4">
            <form action="/hours/{{ $hour->id }}" id="form_{{ $hour->id }}" method="post">
                    @csrf
                    @method('DELETE')
            <button type="button" onclick="deleteHour({{ $hour->id }})" x-data="{ tooltip: 'Delete' }" >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                />
              </svg>
            </button>
            </form>
            <a x-data="{ tooltip: 'Edite' }" href="/hours/{{ $hour->id }}/edit">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                />
              </svg>
            </a>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
            
            
            
                @endforeach
        </div>
        <div>
        <script>
            function deleteHour(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        </div>
    </body>
</x-app-layout>

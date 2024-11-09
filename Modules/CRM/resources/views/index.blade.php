<x-user-layout>
    <x-slot name="header">
       <div class="w-full flex items-center justify-center ">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mx-5">
            {{ __('Home') }}
        </h2>
        <a href="erp" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mx-5">
            {{ __('Erp') }}
        </a>
        <a href="crm" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mx-5">
            {{ __('Crm') }}
        </a>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mx-5">
            {{ __('Home') }}
        </h2>
        <label class="inline-flex items-center cursor-pointer">
            <input type="checkbox" id="theme-toggle" class="sr-only peer">
            <div class="relative w-11 h-6 bg-slate-900 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Change Theme</span>
          </label>

       </div>
    </x-slot>
    <div class="">
     
    <p>Module: {!! config('crm.name') !!}</p>
    </div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const themeToggle = document.getElementById('theme-toggle');
  const htmlElement = document.documentElement;

  // Set initial theme based on localStorage
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'dark') {
    htmlElement.classList.add('dark');
    themeToggle.checked = true;
  }

  // Toggle theme when checkbox is clicked
  themeToggle.addEventListener('change', function() {
    if (themeToggle.checked) {
      htmlElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    } else {
      htmlElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    }
  });
});


</script>
   </x-user-layout>

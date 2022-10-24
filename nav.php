<nav class="bg-gray-600 shadow">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex justify-between h-16">

      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
          <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
          <a href="index.php?page=landingspage" <?php if ($page == 'home') { ?>  class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" <?php } else {?> class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 left-100 border-b-2 text-sm font-medium" <?php }?> > Hoofdpagina  </a>
          <a href="index.php?page=teamStats" <?php if ($page == 'stats') { ?>  class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" <?php } else {?> class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 left-100 border-b-2 text-sm font-medium" <?php }?> > Team Stats </a>
          <a href="index.php?page=profile" <?php if ($page == 'profile') { ?>  class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" <?php } else {?> class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 left-100 border-b-2 text-sm font-medium" <?php }?> > Profiel </a>
        </div>
      </div>
      <a href="index.php?page=logout" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 left-100 border-b-2 text-sm font-medium"> uitloggen </a>
</nav>
 <!-- Top Header -->
 <header class="flex h-20 items-center justify-between border-b bg-white px-6">
     <button id="sidebar-toggle" class="rounded-md p-2 focus:outline-none md:hidden">
         <i data-lucide="menu" class="h-6 w-6"></i>
     </button>
     <div class="flex items-center">
         <div class="relative">
             <input type="text" placeholder="Search..."
                 class="rounded-lg border border-gray-300 py-2 pl-10 pr-4 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
             <i data-lucide="search" class="absolute left-3 top-2.5 h-5 w-5 text-gray-400"></i>
         </div>
     </div>
     <div class="flex items-center gap-4">
         <button class="relative rounded-full bg-gray-100 p-1">
             <i data-lucide="bell" class="h-6 w-6 text-gray-600"></i>
             <span
                 class="absolute -right-1 -top-1 flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-xs text-white">3</span>
         </button>
         <div class="flex items-center gap-3">
             <div class="h-10 w-10 overflow-hidden rounded-full bg-emerald-100">
                 <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin User">
             </div>
             <div class="hidden md:block">
                 <p class="font-medium">Admin User</p>
                 <p class="text-sm text-gray-500">admin@elibrary.com</p>
             </div>
         </div>
     </div>
 </header>

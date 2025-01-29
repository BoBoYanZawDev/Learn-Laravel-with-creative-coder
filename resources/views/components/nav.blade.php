<div
  class="flex items-center justify-between xl:px-32 sm:px-5 px-2 bg-secondary">
  <a href="/">
    <img
      src="/assets/logo.png"
      class="md:w-[150px] w-[100px] h-[80px] object-cover md:h-[12 0px]" />
  </a>
  <div class="flex items-center gap-5">
    @if(auth()->check())
    <x-cart-icon />
    @endif
    <!-- <UserDropDown  /> -->
    @if(!auth()->check())
    <div v-else class="md:flex hidden items-center gap-3">
      <a
        href="/login"
        class="px-8 py-4 font-bold rounded-lg bg-primary text-white">
        Login
      </a>
      <a
        href="/register"
        class="px-8 py-4 font-bold rounded-lg text-primary border-2 border-primary">
        Register
      </a>
    </div>
    @else

    @if(auth()->user()->profile_img != '-')
    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500 cursor-pointer ms-2 me-5" src="{{asset('assets/user.png')}}" alt="User dropdown">
    @else
    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500 cursor-pointer ms-2 me-5" src="{{asset(auth()->user()->profile_img)}}" alt="User dropdown">
    @endif
    <!-- Dropdown menu -->
    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
      <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div class="font-medium truncate mt-1">{{auth()->user()->name}}</div>
        <div class="font-medium truncate mt-1">{{auth()->user()->email}}</div>
      </div>
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
        @if(auth()->user()->is_admin)
        <li>
          <a href="{{route('admin.orders.index')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
        </li>
        @endif
        <li>
          <a href="{{route('orders.history')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Order History</a>
        </li>
      </ul>
      <div class="py-1">
      <form action="/logout" method="POST" class="relative">
      @csrf
        <button type="submit" class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</button>
      </form>
      </div>
    </div>
    @endif
  </div>
</div>
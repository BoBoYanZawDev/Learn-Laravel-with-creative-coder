<div
      class="flex items-center justify-between xl:px-32 sm:px-5 px-2 bg-secondary"
    >
      <a href="/">
        <img
          src="/assets/logo.png"
          class="md:w-[150px] w-[100px] h-[80px] object-cover md:h-[12 0px]"
        />
      </a>
      <div class="flex items-center gap-5">
        @if(auth()->check())
        <x-cart-icon/>
        @endif
        <!-- <UserDropDown  /> -->
         @if(!auth()->check())
        <div v-else class="md:flex hidden items-center gap-3">
          <a
            href="/login"
            class="px-8 py-4 font-bold rounded-lg bg-primary text-white"
          >
            Login
          </a>
          <a
            href="/register"
            class="px-8 py-4 font-bold rounded-lg text-primary border-2 border-primary"
          >
            Register
          </a>
        </div>
        @else
        <div class="text-white bg-primary px-2 py-1 rounded-xl">
          {{auth()->user()->name}}
        </div>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="bg-red-500 px-2 py-1 rounded-lg text-white">Logout</button>
        </form>
        @endif
      </div>
    </div>
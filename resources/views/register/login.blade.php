<x-layout>
    <x-nav/>
    <div class="my-10 flex items-center">
      <div
        class="border-[1px] border-black/20 rounded-lg w-[40%] mx-auto py-[40px] px-[40px]"
      >
        <div class="flex items-end gap-2 mb-8">
          <h1 class="text-[50px] leading-[0.8] text-primary font-bold">
            Login
          </h1>
          <div class="w-[10px] h-[10px] bg-primary rounded-full"></div>
        </div>
        <form class="flex flex-col gap-5" action="/login" method="POST">
          @csrf
          <div class="flex flex-col">
            <label class="font-semibold text-sm">Email</label>
            <input
            value="{{old('email')}}"
            name="email"
              class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
              type="text"
              placeholder="Enter your Email"
            />
            @error('email')
          <p class="text-red-500 my-3 text-sm">{{$message}}</p>
          @enderror
          </div>
          <div class="flex flex-col">
            <label class="font-semibold text-sm">Password</label>
            <input
              name="password"
              class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
              type="password"
              placeholder="Enter your password"
            />
            @error('password')
          <p class="text-red-500 my-3 text-sm">{{$message}}</p>
          @enderror
          </div>
          <button
            type="submit"
            class="w-full py-4 text-white font-bold text-xl rounded-full bg-primary block"
          >
            Login
          </button>
          <p class="text-sm text-center font-semibold">
            You don't have account? Register
            <a class="text-primary underline" href="/register">here.</a>
          </p>
        </form>
      </div>
    </div>
    <x-footer/>
</x-layout>
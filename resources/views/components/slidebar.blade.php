<aside
  ref="target"
  class="absolute left-0 top-0 z-[9999] flex h-screen w-[270px] flex-col overflow-y-hidden text-white bg-secondary duration-300 ease-linear lg:static transition-all lg:translate-x-0">
  <div class="flex items-center justify-between gap-2 py-5.5 lg:py-6.5">
    <a href="{{route('admin.orders.index')}}" class="block w-full">
      <div
        class="py-[1rem] border-b border-b-gray-300 px-6 w-full flex items-center space-x-3">
        <img src="/assets/logo.png" alt="logo" class="w-[80px]" />
        <h3 class="font-bold text-md text-center">P & P Market</h3>
      </div>
    </a>
  </div>
  <div class="text-white bg-primary px-5 py-3 rounded-xl my-3 mx-2 text-center flex items-center justify-between">
    {{auth()->user()->name}}
    <a href="/"><svg height="23" viewBox="0 0 512 512" width="23" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="m503.871094 231.433594-236.800782-226.984375c-6.183593-5.933594-15.957031-5.933594-22.140624 0l-237.035157 227.21875c-5.015625 5.015625-7.894531 11.925781-7.894531 18.988281 0 14.699219 11.96875 26.667969 26.667969 26.667969h37.332031v202.664062c0 17.664063 14.335938 32 32 32h90.667969c8.832031 0 16-7.167969 16-16v-138.664062c0-2.925781 2.386719-5.335938 5.332031-5.335938h96c2.921875 0 5.332031 2.410157 5.332031 5.335938v138.664062c0 8.832031 7.167969 16 16 16h90.667969c17.664062 0 32-14.335937 32-32v-202.664062h37.332031c14.699219 0 26.667969-11.96875 26.667969-26.667969 0-7.0625-2.878906-13.972656-8.128906-19.222656zm0 0"/></svg></a>
  </div>
  <!-- Sidebar Header -->
  <div
    class="flex flex-col overflow-y-auto scroll duration-300 ease-linear">
    <div class="py-4 px-3">
      <div class="my-3.5 mx-4">
        <h1 class="font-bold text-xs uppercase text-gray-200">
          Dashboard Administration
        </h1>
      </div>
      <nav class="">
        <div class="flex flex-col h-auto overflow-y-auto scroll pb-12">
          <div>
            <div
              class="w-full rounded-[4px] transition-all duration-150 mb-3 hover:bg-primary">
              <a
                href= "{{route('admin.orders.index')}}"
                class="relative flex items-center gap-2.5 rounded-sm py-3 px-4 font-semibold text-sm duration-300 ease-in-out">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="22"
                  height="22"
                  viewBox="0 0 24 24">
                  <path
                    fill="currentColor"
                    d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                </svg>

                Orders
              </a>
            </div>
            <div
              class="w-full rounded-[4px] transition-all duration-150 mb-3 hover:bg-primary">
              <a
                href={{route('products.index')}}
                class="relative flex items-center gap-2.5 rounded-sm py-3 px-4 font-semibold text-sm duration-300 ease-in-out">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="22"
                  height="22"
                  viewBox="0 0 24 24">
                  <path
                    fill="currentColor"
                    d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                </svg>

                Product
              </a>
            </div>
          </div>
          <div>
            <div
              class="w-full rounded-[4px] transition-all duration-150 mb-3 hover:bg-primary">
              <a
                href="{{route('categories.index')}}"
                class="relative flex items-center gap-2.5 rounded-sm py-3 px-4 font-semibold text-sm duration-300 ease-in-out">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="22"
                  height="22"
                  viewBox="0 0 24 24">
                  <path
                    fill="currentColor"
                    d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                </svg>
                Category
              </a>
            </div>
            <div
              class="w-full rounded-[4px] transition-all duration-150 mb-3 hover:bg-primary">
              <a
                href="{{route('users.index')}}"
                class="relative flex items-center gap-2.5 rounded-sm py-3 px-4 font-semibold text-sm duration-300 ease-in-out">
                <svg viewBox="-42 0 512 512.002" xmlns="http://www.w3.org/2000/svg" width="21"
                height="21">
                  <path 
                  fill="currentColor"
                  d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0" />
                  <path
                  fill="currentColor"
                   d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0" />
                </svg>
                User
              </a>
            </div>
          </div>
        </div>
        <!-- logout -->
      </nav>
    </div>
  </div>
  <form action="/logout" method="POST" class="w-full px-3 font-roboto transition-all duration-150 absolute left-0 bottom-2 bg-secondary">
    @csrf
    <button type="submit"
      class="font-bold text-md rounded-[4px] flex h-[48px] items-center cursor-pointer mb-1 pl-3 bg-[#BE1700] w-full">
      <svg
        width="22"
        height="22"
        viewBox="0 0 22 22"
        fill="none"
        class="mr-1"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M13.75 3.66757H4.58331V16.5009C4.58331 16.9871 4.77647 17.4535 5.12028 17.7973C5.4641 18.1411 5.93042 18.3342 6.41665 18.3342H13.75M14.6666 13.7509L17.4166 11.0009M17.4166 11.0009L14.6666 8.25091M17.4166 11.0009H8.24998"
          stroke="#FDFDFD"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round" />
      </svg>
      Logout
    </button>
  </form>
</aside>
<x-layout>
  <div class="flex h-screen overflow-hidden font-roboto">
    <x-slidebar />
    <div
      class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
      <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 bg-gray-50">
          <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-6 mb-6">
            <div class="bg-white shadow-md rounded-lg p-6 flex items-center">
              <div class="flex items-center gap-4 ">
                <div class="flex-shrink-0">
                  <svg class="h-12 w-12 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 3v18M3 3l18 18" />
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg leading-6 font-medium text-gray-900">Today Total Orders</h3>
                  <p class="mt-1 text-3xl font-semibold text-gray-900">{{ $totalOrders }}</p>
                </div>
              </div>
            </div>
            <div class="bg-amber-300 shadow-md rounded-lg p-6 flex items-center text-white">
              <div class="flex items-center gap-4 ">
                <div class="flex-shrink-0">
                <svg clip-rule="evenodd" fill-rule="evenodd" height="80" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 48 48" width="80" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-159 -159)"><g transform="translate(-114.486 -45.46)"><g id="ngicon"><path fill="currentColor" d="m289.845 239.578c-2.029 0-3.676 1.647-3.676 3.676s1.647 3.676 3.676 3.676 3.676-1.647 3.676-3.676-1.647-3.676-3.676-3.676zm13.38 0c-2.029 0-3.676 1.647-3.676 3.676s1.647 3.676 3.676 3.676 3.676-1.647 3.676-3.676-1.647-3.676-3.676-3.676zm-21.793-28.507s1.61 16.447 2.225 22.284c.268 2.545 2.413 4.477 4.972 4.477h17.017c2.181 0 4.111-1.415 4.768-3.495 1.76-5.574 5.54-17.542 5.54-17.542.096-.304.041-.636-.147-.893-.189-.257-.488-.408-.807-.408h-31.193l-.458-5.506c-.044-.518-.477-.917-.997-.917h-5.352c-.552 0-1 .448-1 1s.448 1 1 1zm16.512 8.949c-3.667 0-6.643 2.976-6.643 6.643 0 3.666 2.976 6.642 6.643 6.642 3.666 0 6.643-2.976 6.643-6.642 0-3.667-2.977-6.643-6.643-6.643zm-.944 4.385-.056 2.232c-.009.356.172.69.475.877l2.056 1.267c.47.29 1.087.144 1.376-.326.29-.47.144-1.086-.326-1.376l-1.567-.966s.042-1.658.042-1.658c.014-.551-.423-1.011-.975-1.024-.552-.014-1.011.422-1.025.974z"/></g></g></g></svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg leading-6 font-medium ">Pending Orders</h3>
                  <p class="mt-1 text-3xl font-semibold ">{{ $pendingOrders }}</p>
                </div>
              </div>
            </div>
            <div class="bg-green-400 shadow-md rounded-lg p-6 text-white flex items-center">
              <div class="flex items-center gap-4 ">
                <div class="flex-shrink-0">
                  <svg id="Layer_1" enable-background="new 0 0 128 128" height="80" viewBox="0 0 128 128" width="80" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="m125 24h-97.2l-4.9-11.3c-2.4-5.2-6.2-7.7-11.7-7.7h-10.2c-.5 0-1 0-1 .6v5c0 .5.5 1.4 1 1.4h10.1c3.1 0 3.7.9 4.7 3l3.9 9c-1 .5-1.7 1.4-1.7 2.6v1c0 1.7 1.4 3.4 3 3.4h1.8l21 48.5c1 2.4 3.9 4.5 6.5 4.5h1.1l-7 15.9c-.5-.1-.9-.2-1.4-.2-6.6 0-11.9 5.3-11.9 11.9s5.4 12.1 11.9 12.1c5.5 0 10.2-3.7 11.5-8.7h50c1.4 5 6 8.7 11.5 8.7 6.6 0 11.9-5.4 11.9-11.9 0-6.6-5.4-11.9-11.9-11.9-5.2 0-9.6 3.2-11.3 8.2h-50.4c-.7-2-1.9-3.9-3.4-5.3l6.3-14.7c-2.5-4.2-3.9-9.2-3.9-14.5 0-2.3.8-4.7.8-6.8v-27.7c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5v17.1c2-3.2 5-5.9 9-7.9v-9.3c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5v7.1c3-1 6-1.5 9-1.5v-5.6c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5v6c3 .5 6 1.6 9 3.2v-9.1c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5v12.6c4 3.7 8 8.7 9 14.4v-27c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5v34c0 1.4-1.1 2.5-2.5 2.5-.6 0-1.1 0-1.5-.3-.2 3-.8 5.8-1.8 8.8h11.7c2.8 0 5-2.7 5-5.4v-47.9c1.2-.5 2-1.9 2-3.2v-1c0-1.7-1.3-2.6-3-2.6zm-80 26.1c0 1.4-1.1 2.5-2.5 2.5s-2.5-1.1-2.5-2.5v-11c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5z" />
                    <path fill="currentColor" d="m82.1 50.6c-12.7 0-23 10.3-23 23s10.3 23 23 23 23-10.3 23-23-10.3-23-23-23zm14.2 20.1-14 14c-.6.6-1.3.9-2.1.9s-1.6-.3-2.1-.9l-8.2-8.2c-1.2-1.2-1.2-3.1 0-4.2 1.1-1.1 3.1-1.1 4.2 0l6.1 6.1 11.9-11.9c1.1-1.1 3.1-1.1 4.2 0 .6.6.9 1.3.9 2.1 0 .7-.3 1.5-.9 2.1z" />
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg leading-6 font-medium ">Completed Orders</h3>
                  <p class="mt-1 text-3xl font-semibold">{{$finishedOrders}}</p>
                </div>
              </div>
            </div>
            <div class="bg-red-400 shadow-md rounded-lg p-6 text-white flex items-center">
              <div class="flex items-center gap-4 ">
                <div class="flex-shrink-0">
                  <svg class="h-16 w-16 text-white" enable-background="new 0 0 25.585 26.814" viewBox="0 0 25.585 26.814" xmlns="http://www.w3.org/2000/svg">
                    <g id="Layer_25">
                      <g>
                        <g>
                          <g>
                            <path fill="currentColor" d="m17.88-1.774h2v16.966h-2z" transform="matrix(.707 -.707 .707 .707 .785 15.315)" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path fill="currentColor" d="m10.384 5.699h16.968v2h-16.968z" transform="matrix(.708 -.706 .706 .708 .778 15.279)" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <g>
                              <path fill="currentColor" d="m24 18.814h-16.781l-4-16h-3.219v-2h4.781l4 16h15.219z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path fill="currentColor" d="m9.999 26.814c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-4c-.551 0-1 .448-1 1s.449 1 1 1 1-.448 1-1-.449-1-1-1z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path fill="currentColor" d="m19.999 26.814c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-4c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1-.448-1-1-1z" />
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                    <g id="Layer_1" />
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg leading-6 font-medium  ">Cancelled Orders</h3>
                  <p class="mt-1 text-3xl font-semibold ">{{$canceledOrders}}</p>
                </div>
              </div>
            </div>
            <div class="bg-cyan-400 shadow-md rounded-lg p-6 text-white flex items-center">
              <div class="flex items-center gap-4 ">
                <div class="flex-shrink-0">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="80.13px" height="80.13px" viewBox="0 0 80.13 80.13" style="enable-background:new 0 0 80.13 80.13;" xml:space="preserve">
                    <g>
                      <path fill="currentColor" d="M48.355,17.922c3.705,2.323,6.303,6.254,6.776,10.817c1.511,0.706,3.188,1.112,4.966,1.112
		c6.491,0,11.752-5.261,11.752-11.751c0-6.491-5.261-11.752-11.752-11.752C53.668,6.35,48.453,11.517,48.355,17.922z M40.656,41.984
		c6.491,0,11.752-5.262,11.752-11.752s-5.262-11.751-11.752-11.751c-6.49,0-11.754,5.262-11.754,11.752S34.166,41.984,40.656,41.984
		z M45.641,42.785h-9.972c-8.297,0-15.047,6.751-15.047,15.048v12.195l0.031,0.191l0.84,0.263
		c7.918,2.474,14.797,3.299,20.459,3.299c11.059,0,17.469-3.153,17.864-3.354l0.785-0.397h0.084V57.833
		C60.688,49.536,53.938,42.785,45.641,42.785z M65.084,30.653h-9.895c-0.107,3.959-1.797,7.524-4.47,10.088
		c7.375,2.193,12.771,9.032,12.771,17.11v3.758c9.77-0.358,15.4-3.127,15.771-3.313l0.785-0.398h0.084V45.699
		C80.13,37.403,73.38,30.653,65.084,30.653z M20.035,29.853c2.299,0,4.438-0.671,6.25-1.814c0.576-3.757,2.59-7.04,5.467-9.276
		c0.012-0.22,0.033-0.438,0.033-0.66c0-6.491-5.262-11.752-11.75-11.752c-6.492,0-11.752,5.261-11.752,11.752
		C8.283,24.591,13.543,29.853,20.035,29.853z M30.589,40.741c-2.66-2.551-4.344-6.097-4.467-10.032
		c-0.367-0.027-0.73-0.056-1.104-0.056h-9.971C6.75,30.653,0,37.403,0,45.699v12.197l0.031,0.188l0.84,0.265
		c6.352,1.983,12.021,2.897,16.945,3.185v-3.683C17.818,49.773,23.212,42.936,30.589,40.741z" />
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg leading-6 font-medium ">The user who placed the order</h3>
                  <p class="mt-1 text-3xl font-semibold ">{{$orderedUsers}}</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Order Table -->
          <div class="relative border border-gray-300 bg-white rounded-md shadow-sm shadow-gray-200 px-5 py-3">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded-md overflow-hidden border mt-5">
              <div class="overflow-x-auto w-full">
                <table class="w-full text-sm text-left">
                  <thead class="text-white bg-primary">
                    <tr>
                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> ID </span>
                      </th>

                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> Name </span>
                      </th>
                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> Phone </span>
                      </th>
                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> Address </span>
                      </th>
                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> Products and quantity </span>
                      </th>
                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> Total Price </span>
                      </th>
                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> Notes </span>
                      </th>
                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> Date </span>
                      </th>
                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> Screenshot </span>
                      </th>
                      <th scope="col" class="px-6 py-3 min-w-[100px]">
                        <span class="capitalize p-1.5"> Actions </span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $order)
                    <tr class="border-b">
                      <td class="px-6 py-4">
                        <span class="text-darkGray p-1.5 font-semibold block">
                          {{$order->id}}
                        </span>
                      </td>
                      <td class="px-6 py-4 min-w-[150px]">
                        <span class="text-darkGray p-1.5 font-semibold block">
                          {{$order->user->name}}
                        </span>
                      </td>
                      <td class="px-6 py-4 min-w-[150px]">
                        <span class="text-darkGray p-1.5 font-semibold block">
                          {{$order->user->phone}}
                        </span>
                      </td>
                      <td class="px-6 py-4 min-w-[150px]">
                        <span class="text-darkGray p-1.5 font-semibold block">
                          {{$order->address}}
                        </span>
                      </td>
                      <td class="px-6 py-4 min-w-[150px]">
                        <span class="text-darkGray p-1.5 font-semibold block">
                          @foreach($order->products as $product)
                          {{$product->name}} x {{ $product->pivot->quantity}} <br>
                          @endforeach
                        </span>
                      </td>
                      <td class="px-6 py-4 min-w-[150px]">
                        <span class="text-darkGray p-1.5 font-semibold block">
                          {{$order->total_price}} Ks
                        </span>
                      </td>
                      <td class="px-6 py-4 min-w-[150px]">
                        <span class="text-darkGray p-1.5 font-semibold block">
                          {{$order->notes}}
                        </span>
                      </td>
                      <td class="px-6 py-4 min-w-[150px]">
                        <span class="text-darkGray p-1.5 font-semibold block">
                          {{$order->created_at}}
                        </span>
                      </td>
                      <td class="px-6 py-4 min-w-[150px]">
                        <a href="{{$order->screenshot}}" class="text-indigo-600 hover:text-indigo-900" target="_blank">
                          <img src="{{$order->screenshot}}" width="50" height="50" alt="">
                        </a>
                      </td>
                      <td class="px-6 py-4">
                        <div class="space-x-3 flex items-center min-w-[200px] w-auto max-w-[500px]">
                          @if($order->status === 'pending')
                          <form action="{{ route('admin.orders.finish', $order->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="text-sm px-4 flex items-center gap-3 shadow-md py-3 text-white bg-green-500 hover:bg-green-900 font-semibold rounded-md transition-all active:animate-press">
                              <svg height="22" viewBox="0 -21 512.016 512" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="m234.667969 469.339844c-129.386719 0-234.667969-105.277344-234.667969-234.664063s105.28125-234.6679685 234.667969-234.6679685c44.992187 0 88.765625 12.8203125 126.589843 37.0976565 7.425782 4.78125 9.601563 14.679687 4.820313 22.125-4.796875 7.445312-14.675781 9.597656-22.121094 4.820312-32.640625-20.972656-70.441406-32.042969-109.289062-32.042969-111.746094 0-202.667969 90.921876-202.667969 202.667969 0 111.742188 90.921875 202.664063 202.667969 202.664063 111.742187 0 202.664062-90.921875 202.664062-202.664063 0-6.679687-.320312-13.292969-.9375-19.796875-.851562-8.8125 5.589844-16.621094 14.378907-17.472656 8.832031-.8125 16.617187 5.589844 17.472656 14.378906.722656 7.53125 1.085937 15.167969 1.085937 22.890625 0 129.386719-105.277343 234.664063-234.664062 234.664063zm0 0" />
                                <path fill="currentColor" d="m261.332031 288.007812c-4.09375 0-8.191406-1.558593-11.304687-4.691406l-96-96c-6.25-6.253906-6.25-16.386718 0-22.636718s16.382812-6.25 22.632812 0l84.695313 84.695312 223.335937-223.339844c6.253906-6.25 16.386719-6.25 22.636719 0s6.25 16.382813 0 22.632813l-234.667969 234.667969c-3.136718 3.113281-7.230468 4.671874-11.328125 4.671874zm0 0" />
                              </svg>
                              Finish
                            </button>
                          </form>
                          <form action="{{route('admin.orders.cancel', $order->id)}}" method="post">
                            @csrf
                            <button type="submit"
                              class="text-sm px-4 flex items-center gap-3 shadow-md py-3 text-white bg-red-500 hover:bg-blue-900 font-semibold rounded-md transition-all active:animate-press">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                  d="M5 21V6H4V4h5V3h6v1h5v2h-1v15zm2-2h10V6H7zm2-2h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                              </svg>
                              Cancel
                            </button>
                          </form>
                          @elseif($order->status === 'canceled')
                          <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                            <span class="relative">Canceled</span>
                          </span>
                          @else
                          <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">Finished</span>
                          </span>
                          @endif
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="flex justify-center">
              {{$orders->links()}}
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</x-layout>
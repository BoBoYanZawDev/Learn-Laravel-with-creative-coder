<a class="h-min block" href="/products/{{$product->id}}">
                <div
                  class="rounded-lg h-full flex lg:flex-col flex-row cursor-pointer hover:translate-y-[-10px] transition-all duration-200 group shadow-md hover:shadow-lg overflow-hidden"
                >
                  <div class="w-full lg:w-full basis-[40%] overflow-hidden">
                    <img
                      src="{{$product->product_img}}"
                      class="w-full h-full object-cover group-hover:scale-[1.1] transition-all duration-200"
                    />
                  </div>
                  <div class="py-4 lg:-w-full basis-[60%] px-6">
                    <p class="text-sm text-primary">{{$product->category->name}}</p>
                    <h1
                      class="mt-2 md:text-lg text-base line-clamp-1 font-bold group-hover:text-primary transition-all duration-200"
                    >
                    {{$product->name}}
                    </h1>
                    <div
                      class="flex xl:flex-row flex-col xl:items-center font-semibold mt-2 xl:gap-2"
                    >
                      <p class="text-primary">{{$product->price}} MMK</p>
                    </div>
                  </div>
                </div>
              </a>
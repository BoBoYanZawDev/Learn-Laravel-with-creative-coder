<x-layout>
    <div class="flex h-screen overflow-hidden font-roboto">
        <x-slidebar/>
      <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
      >
        <main>
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 bg-gray-50">
            <div class="border p-10 bg-white rounded-md">
              <h1 class="font-blod my-3 text-3xl">Product Create</h1>
              <form class="space-y-4 md:space-y-6" method="post" action="/admin/products/productCreate">
                 @csrf
                <div class="">
                  <div class="image-wrapper">
                    <input type="file" />
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div class="flex flex-col">
                    <label class="font-semibold text-sm">Product Name</label>
                    <input
                      class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                      type="text"
                      placeholder="Enter your product Name"
                      name="name"
                    />
                  </div>
                  <div class="flex flex-col">
                    <label class="font-semibold text-sm">Price</label>
                    <input
                      class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                      type="text"
                      placeholder="Enter price"
                      name="price"
                    />
                  </div>
                </div>
                <div class="flex flex-col">
                  <label class="font-semibold text-sm">Category</label>
                  <select
                    class="w-full border-[1px] mt-2 px-3 border-black/20 focus:border-primary transition-all py-3 rounded-lg"
                  >
                  @foreach($categories as $category)
                    <option >{{$category->name}}</option>
                  @endforeach
                  </select>
                </div>
                <div>
                  <div>
                    <label class="font-semibold text-sm">Description</label>
                    <textarea
                      class="w-full border-[1px] border-black/10 py-3 px-3 rounded-[5px]"
                      placeholder="Enter Description"
                      rows="5"
                      name="description"
                    ></textarea>
                  </div>
                </div>
                <div class="flex items-center justify-end space-x-5">
                  <a
                    href="/admin/products"
                    class="text-sm px-4 bg-gray-600 hover:bg-gray-700 text-white flex items-center gap-3 shadow-md py-3 font-semibold rounded-md transition-all active:animate-press"
                  >
                    Cancel
                  </a>
                  <button type="submit"
                    class="text-sm px-4 flex items-center gap-3 shadow-md py-3 text-white bg-primary hover:bg-blue-900 font-semibold rounded-md transition-all active:animate-press"
                  >
                    Create
                  </button>
                </div>
              </form>
            </div>
          </div>
        </main>
      </div>
    </div>
</x-layout>
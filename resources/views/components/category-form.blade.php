@props([
  'category'=>new App\Models\Category,
  'type' => 'create'])
<div class="flex h-screen overflow-hidden font-roboto">
  <x-slidebar />
  <div
    class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
    <main>
      <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 bg-gray-50">
        <div class="border p-10 bg-white rounded-md">
          <h1 class="font-bold my-3 text-3xl">Category {{$type === 'create' ? 'Create':'Edit'}}</h1>
          <form class="space-y-4 md:space-y-6" method="post" action="{{$type === 'create' ? ' /admin/categories/store':'/admin/categories/'.$category->id.'/update'}}">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
              <div class="flex flex-col">
                <label class="font-semibold text-sm">Category Name</label>
                <input
                  value="{{old('name',$category->name)}}"
                  class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                  type="text"
                  placeholder="Enter your product Name"
                  name="name" />
                @error('name')
                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                @enderror
              </div>
              <div class="flex items-center justify-end space-x-5">
                <a
                  href="/admin/categories"
                  class="text-sm px-4 bg-gray-600 hover:bg-gray-700 text-white flex items-center gap-3 shadow-md py-3 font-semibold rounded-md transition-all active:animate-press">
                  Cancel
                </a>
                <button type="submit"
                  class="text-sm px-4 flex items-center gap-3 shadow-md py-3 text-white bg-primary hover:bg-blue-900 font-semibold rounded-md transition-all active:animate-press">
                  {{$type === 'create' ? 'Create':'Update'}}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>
@props([
'type'=> 'create',
'product'=>new App\Models\Product,
'categories' => []
])
<div class="flex h-screen overflow-hidden font-roboto">
  <x-slidebar />
  <div
    class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
    <main>
      <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 bg-gray-50">
        <div class="border p-10 bg-white rounded-md">
          <h1 class="font-bold my-3 text-3xl">Product {{$type === 'create' ? 'Create':'Edit' }}</h1>
          <form class="space-y-4 md:space-y-6" method="post" action="{{$type === 'create' ? route('products.store'):route('products.update',$product->id)}}" enctype="multipart/form-data">
            @csrf
            @if($type === 'edit')
            @method('PUT')
            @endif
            <div class="">
              <div class="image-wrapper">
              @if($type === 'edit')
                <span class="text-darkGray p-1.5 font-semibold block">
                          <img
                            src="{{$product->product_img}}"
                            alt="Product Image" class="w-16 h-16 object-cover" />
                </span>
                @endif
                <input type="file" accept="image/*" name="product_img" />
              
                @error('product_img')
                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
              <div class="flex flex-col">
                <label class="font-semibold text-sm">Product Name</label>
                <input
                  value="{{old('name',$product->name)}}"
                  class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                  type="text"
                  placeholder="Enter your product Name"
                  name="name" />
                @error('name')
                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                @enderror
              </div>
              <div class="flex flex-col">
                <label class="font-semibold text-sm">Price</label>
                <input
                  value="{{old('price',$product->price)}}"
                  class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                  type="text"
                  placeholder="Enter price"
                  name="price" />
                @error('price')
                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="flex flex-col">
              <label class="font-semibold text-sm">Category</label>
              <select
                name="category_id"
                class="w-full border-[1px] mt-2 px-3 border-black/20 focus:border-primary transition-all py-3 rounded-lg">
                @foreach($categories as $category)
                <option value="{{$category->id}}" {{$type === 'edit' ? $category->id == old('category_id',$product->category->id) ? 'selected' : '': ''}}>{{$category->name}}</option>
                @endforeach
              </select>
              @error('category_id')
              <p class="text-red-500 my-3 text-sm">{{$message}}</p>
              @enderror
            </div>
            <div>
              <div>
                <label class="font-semibold text-sm">Description</label>
                <textarea
                  class="w-full border-[1px] border-black/10 py-3 px-3 rounded-[5px]"
                  placeholder="Enter Description"
                  rows="5"
                  name="description">{{old('description',$product->description)}}</textarea>
                @error('description')
                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="flex items-center justify-end space-x-5">
              <a
                href="/admin/products"
                class="text-sm px-4 bg-gray-600 hover:bg-gray-700 text-white flex items-center gap-3 shadow-md py-3 font-semibold rounded-md transition-all active:animate-press">
                Cancel
              </a>
              <button type="submit"
                class="text-sm px-4 flex items-center gap-3 shadow-md py-3 text-white bg-primary hover:bg-blue-900 font-semibold rounded-md transition-all active:animate-press">
                {{$type === 'create' ? 'Create':'Update'}}
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>
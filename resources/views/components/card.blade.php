<div class="cursor-pointer">
    <a href="/products/{{$product->id}}">
        <div class="w-full h-auto bg-[#F7F8F9] group rounded-xl overflow-hidden aspect-square object-cover">
            <img class="w-full h-full group-hover:scale-[1.1] transition-all duration-200 "
                src="{{$product->product_img}}" />
        </div>
        <p class="mt-3 font-semibold">{{$product->name}}</p>
        <div class="flex gap-2 text-sm items-center font-semibold mt-1">
            <p class="text-primary">{{$product->price}} MMK</p>
        </div>
    </a>
</div>
 <!-- Cart modal -->
 <div
      class="fixed top-0 flex items-center justify-center left-0 w-full h-full inset-0 overflow-hidden px-4 py-6 sm:px-0 z-50"
    >
      <div class="fixed inset-0 transform transition-all">
        <div class="absolute inset-0 bg-gray-500 opacity-50" />
      </div>
      <div
        class="bg-white rounded-lg sm:max-w-2xl overflow-hidden shadow-xl h-full transform transition-all sm:w-full sm:mx-auto"
      >
        <div
          class="bg-white overflow-hidden relative h-full rounded-xl pb-[220px]"
        >
          <div
            class="flex items-center justify-between border-b-[1px] border-b-black/10 px-7 py-6"
          >
            <p class="text-lg font-bold">Your Cart</p>
            <svg
              class="text-black cursor-pointer"
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="m12 13.4l-2.917 2.925q-.277.275-.704.275t-.704-.275q-.275-.275-.275-.7t.275-.7L10.6 12L7.675 9.108Q7.4 8.831 7.4 8.404t.275-.704q.275-.275.7-.275t.7.275L12 10.625L14.892 7.7q.277-.275.704-.275t.704.275q.3.3.3.713t-.3.687L13.375 12l2.925 2.917q.275.277.275.704t-.275.704q-.3.3-.712.3t-.688-.3z"
              />
            </svg>
          </div>
          <div class="overflow-y-auto h-full">
            <div class="pt-8 px-7 h-full flex flex-col gap-10">
              <div class="flex items-start justify-between">
                <div
                  class="md:basis-[80%] basis-[60%] flex md:flex-row flex-col gap-3 md:items-center"
                >
                  <div
                    class="md:basis-[30%] w-[50%] border-[1px] border-black/30 rounded-xl overflow-hidden"
                  >
                    <img
                      class="w-full h-full object-cover"
                      src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                    />
                  </div>
                  <div class="md:basis-[70%] flex flex-col">
                    <p class="text-lg font-semibold">Product Name</p>
                    <p class="text-black/60">100000 MMK</p>
                    <div
                      class="text-red-500 flex items-center mt-3 border-b-[1px] border-red-500 gap-2 w-max"
                    >
                      <p
                        class="text-lg cursor-pointer font-medium leading-[1] text-red-500"
                      >
                        Remove
                      </p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                      >
                        <path
                          fill="currentColor"
                          d="M5 21V6H4V4h5V3h6v1h5v2h-1v15zm2-2h10V6H7zm2-2h2V8H9zm4 0h2V8h-2zM7 6v13z"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="shrink-0 md:basis-[20%] basis-[30%]">
                  <input
                    type="number"
                    value="1"
                    class="w-full border-[1px] rounded-full py-3 px-5"
                  />
                </div>
              </div>
            </div>
            <div
              class="px-8 absolute bottom-0 border-t-[1px] border-t-black/10 bg-white left-0 w-full z-10 py-5"
            >
              <div class="flex text-lg items-center justify-between">
                <p class="text-black/60">Subtotal :</p>
                <p class="font-bold">100000 MMK</p>
              </div>
              <a
                href="/checkout.html"
                class="w-full h-full text-white inline-block text-center bg-primary rounded-full py-4 font-bold mt-3"
              >
                Continue to Checkout
              </a>
            </div>
          </div>
          if cart has not item
          <div class="flex flex-col w-full h-[85%] items-center justify-center">
            <p class="text-lg font-bold text-black/50">No items found.</p>
            <a
              href="/home.html"
              class="text-white bg-primary rounded-full py-4 px-7 font-bold mt-3"
            >
              Start Shopping </a
            >`
          </div>
        </div>
      </div>
    </div>
@props([
'type'=> 'create',
'user'=>new App\Models\User,
])
<div class="flex h-screen overflow-hidden font-roboto">
    <x-slidebar />
    <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 bg-gray-50">
                <div class="border p-10 bg-white rounded-md">
                    <h1 class="font-bold my-3 text-3xl">User {{$type === 'create' ? 'Create':'Edit' }}</h1>
                    <form class="space-y-4 md:space-y-6" method="post" action="{{$type === 'create' ? route('users.store'):route('users.update',$user->id)}}">
                        @csrf
                        @if($type === 'edit')
                        @method('PUT')
                        @endif
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col ps-2">
                                <label class="font-semibold text-sm">User Name</label>
                                <input
                                    value="{{old('name',$user->name)}}"
                                    class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                                    type="text"
                                    placeholder="Enter User Name"
                                    name="name" />
                                @error('name')
                                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label class="font-semibold text-sm">Role</label>
                                <select
                                    name="is_admin"
                                    class="w-full border-[1px] mt-2 px-3 border-black/20 focus:border-primary transition-all py-3 rounded-lg">
                                    <option value="0" {{$type === 'edit' ? 0 === old('is_admin',$user->is_admin) ? 'selected' : '': ''}}>User</option>
                                    <option value="1"{{$type === 'edit' ? 1 === old('is_admin',$user->is_admin) ? 'selected' : '': ''}}>Admin</option>
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label class="font-semibold text-sm">Email</label>
                                <input
                                    value="{{old('email',$user->email)}}"
                                    class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                                    type="text"
                                    placeholder="Enter User Email"
                                    name="email" />
                                @error('email')
                                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label class="font-semibold text-sm">Phone</label>
                                <input
                                    value="{{old('phone',$user->phone)}}"
                                    class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                                    type="text"
                                    placeholder="Enter User Phone Number"
                                    name="phone" />
                                @error('phone')
                                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col {{$type === 'edit' ? 'hidden':''}}">
                                <label class="font-semibold text-sm">Password</label>
                                <input
                                value="{{old('password_confirmation',$user->password)}}"
                                    class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                                    type="password"
                                    placeholder="Enter User Password"
                                    name="password" />
                                @error('password')
                                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col {{$type === 'edit' ? 'hidden':''}}">
                                <label class="font-semibold text-sm">Confirm Password</label>
                                <input
                                    value="{{old('password_confirmation',$user->password)}}"
                                    class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                                    type="password"
                                    placeholder="Enter User Password"
                                    name="password_confirmation" />
                                @error('password')
                                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex items-center justify-end space-x-5">
                            <a
                                href="{{route('users.index')}}"
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
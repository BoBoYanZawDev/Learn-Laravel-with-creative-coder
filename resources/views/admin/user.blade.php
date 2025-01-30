<x-layout>
    <div class="flex h-screen overflow-hidden font-roboto">
        <x-slidebar />
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <main>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 bg-gray-50">
                    <div class="relative border border-gray-300 bg-white rounded-md shadow-sm shadow-gray-200 px-5 py-3">
                        <div class="flex justify-end mb-3">
                            <a class="text-sm px-4 flex items-center gap-3 shadow-md py-3 text-white bg-primary hover:bg-blue-900 font-semibold rounded-md transition-all active:animate-press"
                                href="{{route('users.create')}}">
                                Create
                            </a>
                        </div>
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded-md overflow-hidden border">
                            <div class="overflow-x-auto w-full">
                                <table class="w-full text-sm text-left">
                                    <thead class="text-white bg-primary">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 min-w-[100px]">
                                                <span class="capitalize p-1.5"> ID </span>
                                            </th>

                                            <th scope="col" class="px-6 py-3 min-w-[100px]">
                                                <span class="capitalize p-1.5"> Preview </span>
                                            </th>
                                            <th scope="col" class="px-6 py-3 min-w-[100px]">
                                                <span class="capitalize p-1.5"> Name </span>
                                            </th>
                                            <th scope="col" class="px-6 py-3 min-w-[100px]">
                                                <span class="capitalize p-1.5"> Role </span>
                                            </th>
                                            <th scope="col" class="px-6 py-3 min-w-[100px]">
                                                <span class="capitalize p-1.5"> Email </span>
                                            </th>
                                            <th scope="col" class="px-6 py-3 min-w-[100px]">
                                                <span class="capitalize p-1.5"> Phone Number </span>
                                            </th>
                                            <th scope="col" class="px-6 py-3 min-w-[100px] text-center">
                                                <span class="capitalize p-1.5"> Actions </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr class="border-b">
                                            <td class="px-6 py-4">
                                                <span class="text-darkGray p-1.5 font-semibold block">
                                                    {{$user->id}}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-darkGray p-1.5 font-semibold block">
                                                    @if($user->profile_img == null)
                                                    <img
                                                        src="{{asset('assets/user.png')}}"
                                                        alt="Product Image" class="w-16 h-16 object-cover" />
                                                    @else
                                                    <img
                                                        src="{{asset($user->profile_img)}}"
                                                        alt="Product Image" class="w-16 h-16 object-cover" />
                                                    @endif
                                                    
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 min-w-[150px]">
                                                <span class="text-darkGray p-1.5 font-semibold block">
                                                    {{$user->name}}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 min-w-[150px]">
                                                <span class="text-darkGray p-1.5 font-semibold block">
                                                    {{$user->is_admin ? 'Admin' : 'User'}}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 min-w-[150px]">
                                                <span class="text-darkGray p-1.5 font-semibold block">
                                                    {{$user->email}}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 min-w-[150px]">
                                                <span class="text-darkGray p-1.5 font-semibold block">
                                                    {{$user->phone}}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="space-x-3 flex justify-center items-center min-w-[200px] w-auto max-w-[500px]">
                                                    <a href="{{route('users.edit',$user->id)}}"
                                                        class="text-sm px-4 flex items-center gap-3 shadow-md py-3 text-white bg-primary hover:bg-blue-900 font-semibold rounded-md transition-all active:animate-press">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M5 19h1.425L16.2 9.225L14.775 7.8L5 17.575zm-2 2v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM19 6.4L17.6 5zm-3.525 2.125l-.7-.725L16.2 9.225z" />
                                                        </svg>
                                                        Edit
                                                    </a>
                                                    @if(!$user->is_admin)
                                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit"
                                                            class="text-sm px-4 flex items-center gap-3 shadow-md py-3 text-white bg-red-500 hover:bg-blue-900 font-semibold rounded-md transition-all active:animate-press">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M5 21V6H4V4h5V3h6v1h5v2h-1v15zm2-2h10V6H7zm2-2h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                                            </svg>
                                                            Delete
                                                        </button>
                                                    </form>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if(session('error'))
                        <div class="text-red-500 my-3 text-sm ms-3">
                            {{ session('error') }}
                        </div>
                        @endif
                        <div class="flex justify-center">
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-layout>
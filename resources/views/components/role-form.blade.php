@props([
'role'=>new Spatie\Permission\Models\Role,
'permissions' => [],
'type' => 'create',
'rolePermissions' => []
])
<div class="flex h-screen overflow-hidden font-roboto">
    <x-slidebar />
    <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 bg-gray-50">
                <div class="border p-10 bg-white rounded-md">
                    <h1 class="font-bold my-3 text-3xl">Role {{$type === 'create' ? 'Create':'Edit'}}</h1>
                    <form class="space-y-4 md:space-y-6" method="post" action="{{$type === 'create' ?  route('roles.store'): route('roles.update',$role->id)}}">
                        @csrf
                        @if($type === 'edit')
                        @method('PUT')
                        @endif
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col">
                                <label class="font-semibold text-sm">Role Name</label>
                                <input
                                    value="{{old('name',$role->name)}}"
                                    class="outline-none px-4 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
                                    type="text"
                                    placeholder="Enter your role Name"
                                    name="name" />
                                @error('name')
                                <p class="text-red-500 my-3 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                        <div class="flex items-center">
                                <input type="checkbox" id='checkAll'  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="link-checkbox" class="ms-2 text-md font-medium text-gray-900 dark:text-gray-300">Check All</label>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                            @foreach($permissions as $permission)
                            <div class="flex items-center">
                                <input  id="permission-{{$permission->id}}" {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }} type="checkbox" value="{{$permission->id}}" name="permission[{{$permission->id}}]" class="permis-box w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$permission->name}}</label>
                            </div>
                            @endforeach
                        </div>
                        <div class="flex items-center justify-end space-x-5">
                            <a
                                href="{{route('roles.index')}}"
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
<script>
    document.getElementById('checkAll').addEventListener('change',function (){
        let checkboxes = document.querySelectorAll('.permis-box');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = document.getElementById('checkAll').checked;
        });
    })
    let checkboxes = document.querySelectorAll('.permis-box');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            if (!this.checked) {
                document.getElementById('checkAll').checked = false;
            }
        });
    });
</script>
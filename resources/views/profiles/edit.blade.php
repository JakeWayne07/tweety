<x-app>
    <div class="w-full mx-auto">
        <form
            method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
            enctype="multipart/form-data"
        >
            @method('PATCH')
            @csrf

            <div class="mb-4">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="username"
                >
                    Username
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                        @error('username') is-valid @enderror"
                    id="username"
                    type="text"
                    name="username"
                    value="{{current_user()->username}}"
                    autocomplete="username"
                    autofocus>
                @error('username')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="mb-4">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="name"
                >
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                        @error('name') is-valid @enderror"
                    id="name"
                    type="text"
                    name="name"
                    autocomplete="name"
                    value="{{current_user()->name}}"
                    autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="mb-4">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="avatar"
                >
                    Avatar
                </label>
                <div class="flex">
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                        @error('avatar') is-valid @enderror"
                        id="avatar"
                        type="file"
                        name="avatar"
                        autofocus>
                    @error('avatar')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <img src="{{$user->avatar}}"
                         alt=""
                         width="50px"
                    >
                </div>
            </div>
            <button type="submit" class="bg-blue-400 text-white rounded mt-6 py-1 px-3 hover:bg-blue-300 mr-4">
                Change
            </button>
            <a href="{{$user->path()}}" class="hover:underline">Cancel</a>
        </form>
    </div>


    <div class="w-full mx-auto mt-16">
        <form
            method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
        >
            @method('PATCH')
            @csrf

            <div>
                <h3 class="font-bold mb-2 text-blue-700 border-r-4 border-blue-500">
                    Change Password
                </h3>
            </div>

            <div class="mb-4">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="password"
                >
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password"
                    type="password"
                    name="password"
                    required
                    autofocus>
                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="mb-4">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="password_confirmation"
                >
                    Confirm Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required>
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-400 text-white rounded mt-6 py-1 px-3 hover:bg-blue-300 mr-4">
                Update
            </button>
            <a href="{{$user->path()}}" class="hover:underline">Cancel</a>
        </form>
    </div>
</x-app>

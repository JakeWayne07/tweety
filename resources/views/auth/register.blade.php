<x-master>
    <div class="w-full max-w-xs mx-auto">
        <form
            method="POST"
            action="{{route('register')}}"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
        >
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
                    placeholder="Username"
                    name="username"
                    value="{{ old('username') }}"
                    required
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
                    class="block text-gray-700 text-sm font-bold mb-2 mt-2"
                    for="name"
                >
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                            @error('name') is-valid @enderror"
                    id="name"
                    type="text"
                    placeholder="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autocomplete="name"
                    autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="mb-4">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2 mt-2"
                    for="email"
                >
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                            @error('email') is-valid @enderror"
                    id="email"
                    type="text"
                    placeholder="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2"
                       for="password"
                >
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password"
                    name="password"
                    type="password"
                    required
                    autocomplete="new_password"
                    placeholder="******************">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2"
                       for="password-confirm"
                >
                    Confirm Password
                </label>
                <input
                    class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password-confirm"
                    type="password"
                    placeholder="******************"
                    name="password_confirmation"
                    required
                    autocomplete="new-password">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                    Register
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/login">
                    Log in?
                </a>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2020 True TD. All rights reserved.
        </p>
    </div>
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Register') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name"--}}
{{--                                       class="col-md-4 col-form-label text-md-right"--}}
{{--                                        >{{ __('Name') }}--}}
{{--                                </label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input--}}
{{--                                        id="name"--}}
{{--                                        type="text"--}}
{{--                                        class="form-control--}}
{{--                                    @error('name')--}}
{{--                                            is-invalid--}}
{{--                                    @enderror"--}}
{{--                                        name="name"--}}
{{--                                        value="{{ old('name') }}"--}}
{{--                                        required--}}
{{--                                        autocomplete="name"--}}
{{--                                        autofocus>--}}

{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div--}}
{{--                                class="form-group row">--}}
{{--                                <label--}}
{{--                                    for="email"--}}
{{--                                    class="col-md-4 col-form-label text-md-right"--}}
{{--                                >--}}
{{--                                    {{ __('E-Mail Address') }}--}}
{{--                                </label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input--}}
{{--                                        id="email"--}}
{{--                                        type="email"--}}
{{--                                        class="form-control @error('email') is-invalid @enderror"--}}
{{--                                        name="email"--}}
{{--                                        value="{{ old('email') }}"--}}
{{--                                        required--}}
{{--                                        autocomplete="email">--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label--}}
{{--                                    for="password"--}}
{{--                                    class="col-md-4 col-form-label text-md-right"--}}
{{--                                >--}}
{{--                                    {{ __('Password') }}--}}
{{--                                </label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input--}}
{{--                                        id="password"--}}
{{--                                        type="password"--}}
{{--                                        class="form-control @error('password') is-invalid @enderror"--}}
{{--                                        name="password"--}}
{{--                                        required--}}
{{--                                        autocomplete="new-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label--}}
{{--                                    for="password-confirm"--}}
{{--                                    class="col-md-4 col-form-label text-md-right"--}}
{{--                                >--}}
{{--                                    {{ __('Confirm Password') }}--}}
{{--                                </label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input--}}
{{--                                        id="password-confirm"--}}
{{--                                        type="password"--}}
{{--                                        class="form-control"--}}
{{--                                        name="password_confirmation"--}}
{{--                                        required--}}
{{--                                        autocomplete="new-password">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

</x-master>

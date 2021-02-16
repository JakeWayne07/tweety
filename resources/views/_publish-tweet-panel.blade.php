
            <div class=" border border-blue-400 rounded-lg p-4 mb-4">
                <form method="POST" action="/tweets">
                    @csrf

                    <textarea
                        name="body"
                        id=""
                        class=" w-full"
                        placeholder="What's Up?"
                        required
                        >
                    </textarea>

                    <hr class="my-4">

                    <footer class="flex justify-between">
                        <img
                            src="{{current_user()->avatar}}"
                            alt=""
                            class="rounded-full mr-2"
                            width="50px"
                        >
                        <button
                                type="submit"
                                class=" bg-blue-400 rounded-lg shadow px-2 py-2 text-white hover:bg-blue-600 "
                        >
                            Tweet Away
                        </button>
                    </footer>

                </form>
            </div>

<x-master>
    <section class="px-8">
        <main  class="container mx-auto">
            <div class="lg:flex justify-between">
                <div class="lg:w-32r">
                    @include('_sidebar_links')
                </div>

                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                    {{$slot}}
                </div>
                <div class=" lg:w-1/5 bg-blue-100 p-4 rounded-lg mb-4">
                    @include('_friends_list')
                </div>
            </div>
        </main>
    </section>
</x-master>

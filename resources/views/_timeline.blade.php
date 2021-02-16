<div class="border border-grey-500 rounded-lg mb-4">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">No Tweets yet!</p>
    @endforelse

    {{$tweets->links()}}

</div>

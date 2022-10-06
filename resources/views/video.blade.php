<video:video>
    @if (! empty($video->url))
        @if($video->type === 'source')
            <video:content_loc>{{ url($video->url) }}</video:content_loc>>
        @endif
        @if($video->type === 'embed')
            <video:player_loc>{{ url($video->url) }}</video:player_loc>
        @endif
    @endif
</video:video>

<div class="flex flex-col border-2 rounded-md p-3 [&:not(:first-child)]:mt-3">
    <div class="flex flex-row content-between">
        <div class="flex flex-row items-center">
            <span class="font-semibold text-xl">{{ $name }}</span>
            <span class="ml-2 story-status story-status--{{ $status }}">
                {{ $status->label() }}
            </span>
            <img src="{{ Vite::asset('resources/images/icons/like.svg') }}" alt="Like" class="ml-2"/>
            <span class="ml-1">115</span>
        </div>
    </div>
    <div class="flex flex-col text-lg mt-2">
        <div class="flex flex-row">
            <span>{{ __('texts.story.item.type') }}:</span>
            <span class="ml-2">
                {{ $type->label() }}
            </span>
        </div>
        <div class="flex flex-row">
            <span>{{ __('texts.story.item.author') }}:</span>
            <span class="ml-2">
                {{ $author->login }}
            </span>
        </div>
        <div class="flex flex-row">
            <span>{{ __('texts.story.item.direction') }}:</span>
            <span class="ml-2 story-direction story-direction--{{ $direction }}">
                {{ $direction->label() }}
            </span>
        </div>
        @if ($fandom !== null)
            <div class="flex flex-row">
                <span>{{ __('texts.story.item.fandom') }}:</span>
                <span class="ml-2">
                    <a href="#">{{ $fandom->name }}</a>
                </span>
            </div>
        @endif
        <div class="flex flex-row">
            <span>{{ __('texts.story.item.rating') }}:</span>
            <span class="ml-2">{{ $rating->label() }}</span>
        </div>
        <div class="flex flex-row">
            <span>{{ __('texts.story.item.characters') }}:</span>
            <span class="ml-2">
                @php
                    $lastCharacterIndex = count($characters) - 1;
                @endphp
                @foreach($characters as $key => $character)
                    <a href="#">
                        {{ $character->name }}@if ($key !== $lastCharacterIndex)<span>, </span>@endif
                    </a>
                @endforeach
            </span>
        </div>
        <div class="flex flex-row">
            <span>{{ __('texts.story.item.size') }}:</span>
            <span class="ml-2">{{ $size->label() }}</span>
        </div>
        <div class="flex flex-row">
            <span>{{ __('texts.story.item.tags') }}:</span>
            <span class="ml-2">
                @php
                    $lastTagIndex = count($tags) - 1;
                @endphp
                @foreach($tags as $key => $tag)
                    <a href="#">
                        {{ $tag->name }}@if ($key !== $lastTagIndex)<span>, </span>@endif
                    </a>
                @endforeach
            </span>
        </div>
    </div>
</div>

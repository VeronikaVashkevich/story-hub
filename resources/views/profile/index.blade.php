@extends('layouts.profile')

@section('title', 'Мои истории')
@section('page-header', __('profile.my_stories'))

@section('page-content')
    <div class="flex flex-col w-[846px] mt-2">
        @foreach($stories as $story)
            <x-stories.story
                :type="$story->type"
                :name="$story->name"
                :description="$story->description"
                :status="$story->status"
                :direction="$story->direction"
                :rating="$story->rating"
                :size="$story->size"
                :cover="$story->cover"
                :fandom="$story->fandom"
                :tags="$story->tags"
                :characters="$story->characters"
                :author="$story->user"
            />
        @endforeach
    </div>
    <div class="mt-2">
        {{ $stories->links() }}
    </div>
@endsection

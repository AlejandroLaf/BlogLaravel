@props(['category'])
<x-badge wire:click :textColor="$category->text_color" :bgColor="$category->bg_color">
    {{ $category->title }}
</x-badge>

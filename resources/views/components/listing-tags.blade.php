@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="tag-list">
    @foreach($tags as $tag)
    <li class="tag-item">
        <a href="/?tag={{$tag}}" class="tag-link">{{$tag}}</a>
    </li>
    @endforeach
</ul>

<style>
    /* Tag List Styling */
    .tag-list {
        display: flex;
        padding: 0;
        list-style: none;
    }

    /* Tag Item Styling */
    .tag-item {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--primary);
        border-radius: 0.75rem;
        padding: 0.25rem 0.75rem;
        margin-right: 0.5rem;
        font-size: 0.75rem;
    }

    .tag-link {
        color: inherit;
        text-decoration: none;
    }
</style>
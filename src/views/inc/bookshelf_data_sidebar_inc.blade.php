@if (isset($rows))
    <ul>
        @foreach ($rows as $ref)
            <li>
                @include('ydbviews.styles.format_as_' . strtolower(pp\Models\Style::getNameStyle())
            </li>
        @endforeach
    </ul>
@endif



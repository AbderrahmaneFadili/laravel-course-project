@extends('master')

@section('meta')
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Abderrahmen Fadili">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('content')
    <div>
        <h1>This is the Content by :{{ $name }}</h1>
        {{-- if statements --}}
        <h1>if statements</h1>
        @if ($name == 'Fadili Abderrahmane')
            <p>This is Fadili</p>
        @elseif ($name == 'Jhon Doe')
            <p>This is Jhon</p>
        @else
            <p>This is neither john or fadili</p>
        @endif


        {{-- swicth statements --}}
        <h1>swicth statements</h1>
        @switch($name)
            @case('Fadili Abderrahmane')
                <p>This is Fadili</p>
            @break
            @case('Jhon Doe')
                <p>This is Jhon</p>
            @break
            @default
                <p>This is neither john or fadili</p>
        @endswitch


        {{-- loops --}}
        <h1>loops</h1>
        <h2>for</h2>
        @for ($index = 0; $index < 5; $index++)
            <p>The current value {{ $index }}</p>
        @endfor
        <h2>foreach</h2>
        <ul>
            @foreach ($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>
        <h2>forelse</h2>
        <ul>
            @forelse ($countries as $c)
                <li>{{ $c }}</li>
            @empty
                <li>No users</li>
            @endforelse
        </ul>
        <h2>while</h2>
        <p hidden>{{ $counter = 0 }}</p>
        <ul>
            @while ($counter < 5)
                <li>{{ $counter }}</li>
                <p hidden> {{ $counter++ }}</p>
            @endwhile
        </ul>

    </div>
@endsection

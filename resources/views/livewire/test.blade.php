<div>
    <button wire:click="update">UPDATE COMPONENT / TEST VIEW</button>

    <p>
        <strong>App Locale in Component Class:</strong>
        {{ $locale }}<br>

        <strong>App Locale in Component View:</strong>
        {{ app()->getLocale() }}<br>

        <strong>Route Action:</strong>
        {{ $action }}<br>

        <strong>Route URI:</strong>
        {{ $uri }}<br>

        <strong>Request URL:</strong>
        {{ $url }}<br>

        <strong>Livewire Original URL:</strong>
        {{ $livewireUrl }}<br>

        <strong>Localized URLs:</strong>
    </p>
    <ul>
        @foreach($localizedUrls as $label => $localizedUrl)
            <li>{{ $label }}: <a href="{{ $localizedUrl }}">{{ $localizedUrl }}</a></li>
        @endforeach
    </ul>

    <h3>Request</h3>
    <pre>
        {!! print_r(request()->all()) !!}
    </pre>

    <h3>Session</h3>
    <pre>
        {!! print_r(session()->all()) !!}
    </pre>

</div>

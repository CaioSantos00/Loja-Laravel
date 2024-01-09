@props(['errorNames'])

@if ($errorNames)
    @foreach ($errorNames as $errorName)
        @error($errorName)
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    @endforeach
@endif
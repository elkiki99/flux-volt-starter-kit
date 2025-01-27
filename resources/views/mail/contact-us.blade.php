<x-mail::message>
# New message by {{ $name }}

{{ $message }}

Industry: {{ implode(', ', $industry) }}

{{ config('app.name') }}
</x-mail::message>

<x-mail::message>
# New message by {{ $name }}

{{ $message }}

Industry: {{ implode(', ', $industry) }}
Budget: {{ $budget }}

{{ config('app.name') }}
</x-mail::message>

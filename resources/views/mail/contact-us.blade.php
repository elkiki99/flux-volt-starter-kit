<x-mail::message>
# New message by {{ $name }}

{{ $message }}

Industry: {{ implode(', ', $industry) }}
Budget: {{ $budget }}
Company: {{ $company }}
Website: {{ $website }}

{{ config('app.name') }}
</x-mail::message>

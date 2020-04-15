@extends('master')

@section('title')
    Phonebook List
@endsection

@section('content')
@php
    $headArr = array_keys($contacts[0]);
@endphp

<script>
function goToUrl() {
    window.location.href = "/";
}
</script>
<form action="/" method="get">
<div class="search-box">
    <div>
        <input type="text" name="search" placeholder="Search List">
    </div>
    <div>
        <select class="" name="q">
            @foreach($headArr as $head)
                @php
                $title = ucfirst(str_replace("_", " ", $head));
                @endphp
                <option value="{{ $head }}">{{ $title }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Search</button>
    </div>
    <div>
        <button type="button" onclick="goToUrl()">Reset</button>
    </div>
</div>
</form>
<div class="phonelist">
    <div class="name list-head">
        <a href="/?q=name">Name</a>
    </div>
    <div class="phone list-head">
        <a href="/?q=phone_number">Phone Number</a>
    </div>
    <div class="addr list-head">
        <a href="/?q=address">Address</a>
    </div>
    @foreach($contacts as $contact)
        <div class="name list-color">
            {{ $contact['name'] }}
        </div>
        <div class="phone list-color">
            {{ $contact['phone_number'] }}
        </div>
        <div class="addr list-color">
            {{ $contact['address'] }}
        </div>
    @endforeach
</div>
@endsection

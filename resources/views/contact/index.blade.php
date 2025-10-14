@extends('layouts.app')
@section('title','Contact')
@section('content')
<h2>Liên hệ</h2>
<form method="POST" action="{ route('contact.send') }">
    @csrf
    <label>Name</label><input name="name" required>
    <label>Email</label><input name="email" type="email" required>
    <label>Subject</label><input name="subject">
    <label>Message</label><textarea name="message" required></textarea>
    <button type="submit">Gửi</button>
</form>
@endsection

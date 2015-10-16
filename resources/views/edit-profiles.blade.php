@extends('layouts.content')

@section('title', 'edit-profiles')
@stop

@section('page-title')
<h1 class="auth-user">Welcome, {{ Auth::user()['attributes']['name'] }}<!--
--><a class="link" href="auth/logout">Logout</a></h1>
@stop

@section('content')
<nav class="users"><div class="heading">Users</div><a class="link" href="/auth/register">Register new user</a></nav>
<?php
$users = App\User::paginate(1);
$countPages = $users->lastPage();
$page = Request::Input('page');
if (isset($page)&&(!empty($page))) {
   $page = Request::Input('page');
} else {
    $page = 1;
}
?>
@if (($page <= $countPages)&&(is_numeric($page)))
<table class="users-table">
<thead>
<tr>
    <th>Username</th>
    <th>Email</th>
    <th>Change password</th>
    <th>Delete user</th>
</tr>
</thead>
<tbody>
@foreach ($users as $user)
   <tr>
        <td>{{ $user['attributes']['name'] }}</td>
        <td>{{ $user['attributes']['email'] }}</td>
        <td><a class="edit" href=""></a></td>
        <td><a class="delete" href=""></a></td>
   </tr>
@endforeach
</tbody>
</table>
<div class="pagination-wrapper">
{!! $users->render() !!}
</div>
@else
<p class="user-error">There are no such results</p>
@endif
@stop
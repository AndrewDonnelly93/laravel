@extends('layouts.content')

@section('title', 'edit-profiles')
@stop

@section('page-title')
<h1 class="auth-user">Welcome, {{ Auth::user()['attributes']['name'] }}<!--
--><a class="link" href="auth/logout">Logout</a></h1>
@stop

@section('content')
<nav class="users"><div class="heading">Users</div><a class="link" href="auth/register">Register new user</a></nav>
<?php
$users = App\User::paginate(9);
$currentUser = Auth::User();
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
    @if ($user['attributes']['name'] == $currentUser['attributes']['name'])
        <tr class="current-user">
    @else
        <tr>
    @endif
        <td><div class="user-content clearfix"><div class="user-info">{{ $user['attributes']['name'] }}</div><!--
        --><a class="edit" href="/edit-name/{{ $user['attributes']['id'] }}"></a></div></td>
        <td><div class="user-content clearfix"><div class="user-info">{{ $user['attributes']['email'] }}</div><!--
        --><a class="edit" href="/edit-email/{{ $user['attributes']['id'] }}"></a></div></td>
        <td><a class="edit" href="/change-password/{{ $user['attributes']['id'] }}"></a></td>
        <td>
         @if ($user['attributes']['name'] == $currentUser['attributes']['name'])
            You can't delete current user
         @else
            <a class="delete" href=""></a>
         @endif
         </td>
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
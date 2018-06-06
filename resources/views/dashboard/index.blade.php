@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
@extends('layouts.dashboard)
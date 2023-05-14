
@extends('Theme.Theme_master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y " >
        <h4 class="breadcrumb-wrapper py-3 mb-4">
            <span class="text-muted fw-light">User Profile /</span> Teams
        </h4>

        <div class="card-body">
{{--            <chat-com--}}
{{--                :user="{{Auth::user()}}"--}}
{{--                :friends="{{$users=\App\Models\User::all()}}"--}}

{{--            >--}}






{{--            </chat-com>--}}
            <adv-chat
                :user="{{Auth::user()}}"
                :friends="{{$users=\App\Models\User::all()}}"

            >






            </adv-chat>
        </div>
    </div>
@endsection
>

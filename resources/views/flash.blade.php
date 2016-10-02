
{{-- session flash conditional --}}
{{-- Session::get === session() (which is a global helper) --}}
{{-- {{ var_dump(session()->has('flash_message')) }} --}}
@if(session()->has('flash_message'))
<div id="alert_id" class="Alert--{{ session('flash_message_level') }}">
    {{ session('flash_message') }}
</div>
@endif

<div class="message-error">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div class="message-error">
    @if (isset($success))
        <div class="alert alert-danger">
            <ul>
                @foreach ($success->all() as $success)
                    <li>{{ $success }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

    @if(session()->has("succes"))
    <div class="alert alert-danger">  {{session()->get("success")}}</div>
    @endif

    @if(session()->has("error"))
        <div class="alert alert-danger">  
            {{session()->get("error")}}
        </div>
    @endif
        @if ($errors->any())
        <div style="width:100%; background:red; color:#fff; padding:15px 0">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
@forelse($messages as $mes)
    <div class="mess {{($mes->user_id == $user_id)?'this':''}}">
        {{$mes->text}}
    </div>
@empty
@endforelse

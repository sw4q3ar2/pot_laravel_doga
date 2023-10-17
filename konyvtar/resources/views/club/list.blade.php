@foreach ($clubs as $clubb)
<form action="/api/club/{$clubb->club_id}" method="GET">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <input type="submit" value="{{$clubb->date}}">
        <input type="submit" value="{{$clubb->location}}">
        <input type="submit" value="{{$clubb->max_number}}">
    </div>
</form>
@endforeach
<form method="POST" action="{{route('truck.update',[$truck])}}">
    Title: <input type="text" name="truck_maker" value="{{$truck->maker}}">
    ISBN: <input type="text" name="truck_plate" value="{{$truck->plate}}">
    Pages: <input type="text" name="truck_make_year" value="{{$truck->make_year}}">
    About: <textarea name="truck_mechanic_notices">{{$truck->mechanic_notices}}"</textarea>
    <select name="mechanic_id">
        @foreach ($mechanics as $mechanic)
            <option value="{{$mechanic->id}}" @if($mechanic->id == $truck->mechanic_id) selected @endif>
                {{$mechanic->name}} {{$mechanic->surname}}
            </option>
        @endforeach
</select>
    @csrf
    <button type="submit">EDIT</button>
</form>

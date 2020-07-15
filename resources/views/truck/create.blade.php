<form method="POST" action="{{route('truck.store')}}">
    Truck maker: <input type="text" name="truck_maker">
    Truck plate: <input type="text" name="truck_plate">
    Make year: <input type="text" name="truck_make_year">
    Notices: <textarea name="truck_mechanic_notices"></textarea>
    <select name="mechanic_id">
        @foreach ($mechanics as $mechanic)
            <option value="{{$mechanic->id}}">{{$mechanic->name}} {{$mechanic->surname}}</option>
        @endforeach
 </select>
    @csrf
    <button type="submit">ADD</button>
 </form>
 
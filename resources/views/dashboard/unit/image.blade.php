@if($data->pic != 0)
<img width="100" src="{{ asset('storage/'. $unit->pic) }}" alt="" />
@else
<img
    class="rounded-circle mx-auto d-block shadow my-3"
    src="http://source.unsplash.com/200x200?computer"
    alt=""
    width="150"
/>
@endif

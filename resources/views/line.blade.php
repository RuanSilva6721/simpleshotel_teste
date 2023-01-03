<tr id="carLine">
    <td class="text-center">{{$car->modelCar}}</td>
    <td class="text-center">{{ $car->brandCar }}</td>
    <td class="text-center">{{$car->version}}</td>
    <td class="text-center">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Itens
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <ul id="items-list">
                    @if ($car->items >0)
                    @foreach($car->items as $item)
                    <li class="dropdown-item"><i class="fa-solid fa-car"></i> <span>{{$item}}</span>  </li>
                    @endforeach
                    @endif
                </ul>
            </div>
          </div>
        </td>

    {{-- <td class="text-center"><a href="{{ route('carMaintenance.create', $car->id)}}" class="btn edit-btn" ><i class="fa-solid fa-gear"></i></a></td> --}}
    <td class="text-center"><a href="{{ route('car.edit', $car->id) }}" class="btn edit-btn" ><i class="fa-solid fa-pen-to-square"></i></a></td>
    <td class="text-center"><form action="{{ route('car.destroy', $car->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn delete-btn bg-danger">  <i class="fa-solid fa-trash "></i></button>
    </form>
    </td>
    <td>


    </td>
</tr>

@include('lineMaintenance')










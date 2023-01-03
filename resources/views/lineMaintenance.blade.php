@if (count($car->carMaintenance()->get()) > 0)

        <thead class="abc">
            <tr>
              <th scope="col"></th>
              <th scope="col">#</th>
              <th scope="col">Manutenção</th>
              <th scope="col">Data</th>
              <th scope="col">Editar</th>
              <th scope="col">Deletar</th>
            </tr>
          </thead>
          @foreach($car->carMaintenance()->get() as $carMaintenance)
          <tbody class="abc">
            <tr>
              <th scope="row"></th>
              <td>{{$carMaintenance->id }}</td>
              <td>{{ $carMaintenance->maintenance }}</td>
              <td>{{date('d/m/Y', strtotime($carMaintenance->date))  }}</td>
              <td class="text-center"><a href="{{ route('carMaintenance.edit', $carMaintenance->id) }}" class="btn edit-btn" ><i class="fa-solid fa-pen-to-square"></i></a></td>
              <td class="text-center"><form action="{{ route('carMaintenance.destroy', $carMaintenance->id) }}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn delete-btn ">  <i class="fa-solid fa-trash "></i></button>
              </form>
              </td>
            </tr>
          </tbody>
          @endforeach

@endif

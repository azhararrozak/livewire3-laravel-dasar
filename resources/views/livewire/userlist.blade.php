<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>User List</h1>
    <div class="col-md-4">
        <input wire:model.live='search' type="text" class="form-control" placeholder="Search...">
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Created At</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($users as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
     <div class="row">
        <div class="col-md-1">
            <select wire:model.live="perPage" class="form-select">
                <option value="10">10</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <div class="col-md-11">
            {{ $users->withQueryString()->links('') }}
        </div>
     </div>
</div>

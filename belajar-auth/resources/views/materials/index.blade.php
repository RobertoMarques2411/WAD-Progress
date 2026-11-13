@extends('layouts.app')

@section('title', 'Cleaning Material - Don N Done')

@section('content')
    <h1>Cleaning Material Module</h1>

    <h3>Add New Material</h3>
    <form method="POST" action="{{ route('materials.store') }}">
        @csrf

        <label>Category</label>
        <select name="category" required>
            <option value="">-- Select Category --</option>
            @foreach (['Fragrance','Detergent','Softener'] as $c)
                <option value="{{ $c }}" @selected(old('category') === $c)>{{ $c }}</option>
            @endforeach
        </select>
        @error('category') <small class="err">{{ $message }}</small> @enderror

        <label>Brand</label>
        <input type="text" name="brand" value="{{ old('brand') }}" placeholder="e.g. Rinso" required>
        @error('brand') <small class="err">{{ $message }}</small> @enderror

        <label>Supplier</label>
        <input type="text" name="supplier" value="{{ old('supplier') }}" placeholder="e.g. PT Unilever" required>
        @error('supplier') <small class="err">{{ $message }}</small> @enderror

        <label>Unit</label>
        <input type="text" name="unit" value="{{ old('unit', '5 liter') }}" required>
        @error('unit') <small class="err">{{ $message }}</small> @enderror

        <label>Stock</label>
        <input type="number" name="stock" value="{{ old('stock') }}" min="0" required>
        @error('stock') <small class="err">{{ $message }}</small> @enderror

        <label>Status</label>
        <select name="status" required>
            <option value="">-- Select Status --</option>
            @foreach (['Still Available','Need Order'] as $s)
                <option value="{{ $s }}" @selected(old('status') === $s)>{{ $s }}</option>
            @endforeach
        </select>
        @error('status') <small class="err">{{ $message }}</small> @enderror

        <button type="submit">+ Add Item</button>
    </form>

    <h3>Material List</h3>
    <table>
        <tr>
            <th>No</th><th>Brand</th><th>Category</th><th>Supplier</th>
            <th>Unit</th><th>Stock</th><th>Status</th><th>Action</th>
        </tr>

        @forelse ($materials as $i => $m)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $m->brand }}</td>
                <td>{{ $m->category }}</td>
                <td>{{ $m->supplier }}</td>
                <td>{{ $m->unit }}</td>

                <td colspan="3">
                    <form method="POST" action="{{ route('materials.update', $m) }}">
                        @csrf
                        @method('PUT')

                        <input type="number" name="stock" min="0" value="{{ $m->stock }}" required>

                        <select name="status" required>
                            <option value="Still Available" @selected($m->status === 'Still Available')>Still Available</option>
                            <option value="Need Order" @selected($m->status === 'Need Order')>Need Order</option>
                        </select>

                        <button type="submit" class="btn-small btn-update">Update</button>
                    </form>

                    <form method="POST" action="{{ route('materials.destroy', $m) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete" style="background:none;border:none;cursor:pointer;"
                                onclick="return confirm('Delete this item?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="8">No data yet.</td></tr>
        @endforelse
    </table>
@endsection
<h2>All Medicines</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price (PKR)</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($medicines as $medicine)
            <tr>
            <td>  @if($medicine->image)
              <img src="{{ asset('storage/' . $medicine->image) }}" 
              style="width: 200px; height: 200px; object-fit: cover;">
              @endif</td>
                <td>{{ $medicine->name }}</td>
                <td>{{ $medicine->price }}</td>
                <td>
                    <!-- View Button -->
                    <a href="{{ route('medicines.show', $medicine->id) }}">View</a> |

                    <!-- Edit Button -->
                    <a href="{{ route('medicines.edit', $medicine->id) }}">Edit</a> |

                    <!-- Delete Button -->
                    <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete this medicine?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('medicines.create') }}">Add New Medicine</a>

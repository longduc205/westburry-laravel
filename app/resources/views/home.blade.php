<h1>Hello {{ $name }}</h1>
<p>Laravel is running with Docker Compose 🚀</p>


<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['role'] }}</td>
            <td>{{ $user['active'] ? 'Yes' : 'No' }}</td>
        </tr>
    @endforeach
</table>
@include('admdash')
<br><br><br>
<div>
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>City</th>
    <th>PinCode</th>
    <th>Phone Number</th>
    <th>Email</th>
</tr>
@foreach ($views as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->fname }}</td>
        <td>{{ $user->lname }}</td>
        <td>{{ $user->age }}</td>
        <td>{{ $user->gender }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->phno }}</td>
        <td>{{ $user->adno }}</td>
        <td>{{ $user->email }}</td> 
    </tr>
 @endforeach

<div><a href="/admdash">Back</a></div>
</div>
</table>
</div>

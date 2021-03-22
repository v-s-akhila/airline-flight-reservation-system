<div>
<table>
<tr>
<th>ID</th>
    <th>NAME</th>
    <th>FLIGHT NAME</th>
    <th>DEPARTURE </th>
    <th>ARRIVAL </th>
    <th>CLASS</th>
    <th>COST</th>

</tr>


@foreach ($capsule as $user)
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

   <!--  <tr>
        <td>{{ $id }}</td>
        <td>{{ $name }}</td>
        <td>{{ $addr }}</td>
        <td>{{ $city }}</td>
        <td>{{ $pin }}</td>
        <td>{{ $phno }}</td>
        <td>{{ $email }}</td>
        <td>{{ $fun }}</td>
        <td>{{ $dat }}</td>
        <td> <button><a href="/sendtouser">Send Message</a></button> </td>
        <td><button><a href="">Delete User</a></button></td> 
    </tr> -->


<div><a href="/admdash">Back</a></div>
</div>
</table>
</div>

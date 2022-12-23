<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.adminCss')
    </head>
    <body>
        <div class="container-scroller">
            @include('admin.navbar')

            <div id="tableUsers" class="container-fluid p-5">
                <table class="table" style="color:aliceblue">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>

                                @if ($data->usertype == "0")

                                <td><a href="{{ url('/deleteUser', $data->id) }}">Delete</a></td>

                                @else

                                <td>Not Allowed</td>

                                @endif
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            @include('admin.adminScript')
        </div>
    </body>
</html>



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

            <div id="tableReservations" class="container-fluid p-5">
                <table class="table" style="color:aliceblue">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Guest</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->guest }}</td>
                                <td>{{ $data->date }}</td>
                                <td>{{ $data->time }}</td>
                                <td>{{ $data->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        @include('admin.adminScript')
    </body>
</html>

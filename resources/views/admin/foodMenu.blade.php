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

            <div class="container-fluid p-5">
                <form action="{{ url('/uploadFood') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3 mt-3">
                      <label class="form-label">Title:</label>
                      <input type="text" class="form-control" id="title" placeholder="Write a title" name="title" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Price:</label>
                        <input type="number" class="form-control" id="price" placeholder="Price" name="price" required>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input class="form-control" type="file" id="image" name="image" required>
                      </div>

                      <div class="mb-3 mt-3">
                        <label class="form-label">Description:</label>
                        <input type="text" class="form-control" id="description" placeholder="Description" name="description" required>
                      </div>

                    <button type="submit" value="Save" class="btn btn-primary">Submit</button>

                  </form>

                  <div id="tableFood" class="container-fluid p-5">
                    <table class="table" style="color:aliceblue">
                        <thead>
                            <tr>
                                <th>Food Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Action2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td><img src="/foodImage/{{ $data->image }}"></td>
                                    <td><a href="{{ url('/deleteMenu',$data->id) }}">Delete</a></td>
                                    <td><a href="{{ url('/updateView',$data->id) }}">update</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('admin.adminScript')
    </body>
</html>


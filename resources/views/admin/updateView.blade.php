<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>

        <base href="/public">
        @include('admin.adminCss')
    </head>
    <body>

        <div class="container-scroller">

            @include('admin.navbar')

            <form action="{{ url('/updateFood', $data->id) }}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="mb-3 mt-3">
                  <label class="form-label">Title:</label>
                  <input type="text" class="form-control" id="title" value="{{ $data->title }}" name="title" required>
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" value="{{ $data->price }}"name="price" required>
                  </div>

                  <div class="mb-3 mt-3">
                    <label class="form-label">Description:</label>
                    <input type="text" class="form-control" id="description" value="{{ $data->description }}" name="description" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Old Image</label>
                    <img height="200" width="200" src="/foodImage/{{ $data->image }}">
                  </div>

                  <div class="mb-3">
                    <label class="form-label"> New Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                  </div>

                <button type="submit" value="Save" class="btn btn-primary">Edit</button>

              </form>

        </div>

        @include('admin.adminScript')
    </body>
</html>

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
                <form action="{{ url('/uploadChef') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3 mt-3">
                      <label class="form-label">New Chef:</label>
                      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Speciality:</label>
                        <input type="text" class="form-control" id="speciality" placeholder="Enter the speciality" name="speciality" required>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input class="form-control" type="file" id="image" name="image" required>
                      </div>

                    <button type="submit" value="Save" class="btn btn-primary">Submit</button>

                  </form>
            </div>

        </div>

        @include('admin.adminScript')
    </body>
</html>

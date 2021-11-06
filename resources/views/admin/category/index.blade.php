<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <div class="card">

                        <div class="card-header">
                            All Category
                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>


                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">

                        <div class="card-header">
                            Add Category
                        </div>

                        <div class="card-body">
                            <form action="{{ route('store.category') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputCategoryName" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="inputCategoryName"
                                           name="category_name">
                                    @error('category_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>


</x-app-layout>
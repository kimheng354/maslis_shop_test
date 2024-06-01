@extends('backend.layouts.master')
@section('title', 'Create BestSeller')
@section('Content')
    <section>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="titles" class="text-primary">Product Title :</label>
                                <input type="text" class="form-control" name="titles" placeholder="Titles" value="{{ old('titles') }}">
                                @error('titles')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="price" class="text-primary">Product Prices :</label>
                                <input type="text" class="form-control" name="price" placeholder="price" value="{{ old('price') }}">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="category" class="text-primary">Product Category :</label>
                                <select name="category" class="form-control" id="">
                                    <option selected>---Select Category---</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="size" class="text-primary">Product Size :</label>
                                <select name="size" class="form-control" id="">
                                    <option selected>---Select Size---</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->size_id }}">{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="branding" class="text-primary">Product Branding :</label>
                                <select name="branding" class="form-control" id="">
                                    <option selected>---Select Branding---</option>
                                    @foreach ($branding as $brand)
                                        <option value="{{ $brand->branding_id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="color" class="text-primary">Product Color :</label>
                                <select name="color" class="form-control" id="">
                                    <option selected>---Select Color---</option>
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->color_id }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="image" class="text-primary">Product Image :</label>
                                <input type="file" name="image" class="form-control ">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary text-white">
                                    Add
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

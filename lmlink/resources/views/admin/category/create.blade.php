@extends('layouts.admin')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                           Add Category
                           <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm text-white float-end">Go back</a>
                        </h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="text-black block mb-2 text-sm font-medium dark:text-white">Name</label>
                                    <input type="text" name="name" class="form-control form-input">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="text-black block mb-2 text-sm font-medium dark:text-white">Slug</label>
                                    <input type="text" name="slug" class="form-control">
                                    @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="text-black block mb-2 text-sm font-medium dark:text-white">Description</label>
                                    <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="text-black block mb-2 text-sm font-medium dark:text-white">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="text-black block mb-2 text-sm font-medium dark:text-white">Status</label>
                                    <input type="checkbox" name="status">
                                </div>
                                <div class="col-md-12 text-2xl">
                                    <h4 class="font-bold">SEO Tags</h4>

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="text-black block mb-2 text-sm font-medium dark:text-white">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control">
                                    @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="text-black block mb-2 text-sm font-medium dark:text-white">Meta Keyword</label>
                                    <textarea type="text" name="meta_keyword" class="form-control" rows="3"></textarea>
                                    @error('meta_keyword') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="text-black block mb-2 text-sm font-medium dark:text-white">Meta Description</label>
                                    <textarea type="text" name="meta_description" class="form-control" rows="3"></textarea>
                                    @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
              </div>
</div>
@endsection

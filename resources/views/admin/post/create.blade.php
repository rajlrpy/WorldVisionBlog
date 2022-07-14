@extends('admin.layouts.main')
@section('css')
{{-- Summer Note Js link --}}
@endsection

@section('main-content')
<!-- Container fluid  -->
        <!-- ============================================================== -->
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
        <div class="container-fluid">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Create Post</h4>
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <select name="category_id" id="category_name" class="form-control demo">
                            <option value=""> Select a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Post Name</label>
                        <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control demo"
                        value="{{ old('name') }}"
                        />
                    </div>
                    <div class="form-group">
                        <label for="slug">Post slug</label>
                        <input
                        type="text"
                        id="slug"
                        name="slug"
                        class="form-control demo"
                        value="{{ old('slug') }}"
                        />
                    </div>
                    <div class="form-group">
                        <label for="yt_iframe">YouTube iFrame link</label>
                        <input
                        type="text"
                        id="yt_iframe"
                        name="yt_iframe"
                        class="form-control demo"
                        value="{{ old('yt_iframe') }}"
                        />
                    </div>
                    <div class="form-group">
                        <label for="editor">Post Description</label>
                        <textarea
                        type="text"
                        id="editor"
                        name="description"
                        class="form-control demo">
                        {{ old('description') }}
                        </textarea>
                    </div>
                    <h4 class="card-title">SEO TAGS</h4>
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input
                        type="text"
                        id="meta_title"
                        name="meta_title"
                        class="form-control demo"
                        value="{{ old('meta_title') }}"
                        />
                    </div>
                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea type="text" id="meta_keywords" name="meta_keywords" class="form-control demo">{{ old('meta_keywords') }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea
                        type="text"
                        id="meta_description"
                        name="meta_description"
                        class="form-control demo">{{ old('meta_description') }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Post Status </label>
                        <input
                        type="checkbox"
                        id="status"
                        name="status"
                        class="form-check-input demo"
                        value="true"
                        checked
                        />
                    </div>
                </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success text-white">
                            Save
                            </button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <a href="{{ route('post.index') }}" class="btn btn-danger text-white"> Cancel </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->

          <!-- ============================================================== -->
          <!-- End Container fluid  -->

@endsection

@section('script')
<script>
    $("#name").change(function(e){
        $.get('{{ route('admin.post.checkSlug') }}',
        {'name': $(this).val()},
            function(data){
                $("#slug").val(data.slug);
            });
    });
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection

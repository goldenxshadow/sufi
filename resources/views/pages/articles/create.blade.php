@extends('layouts.app')

@section('content')


<!--Dashboard breadcrumb starts-->
<div class="dash-breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="dash-breadcrumb-content">

                </div>
            </div>
        </div>
    </div>
</div>
<!--Dashboard breadcrumb ends-->
<!--Dashboard content Wrapper starts-->
<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('articles.store') }}">
                    @csrf
                    <div class="db-add-list-wrap">
                        <div class="act-title">
                            <h5><i class="ion-ios-information"></i> Add Article :</h5>
                        </div>


                        <div class="db-add-listing">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Article Title</label>
                                        <input name="title" type="text" class="form-control filter-input" ">
                                    </div>
                                </div>

                                <div class=" col-md-6">
                                        <div class="form-group">
                                            <label>Author</label>
                                            <input name="author" type="text" class="form-control filter-input"
                                                value="Administrator">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form>
                                            <div class="form-group">
                                                <label for="list_info">Text Body</label>
                                                <textarea name="body" class="form-control" id="article-ckeditor"
                                                    rows="10" placeholder="Enter your text here"></textarea>
                                            </div>
                                        </form>
                                    </div>

                                    <hr>
                                    <button class="btn v8" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!--Dashboard content ends-->


@endsection

@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">Categories 0</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">Contents 0</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">Users 0</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">Today users 0</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create category</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">First category</h4>
                    <p class="list-group-item-text">
                        Count of contents
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create content</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">First content</h4>
                    <p class="list-group-item-text">
                        Category
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection
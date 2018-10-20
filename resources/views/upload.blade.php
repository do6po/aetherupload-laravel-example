@extends('layouts.app')

@section('title', __('Uploader'))

@section('content')
    <div class="page-header">
    </div>

    <div class="">
        <form method="post" action="">
            <div class="form-group " id="aetherupload-wrapper">
                <label> Загрузка файла </label>
                <div class="controls">
                    <div class="custom-file">
                        <input type="file" id="file" class="custom-file-input"
                               onchange="aetherupload(this,'file').success(someCallback).upload()"/>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="progress mt-2">
                        <div id="progressbar" class="progress-bar"></div>
                    </div>
                    <span style="font-size:12px;color:#aaa;" id="output"></span>
                    <input type="hidden" name="file1" id="savedpath">
                </div>
            </div>

            {{--<button type="submit" class="btn btn-primary"> Отправить</button>--}}
        </form>

        <hr/>

        <div id="result"></div>

    </div>
@endsection
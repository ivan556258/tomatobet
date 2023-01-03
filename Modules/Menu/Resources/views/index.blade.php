@extends('V1.auth.main.app')
    @section('content')

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <h1>{{ __('words.Create menu') }}</h1>
            </div>
        </div>
        <form method="post" name="save_menu">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="col-md-10 mb-3">
                        <label for="validationCustom01" class="form-label">Name menu</label>
{{--                        @if (isset($post))--}}
{{--                            <input type="text" class="form-control" name="keywordsText" id="validationCustom01" value="{{$post->keywordsText ?? ''}}" required>--}}
{{--                        @else--}}
                            <input type="text" class="form-control" name="keywordsText" id="validationCustom01" value="" required>
{{--                        @endif--}}
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="validationCustom01" class="form-label">Shot code menu</label>
                        <input type="text" class="form-control" name="keywordsText" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-10 mb-3">
                        <button type="submit" class="btn btn-primary w-100 mx-0 px-0">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <script>
            const form = document.forms.namedItem("save_menu");
            form.addEventListener('submit', function(ev) {
                ev.preventDefault();
                const oData = new FormData(form);
                oData.append('_token', "{{csrf_token()}}");
{{--                @if (isset($post))--}}
{{--                oData.append('id', '{{$post->id  ?? ''}}');--}}
{{--                @endif--}}

                const oReq = new XMLHttpRequest();
                oReq.open("POST", "/menu/store", true);
                oReq.onreadystatechange = function() {
                    if (oReq.readyState === 1 || oReq.readyState === 2) {
                        document.querySelector(".bt-5-success").style.display = "block";
                        document.getElementById("success").innerHTML = 'Пост сохранён';
                        setTimeout(() => {
                            document.querySelector(".bt-5-success").style.display = "none";
                        }, 5000);

                    }
                }
                oReq.send(oData);
            }, false);
        </script>
    @endsection

@php
    use App\Helpers\Agent;
@endphp
@extends('core.dashboard')
@section('custom_style')
    <link href="{{ asset('obn') }}/css/plugin.css" rel="stylesheet">
@endsection
@section('title', $title)
@section('page_title', $title)
@section('content')
    @include('share.page_title', [
        'showButton' => '1',
        'parent' => [
            'name' => 'Products List',
            'url' => route("{$routeName}/index"),
        ],
        'backUrl' => route("{$routeName}/index"),
    ])
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ !$id ? route("{$routeName}/save") : route("{$routeName}/save", ['id' => $id]) }}"
                        method="post" id="form-save" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <input id="thumbnail" name="thumbnail" type="hidden"
                                    value="{{ $item['thumbnail'] ?? '' }}">
                                <div class="media-item">
                                    <img class="img-thumbnail"
                                        data-no-image="https://via.placeholder.com/150x120&amp;text=No+Image"
                                        src="{{ get_thumbnail_url($item['thumbnail'] ?? 'no-image.png') }}" width="150px"
                                        height="120px" id="holder_thumbnail" style="max-height: 100%">
                                </div>
                                <div class="clearfix"></div>
                                <a style="margin-top: 5px;margin-bottom: 3px" data-input="thumbnail" data-type="single"
                                    data-preview="holder_thumbnail" id="lfm_thumbnail" class="btn ;btn-sm btn-default"
                                    bs-type="filemanager">
                                    Chọn hình
                                </a>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        value="{{ $item['title'] ?? '' }}">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="regular_price">Price </label>
                                    <input type="text" class="form-control" name="regular_price" id="regular_price"
                                        value="{{ $item['regular_price'] ?? '' }}">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sale_price">Sale Price</label>
                                    <input type="text" class="form-control" name="sale_price" id="sale_price"
                                        value="{{ $item['sale_price'] ?? '' }}">
                                    <span class="help-block"></span>
                                </div>
                            </div>


                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    @php
                                        $level_id = $item['level_id'] ?? '';
                                    @endphp
                                    <label for="text">Ranking (*)</label>
                                    <select name="level_id" id="" class="form-control">
                                        <option value="">Choose Ranking</option>
                                        @foreach ($levels as $level)
                                            <option value="{{ $level['id'] }}"
                                                {{ $level['id'] == $level_id ? 'selected' : '' }}>
                                                {{ $level['name'] ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    @php
                                        $status = $item['status'] ?? '';
                                    @endphp
                                    <label for="text">Status (*)</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="">Choose Status</option>
                                        <option value="pending" {{ $status == 'pending' ? 'selected' : '' }}>Pending
                                        </option>
                                        <option value="active" {{ $status == 'active' ? 'selected' : '' }}>Active</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    @php
                                        $parent_id = $item['parent_id'] ?? '';
                                    @endphp
                                    <label for="text">Sponsor</label>
                                    <select name="parent_id" id="" class="form-control select2">
                                        <option value="">Choose Sponsor</option>
                                        @foreach ($agents as $agent)
                                            <option value="{{ $agent['id'] }}"
                                                {{ $parent_id == $agent['id'] ? 'selected' : '' }}>
                                                {{ Agent::getLicenseAgentInfo($agent['id'], 'fullname') }}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div> --}}
                        </div>
                        <div class="buttons" style="text-align: right;">
                            <input type="hidden" name="id" value="{{ $item['id'] ?? '' }}">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_script')
    <script>
        $('#lfm_thumbnail').mlibready({
            returnto: '#thumbnail',
            maxselect: 1,
            runfunction: 'fillImage',
            maxFilesize: 5
        });
        let mlmType = $(`select[name="mlm_type_id"]`);
        let mlmLevel = $(`select[name="mlm_level_id"]`);
        mlmType.change(function() {
            let optionSelected = mlmType.find('option:selected');
            let mlm_type_id = $(this).val();
            let url = optionSelected.data('url');
            $.ajax({
                type: "get",
                url: url,
                data: {
                    'mlm_type_id': mlm_type_id,
                    'start': 0
                },
                dataType: "json",
                success: function(response) {
                    let data = response.data;
                    let xhtml = '';
                    data.forEach((item, key) => {
                        xhtml += `<option value = '${item.id}'>${item.name}</option>`;
                    });
                    mlmLevel.html(xhtml);
                    console.log(data);
                    console.log(xhtml);
                }
            });
        })
        let form = $("#form-save");
        form.submit(function(e) {
            e.preventDefault();
            let url = $(this).attr('action');
            let data = getFormData($(this));
            $.ajax({
                type: "post",
                url: url,
                data: data,
                dataType: "json",
                beforeSend: function() {
                    showLoading();
                },
                success: function(response) {
                    let status = response.status;
                    let msg = response.msg;
                    let redirect = response.redirect;
                    console.log(redirect)
                    if (status == 200) {
                        swal("Notification", msg, "success").then(() => {
                            if (redirect) {
                                window.location.href = redirect
                            } else {
                                location.reload();
                            }
                        })
                    } else if (status == 500) {
                        deleteError();
                        swal("Warning", msg, "warning");
                    } else {
                        swal("Oops", "Please check the information again", "error").then(() => {
                            showError(msg);
                        })
                    }
                },
                error: function(error) {
                    swal("Oops", "Something went wrong", "error");
                    console.log(error);
                },
                complete: function() {
                    hideLoading();
                }
            });
        })
    </script>
@endsection

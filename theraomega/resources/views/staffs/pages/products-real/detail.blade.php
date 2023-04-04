@php
use App\Helpers\Setting;
use App\Helpers\Agent;
@endphp
@extends('core.dashboard')
@section('title', 'List of Ambassadors')
@section('page_title', 'List of Ambassadors')
@section('custom_style')
<link href="{{ asset('obn') }}/css/plugin.css" rel="stylesheet">
<link href="{{ asset('themes/dashboard_v2') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/dashboard_v2') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
<!-- Page-Title -->
{{-- @include('share.page_title', [
        'btnUrl' => route("{$routeName}/form"),
        'showCheckbox' => '1',
        'showCheckboxUrl' => route("{$routeName}/setting"),
    ]) --}}
<!-- product details description area start -->
<div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a data-bs-toggle="tab" href="#des-details1">Description</a>
                <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                <a data-bs-toggle="tab" href="#des-details3">Reviews (2)</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane active">
                    <div class="product-anotherinfo-wrapper">
                        <ul>
                            <li><span>Weight</span> 400 g</li>
                            <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                        </ul>
                    </div>
                </div>
                <div id="des-details1" class="tab-pane">
                    <div class="product-description-wrapper">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        </p>
                        <p>
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="review-wrapper">
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="assets/images/review-image/1.png" alt="" />
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>
                                                Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-review child-review">
                                    <div class="review-img">
                                        <img src="assets/images/review-image/2.png" alt="" />
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="ratting-form-wrapper pl-50">
                                <h3>Add a Review</h3>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="star-box">
                                            <span>Your rating:</span>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="rating-form-style">
                                                    <input placeholder="Name" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rating-form-style">
                                                    <input placeholder="Email" type="email" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="Your Review" placeholder="Message"></textarea>
                                                    <button class="btn btn-primary btn-hover-color-primary " type="submit" value="Submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details description area end -->
@endsection
@section('custom_script')
<script src="{{ asset('obn') }}/js/plugin.js"></script>
<script src="{{ asset('obn') }}/js/notice.js"></script>
<script src="{{ asset('obn') }}/js/wb.datatables.js"></script>
<script src="{{ asset('obn') }}/js/wb.js"></script>
<script src="{{ asset('themes/dashboard_v2') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('themes/dashboard_v2') }}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('themes/dashboard_v2') }}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="{{ asset('themes/dashboard_v2') }}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('themes/dashboard_v2') }}/assets/pages/datatables.init.js"></script>
<script>
    var columnDatas = [{
            data: null,
            render: function(data) {
                return WBDatatables.showSelect(data.id);
            },
            orderable: false,
            searchable: false
        },
        {
            data: null,
            render: function(data) {
                console.log(data);
                return WBDatatables.showThumbnail(data.thumbnail);
            },
            class: "text-center no-padding-right",
            orderable: false,
            searchable: false
        },
        {
            data: null,
            render: function(data) {
                return (data.user_info) ? data.user_info : 'empty';
            },
            orderable: false,
            searchable: false
        },
        {
            data: null,
            render: function(data) {
                return (data.sponsor_info) ? data.sponsor_info : '';
            },
            orderable: false,
            searchable: false
        },
        {
            data: null,
            render: function(data) {
                return (data.status) ? data.status : '';
            },
            class: "text-center no-padding-right",
            orderable: false,
            searchable: false
        },
        {
            data: null,
            name: "published_at",
            render: function(data) {
                return (!data.created_at) ? '' : data.created_at;
            },
            className: "",
            orderable: false,
            searchable: false
        },
        {
            data: null,
            class: 'option-actions text-right no-padding-right',
            render: function(data) {
                let xhtml = "";
                xhtml += `<div class="button-items text-right">`;
                // xhtml += `<a href="${data.route_quickLogin}" target = "_blank" class="btn btn-primary waves-effect waves-light btn-sm">
                //         <i class="fas fa-link mr-2"></i> Login
                //     </a>`;
                xhtml += `  <a href="${data.route_edit}" class="btn btn-info waves-effect waves-light btn-sm">
                            <i class="fas fa-pencil-alt mr-2"></i> Edit
                        </a>`;
                if (data.is_suppend == '1') {
                    xhtml += ` <a href="${data.route_suppend}" class="btn btn-success waves-effect waves-light btn-sm suspend-user">
                            <i class="fas fa-ban mr-2"></i> UnSuspend
                        </a>`;
                } else {
                    xhtml += ` <a href="${data.route_suppend}" class="btn btn-danger waves-effect waves-light btn-sm suspend-user">
                            <i class="fas fa-ban mr-2"></i> Suppend
                        </a>`;
                }
                xhtml += ` <a href="${data.route_verify}" class="btn btn-warning waves-effect waves-light btn-sm send-mail-verify">
                            <i class="far fa-envelope mr-2"></i> Send Mail Verify
                        </a>`;
                xhtml += `</div>`;
                return xhtml;
            },
            orderable: false,
            searchable: false
        },
        {
            data: null,
            render: function(data) {
                return WBDatatables.showRemoveIcon(data.route_remove);
            },
            orderable: false,
            searchable: false
        },
    ];
    var option = {
        // fnInitComplete: renderChangeStatusPopupAfterReload,
        fnDrawCallback: function() {
            // WBForm.init();
            // WBForm.uniform();
            WBDatatables.updatePublisedDate();
            WBDatatables.hideSortBtnAtLastAndFirstRow();
        },
    };
    let linceseData = WBDatatables.init('.license-data', columnDatas, option);
    var status = `@include("{$pathViewController}.filter_status")`;
    var statusNonLicense = `@include("{$pathViewController}.filter_status_nonLicense")`;
    var count = `@include("{$pathViewController}.count_item", [
            'all' => [
                'url' => route("{$routeName}/index"),
                'total' => $totalAll,
            ],
            'trash' => [
                'url' => route("{$routeName}/trashIndex"),
                'total' => $totalTrash,
            ],
        ])`;
    WBDatatables.addFilter(count, '');
    WBDatatables.addFilter(status, 'select[name=status]');
    WBDatatables.addFilterCustom("non-licences_filter", parent, 'select[name=status]');
    WBDatatables.updateActive();
    WBDatatables.showAction();
</script>
<script>
    const tableFilter = $(".table-filter");
    const tableSearch = $(".table-search");
    tableFilter.change(function() {
        let url = $(this).data('url');
        let column = $(this).data('column');
        let value = $(this).val();
        let tableId = $(this).data('table');

        $.ajax({
            type: "get",
            url: url,
            data: {
                column: column,
                value: value
            },
            dataType: "json",
            beforeSend: function() {
                showLoading();
            },
            success: function(response) {
                let xthml = response.xthml ? response.xthml : "";
                $(`#${tableId} tbody`).html(xthml);
                suspendButton();
            },
            complete: function() {
                hideLoading();
            },
        });
    })
    tableSearch.keyup(function() {
        let url = $(this).data('url');
        let value = $(this).val();
        let tableId = $(this).data('table');

        $.ajax({
            type: "get",
            url: url,
            data: {
                type: "search",
                value: value
            },
            dataType: "json",
            beforeSend: function() {
                showLoading();
            },
            success: function(response) {
                let xthml = response.xthml ? response.xthml : "";
                $(`#${tableId} tbody`).html(xthml);
                suspendButton();
            },
            complete: function() {
                hideLoading();
            },
        });
    })
</script>
<script>
    function suspendButton() {
        const suspendButton = $(".suspend-button");
        suspendButton.click(function() {
            var url = $(this).attr('href');
            var data = $(this).data();
            let urlSplit = url.split('/');
            let suspend = urlSplit[urlSplit.length - 1];
            let msg = suspend == '1' ? "UnSuspended" : "Suspended";
            let text = suspend == '0' ? "Ambassador will not be able to log into the system" :
                "Ambassador will be able to log into the system";
            swal({
                showLoaderOnConfirm: true,
                closeOnConfirm: false,
                title: data.title ? data.title : `Do you want to ${msg} this Ambassador?`,
                text: data.message ? data.message : text,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#FF7043",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
            }, function() {
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data: data,

                    success: function(response) {
                        if (response.success == false) {
                            warningNotice(response.message);
                        } else {
                            if (response.hasOwnProperty('message')) {
                                successNotice(response.message);
                                location.reload();
                            }
                        }
                        swal.close();
                    },
                    error: function() {
                        swal.close();
                    }
                });
            });
            return false;
        })
    }
    suspendButton();
</script>
@endsection
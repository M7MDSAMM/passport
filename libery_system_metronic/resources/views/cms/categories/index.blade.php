@extends('cms.parent')

@section('css')

@endsection
@section('page-big-name', 'Categories')
@section('small-page-name', 'Index')
@section('content')

    <div class="container">

        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Categories
                        <span class="d-block text-muted pt-2 font-size-sm">The indexes of all categories</span>
                    </h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline mr-2">
                        <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path
                                            d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                            fill="#000000" opacity="0.3"></path>
                                        <path
                                            d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                            fill="#000000"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Export</button>
                        <!--begin::Dropdown Menu-->
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi flex-column navi-hover py-2">
                                <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                    Choose an option:</li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-print"></i>
                                        </span>
                                        <span class="navi-text">Print</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-copy"></i>
                                        </span>
                                        <span class="navi-text">Copy</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-excel-o"></i>
                                        </span>
                                        <span class="navi-text">Excel</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-text-o"></i>
                                        </span>
                                        <span class="navi-text">CSV</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-pdf-o"></i>
                                        </span>
                                        <span class="navi-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <!--end::Dropdown-->
                    <!--begin::Button-->
                    <a href="#" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                    <path
                                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                        fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>New Record</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Search Form-->
                <!--begin::Search Form-->
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            id="kt_datatable_search_query">
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                        <div class="dropdown bootstrap-select form-control"><select class="form-control"
                                                id="kt_datatable_search_status">
                                                <option value="">All</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Delivered</option>
                                                <option value="3">Canceled</option>
                                                <option value="4">Success</option>
                                                <option value="5">Info</option>
                                                <option value="6">Danger</option>
                                            </select><button type="button" tabindex="-1"
                                                class="btn dropdown-toggle btn-light bs-placeholder"
                                                data-toggle="dropdown" role="combobox" aria-owns="bs-select-1"
                                                aria-haspopup="listbox" aria-expanded="false"
                                                data-id="kt_datatable_search_status" title="All">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner">
                                                        <div class="filter-option-inner-inner">All</div>
                                                    </div>
                                                </div>
                                            </button>
                                            <div class="dropdown-menu ">
                                                <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                                    <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                        <div class="dropdown bootstrap-select form-control"><select class="form-control"
                                                id="kt_datatable_search_type">
                                                <option value="">All</option>
                                                <option value="1">Online</option>
                                                <option value="2">Retail</option>
                                                <option value="3">Direct</option>
                                            </select><button type="button" tabindex="-1"
                                                class="btn dropdown-toggle btn-light bs-placeholder"
                                                data-toggle="dropdown" role="combobox" aria-owns="bs-select-2"
                                                aria-haspopup="listbox" aria-expanded="false"
                                                data-id="kt_datatable_search_type" title="All">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner">
                                                        <div class="filter-option-inner-inner">All</div>
                                                    </div>
                                                </div>
                                            </button>
                                            <div class="dropdown-menu ">
                                                <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                                    <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                            <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                        </div>
                    </div>
                </div>
                <!--end::Search Form-->
                <!--end: Search Form-->
                <!--begin: Datatable-->
                <div class="datatable datatable-default datatable-bordered datatable-loaded">
                    <table class="datatable-bordered datatable-head-custom datatable-table" id="kt_datatable"
                        style="display: block;">
                        <thead class="datatable-head">
                            <tr class="datatable-row" style="left: 0px;">
                                <th data-field="Order ID" class="datatable-cell-center datatable-cell datatable-cell-sort"><span
                                        style="width: 30px;">#</span></th>
                                <th data-field="Order ID" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 145px;">Category Name</span></th>
                                <th data-field="Car Make" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 145px;">Category Info</span></th>
                                <th data-field="Status" data-autohide-disabled="false"
                                    class="datatable-cell datatable-cell-sort"><span style="width: 137px;">Visible</span>
                                </th>
                                <th data-field="Deposit Paid" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 145px;">Created At</span></th>
                                <th data-field="Order Date" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 145px;">Updated AT</span></th>

                                <th data-field="Type" data-autohide-disabled="false"
                                    class="datatable-cell datatable-cell-sort"><span style="width: 137px;">Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody style="" class="datatable-body">
                            @foreach ($categories as $category)
                                <tr data-row="0" class="datatable-row" style="left: 0px;">
                                    <td data-field="Order ID" aria-label="0006-3629" class="datatable-cell datatable-cell-center"><span
                                            style="width:30px;">{{ $category->id }}</span></td>
                                    <td data-field="Car Make" aria-label="Land Rover" class="datatable-cell"><span
                                            style="width: 145px;">{{ $category->category_name }}</span></td>
                                    <td data-field="Car Model" aria-label="Range Rover" class="datatable-cell"><span
                                            style="width: 145px;">{{ $category->category_info }}</span></td>
                                    @if ($category->is_visible)
                                        <td data-field="Status" aria-label="2" class="datatable-cell"><span
                                                style="width: 145px;"><span
                                                    class="label label-lg font-weight-bold label-light-success label-inline">Visible</span></span>
                                        </td>
                                    @else
                                        <td data-field="Status" aria-label="2" class="datatable-cell"><span
                                                style="width: 145px;"><span
                                                    class="label label-lg font-weight-bold label-light-danger label-inline">Hidden</span></span>
                                        </td>
                                    @endif

                                    <td data-field="Color" aria-label="Orange" class="datatable-cell"><span
                                            style="width: 145px;">{{ $category->created_at->format('y-m-d / h:ma') }}</span>
                                    </td>
                                    <td data-field="Deposit Paid" aria-label="$22672.60" class="datatable-cell"><span
                                            style="width: 145px;">{{ $category->updated_at->format('y-m-d / h:ma') }}</span>
                                    </td>



                                    <td data-field="Order Date" aria-label="2016-11-28" class="datatable-cell"><span
                                            style="width: 137px;">2016-11-28</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>

@endsection

@section('js')

@endsection

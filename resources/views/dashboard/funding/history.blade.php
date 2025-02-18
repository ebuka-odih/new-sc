@extends('dashboard.layout.app')
@section('content')

    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
             <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.withdrawHistory') }}">Outflow Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('user.inflowHistory') }}">Inflow Transactions</a>
                    </li>
                </ul>


            <!-- Latest Transactions -->
            <h2 class="content-heading">
                <i class="fa fa-angle-right text-muted me-1"></i> Inflow History
            </h2>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_" aria-describedby="DataTables_Table_1_info">
                        <thead>
                        <tr>
                            {{--                                        <th class="text-center sorting sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>--}}
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Sender</th>
                            <th class="d-none d-sm-table-cell sorting" style="width: 15%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Receiver</th>
                            <th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Date</th>
                            <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Amount</th>
                            <th class="d-none d-sm-table-cell sorting" style="width: 15%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposits as $item)
                            <tr class="odd">
                                {{--                                        <td class="text-center sorting_1">1</td>--}}
                                <td class="fw-semibold"> <a href="">{{ $item->from }}</a> </td>
                                <td class="d-none d-sm-table-cell"> {{ optional($item->user)->first_name." ".optional($item->user)->last_name }}(@convert(optional($item->user->account)->balance)) </td>
                                <td class="d-none d-sm-table-cell"> {{ date('d M, Y', strtotime($item->created_at)) }} <span class="badge bg-primary"> {{ date('h:i a', strtotime($item->created_at)) }}</span>  </td>
                                <td class="fw-semibold">@money($item->amount) {{ auth()->user()->preferred_currency ?? 'USD' }}</td>
                                <td class="d-none d-sm-table-cell"> {!! $item->status() !!} </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    </div>
                </div>
            </div>

        </div>
        <!-- END Page Content -->
    </main>

@endsection

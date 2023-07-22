@extends('layouts.app')
@section('content')
<div class="py-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="toggle">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                    <li class="nav-item m-2">
                        <a class="nav-link btn btn-outline-primary " data-bs-toggle="tab" href="#cashin">Cash In history</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link btn btn-outline-primary" data-bs-toggle="tab" href="#sendmoney">Send Money history</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link btn btn-outline-primary" data-bs-toggle="tab" href="#cashout">Cash Out history</a>
                    </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div class="tab-pane container" id="cashin">
                        <div class="card mb-2">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table bg-light">
                                        <thead>
                                            <tr>
                                                <th>@lang('Agent')</th>
                                                <th>@lang('User')</th>
                                                <th>@lang('Amount')</th>
                                                <th>@lang('Transaction number')</th>
                                                <th>@lang('Created At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($cashIns as $cashin)
                                            <tr>
                                                <td>
                                                    <strong>{{ $cashin->agentName->username }}</strong>
                                                </td>

                                                <td>
                                                {{ $cashin->toUser->username }}
                                                </td>

                                                <td class="budget">
                                                    <span class="fw-bold">
                                                        {{showAmount($cashin->amount)}} {{ $general->cur_text }}
                                                    </span>
                                                </td>

                                                <td class="budget">
                                                {{ $cashin->transaction_number }}
                                            </td>
                                            <td>
                                                {{ showDateTime($cashin->created_at) }}<br>{{ diffForHumans($cashin->created_at) }}
                                            </td>

                                        </tr>
                                        @empty
                                        <tr>
                                            <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                        </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="sendmoney">
                        <div class="card mb-2">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table bg-light">
                                            <thead>
                                                <tr>
                                                    <th>@lang('From ')</th>
                                                    <th>@lang('To')</th>
                                                    <th>@lang('Amount')</th>
                                                    <th>@lang('Transaction number')</th>
                                                    <th>@lang('Created At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($sendMoneys as $sendmoney)
                                                <tr>
                                                    <td>
                                                        <strong>{{ $sendmoney->fromUser->username }}</strong>
                                                    </td>

                                                    <td>
                                                    {{ $sendmoney->toUser->username }}
                                                    </td>

                                                    <td class="budget">
                                                        <span class="fw-bold">
                                                            {{showAmount($sendmoney->amount)}} {{ $general->cur_text }}
                                                        </span>
                                                    </td>

                                                    <td class="budget">
                                                    {{ $sendmoney->transaction_number }}
                                                </td>
                                                <td>
                                                    {{ showDateTime($sendmoney->created_at) }}<br>{{ diffForHumans($sendmoney->created_at) }}
                                                </td>

                                            </tr>
                                            @empty
                                            <tr>
                                                <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                            </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="cashout">
                        <div class="card mb-2">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table bg-light">
                                            <thead>
                                                <tr>
                                                    <th>@lang('From ')</th>
                                                    <th>@lang('Agent')</th>
                                                    <th>@lang('Amount')</th>
                                                    <th>@lang('Transaction number')</th>
                                                    <th>@lang('Created At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($cashOuts as $cashout)
                                                <tr>
                                                    <td>
                                                        <strong>{{ $cashout->fromUser->username }}</strong>
                                                    </td>

                                                    <td>
                                                    {{ $cashout->agentUser->username }}
                                                    </td>

                                                    <td class="budget">
                                                        <span class="fw-bold">
                                                            {{showAmount($cashout->amount)}} {{ $general->cur_text }}
                                                        </span>
                                                    </td>

                                                    <td class="budget">
                                                    {{ $cashout->transaction_number }}
                                                </td>
                                                <td>
                                                    {{ showDateTime($cashout->created_at) }}<br>{{ diffForHumans($cashout->created_at) }}
                                                </td>

                                            </tr>
                                            @empty
                                            <tr>
                                                <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                            </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
                <div class="card responsive-filter-card mb-4 mt-4">
                    <div class="card-body bg-light">
                        <form action="">
                            <div class="d-flex flex-wrap gap-4">
                                <div class="flex-grow-1 p-1">
                                    <label>@lang('Transaction Number')</label>
                                    <input type="text" name="search" value="{{ request()->search }}" class="form-control form--control">
                                </div>
                                <div class="flex-grow-1 p-1">
                                    <label>@lang('Type')</label>
                                    <select name="trx_type" class="form-select form-control">
                                        <option value="">@lang('All')</option>
                                        <option value="+" @selected(request()->trx_type == '+')>@lang('Plus')</option>
                                        <option value="-" @selected(request()->trx_type == '-')>@lang('Minus')</option>
                                    </select>
                                </div>
                                <div class="flex-grow-1 p-1">
                                    <label>@lang('Remark')</label>
                                    <select class="form-select form-control" name="remark">
                                        <option value="">@lang('Any')</option>
                                        @foreach($remarks as $remark)
                                        <option value="{{ $remark->remark }}" @selected(request()->remark == $remark->remark)>{{ __(keyToTitle($remark->remark)) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex-grow-1 p-1">
                                <label class="">@lang('Filter')</label>
                                    <button class="btn btn-primary w-100 form-control"><i class="fas fa-filter"></i> @lang('Filter')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table bg-light">
                                <thead>
                                    <tr>
                                        <th>@lang('Trx')</th>
                                        <th>@lang('Transacted')</th>
                                        <th>@lang('Amount')</th>
                                        <th>@lang('Post Balance')</th>
                                        <th>@lang('Detail')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($transactions as $trx)
                                    <tr>
                                        <td>
                                            <strong>{{ $trx->trx }}</strong>
                                        </td>

                                        <td>
                                            {{ showDateTime($trx->created_at) }}<br>{{ diffForHumans($trx->created_at) }}
                                        </td>

                                        <td class="budget">
                                            <span class="fw-bold @if($trx->trx_type == '+')text-success @else text-danger @endif">
                                                {{ $trx->trx_type }} {{showAmount($trx->amount)}} {{ $general->cur_text }}
                                            </span>
                                        </td>

                                        <td class="budget">
                                        {{ showAmount($trx->post_balance) }} {{ __($general->cur_text) }}
                                    </td>


                                    <td>{{ __($trx->details) }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if($transactions->hasPages())
                    <div class="card-footer">
                        {{ $transactions->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

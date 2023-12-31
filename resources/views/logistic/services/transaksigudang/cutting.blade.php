@extends('logistic.layouts.main')
@section('content')
    <div class="content-wrapper bg-white">
        <div class="container-fluid">
            {{-- headline --}}
            <div class="row">
                <div class="col-12 px-3">
                    <div class="card mt-3 px-3 py-2 rounded-0" style="background: rgba(228, 45, 45, 0.70);">
                        <h4 class="text-bold m-0
                        ">Cutting Stock (F)</h4>
                    </div>
                </div>
            </div>
            {{-- headline end --}}

            {{-- notif session --}}
            <div class="row px-2">
                <div class="col-lg-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success rounded-0 ">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>

            {{-- notif session end --}}

            <div class="card rounded-0 m-2">
                <div class="card-header">
                    <div class="row justify-content-between mx-2">
                        <div class="btn-group">
                            {{-- btn back --}}
                            <button class="btn btn-xs btn-red mr-2"
                                onclick="window.location='{{ url('/services/transaksigudang') }}'"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 12 22"
                                    fill="none">
                                    <path d="M11 1L1 11L11 21" stroke="#252525" stroke-opacity="0.8" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg> Kembali </button>
                            {{-- btn back end --}}
                            {{-- button create data --}}
                            <div class="btn-create">
                                <button type="button" class="btn btn-sm btn-red"
                                    onclick=window.location="{{ url('/services/transaksigudang/cutting/create') }}">New
                                    Cutting</button>
                            </div>
                            {{-- button create data end --}}
                        </div>

                        {{-- search --}}
                        <div>
                            <form action="{{ url('services/transaksigudang/cutting') }}">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-0"
                                        placeholder="cari Nomor Bon...." name="search" value="{{ request('search') }}">
                                    <button class="btn btn-red rounded-0 btn-xs" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        {{-- search ednd --}}
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- table order --}}
                        <table class="table table-sm table-bordered table-hover">
                            <thead class="table-secondary">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>No Bon</th>
                                    <th>No Referensi</th>
                                    <th>Tanggal </th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cutting as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no_bon }}</td>
                                        <td>{{ $item->order->no_bon }}</td>
                                        <td>{{ $item->tanggal_bon }}</td>
                                        <td width="5%"> <span class="badge bg-warning">{{ $item->statusText }}</span>
                                        </td>
                                        <td class="text-center">
                                            {{-- cetak print --}}
                                            <a href="{{ url('services/transaksigudang/cutting/' . $item->order->nama_workcenter) }}"
                                                target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 18 24" fill="none">
                                                    <path
                                                        d="M12 8V5H6V8H4.5V3H13.5V8H12ZM13.5 12.5C13.7125 12.5 13.8907 12.404 14.0347 12.212C14.1787 12.02 14.2505 11.7827 14.25 11.5C14.25 11.2167 14.178 10.979 14.034 10.787C13.89 10.595 13.712 10.4993 13.5 10.5C13.2875 10.5 13.1093 10.596 12.9653 10.788C12.8213 10.98 12.7495 11.2173 12.75 11.5C12.75 11.7833 12.822 12.021 12.966 12.213C13.11 12.405 13.288 12.5007 13.5 12.5ZM12 19V15H6V19H12ZM13.5 21H4.5V17H1.5V11C1.5 10.15 1.71875 9.43733 2.15625 8.862C2.59375 8.28667 3.125 7.99933 3.75 8H14.25C14.8875 8 15.422 8.28767 15.8535 8.863C16.285 9.43833 16.5005 10.1507 16.5 11V17H13.5V21ZM15 15V11C15 10.7167 14.928 10.479 14.784 10.287C14.64 10.095 14.462 9.99933 14.25 10H3.75C3.5375 10 3.35925 10.096 3.21525 10.288C3.07125 10.48 2.9995 10.7173 3 11V15H4.5V13H13.5V15H15Z"
                                                        fill="#252525" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- table order end --}}
                    </div>
                </div>

                {{-- pagination --}}
                {{-- <div class="row mx-3 mb-3">
                    <div class="col text-secondary">
                        Showing {{ $order->firstItem() }}
                        to {{ $material->lastItem() }}
                        of {{ $material->total() }}
                        data
                    </div>
                    <div class="col d-flex justify-content-end">
                        {{ $material->appends(request()->input())->links() }}
                    </div>
                </div> --}}
                {{-- pagination end --}}
            </div>
        </div>
    </div>
@endsection

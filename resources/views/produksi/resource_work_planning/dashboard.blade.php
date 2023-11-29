@extends('produksi.resource_work_planning.template.bar')
@section('content')
    <div class="col-lg-12">
        <div class="row mb-4 align-items-center">
            <div class="dropdown status-dropdown ml-2 dropdown-toggl" id="dropdownMenuButton03" data-toggle="dropdown"
                aria-expanded="false">
                <form action="{{ route('process.periode') }}" method="post" id="periodeForm">
                    @csrf
                    <label>Pilih Periode:</label>
                    <select class="custom-select " name="periode" id="periodeSelect"><i
                            class="ri-arrow-down-s-line ml-2 mr-0"></i>
                        <option value="1">Satu Bulan</option>
                        <option value="2">3 minggu</option>
                        <option value="3">2 minggu</option>
                        <option value="4">1 minggu</option>
                    </select>
                </form>
            </div>
        </div>

        {{-- <div class="card bg-primary">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-header m-0 p-0 px-1 py-1">
                                <h6 >Quantity</h6>
                            </div>
                            <div class="card-body  text-primary m-0 p-0 px-3 py-2">
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-header m-0 p-0 px-1 py-1">
                                <h6 >Quantity</h6>
                            </div>
                            <div class="card-body  text-primary m-0 p-0 px-3 py-2">
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-header m-0 p-0 px-1 py-1">
                                <h6 >Quantity</h6>
                            </div>
                            <div class="card-body  text-primary m-0 p-0 px-3 py-2">
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-header m-0 p-0 px-1 py-1">
                                <h6 >Quantity</h6>
                            </div>
                            <div class="card-body  text-primary m-0 p-0 px-3 py-2">
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-header m-0 p-0 px-1 py-1">
                                <h6 >Quantity</h6>
                            </div>
                            <div class="card-body  text-primary m-0 p-0 px-3 py-2">
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="card">
            <div class="card-body">
                <div class="header-title">
                    <h4 class="card-title mt-2 mb-5"><b>Product Line 2</b></h4>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Quantity</h6>
                                @php
                                    $QtyPL2 = $data['mps']
                                        ->where('production_line', '=', 'PL2')
                                        ->where('deadline', '>=', $data['deadlineDate'])
                                        ->sum('qty_trafo');

                                    $data['QtyPL2'] = $QtyPL2;
                                @endphp
                                <h3>{{ $data['QtyPL2'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kapasitas (%)</h6>
                                @php
                                    $kapasitasPL2 = $data['PL']->where('nama_pl', '=', 'PL2')->first();
                                    $loadkapasitasPL2 = ($QtyPL2 / $kapasitasPL2->kapasitas_pl) * 100;
                                @endphp
                                <h3>{{ number_format($loadkapasitasPL2) }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kebutuhan MP</h6>
                                <h3>{{ number_format($data['kebutuhanMPPL2']) }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Selisih MP</h6>
                                @php
                                    $selisihMPDRY = $data['ketersediaanMPDRY'] - number_format($data['kebutuhanMPDRY']);
                                @endphp
                                <h3>{{ $selisihMPDRY }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Overtime</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"><b>100%</b></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"><b>25%</b></div>
                </div>

                <div class="mt-2" style=" vertical-align: middle;">
                    <span class="badge badge-warning mr-1" style="height: 15px"> </span> Over Capacity
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="header-title">
                    <h4 class="card-title mt-2 mb-5"><b>Product Line 3</b></h4>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Quantity</h6>
                                @php
                                    $QtyPL3 = $data['mps']
                                        ->where('production_line', '=', 'PL3')
                                        ->where('deadline', '>=', $data['deadlineDate'])
                                        ->sum('qty_trafo');

                                    $data['QtyPL3'] = $QtyPL3;
                                @endphp
                                <h3>{{ $data['QtyPL3'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kapasitas (%)</h6>
                                @php
                                    $kapasitasPL3 = $data['PL']->where('nama_pl', '=', 'PL3')->first();
                                    $loadkapasitasPL3 = ($QtyPL3 / $kapasitasPL3->kapasitas_pl) * 100;
                                @endphp
                                <h3>{{ number_format($loadkapasitasPL3) }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kebutuhan MP</h6>
                                {{-- <h3>{{ $jumlahtotalHourSumPL3}}</h3> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Selisih MP</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Overtime</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"><b>100%</b></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"><b>25%</b></div>
                </div>

                <div class="mt-2" style=" vertical-align: middle;">
                    <span class="badge badge-warning mr-1" style="height: 15px"> </span> Over Capacity
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="header-title">
                    <h4 class="card-title mt-2 mb-5"><b>CT / VT</b></h4>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Quantity</h6>
                                @php
                                    $QtyCTVT = $data['mps']
                                        ->where('production_line', '=', 'CTVT')
                                        ->where('deadline', '>=', $data['deadlineDate'])
                                        ->sum('qty_trafo');

                                    $data['QtyCTVT'] = $QtyCTVT;
                                @endphp
                                <h3>{{ $data['QtyCTVT'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kapasitas (%)</h6>
                                @php
                                    $kapasitasCTVT = $data['PL']->where('nama_pl', '=', 'CTVT')->first();
                                    // $loadkapasitasCTVT = ($QtyCTVT / $kapasitasCTVT->kapasitas_pl) * 100; //ini kalo null gmna? masih eror
                                @endphp
                                {{-- <h3>{{ number_format($loadkapasitasCTVT) }}</h3> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kebutuhan MP</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Selisih MP</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Overtime</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"><b>100%</b></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"><b>25%</b></div>
                </div>

                <div class="mt-2" style=" vertical-align: middle;">
                    <span class="badge badge-warning mr-1" style="height: 15px"> </span> Over Capacity
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="header-title">
                    <h4 class="card-title mt-2 mb-5"><b>DRY</b></h4>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Quantity</h6>
                                @php
                                    $QtyDRY = $data['mps']
                                        ->where('production_line', '=', 'DRY')
                                        ->where('deadline', '>=', $data['deadlineDate'])
                                        ->sum('qty_trafo');

                                    $data['QtyDRY'] = $QtyDRY;
                                @endphp
                                <h3>{{ $data['QtyDRY'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kapasitas (%)</h6>
                                @php
                                    $kapasitasDRY = $data['PL']->where('nama_pl', '=', 'DRY')->first();
                                    $loadkapasitasDRY = ($QtyDRY / $kapasitasDRY->kapasitas_pl) * 100;
                                @endphp
                                <h3>{{ number_format($loadkapasitasDRY) }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kebutuhan MP</h6>
                                <h3>{{ number_format($data['kebutuhanMPDRY']) }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Selisih MP</h6>
                                @php
                                    $selisihMPDRY = $data['ketersediaanMPDRY'] - number_format($data['kebutuhanMPDRY']);
                                @endphp
                                <h3>{{ $selisihMPDRY }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Overtime</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"><b>100%</b></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"><b>25%</b></div>
                </div>

                <div class="mt-2" style=" vertical-align: middle;">
                    <span class="badge badge-warning mr-1" style="height: 15px"> </span> Over Capacity
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="header-title">
                    <h4 class="card-title mt-2 mb-5"><b>REPAIR</b></h4>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Quantity</h6>
                                @php
                                    $QtyREPAIR = $data['mps']
                                        ->where('production_line', '=', 'REPAIR')
                                        ->where('deadline', '>=', $data['deadlineDate'])
                                        ->sum('qty_trafo');
                                    $data['QtyREPAIR'] = $QtyREPAIR;
                                @endphp
                                <h3>{{ $data['QtyREPAIR'] }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kapasitas (%)</h6>
                                @php
                                    $kapasitasREPAIR = $data['PL']->where('nama_pl', '=', 'REPAIR')->first();
                                    // $loadkapasitasREPAIR = ($QtyREPAIR / $kapasitasREPAIR->kapasitas_pl) * 100; // ini kalo semisal nya hasil pembagian 0, maka tak mau tampil
                                @endphp
                                {{-- <h3>{{  $loadkapasitasREPAIR   }}</h3> --}}
                                <h3>12</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Kebutuhan MP</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Selisih MP</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card card-widget task-card">
                            <div class="card-body text-center">
                                <h6>Overtime</h6>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"><b>100%</b></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"><b>25%</b></div>
                </div>

                <div class="mt-2" style=" vertical-align: middle;">
                    <span class="badge badge-warning mr-1" style="height: 15px"> </span> Over Capacity
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Mendeteksi perubahan pada dropdown
            $('#periodeSelect').change(function() {
                // Mengambil nilai yang dipilih
                var selectedValue = $(this).val();

                // Menyimpan nilai yang dipilih dalam localStorage
                localStorage.setItem('selectedPeriode', selectedValue);

                // Mengirimkan formulir secara otomatis
                $('#periodeForm').submit();
            });

            // Memeriksa apakah ada nilai yang disimpan dalam localStorage
            var storedValue = localStorage.getItem('selectedPeriode');
            if (storedValue) {
                // Menetapkan nilai yang disimpan sebagai nilai awal dropdown
                $('#periodeSelect').val(storedValue);
            }
        });
    </script>
@endsection

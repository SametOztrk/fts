@extends('layouts.app')

@section('content')

<div class="mt-3"></div>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <table id="datatable__id" class="display">
                    <thead>
                        <tr>
                            <th>Ucus ID</th>
                            <th>Rota ID</th>
                            <th>Nereden</th>
                            <th>Nereye</th>
                            <th>Baslangıc Tarihi</th>               
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>          
</div>

@endsection

@section('javascripts')
    <script>
        $(document).ready( function() {

            $('#datatable__id').DataTable({

                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('api.customers.index')}}",
                "columns": [

                    {"data": "ucus_id"},
                    {"data": "rota_id"},
                    {"data": "liman_adi"},
                    {"data": "hedef_liman_adi"},    
                    {"data": "baslangıc_tarihi"},                    
                ] 
            });
        });
    </script>

    
@endsection
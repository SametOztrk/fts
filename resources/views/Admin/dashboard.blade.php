@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hoşgeldin {{Auth::user()->name}}

                </div>
            </div>
        </div>
    </div>

<div class="mt-3"></div>


<div class="row justify-content-center">
    <div class="col-md-8"> 
        <div class="card">
        <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
          <li class="nav-item ml-3">
            <a class="nav-link active" id="sehir-tab" data-toggle="tab" href="#sehir" role="tab" aria-controls="sehir" aria-selected="true">Sehir Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="havalimanı-tab" data-toggle="tab" href="#havalimanı" role="tab" aria-controls="havalimanı" aria-selected="false">Havalimanı Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="rota-tab" data-toggle="tab" href="#rota" role="tab" aria-controls="rota" aria-selected="false">Rota Ekle</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" id="ucak-tab" data-toggle="tab" href="#ucak" role="tab" aria-controls="ucak" aria-selected="false">Ucak Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="plan-tab" data-toggle="tab" href="#plan" role="tab" aria-controls="plan" aria-selected="false">Plan Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="ucus-tab" data-toggle="tab" href="#ucus" role="tab" aria-controls="ucus" aria-selected="false">Ucus Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sefer-tab" data-toggle="tab" href="#sefer" role="tab" aria-controls="sefer" aria-selected="false">Sefer Ekle</a>
          </li>
        </ul>
    </div>
</div>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="sehir" role="tabpanel" aria-labelledby="sehir-tab">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/admin/sehirKaydet" autocomplete="off">
                        @csrf
                            <div class="form-group row mr-5">
                            <label for="sehir" class="col-md-4 col-form-label text-md-right">{{ __('Sehir') }}</label>
                                <div class="col-md-6">
                                    <input id="sehir_adı" type="text" class="form-control @error('sehir_adı') is-invalid @enderror" name="sehir_adı" value="{{ old('sehir_adı') }}" required autocomplete="sname" autofocus>
                                        @error('sname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                                <div class="row justify-content-center ml-auto">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ekle') }}
                                    </button>       
                                </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="havalimanı" role="tabpanel" aria-labelledby="havalimanı-tab">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/admin/limanKaydet" autocomplete="off">
                        @csrf
                            <div class="form-group row mr-5">
                                <label for="havalimanı" class="col-md-4 col-form-label text-md-right">{{ __('Havalimanı Adı') }}</label>
                                    <div class="col-md-6">
                                        <input id="limanı_adı" type="text" class="form-control @error('liman_adı') is-invalid @enderror" name="liman_adı" value="{{ old('liman_adı') }}" required autocomplete="sname" autofocus>
                                            @error('sname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                            </div> 
                            <div class="form-group row mr-5">      
                                <div class="mt-3"></div>
                                    <label for="sehir" class="col-md-4 col-form-label text-md-right">{{ __('Sehir') }}</label>
                                         <div class="col-md-6">
                                            <select name="sehir" id="sehir" class="form-control">
                                                <option>Bir Sehir seçiniz</option>
                                                    @foreach($sehirler as $sehir)
                                                        <option value="{{ $sehir->sehir_id }}">{{ $sehir->sehir_adı }}</option>
                                                    @endforeach
                                            </select>
                                        </div>                
                            </div>                            
                                <div class="row justify-content-center ml-auto">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ekle') }}
                                    </button>       
                                </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="rota" role="tabpanel" aria-labelledby="rota-tab">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/admin/rotaKaydet" autocomplete="off">
                        @csrf
                        <div class="form-group row mr-5">      
                            <div class="mt-3"></div>
                                <label for="liman" class="col-md-4 col-form-label text-md-right">{{ __('Liman') }}</label>
                                    <div class="col-md-6">
                                        <select name="liman" id="liman" class="form-control">
                                            <option>Bir liman seçiniz</option>
                                                @foreach($havalimanları as $havalimanı)
                                                    <option value="{{ $havalimanı->liman_id }}">{{ $havalimanı->liman_adı }}</option>
                                                @endforeach
                                        </select>
                                    </div>                
                        </div>
                        <div class="form-group row mr-5">      
                            <div class="mt-3"></div>
                                <label for="hedefliman" class="col-md-4 col-form-label text-md-right">{{ __('Hedef Liman') }}</label>
                                    <div class="col-md-6">
                                        <select name="hedef_liman" id="liman2" class="form-control">
                                            <option>Bir liman seçiniz</option>
                                                @foreach($havalimanları as $havalimanı)
                                                    <option value="{{ $havalimanı->liman_id }}">{{ $havalimanı->liman_adı }}</option>
                                                @endforeach
                                        </select>
                                    </div>                
                        </div>                            
                                    <div class="row justify-content-center ml-auto">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ekle') }}
                                        </button>       
                                    </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="ucak" role="tabpanel" aria-labelledby="ucak-tab">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/admin/ucakKaydet" autocomplete="off">
                        @csrf
                        <div class="form-group row mr-5">
                            <label for="seri_no" class="col-md-4 col-form-label text-md-right">{{ __('Seri no') }}</label>
                                <div class="col-md-6">
                                    <input id="seri_no" type="text" class="form-control @error('seri_no') is-invalid @enderror" name="seri_no" value="{{ old('sehir_adı') }}" required autocomplete="seri_no" autofocus>
                                        @error('seri_no')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                        </div>
                        <div class="form-group row mr-5">
                            <label for="koltuk_sayısı" class="col-md-4 col-form-label text-md-right">{{ __('Koltuk Sayısı') }}</label>
                                <div class="col-md-6">
                                    <input id="koltuk_sayısı" type="text" class="form-control @error('seri_no') is-invalid @enderror" name="koltuk_sayısı" value="{{ old('sehir_adı') }}" required autocomplete="koltuk_sayısı" autofocus>
                                        @error('koltuk_sayısı')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                        </div>
                        <div class="form-group row mr-5">
                            <label for="ucak_adı" class="col-md-4 col-form-label text-md-right">{{ __('Ucak Adı') }}</label>
                                <div class="col-md-6">
                                    <input id="ucak_adı" type="text" class="form-control @error('seri_no') is-invalid @enderror" name="ucak_adı" value="{{ old('sehir_adı') }}" required autocomplete="ucak_adı" autofocus>
                                        @error('ucak_adı')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                        </div>         
                                    
                                <div class="row justify-content-center ml-auto">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ekle') }}
                                    </button>       
                                </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="tab-pane fade" id="sefer" role="tabpanel" aria-labelledby="sefer-tab">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/admin/seferKaydet" autocomplete="off">
                        @csrf
                        <div class="form-group row mr-5">      
                            <div class="mt-3"></div>
                                <label for="ucaklar" class="col-md-4 col-form-label text-md-right">{{ __('Mevcut Ucaklar') }}</label>
                                    <div class="col-md-6">
                                        <select name="ucak_id" id="ucaklar" class="form-control">
                                            <option>Bir ucaklar seçiniz</option>
                                                @foreach($ucaklar as $ucaklar)
                                                    <option value="{{ $ucaklar->ucak_id }}">{{ $ucaklar->ucak_adı }}</option>
                                                @endforeach
                                        </select>
                                    </div>                
                        </div>
                        <div class="form-group row mr-5">      
                            <div class="mt-3"></div>
                                <label for="rotaSefer" class="col-md-4 col-form-label text-md-right">{{ __('Mevcut Uçuşlar') }}</label>
                                    <div class="col-md-6">
                                        <select name="ucus_id" id="ucus_id" class="form-control">
                                            <option>Bir uçuş seçiniz</option>
                                                @foreach($ucus as $u)
                                                    <option value="{{$u->ucus_id}}">{{$u->ucus_id}}</option>    
                                                @endforeach  
                                        </select>
                                    </div>                
                        </div>
                        <div class="form-group row mr-5">      
                            <div class="mt-3"></div>
                                <label for="saat" class="col-md-4 col-form-label text-md-right">{{ __('Ücret') }}</label>
                                    <div class="col-md-6">
                                        <input id="ücret" type="text" class="form-control @error('ücret') is-invalid @enderror" name="ücret" value="{{ old('ücret') }}" required autocomplete="ücret" autofocus>
                                        @error('ücret')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>                
                        </div>                                  
                                    <div class="row justify-content-center ml-auto">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ekle') }}
                                        </button>       
                                    </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
     <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/admin/planKaydet" autocomplete="off">
                        @csrf
                        <div class="form-group row mr-5">      
                            <div class="mt-3"></div>
                                <label for="baslangıc_tarihi" class="col-md-4 col-form-label text-md-right">{{ __('Baslangıc Tarihi') }}</label>
                                    <div class="col-md-6">
                                        <input id="baslangıc_tarihi" type="text" class="form-control @error('baslangıc_tarihi') is-invalid @enderror" name="baslangıc_tarihi" value="{{ old('baslangıc_tarihi') }}" required autocomplete="baslangıc_tarihi" autofocus>
                                        @error('baslangıc_tarihi')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>                
                        </div>
                            
                           <div class="form-group row mr-5">      
                            <div class="mt-3"></div>
                                <label for="gün_sayısı" class="col-md-4 col-form-label text-md-right">{{ __('Gün aralagı') }}</label>
                                    <div class="col-md-6">
                                        <input id="gün_sayısı" type="text" class="form-control @error('gün_sayısı') is-invalid @enderror" name="gün_sayısı" value="{{ old('gün_sayısı') }}" required autocomplete="gün_sayısı" autofocus>
                                        @error('gün_sayısı')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>                
                        </div>
                                                 
                                    <div class="row justify-content-center ml-auto">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ekle') }}
                                        </button>       
                                    </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="tab-pane fade" id="ucus" role="tabpanel" aria-labelledby="ucus-tab">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/admin/ucusKaydet" autocomplete="off">
                            @csrf
                            <div class="form-group row mr-5">      
                                <div class="mt-3"></div>
                                    <label for="ucusSefer" class="col-md-4 col-form-label text-md-right">{{ __('Mevcut Rotalar') }}</label>
                                        <div class="col-md-6">
                                            <select name="rota_id" id="rotaUcus" class="form-control">
                                                <option>Bir rota seçiniz</option>
                                                    @foreach($rotas as $r)
                                                        <option value="{{$r->rota_id}}">{{$r->rota_id}}</option>    
                                                    @endforeach  
                                                     
                                            </select>
                                        </div>                
                            </div>
                            <div class="form-group row mr-5">      
                                <div class="mt-3"></div>
                                    <label for="ucusPlan" class="col-md-4 col-form-label text-md-right">{{ __('Mevcut Tarihler') }}</label>
                                        <div class="col-md-6">
                                            <select name="plan_id" id="plan_id" class="form-control">
                                                <option>Bir tarih seçiniz</option>
                                                    @foreach($yıllık as $yıllık)
                                                        <option value="{{$yıllık->yıllık_plan_id}}">{{$yıllık->baslangıc_tarihi}}</option>  
                                                    @endforeach  
                                            </select>
                                        </div>                
                            </div>

                            <div class="row justify-content-center ml-auto">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Ekle') }}
                                            </button>       
                                        </div>
                         </form>                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


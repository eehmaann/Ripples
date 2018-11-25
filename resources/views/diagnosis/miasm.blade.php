@extends('layouts.diagnosis')
@section('pagejs')
<script src="/js/miasm.js"></script>
 <script src="/js/geneology.js"></script>
@endsection

@section('diagnosis')
  <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                   @include('layouts.geneology')
                </div>
            </div>
        </div>
    </div>
@endsection
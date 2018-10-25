@extends('layouts.diagnosis')

@section('destination')'problemsb'
@endsection
@section('diagnosis')
<table>
    <tr>
        <td> </td>
        <td>Column A</td>
        <td>Column B</td>
    </tr>
    <tr>
        <td>Row {{diagnosis->trapped_emotions}}</td>

        @for($column = 1; $column<=2; $column++ )
            <td>                    
                 @foreach($emotions as $emotion)
                    @if($emotion->col_name==$column && $emotion->row_name=={{diagnosis->trapped_emotions}})
                        <span class="emotion"> {{ $emotion->name}} </span> <br>
                    @endif
                 @endforeach
            </td>
        @endfor
    </tr>
 </table>
@endsection
                
@extends('email._layouts.base')

@section('content')

<tr>
    <td valign="middle" class="astute astute-2 bg_white">
        <table>
            <tbody>
                <tr>
                    @php
                    $data = $data->toArray();

                    $replace_keys = ['d_o_b'=>'date of birth'];
                    $remove_keys = ['id','created_at','updated_at','deleted_at'];
                    foreach($remove_keys as $remove_k)
                    unset($data[$remove_k]);
                    @endphp
                    <td>
                        <div class="thank-msg">
                            <h1>DDHA Form Submitted</h1>
                        </div>

                        <p>You have received a submission.</p>
                        <table class="email-table">
                            <tbody>
                                @foreach($data as $key=>$value)
                                @if (!empty($value))
                                @php
                                $key = isset($replace_keys[$key])?$replace_keys[$key]:$key;
                                @endphp
                                <tr>
                                    <td>{!! str_replace('_', ' ', $key) !!}: </td>
                                    <td> {{$value}}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <br>

                        <button class="email-btn"><a href="{{url('sw-admin/study-abroads')}}">View Details</a></button>


                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>

@endsection
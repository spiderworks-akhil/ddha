@extends('email._layouts.base')

@section('content')

<tr>
    <td valign="middle" class="astute astute-2 bg_white">
        <table>
            <tbody>
                <tr>
                    @php
                    $extra_data = json_decode($data->extra_data);

                    $replace_keys = ['d_o_b'=>'date of birth'];
                    $remove_keys = ['id','created_at','updated_at','deleted_at'];
                    foreach($remove_keys as $remove_k)
                    unset($extra_data[$remove_k]);
                    @endphp
                    <td>
                        <div class="thank-msg">
                            <h1>DDHA Form Submitted</h1>
                        </div>

                        <p>You have received a submission.</p>
                        <table class="email-table">
                            <tbody>
                                <tr>
                                    <td>Name: </td>
                                    <td> {{$data->name}}</td>
                                </tr>

                                @if($data->email)
                                <tr>
                                    <td>Email: </td>
                                    <td> {{$data->email}}</td>
                                </tr>
                                @endif
                                @if($data->phone_number )
                                <tr>
                                    <td>Phone: </td>
                                    <td> {{$data->phone_number }}</td>
                                </tr>
                                @endif


                                @foreach($extra_data as $key=>$value)
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

                                @if($data->message)
                                <tr>
                                    <td>Message: </td>
                                    <td> {{$data->message}}</td>
                                </tr>
                                @endif
                                @if($data->lead_type)
                                <tr>
                                    <td>lead_type: </td>
                                    <td> {{$data->lead_type}}</td>
                                </tr>
                                @endif
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
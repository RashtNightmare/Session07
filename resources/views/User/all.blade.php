@extends("index")


@section("css")

 table tr td{
    border : #6b7288 dashed 1px;
    padding:20%
    min-width: fit-content
}

@endsection

@section("content")


    {{$users}}
<div class="p-2">
    <table bordered >
       <tr style="background-color: #aacc09">
        <td>id</td>
           <td>name</td>
           <td>mobile</td>
           <td>role</td>
           <td>password</td>
           <td>email</td>
       </tr>

       @for($i=0;$i < count($users);$i++)
       <tr bordered>
           <td>{{$users[$i]['id']}}</td>
           <td>
           <a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['name']}}</a></td>
           <td>{{$users[$i]['mobile']}}</td>
           <td>{{$users[$i]['role']['name']}}</td>
           <td>{{$users[$i]['password']}}</td>
           <td>{{$users[$i]['email']}}</td>
       </tr>
       @endfor
   </table>
   </div>
@endsection

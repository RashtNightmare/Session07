@extends("index")


@section("css")

 table tr td{
    border : #6b7288 dashed 1px;
    padding:20%
    min-width: fit-content
}

@endsection

@section("content")

<div class="p-7">
{{$role}}
<table bordered>
<tr class="bg-blue-200">
  <th>id</td>
  <th>name</td>
</tr>
<tbody>
@for($i=0;$i < count($role);$i ++)
  <tr style="background-color: blue;color:aliceblue;">
   <td><a href="\role\{{$role[$i]['id']}}\edit" _blank>{{$role[$i]['id']}}</a></td>
   <td><a href="\role\{{$role[$i]['id']}}\edit" _blank>{{$role[$i]['name']}}</a></td>
 </tr>
@endfor
</table>

</div>

@endsection
@extends('layouts.default')

@section('content')

<div class="flex-item">
    <table>
        <thead>
            <th>Nom</th>
            <th>Prix</th>
            <th>Description</th>
        </thead>
        <tbody>
            @foreach((array)$data as $computer)
                <tr>
                    <td>{{ $computer->sku }}</td>
                    <td>{{ $computer->brand }}</td>
                    <td>{{ $computer->model }}</td>
                    <td><button id="{{ $computer->id }}">Afficher</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="flex-item" id="selected">

</div>
@endsection
@section('script')
<script>
$(document).ready(function(){
    $("button").click(function(){
        var id = ($(this).attr('id'));
        $.ajax({
          type:'GET',
          url:'computer/'+id,
          dataType: "json",
          success:function(response) {
            if(response) {    
                var obj = jQuery.parseJSON(response);    
                $("#selected").html("<p>"+obj.brand+"</p>");
                console.log(obj);
            } else { 
                alert('nope'); 
            }
          }
        });
    });
});
</script>
@endsection

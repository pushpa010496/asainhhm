<!DOCTYPE html>

<html>

<head>

	<title>Ebook</title>


</head>



<body>
<table align="center" width="100%">
    <tr>
        <td width="250">
            
        </td>
        <td>
@if(!empty($ebook))

        @if($ebook->script_type == 0)

        <div data-configid="2216358/{{$ebook->ebook_script}}" style="width:1006px; height:826px;" class="issuuembed"></div><script type="text/javascript" src="https://e.issuu.com/embed.js" async="true"></script>

        @else

        {!!$ebook->ebook_script!!}

        @endif

        @endif
        </td>
    </tr>
</table>

</body>

</html>

     




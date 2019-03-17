<!doctype>
<html>
    <head>
        <meta charset="utf-8">
        <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" >-->
        <link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.css')}}">
        <style>
            #seat-plean{
                width:50%;
                display: flex;
                flex-wrap: wrap;
                overflow: hidden;
                margin-right: 20px;
                margin-left: -20px;
                box-sizing: border-box;
            }
            #seat-plean #record{
                width: 320px;
                height:240px;
            }
            #seat-plean-in {
                width: 50%;
                display: inline-block;
                margin-top: 59px ; 
                /*            overflow: hidden;*/
            }
            #seat-plean-in #record{
                width: 300px;
                height:240px;
            }
            /*        #seat-plean #school-info {
                        
                        height: 50px;
                        overflow: hidden;
                    }*/
            /*        #seat-plean-in #school-info {
                        height: 50px;
                        overflow: hidden;
                    }*/
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 " style="">
                    @php $count=0; @endphp
                    @foreach($students as $student)
                    @php if($count%2==0){  @endphp

                    @php  echo '<div class="clearfix " id="seat-plean"  style="">'; }else{ @endphp

                        @php echo '<div class="clearfix" id="seat-plean-in"  style="">'; }@endphp
                            <table id="record" cellspacing="7" cellpadding="0"   align="center">
                                <tr>
                                    <td colspan="3" class="text-center mb-3"><img src="{{asset('public/images/settings/'.$setting->logo)}}" alt="hello" width="50" height="50"> </td>
                                </tr>
   <!--                             <tr>
                                    <td colspan="3" class=""><p style="font-size:10px;">{{$setting->name}}</p></td>
   
                                </tr>
                                <tr>
                                    <td colspan="3" class=""><p style="font-size:10px;">{{$setting->address}}</p></td>
                                </tr>-->
                                <tr>
                                    <td width="110" style="border-style: none;">Student Roll</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">{{$student->roll}}</td>
                                </tr>
                                <tr >
                                    <td width="110" style="border-style: none;">Student Name</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">{{ $student->name }}</td>
                                </tr>
                                <tr >
                                    <td width="110" style="border-style: none;">Class Name</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">{{ $student->classNameEnglish }}</td>
                                </tr>
                                <tr >
                                    <td width="110" style="border-style: none;">Section</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">{{ $student->section }}</td>
                                </tr>
                                <tr >
                                    <td width="110" style="border-style: none;">Student Group</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">{{ $student->student_group }}</td>
                                </tr> 
                            </table>
                        </div>
                        @php $count++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>   
    </body>
</html>
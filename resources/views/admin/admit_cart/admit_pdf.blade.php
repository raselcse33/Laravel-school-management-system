<!DOCTYPE html>
<html>
    <head>
       
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.css')}}">
        <style>
           .table-custom  td{
                border:1px solid #000000;
                margin: 0px;
                padding: 0px;
            }
           .table-custom  th{
                border:1px solid #000000;
                 margin: 0px;
                padding: 0px;
            }
        </style>
    </head>
    <body>
        @foreach($students as $student)
        <div style="border: #000 solid 1px; width: 100%; margin-bottom: 10px; height: 455px;">
            <table width=100% style="text-align:center;">
                <tr><td style="background: #000;"><h2 align="center" style="padding: 0px; margin: 0px; color: #fff; font-size: 18px;">{{$settings->name}}</h2></td></tr>
                <tr><td><h3  style="padding: 0px; margin: 0px; font-size: 14px; ">{!!$settings->address!!} </h3></td></tr>
                <tr><td>&nbsp;</td></tr>
            </table>
            <table width=100%>
                <tr>
                    <td width="50%">
                        <table width="35%" class="table table-bordered table-custom"  style=" text-align: center;"  height="100" align="left" >
                            <tr style="border: #000 solid 1px;">
                                <th style=" " width="52">Room No</th>
                                <th style="" width="52">Bench No</th> 
                                <th style=" " width="52">Seat No</th>
                            </tr>
                            <tr style="">
                                <td style=" ">&nbsp;</td>
                                <td style=" ">&nbsp;</td> 
                                <td style=" ">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                    <td width="34%" align="center">
                        <img src="{{ asset('public/images/settings/'.$settings->logo) }}" width="100" height="100"  > 
                        <h3><u>Admit Card</u><h3>
                    </td>
                    <td width="31%"   align="left">
                        <img src="{{ asset('public/images/students/'.$student_image->image) }}" style="margin-left:10px;" width="120" height="100"  >   
                    </td>
                </tr>
            </table>
            <table width=100%>
                <tr>
                    <td>
                        <table class="">
                            <tr>
                                <td width="110">Name</td>
                                <td width="10">:</td>
                                <td width="110">{{$student->name}}</td>
                            </tr>
                            <tr>
                                   <td width="10">:</td>
                                <td width="110">{{$student->student_id}}</td>
                            </tr>
                            <tr>
                                <td width="110">Group</td>
                                <td width="10">:</td>
                                <td width="110">{{$student->student_group}}</td>
                            </tr>
                            <tr>
                                <td width="110">Section</td>
                                <td width="10">:</td>
                                <td width="110">{{$student->classNameEnglish}}-{{$student->section}}</td>
                            </tr>
                            <tr>
                                <td width="110">Roll</td>
                                <td width="10">:</td>
                                <td width="110">{{$student->roll}}</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table class="">

                            <tr>
                                <td width="110">Registration No.</td>
                                <td width="10">:</td>
                                <td width="110">N/A</td>
                            </tr>
                            <tr>
                                <td width="110">Year/Session</td>
                                <td width="10">:</td>
                                <td width="110"></td>
                            </tr>
                            <tr>
                                <td width="110">Exam Name</td>
                                <td width="10">:</td>
                                <td width="110">{{ $examName }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="100%">
                <tr>
                    <td width="100%">
                        <table  width="100%">
                            <tr>
                                <td style="font-size:7px" width="50%">Powered by Momtaj Trading Pvt. Ltd</td>
                                <td width="25%" align="right" style="text-align: center;">  

                                    <hr width="100" style="padding: 0; margin: 3px 0 3px 0;">
                                    <p style="padding: 0; margin: 3px 0 0px 0;">Class Teacher</p>
                                </td>
                                <td width="23%" align="right" style="text-align: center;margin-left: 2%;">

                                    <hr width="100" style="padding: 0; margin: 0 0 3px 0;">
                                    <p style="padding: 0; margin: 3px 0 0px 0;">Head Teacher</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        @endforeach
   </body>
</html>
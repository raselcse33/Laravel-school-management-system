<!doctype>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.css')}}">
        <style>
            #result-marks th{
                margin: 5px !important;
                padding: 0px !important;
            }
            #result-marks td{
                margin: 5px !important;
                padding: 0px !important;
            }
            table tr td table tr {
                margin: 0px;
                padding: 0px;
            }
            table tr td table th {
                margin: 0px;
                padding: 0px;
            }
            table tbody tr td table tbody tr {
                margin: 0px;
                padding: 0px;
            }
            #result-footer tr th{
                padding:1px !important;
            }
            #result-footer tr td{
                padding:1px !important;
            }
          #subject-other tr th{
                padding-top:1px !important;
                padding-bottom:1px !important;
            }
          /*  #subject-other tr td{
                padding-top:3px !important;
                padding-bottom:3px !important;
            }
         */
        </style>
    </head>
    <body>
        <div style=" width: 100%; margin: auto; font-size: 10px;  margin-bottom: 10px; box-sizing: border-box">
            <table width="100%" style=" margin: auto; margin-top: 0px;"height="100">
                <tr>
                    <td>
                        <table style="text-align:center; margin-top: -60px;" width="100%">
                            <tr>
                                <td><span style="margin: 0px; padding: 0;"><img src="{{asset('public/images/settings/'.$setting->logo)}}" alt="Logo"style="margin-right: 22px;"  width="100" height="80"></span></td>
                            </tr>
                        </table>
                    </td>

                    <td>
                        <table  style="text-align:center; margin-top: -100px;" width="100%">
                            <tr >
                                <td ><h1 style="margin: 0px; padding: 0; font-size: 16px;" >{{$setting->name}}</h1></td>
                            </tr>
                            <tr ><td ><p style="margin: 0px; padding: 0;font-size: 14px;" >{{$setting->address}}</p></td></tr>
                            <tr ><td ><p style="margin: 0px; padding: 0;font-size: 14px;" >Academic Transcript</p></td></tr>
                        </table>
                    </td>
                    <td>
                        <table width="100%"  style=" margin: auto; margin-top: -60px;">
                            <tr>
                                <td width="30%" heigt="50%">
                                    <table class="table table-bordered" style="text-align:center;margin:auto;margin-top: 35px; font-size: 12px;" width="30%">
                                        <tr style="margin:0px;padding: 0px;">
                                            <th style="margin:0px;padding: 0px;">Range</th>
                                            <th style="margin:0px;padding: 0px;">Grade</th>
                                            <th style="margin:0px;padding: 0px;">GPA</th>
                                        </tr>
                                        <tbody>
                                            <tr style="margin:0px;padding: 0px;">
                                                <td style="margin:0px;padding: 0px;">80-100</td>
                                                <td style="margin:0px;padding: 0px;">A+</td>
                                                <td style="margin:0px;padding: 0px;">5.00</td>
                                            </tr>
                                            <tr style="margin:0px;padding: 0px;">
                                                <td style="margin:0px;padding: 0px;">70-79</td>
                                                <td style="margin:0px;padding: 0px;">A</td>
                                                <td style="margin:0px;padding: 0px;">4.5</td>
                                            </tr>
                                            <tr style="margin:0px;padding: 0px;">
                                                <td style="margin:0px;padding: 0px;">60-69</td>
                                                <td style="margin:0px;padding: 0px;">A-</td>
                                                <td style="margin:0px;padding: 0px;">3.5</td>
                                            </tr>
                                            <tr style="margin:0px;padding: 0px;">
                                                <td style="margin:0px;padding: 0px;">50-59</td>
                                                <td style="margin:0px;padding: 0px;">B</td>
                                                <td style="margin:0px;padding: 0px;">3.0</td>
                                            </tr>
                                            <tr style="margin:0px;padding: 0px;">
                                                <td style="margin:0px;padding: 0px;">40-49</td>
                                                <td style="margin:0px;padding: 0px;">C</td>
                                                <td style="margin:0px;padding: 0px;">3.0</td>
                                            </tr>
                                            <tr style="margin:0px;padding: 0px;">
                                                <td style="margin:0px;padding: 0px;">33-39</td>
                                                <td style="margin:0px;padding: 0px;">D</td>
                                                <td style="margin:0px;padding: 0px;">1.0</td>
                                            </tr>
                                            <tr style="margin:0px;padding: 0px;">
                                                <td style="margin:0px;padding: 0px;">00-32</td>
                                                <td style="margin:0px;padding: 0px;">F</td>
                                                <td style="margin:0px;padding: 0px;">0.0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="500" style=" marign-bottom:2px;margin-top: -40px; ">
                <tr >
                    <td colspan="2"style="padding:2px !important; ">Progress Report Of:</td>
                </tr>
                <tr>
                    <td colspan="2" style="padding:2px !important;">
                        <p>
                            Roll No:0 &nbsp;&nbsp; Class:Six &nbsp;&nbsp;Shift:Day &nbsp;&nbsp;Section:A &nbsp;&nbsp; Student ID:201801&nbsp;&nbsp;
                            Exam Year:2018
                        </p>
                    </td>
                </tr>
            </table>
            <div class="row clearfix" width="90%" id="result-marks"  >
                <div class="col text-center mark-head">
                    <table class="table table-bordered " id="subject-other" style="box-sizing:border-box;">
                        <tr>
                            <th style="width:200px; padding-bottom: 0px !important;" >Subject</th>
                            <th style="width:100px; padding-bottom: 0px !important;">Full Marks</th>
                            <th>
                                Half Yearly Exam
                                <table class="borderless w-100 tnb">
                                    <tr>
                                        <th style="width: 40px; padding-bottom: 0px !important;">CR</th>
                                        <th style="width: 50px; padding-bottom: 0px !important;">MCQ</th>
                                        <th style="width: 40px; padding-bottom: 0px !important;">PR</th>
                                        <th style="width: 40px; padding-bottom: 0px !important;">80%</th>
                                        <th style="width: 40px; padding-bottom: 0px !important;">CA</th>
                                        <th style="width: 40px;">Total</th>
                                        <th style="width: 40px;">LG</th>
                                        <th style="width: 40px;">GPA</th>
                                    </tr>
                                </table>
                            </th>
                            <th>
                                Annual Exam
                                <table class="borderless w-100 tnb">
                                    <tr>
                                        <th style="width: 40px;">CR</th>
                                        <th style="width: 50px;">MCQ</th>
                                        <th style="width: 40px;">PR</th>
                                        <th style="width: 40px;">80%</th>
                                        <th style="width: 40px;">CA</th>
                                        <th style="width: 40px;">Total</th>
                                        <th style="width: 40px;">LG</th>
                                        <th style="width: 40px;">GPA</th>
                                    </tr>
                                </table>
                            </th>
                        </tr>
                        <tr>
                            <td>Bangla 1st</td> 
                            <td> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td>Bangla 2nd</td> 
                            <td> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td>English 1st</td> 
                            <td> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td>English 2nd</td> 
                            <td> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td>Mathematics</td> 
                            <td> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td>Bangladesh and Global Studies</td> 
                            <td> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td>General Science</td> 
                            <td> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td>Religion</td> 
                            <td> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td>ICT</td> 
                            <td> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>


                        <tr>
                            <td colspan="2">Obtained Marks & GPA</td> 
                            <td >

                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>    
                    <h4>Continuous Assessment</h4>
 <!--                        <tr>
                             <td colspan="3"><b>Obtained Marks & GPA</b></td>
                             <td colspan="3"></td>
                             
                         </tr>
                         <tr style="border: none;">
                             <td colspan="3" ><h4>Continuous Assessment</h4></td>
                         </tr>-->
                    <table class="table table-bordered " id='subject-other' style="box-sizing:border-box;">
                        <tr>
                            <td style="width:200px;">Agriculture Studies</td> 
                            <td style="width:100px;"> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:200px;">Physical Education</td> 
                            <td style="width:100px;"> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:200px;">Work and life Oriented Education</td> 
                            <td style="width:100px;"> 100</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td style="width:200px;">Arts and Craft</td> 
                            <td style="width:100px;"> 100</td>
                            <td>
                                <table class=" borderless w-100  ">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
                                    <tr>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 50px;">50</th>
                                        <th style="width: 40px;">30</th>
                                        <th style="width: 40px;">80</th>
                                        <th style="width: 40px;">20</th>
                                        <th style="width: 40px;">100</th>
                                        <th style="width: 40px;">A+</th>
                                        <th style="width: 40px;">5.00</th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-bordered  " id="result-footer" style="width:80% !important; text-align: center; margin:auto" >
                        <tr>
                            <th>Exam Type</th>
                            <th>Schooling Day</th>
                            <th>Presence</th>
                            <th>Absence</th>
                            <th>Total</th>
                            <th>LG</th>
                            <th>GPA</th>
                            <th>Merit Position</th>
                        </tr>
                        <tr>
                            <td> Half Yearly</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>

                        </tr>
                        <tr>
                            <td> Annual</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>

                        </tr>
                        <tr>
                            <td>Final Result</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>
                            <td> Full Marks</td>

                        </tr>
                    </table>

                </div>
            </div>

            <table width="100%" style="margin: auto; margin-top: 40px;;font-size: 12px; ">
                <tr>
                    <td width="25%">
                        <table width="100%"  style="text-align: center; " > 
                            <tr>
                                <td><hr></td>
                                <td style="">Class Teacher's Comments</td>
                            </tr>
                        </table>
                    </td>
                    <td width="25%">
                        <table width="100%"  style="text-align: center; "> 
                            <tr>

                                <td style="">Guardian's  Signature</td>
                            </tr>
                        </table> 
                    </td>
                    <td width="25%">
                        <table width="100%" style="text-align: center;"> 
                            <tr>

                                <td style="">Class Teacher's Signature</td>
                            </tr>
                        </table>
                    </td>
                    <td width="25%">
                        <table width="100%" style="text-align: center;"> 
                            <tr>

                                <td style="">Headmaster's Signature</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        <div>
    </body>
</html>
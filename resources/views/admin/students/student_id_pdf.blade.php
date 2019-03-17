<!doctype>
<html>
    <head>
        <meta charset="utf-8">
        <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" >-->
        <link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.css')}}">
        <style>
            #id-card{
                width:50%;
                display: flex;
                flex-wrap: wrap;
                overflow: hidden;
                margin-right: 20px;
                margin-left: -20px;
                box-sizing: border-box;
            }
            #id-card #record{
                width: 320px;
                height:240px;
            }
            #id-card-front {
                width: 50%;
                display: inline-block;
                margin-top: 59px ; 
                /*            overflow: hidden;*/
            }
            #id-card-front #record{
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
                   
                    <div class="clearfix " id="id-card"  style="">
                      <div class="clearfix" id="id-card-front"  style="">
                            <table id="record" cellspacing="7" cellpadding="0"   align="center">
                                <tr>
                                    <td width="110" style="border-style: none;">Student Name</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">Ariful Islam</td>
                                </tr>
                                <tr >
                                    <td width="110" style="border-style: none;">Student Roll</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">01</td>
                                </tr>
                                <tr >
                                    <td width="110" style="border-style: none;">Class Name</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">Six</td>
                                </tr>
                                <tr >
                                    <td width="110" style="border-style: none;">Section</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">A</td>
                                </tr>
                                <tr >
                                    <td width="110" style="border-style: none;">Student Group</td>
                                    <td width="10" style="border-style: none;">:</td>
                                    <td width="110" style="border-style: none;">Common</td>
                                </tr> 
                            </table>
                        </div>
                    </div>
                </div>
            </div>   
    </body>
</html>
@extends('TAP::template')
@section('content')
    <div class="main-content">
        <div class="main-content-inner">

           
            <div style="position: relative;">
                <img src="http://127.0.0.1:8000/images/bisc-logo.png" style="position: absolute; max-height: 100%; width: auto; margin-left: 50%; margin-top: 0%;transform: translate(-50%, 0%); z-index: -1; opacity: .1;" alt="">
                
<style type="text/css">
.checkbox{
    margin: 0px;
}    
.checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}
.focus {
 background-color: #ff00ff;
 color: #fff;
 cursor: pointer;
 font-weight: bold;
}
.pageNumber {
 padding: 2px;
}
.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    color: green;
    /*border-radius: .25em;*/
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}

.radio .cr {
    border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.radio .cr .cr-icon {
    margin-left: 0.04em;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    /*transition: all .3s ease-in;*/
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
    opacity: .5;
}
</style>

    <div class="container-fluid" ng-controller="ResultController">
                <h1>Finance report</h1>
        <form method="POST" action="#" accept-charset="UTF-8"><input name="_token" type="hidden" value="KTQmIv6yN0pN7p3l3cYGTlsf0vnEpAPenrDSvvCW">
        <div class="row">


        <div class="col-md-1">
                    <div class="form-group">
                       
                      <input class="input" id="date" required name="date" type="hidden"  placeholder="From Date">
                    </div>
                </div>
                 
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="today" class="control-label">FROM</label>
                      <input class="form-control" id="date" required name="date" type="date" value="" placeholder="From Date">
                    </div>
                </div>
            
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="today" class="control-label">TO</label>
                        <input class="form-control" id="date" required name="to" type="date" value=""placeholder=" To Date">
                    </div>
                </div>
            
                        
                            

                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">&nbsp;</label>
                        <input class="btn btn-primary form-control" id="search-btn" type="submit" value="Search">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label">&nbsp;</label>
                        <input class="btn btn-success form-control" id="print-btn" type="submit" value="Download Excel">
                    </div>
                </div>
            
        </div>               
        
        <div class="table-responsive">
            <div class="row">
                <div class="col-md-12">                    
                    <table class="table table-bordered table-hover" id="tbl_finance">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th> STUDENT ID </th>
                            <th> ACTUAL AMOUNT </th>
                            <th> PAID AMOUNT </th>
                            <th> TRXN ID </th>
                            <th>TRXN</th>
                            <th>DATE</th>
                            <th>REF ID</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                                                        
                                                            
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>        
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>                              
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                    <tr>
                                        <td>1</td>
                                        <td>student-666</td>
                                        <td>1000</td>
                                        <td>1000</td>
                                        <td>004488</td>
                                        <td>fhsfdffddgfdyfrtr</td>
                                        <td>14-6-1998</td>
                                        <td>448</td>
                                        
                                    </tr>          
                                                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
        
        </form>
            
    </div>


            </div>
        </div>
    </div><!-- /.main-content -->

  

<!-- basic scripts -->

<!-- page specific plugin scripts -->
<script>
$(document).ready( function () {
    $('#tbl_finance').DataTable();
} );
</script>

<style type="text/css">
    .select2-container
    {
        font-size: 13px !important;
    }
</style>
@endsection
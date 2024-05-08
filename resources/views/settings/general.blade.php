<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Profile</title>
</head>
@include('layouts.header')
@include('layouts.settingssidebar')
<script>
         var msg = '{{Session::get('success')}}';
        var exist = '{{Session::has('success')}}';
        if(exist){
        alert(msg);
        }
    </script>
<body>

<form action="{{route('general.post')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="wrapper">

  <div class="content-wrapper">
            <div class="container">
                <label class="mt-5 ">Profile Picture</label>
                <br>
                <br>
                <img src="{{asset('dist/img/avatar.png')}}" alt="" width="200" height="200">
                <br>
            
                <input type="file" name="images" class="form-control mt-4" >

               

                <div class="row my-4">
                    <div class="col">
                    <label> Send report schedule:</label>
                   <a class="btn btn-success" data-toggle="modal"  data-target="#schedule"> Create Schedule</a>
                    </div>
                </div>

                
                <div class="row my-4">
                   
                    <label> Customer TimeZone</label>
                    <select name="time" id="timezone-offset" class="col form-control">
                                <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                                <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                                <option value="-10:00">(GMT -10:00) Hawaii</option>
                                <option value="-09:50">(GMT -9:30) Taiohae</option>
                                <option value="-09:00">(GMT -9:00) Alaska</option>
                                <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                <option value="-04:50">(GMT -4:30) Caracas</option>
                                <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                <option value="-03:50">(GMT -3:30) Newfoundland</option>
                                <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                                <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                                <option value="+00:00" selected="selected">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                                <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                <option value="+03:50">(GMT +3:30) Tehran</option>
                                <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                <option value="+04:50">(GMT +4:30) Kabul</option>
                                <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                                <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                                <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                <option value="+08:75">(GMT +8:45) Eucla</option>
                                <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                                <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                                <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                <option value="+11:50">(GMT +11:30) Norfolk Island</option>
                                <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                <option value="+12:75">(GMT +12:45) Chatham Islands</option>
                                <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                                <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                            </select>
                    

                </div>

                <div class="row my-4">
                    <div class="col">
                    <label> Language  <sup class="text-danger">*</sup></label>
                   
                    <select name="language" id="" class="form-control">
                        <option value="English">English</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Portuguese">Portuguese</option>
                    </select>
                    </div>

                    <div class="col">
                    <label> Support button enabled  <sup class="text-danger">*</sup></label>
                    <select name="button" id="" class="form-control">
                        <option value="Yes">Yes</option>
                        <option value="no">No</option>
                        
                    </select>
                    </div>
                </div>

                

                <div class="row my-4">
                    <div class="col">
                        <label>Content direction  <sup class="text-danger">*</sup></label>
                    <select name="direction" id="" class="form-control col-6">
                        <option value="Initial" disabled selected>Initial</option>
                        <option value="Left to Right">Left to Right</option>
                        <option value="Right to Left">Right to Left</option>
                    </select>
                    </div>

                    
                </div>

                <div class="float-right mt-4">
                    <a href="" class="btn btn-outline-success">Cancel</a>
                    <button type="submit" class="btn btn-success"> Save</button>
                </div>
    </div>
  <!-- /.content-wrapper -->
  
  </div>
  </form>
<!-- ./wrapper -->

  <!-- Modal new broadcast -->
 <div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                        <div class="modal-header">
                                <h6 class="modal-title" id="broadcasttitle"><b>Create schedule</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>

                        <div class="modal-body me-2">    

                        <label>Repeat every</label>
                        <br>
                        <select name="" id="" class="col-6">
                            <option value="Day">Day</option>
                            <option value="Week">Week</option>
                            <option value="Month">Month</option>
                        </select>
<br>
                        <label  class="mt-2">Subscriber analytics report</label>

                        <input type="text" class="col form-control">
                        <p >Separate multiple email addresses with comma (,)</p>
                          
                        </div>

                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Save</button>
                        </div>

                        </div>
                        </div>
</div>
        <!-- Modal -->  
       

</form>
</body>
@include('layouts.footer')
</html>


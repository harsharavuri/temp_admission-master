<php date_default_timezone_set("Asia/Calcutta"); ?>
<style type="text/css">
@page
{
	size: landscape;
	margin: 1.5cm
}
</style>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<button data-step='9' data-intro='Print table given below' data-position='left' type="button" onclick="window.print()" title="Print table given below"  class="pull-right btn btn-sm btn-primary hidden-print"><span class="glyphicon glyphicon-print"></span> Print</button>
				
</div>
<div class="hidden-print">
</br></br></br>
</div>
	    <div style="border: 1px solid" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    	<div>
    	<br>
    	<center>
            <img class="img img-responsive" src="https://wsdc.nitw.ac.in/faculty/assets/images/logo_nitw.png" height="56" width="56">
               <b> NATIONAL INSTITUTE OF TECHNOLGOY</b><br>
    			Warangal, Telangana-506004 </center>
    	</div>
    	<br>
    	<center> OMAHA Reciept (Mess Copy) </center>
    	<br>
    	Date :     	<span class="clearfix"><br></span>
    	<table class="table-hover table-condensed table-striped table">
    		<tr>
    			<td colspan="3" align="center"> Student Details </td>
    		</tr>
    		<tr>
    			<td rowspan="3"><img class="img img-responsive" src="http://172.20.0.34/student/assets/upload/thumbs/.jpg" height="64" width="64"></td>
    			<td colspan="2"><strong> Name : <?php if($personal_info) echo$personal_info->FullName ?></strong>  </td>
    		</tr>
    		<tr>
    			<td><strong> Type : </strong>  </td>
    			<td><strong> Gender : <?php if($personal_info)echo $personal_info->Gender ?></strong> </td>
    		</tr>
    		<tr>
    			<td><strong> Reg No. : <?php if($educational_info)echo $educational_info->RegNo ?> </strong>  </td>
    			<td><strong> Course : <?php if($personal_info)echo $personal_info->Gender ?></strong>  </td>
    		</tr>
    	</table>
    	<table border="3"  class="table-hover table-condensed table table-bordered">
    		<thead>
    		<tr>
    			<td colspan="2"><center> Reservation Details </center></td>
    		</tr>
    		</thead>
    		<tbody>
    		<tr>
    			<td><strong> Hostels : </strong></td>
    			<td>  </td>
    		</tr>
    		<tr>
    			<td><strong> Floor : </strong></td>
    			<td>  </td>
    		</tr>
    		<tr>
    			<td><strong> Room No. : </strong></td>
    			<td>  </td>
    		</tr>
    		<tr>
    			<td><strong> Mess : </strong></td>
    			<td>  </td>
    		</tr>
    		</tbody>
    	</table>
    	<center> This Receipt was generated on 
			<?php
			$t=time();
			echo(date("Y-m-d",$t));
			?>
		.</center>
    	<br>
    	<center>
    	<span>Powered By </span>
    		<img class="img img-responsive" src="https://wsdc.nitw.ac.in/faculty/assets/images/logo_wsdc.png" height="64" width="64">
    	</center>
    	<br>
    </div>
        <div style="border: 1px solid" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    	<div>
    	<br>
    	<center>
            <img class="img img-responsive" src="https://wsdc.nitw.ac.in/faculty/assets/images/logo_nitw.png" height="56" width="56">
               <b> NATIONAL INSTITUTE OF TECHNOLGOY</b><br>
    			Warangal, Telangana-506004 </center>
    	</div>
    	<br>
    	<center> OMAHA Reciept (Mess Copy) </center>
    	<br>
    	Date :     	<span class="clearfix"><br></span>
    	<table class="table-hover table-condensed table-striped table">
    		<tr>
    			<td colspan="3" align="center"> Student Details </td>
    		</tr>
    		<tr>
    			<td rowspan="3"><img class="img img-responsive" src="http://172.20.0.34/student/assets/upload/thumbs/.jpg" height="64" width="64"></td>
    			<td colspan="2"><strong> Name : <?php if($personal_info) echo$personal_info->FullName ?></strong>  </td>
    		</tr>
    		<tr>
    			<td><strong> Type : </strong>  </td>
    			<td><strong> Gender : <?php if($personal_info)echo $personal_info->Gender ?></strong> </td>
    		</tr>
    		<tr>
    			<td><strong> Reg No. : <?php if($educational_info)echo $educational_info->RegNo ?> </strong>  </td>
    			<td><strong> Course : <?php if($personal_info)echo $personal_info->Gender ?></strong>  </td>
    		</tr>
    	</table>
    	<table border="3"  class="table-hover table-condensed table table-bordered">
    		<thead>
    		<tr>
    			<td colspan="2"><center> Reservation Details </center></td>
    		</tr>
    		</thead>
    		<tbody>
    		<tr>
    			<td><strong> Hostels : </strong></td>
    			<td>  </td>
    		</tr>
    		<tr>
    			<td><strong> Floor : </strong></td>
    			<td>  </td>
    		</tr>
    		<tr>
    			<td><strong> Room No. : </strong></td>
    			<td>  </td>
    		</tr>
    		<tr>
    			<td><strong> Mess : </strong></td>
    			<td>  </td>
    		</tr>
    		</tbody>
    	</table>
    	<center> This Receipt was generated on 
			<?php
			$t=time();
			echo(date("Y-m-d",$t));
			?>
		.</center>
    	<br>
    	<center>
    	<span>Powered By </span>
    		<img class="img img-responsive" src="https://wsdc.nitw.ac.in/faculty/assets/images/logo_wsdc.png" height="64" width="64">
    	</center>
    	<br>
    </div>
        
        <div style="border: 1px solid" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    	<div>
    	<br>
    	<center>
            <img class="img img-responsive" src="https://wsdc.nitw.ac.in/faculty/assets/images/logo_nitw.png" height="56" width="56">
               <b> NATIONAL INSTITUTE OF TECHNOLGOY</b><br>
    			Warangal, Telangana-506004 </center>
    	</div>
    	<br>
    	<center> OMAHA Reciept (Mess Copy) </center>
    	<br>
    	Date :     	<span class="clearfix"><br></span>
    	<table class="table-hover table-condensed table-striped table">
    		<tr>
    			<td colspan="3" align="center"> Student Details </td>
    		</tr>
    		<tr>
    			<td rowspan="3"><img class="img img-responsive" src="http://172.20.0.34/student/assets/upload/thumbs/.jpg" height="64" width="64"></td>
    			<td colspan="2"><strong> Name : <?php if($personal_info) echo$personal_info->FullName ?></strong>  </td>
    		</tr>
    		<tr>
    			<td><strong> Type : </strong>  </td>
    			<td><strong> Gender : <?php if($personal_info)echo $personal_info->Gender ?></strong> </td>
    		</tr>
    		<tr>
    			<td><strong> Reg No. : <?php if($educational_info)echo $educational_info->RegNo ?> </strong>  </td>
    			<td><strong> Course : <?php if($personal_info)echo $personal_info->Gender ?></strong>  </td>
    		</tr>
    	</table>
    	<table border="3"  class="table-hover table-condensed table table-bordered">
    		<thead>
    		<tr>
    			<td colspan="2"><center> Reservation Details </center></td>
    		</tr>
    		</thead>
    		<tbody>
    		<tr>
    			<td><strong> Hostels : </strong></td>
    			<td>  </td>
    		</tr>
    		<tr>
    			<td><strong> Floor : </strong></td>
    			<td>  </td>
    		</tr>
    		<tr>
    			<td><strong> Room No. : </strong></td>
    			<td>  </td>
    		</tr>
    		<tr>
    			<td><strong> Mess : </strong></td>
    			<td>  </td>
    		</tr>
    		</tbody>
    	</table>
    	<center> This Receipt was generated on 
			<?php
			$t=time();
			echo(date("Y-m-d",$t));
			?>
		.</center>
    	<br>
    	<center>
    	<span>Powered By </span>
    		<img class="img img-responsive" src="https://wsdc.nitw.ac.in/faculty/assets/images/logo_wsdc.png" height="64" width="64">
    	</center>
    	<br>
    </div>
        
    
<span class="clearfix"><br><br></span>
        <span>
    <center>Take only one printout. Don't waste paper. Save Paper, Save Trees.</center>
    </span>

        </div> <!-- col-lg-8 or 10 -->
    </div>      <!-- main row -->
</div> <!-- container -->
        <div class="row hidden-print">
        	<hr>
        	<footer>
        		<p>
        			<span class="pull-right" data-step="10" data-intro="Contact WSDC for any queries, feedback, suggestions">
        				<!-- <em>page rendered in 0.0488 sec</em> |  -->
        				<span class="glyphicon glyphicon-envelope"> </span> <a href="mailto: wsdc.nitw@gmail.com" target="_blank">  wsdc.nitw@gmail.com</a> | 
        				<span class="glyphicon glyphicon-copyright-mark"></span> 2016, WSDC NITW
        			</span>
        		</p>
        	</footer>
            <br><br>
        </div>
    </div>
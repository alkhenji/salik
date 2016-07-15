{include file="{$prefix}header.tpl" title="HomePage" bodyid="dashboard"}
{include file="{$prefix}nav.tpl" currentnav="users"}
{config_load file="ads_en.conf"}
<script>

	function driverEdit(id,times){
		     
			location.href="drivers.php?action=mode&driver_id="+id+"&times="+times;
		
	}
	
	function viewMore(times){
		    times++;
			location.href="drivers.php?times="+times;
		
	}
   
    function submit(){
		  var car_id = $('select#car_numbers').val();   
         
		  document.driver_info_form.car_in.value=car_id;
                  if(car_id==0){
                     alert("Please choose car!"); 
                 }else{
                    document.driver_info_form.submit();
                 }
         
	}
	function driverDelete(id,times){
		 if(confirm("Are you sure you want to delete this driver?") == true){
			location.href="drivers.php?action=driver_delete&driver_id="+id+"&times="+times;
		}else{
			return;
		}
	}
</script>
<div class="body">
</br>
	<h2 class="heading2">edit drivers</h2>
	<div id="div_seperate" class="div_seperate"></div>
	<div id="div_user_edit" >
	
		<div class="div_form" >
			<form action="drivers.php?action=driver_info&driver_id={$driver_id}&times={$times}" name="driver_info_form" id="driver_info_form"  method="post" enctype="multipart/form-data"autocomplete="off" >
				<input type="hidden"name="mode"value="{$mode}"/>
                <input type="hidden" name="car_in" id="car_in" value=""/>
				<p style="margin-left:20px;">
				Name:<input type="text" id="fullname" name="fullname" value="{$fullname}" class="input_data" style="width:250px;" placeholder="Enter FullName"/>
				Username:<input type="text" id="username1" name="username" value="{$username}" class="input_data" style="width:250px;" placeholder="Enter Username" />
				Password:<input type="password" id="password1" name="password" value="{$password}" class="input_data" style="width:250px;" placeholder="Enter Password:*********"/>
				Car:<select id="car_numbers" style="width:400px;">
					<option value="{$selectedcar_id}" Selected>Name:[{$selectedcar_name}] Type:[{$selectedcar_type}] Number:[{$selectedcar_number}]</option>
						{foreach from=$cars item="data"}
							<option value='{$data['car_id']}'>Name:[{$data['car_name_color']}] Type:[{$data['car_type']}] Number:[{$data['car_plate_number']}]</option>							
						{/foreach}						
					</select>
  
				<a href="javascript: submit();" id = "btnsave" class="view" style="font-size:1.1em;margin-left:30px;width:100px;">{if $mode == 'Add'}Add{else}Save{/if}</a>
				
				</p>
			</form>
		</div>	
	</div>
	<h2 class="heading2">Drivers Data</h2>
	<div id="div_seperate" class="div_seperate"></div>
		
		<div id="div_tbl_user" class="div_tbl_user" style="margin:0 auto;">

			<h2 style="margin-left:1350px;margin-bottom:-15px;color:#ffffff;">Number of Drivers : {$totalDriversNumber}</h2>
			<table id="users" class="stats" border="1" border-spacing="1px"  >
					<tbody style="width:100%;">
					<tr class="statshead" style="width:100%;">
						<td style="width:18%;">
							Name
						</td>
						<td style="width:18%;">
							ID#
						</td>
                        
						 <td style="width:18%;">
							Car ID#
						</td>
						<td style="width:18%;">
							Username
						</td>
						<td style="width:18%;">
							Password
						</td>
                       
                       
						<td style="width:10%;">
							Modify
						</td>
						
												
											
					</tr>
					{foreach from=$drivers item="data"}
						<tr class="statsrow">
                        	<td>
								{$data['driver_fullname']}
							</td>
							<td>
								{$data['driver_number_id']}
							</td>
							<td>
								{$data['car_number_id']}
							</td>
							<td>
								{$data['driver_name']}
							</td>
							
							<td>
								{$data['driver_password']}
							</td>
                            
                            
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: driverEdit({$data['driver_id']},{$times});"class="view">edit</a></li>|
									
									<li><a href="javascript:driverDelete({$data['driver_id']},{$times});"class="view">delete</a></li>
								
								</ul>
							</div>
								
							</td>
							
							
							
						</tr>
					{/foreach}
					</tbody>
						
				</table>
				<div style="width:120px;margin:0 auto;">
				 	<a href="javascript:viewMore({$times});"class="view">View More</a>
				</div>
				</br>
		</div>
	
</div>
</div>
{include file="{$prefix}footer.tpl"}


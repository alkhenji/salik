{include file="{$prefix}header.tpl" title="HomePage" bodyid="dashboard"}
{include file="{$prefix}nav.tpl" currentnav="cars"}
{config_load file="ads_en.conf"}
<script>

	function carEdit(id,times){
		     
			location.href="car.php?action=mode&car_id="+id+"&times="+times;
		
	}
	
	function viewMore(times){
		    times++;
			location.href="car.php?times="+times;
		
	}
   
      
	function carDelete(id,times){
		 if(confirm("Are you sure you want to delete this car?") == true){
			location.href="car.php?action=car_delete&car_id="+id+"&times="+times;
		}else{
			return;
		}
	}
</script>
<div class="body">
</br>
	<h2 class="heading2">edit cars</h2>
	<div id="div_seperate" class="div_seperate"></div>
	<div id="div_user_edit" class="user_edit">
	
		<div class="div_form">
			<form action="car.php?action=car_info&car_id={$car_id}&times={$times}" name="driver_info_form" id="driver_info_form"  method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="hidden"name="mode"value="{$mode}"/>
				<p style="margin-left:20px;">
				Name(Color):<input type="text" id="carname" name="carname" value="{$carname}" class="input_data" style="margin-right:20px;"placeholder="Enter Carname:BMW(Black)"/>
				Plate Number:<input type="number" id="paltenumber" name="platenumber" value="{$platenumber}" class="input_data" placeholder="Enter Plate Number!" />
						
				Class:<input type="text" id="class" name="class" value="{$class}" class="input_data" placeholder="Enter Car Class!"/>
				<input id="btnsave" type="submit" class="submit" value="{$mode}"/>
				
				</p>
			</form>
		</div>	
	</div>
	<h2 class="heading2">Cars Data</h2>
	<div id="div_seperate" class="div_seperate"></div>
		
		<div id="div_tbl_user" class="div_tbl_user" style="margin:0 auto;">

			<h2 style="margin-left:1350px;margin-bottom:-15px;color:#ffffff;">Number of Cars : {$totalCarsNumber}</h2>
			<table id="users" class="stats" border="1" border-spacing="1px"  >
					<tbody style="width:100%;">
					<tr class="statshead" style="width:100%;">
						<td style="width:18%;">
							Name(Color)
						</td>
						<td style="width:18%;">
							ID#
						</td>
                        
						 <td style="width:18%;">
							Class
						</td>
						<td style="width:18%;">
							Plate Number
						</td>
						                     
                       
						<td style="width:10%;">
							Modify
						</td>
						
												
											
					</tr>
					{foreach from=$cars item="data"}
						<tr class="statsrow">
                        	<td>
								{$data['car_name_color']}
							</td>
							<td>
								{$data['car_number_id']}
							</td>
							<td>
								{$data['car_type']}
							</td>
							<td>
								{$data['car_plate_number']}
							</td>
							
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: carEdit({$data['car_id']},{$times});"class="view">edit</a></li>|
									
									<li><a href="javascript:carDelete({$data['car_id']},{$times});"class="view">delete</a></li>
								
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


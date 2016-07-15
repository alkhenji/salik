{include file="{$prefix}header.tpl" title="HomePage" bodyid="dashboard"}
{include file="{$prefix}nav.tpl" currentnav="orders"}
{config_load file="ads_en.conf"}
<script>

	function orderEdit(id,times){
            
            var x = document.getElementById(id).value;
           
		     if(confirm("Are you sure you want to change this order?") == true){
			location.href="orders.php?action=edit&order_id="+id+"&times="+times+"&order_state="+x;
		    }else{
			return;
		}
	}
	
	function viewMore(times){
		    times++;
			location.href="orders.php?times="+times;
		
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
	<h2 class="heading2">Summary of Orders</h2>
	<div id="div_seperate" class="div_seperate"></div>
	<div id="div_order_edit" class="div_order_edit">
        <ul >
            <li ><h2>{$totalOrderNumber}</h2><h3>Orders</h3></li>
            <li><h2>{$totalPendingNumber}</h2><h3>Pending</h3></li>
            <li ><h2>{$totalInprogressNumber}</h2><h3>Inprogress</h3></li>
            <li ><h2>{$totalCancelledNumber}</h2><h3>Cancelled</h3></li>
            <li ><h2>{$totalCompletedNumber}</h2><h3>Completed</h3></li>

		</ul>
       
	</div>
   
	<h2 class="heading2">Orders Data</h2>
	<div id="div_seperate" class="div_seperate"></div>
		
		<div id="div_tbl_user" class="div_tbl_user" >

			<table id="users" class="stats" border="1" border-spacing="1px"  >
					<tbody style="width:100%;">
					<tr class="statshead" style="width:100%;">
						<td style="width:22%;">
							Date/Time
						</td>
						<td style="width:22%;">
							Client#
						</td>
                        
						 <td style="width:22%;">
							Driver ID
						</td>
						<td style="width:22%;">
							Status
						</td>
						                      
                       
						<td style="width:12%;">
							Modify
						</td>
						
												
											
					</tr>
					{foreach from=$orders item="data"}
						<tr class="statsrow">
                        	<td>
								{$data['order_date_time']}
							</td>
							<td>
								{$data['order_id']}
							</td>
							<td>
								{$data['driver_id']}
							</td>
							<td><select id="{$data['order_id']}" class="status"{if $data['order_state']==3||$data['order_state']==4} disabled {/if} >
                                    <option value="{$data['order_state']}" Selected>
                                        {if $data['order_state']==1}  Pending{/if}
                                        {if $data['order_state']==2}  Inprogress{/if}
                                        {if $data['order_state']==3}  Completed {/if}
                                        {if $data['order_state']==4}  Cancelled {/if}
                                         
                                        </option>
                                    <option value='1'>Pending</option>
                                    <option value='2'>Inprogress</option>
                                    <option value='3'>Completed</option>	
                                    <option value='4'>Cancelled</option>						
                                    					
                                </select>
							</td>
							
							<td>
							<div class="modifyDiv">
								<ul >
									<li ><a href="javascript: orderEdit({$data['order_id']},{$times});"class="view">{if $data['order_state']==3||$data['order_state']==4} - {else}edit{/if}</a></li>
									
																
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



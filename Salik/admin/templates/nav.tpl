<!-- header -->
<div class="header">
	
	<ul>
		<li style="width:110px;"{if $currentnav=="homepage"} class="selected" {/if}>	<a href="./home.php">HOME</a></li>
		<li style="width:160px;"{if $currentnav=="users"} class="selected" {/if}><a href="./drivers.php?times=1">DRIVERS</a></li>
		<li style="width:120px;"{if $currentnav=="orders"} class="selected" {/if}> <a href="./orders.php?times=1">ODERS</a></li>
        <li style="width:100px;"{if $currentnav=="cars"} class="selected" {/if}> <a href="./car.php?times=1">CARS</a></li>
                
        <li style="width:130px;"{if $currentnav=="logout"} class="selected" {/if}> <a href="./logout.php">LOGOUT</a></li>
			
	</ul>
</div>
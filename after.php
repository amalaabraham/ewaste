<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Planner Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'><link rel="stylesheet" href="./style1.css">
</head>
<body>
<!-- partial:index.partial.html -->
<!-- Dashboard (Parent Block)-->
<div class="dashboard">
  <!-- Dashboard Sidebar (Block)-->
  <div class="dashboard-sidebar">
    <!-- Brand (Element)-->
    <div class="dashboard-sidebar__brand"><img class="logo" src="./img copy/Capture.png"/></div>
    <!-- Dashboard Nav (Block)-->
    <div class="dashboard-nav">
      <ul>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="home"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_home.svg"/>Profile</a></li>
        <!-- Item:Selected (Element:Modifier)        -->
        <li class="dashboard-nav__item dashboard-nav__item--selected"><a href="my_trip"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_my_trip.svg"/>Make Request</a></li>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="discover_places"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_discover_places.svg"/>Pending requests</a></li>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="notifications"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_notifications.svg"/>Active Requests</a></li>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="settings"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_settings.svg"/>Delivered Requests</a></li>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="discover_places"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_discover_places.svg"/>Points</a></li>
      </ul>
    </div>
  </div>
  <!-- Dashboard Content (Block)-->
  <div class="dashboard-content">
    <!-- Dashboard Header (Block)-->
    <div class="dashboard-header">
      
<!-- <div class="dashboard-header__new" ><button type="button" class="btn btn-outline-success mb-1 "><a href="index.html">Logout</button></div> -->
      </div>
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel dashboard-content__panel--active" data-panel-id="home">

      <div class="col-md-8">
        <div class="tab-content profile-tab" id="boot">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Id</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $row["username"];
                                    ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $row["firstname"]. " " . $row["lastname"];
                                    ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $row["email"]; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $row["pno"]; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $row["addres"]; ?></p>
                            </div>
                        </div>
            </div>
    </div>
    </div>
    </div>
    
   <!-- Dashboard Content Panel (Element)-->
   <div class="dashboard-content__panel " data-panel-id="my_trip">
      <!-- Dashboard List (Block) -->
      <div class="card mb-4">
        <div class="card-body">
            <h6 class="mb-4">Make request</h6>
            <br></br>
            <form action="eleven.php" method="post">
                <div class="form-row">
                <div class="form-group col-md-6">
                        <input type="hidden" class="form-control" id="inputusername4" value="<?php echo $row["username"];
                                    ?>" name="username">
                    </div> 
                    <div class="form-group col-md-6">
                        <input type="hidden" class="form-control" id="inputusername4" value="<?php echo $row["firstname"];
                                    ?>" name="firstname">
                    </div> 
                    <div class="form-group col-md-6">
                        <input type="hidden" class="form-control" id="inputusername4" value="<?php echo $row["lastname"];
                                    ?>" name="lastname">
                    </div> 
                    <div class="form-group col-md-6">
                        <input type="hidden" class="form-control" id="inputusername4" value="<?php echo $row["email"];
                                    ?>" name="email">
                    </div> 
                    <div class="form-group col-md-6">
                        <input type="hidden" class="form-control" id="inputusername4" value="<?php echo $row["pno"];
                                    ?>" name="pno">
                    </div> 
                    <div class="form-group col-md-6">
                        <input type="hidden" class="form-control" id="inputusername4" value="<?php echo $row["addres"];
                                    ?>" name="addres">
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Type</label>
                        <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04" name="typ">
                                    <option selected>Choose the type</option>
                                    <option value="Large household appliances (refrigerators/freezers, washing machines, dishwashers)">Large household appliances (refrigerators/freezers, washing machines, dishwashers)</option>
                                    <option value="Small household appliances (toasters, coffee makers, irons, hairdryers)">Small household appliances (toasters, coffee makers, irons, hairdryers)</option>
                                    <option value="Information technology (IT) and telecommunications equipment (personal computers, telephones, mobile phones, laptops, printers)">Information technology (IT) and telecommunications equipment (personal computers, telephones, mobile phones, laptops, printers)</option>
                                    <option value="Consumer equipment (televisions, stereo equipment, electric toothbrushes)">Consumer equipment (televisions, stereo equipment, electric toothbrushes)</option>
                                    <option value=">Lighting equipment (fluorescent lamps)">Lighting equipment (fluorescent lamps)</option>
                                    <option value="Electrical and electronic tools (handheld drills, saws, screwdrivers)">Electrical and electronic tools (handheld drills, saws, screwdrivers)</option>
                                    <option value="Toys, leisure and sports equipment">Toys, leisure and sports equipment</option>
                                    <option value="Medical equipment systems (with the exception of all implanted and infected products)">Medical equipment systems (with the exception of all implanted and infected products)</option>
                                    <option value="Monitoring and control instruments">Monitoring and control instruments</option>
                                    <option value="Automatic dispensers">Automatic dispensers</option>
                                </select>
                            </div>
                    </div>
                    
                </div>
                <br></br>
                <div class="form-group">
                    <label for="inputAddress">Quantity</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="in kgs" name=quantity>
                </div>
                <br></br>
                <div class="form-group">
                    <label for="inputAddress2">Residential address</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="resadd">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip" name="zip">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary d-block mt-3">Submit</button>
                <br></br>
                <br></br>
                
            </form>
        </div>
    </div>

    </div>
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel" data-panel-id="discover_places">
		<?php
		$sername="localhost";
		$username="root";
		$password="";
		$dbname="ewc";

		$conn=mysqli_connect($sername,$username,$password,$dbname);
		if(!$conn)
		{
			die("Connection Failed:".mysqli_connect_error());
		}

		$sql="SELECT username,typ,quantity,resadd,city,zip from requests";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row1=mysqli_fetch_assoc($result))
			{
				if(strcmp($row1["username"],$row["username"])==0)
				{?>
					<div class="col-md-8">
        <div class="tab-content profile-tab" id="boot">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Type</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $row1["typ"];
                                    ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Quantiity</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $row1["quantity"];
                                    ?></p>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>

					<?php
				}
			}
		}
		else
		{
			echo "no data";
		}
		mysqli_close($conn);
		?>

    </div> 
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel" data-panel-id="notifications">
      <p>Notifications</p>
    </div>
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel" data-panel-id="settings">
      <p>Settings</p>
    </div>
  </div>
  <!-- Dashboard Preview (Block)  -->
  
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
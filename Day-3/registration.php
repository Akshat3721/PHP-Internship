
<html>
<head>
      
                <style>
                  
                   body{
               	background-color: #BAB2B5;
                } 
                    
                 .subtitle {
                    text-align: center;
                    font-family: sans-serif;
                    font-size: 30px;
                    text-shadow: 3px 2px 5px rgba(0, 0, 0, .1);
                    color: #4d4d4d;
                    margin-bottom: 20px;
                    margin-top: 20px;
                    padding: 0px;
                }

               
               h2 
                {
                        font-family: sans-serif;
                        font-size: 25px;
                        text-align: center;
                }   
               td
                {
                        padding: 10px;
                        
                 }

                
                textarea
                {
                        width: 100%;
                        height: 70px;
                        padding: 12px;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        resize: vertical;
                }
            
                input[type=text],
                input[type=email],
                input[type=number],
                input[type=tel],
	input[type=date],
                select {
                    width: 20vw;
                    padding: 10px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #f2f2f2;
                    border-radius: 5px;
                    box-sizing: border-box;
                }
                
                    table{
                        
                        margin-left: 6vw;    
                    }
                    
                form 
                {
                    margin-left: 2vw;
                }
                    
                
                .flex-container
                {
                     display: flex;
                }

                .flex-container > div {
                    background-color:  #FFCCCC;
                    margin: 10px;
                    margin-left: 25%;
                    margin-right: 25%;
                    padding: 20px;
                    font-size: 20px;
                }
            
                .end {
                     text-align: center;
                    }
                    
                 input[type=submit],
                input[type=reset] 
                {
                    width: 15vw;
                    padding: 10px 20px;
                    margin: 20px 25px;
                    font-size: 18px;
                    font-weight: bold;
                    display: inline-block;
                    color: black;
                    border: 1px solid #808080;
                    border-radius: 5px;
                    box-sizing: border-box;
                    box-shadow:  3px 2px 5px rgba(0, 0, 0, .1);
                    cursor: pointer;
                }   
            
                    hr.heading {
                        margin-left: 20%;
                        margin-right: 20%;
                        margin-top: -10px;
                        margin-bottom: 20px;
                        border: 1px solid #3399ff;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }
            
                    
                   .copyright 
                    {
                    padding-top: 1rem;
                    padding-bottom: 0.5rem;
                    background-color: #113448;
                    text-align: center;
                    }

                    .copyright p,
                    .copyright a {
                        color: #dfe5ec;
                        text-decoration: none;
                    } 
	

                        
                    
                    
        </style>
                     
     <title>Registation Form</title>
</head>
<body>	
    
<div class="flex-container">
<div style="flex-basis:5000px">
    
<div class="subtitle">          
<h3  align="center">Registration Form </h3>
<hr class="heading">
</div> 
            
<form action="regdata.php" method="POST">
<table >
     
	<tr>
		<td >Name:</td>
		<td><input type="text" name="name" placeholder="Enter Your Full Name"></td>
	</tr>
	<tr>
		<td >Email:</td>
		<td><input type="email" name="email" placeholder="Enter Email Id"></td>
	</tr>
	<tr>
		<td>Mobile Number:</td>
		<td><input type="text" name="number" placeholder="Enter Mobile Number" pattern="[0-9]{10}"></td>
	</tr>
	<tr>
		<td >Date Of Birth:</td>
		<td><input type="date" name="DOB" placeholder="YYYY-MM-DD" ></td>
	</tr>
	<tr>
		<td >Gender:</td>
		<td><input type="text" name="Gender" placeholder="Gender"></td>
	</tr>
	<tr>
		<td >Address:</td>
		<td><textarea name="address"></textarea></td>
	</tr>
	</table>
    
 
     <div class="end">
    <tr>
        <th colspan="2">
            <input style="background-color: lightgreen" type="submit" name="submit" value="Submit Data">
            <input style="background-color: deepskyblue" type= "reset" name="reset" value="Reset Data">
        </th>
    </tr>
        </div>
    </form>
            
     </div>

    </div>       
 
   
    
</body>
</html>

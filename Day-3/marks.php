<html>
<title>Day-3</title>
<style>
 table{
	border-collapse: collapse;
	 width: 50%;
	 margin-left: auto; 
  margin-right: auto;
}
th, td {
  padding: 15px;
  text-align: left;
  font-family:verdana;
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
                    color: #f2f2f2;
                    border: 1px solid #808080;
                    border-radius: 5px;
                    box-sizing: border-box;
                    box-shadow:  3px 2px 5px rgba(0, 0, 0, .1);
                    cursor: pointer;
</style>
<body>
<h2 style="text-align:center;font-family:verdana;">Marks Entry</h2>
<form action=process.php method="post">
<table border="1">
    <tr>
      <th>Maths</th>
      <td><Input type="number" name="txt1"/></td>
    </tr>
    <tr>
    <th></br>Physics</th>
    <td><input type="number" name="txt2"/></td>
    </tr>
    <tr>
    <th></br>Chemestry</th>
    <td><input type="number" name="txt3"/></td>
    </tr>
    <tr>
    <th></br>English</th>
    <td><input type="number" name="txt4"/></td>
    </tr>
    <tr>
    <th></br>Computer</th>
    <td><input type="number" name="txt5"/></td>
    </tr>
    
    <tr>
        <th colspan="2">
            <input style="background-color: deepskyblue" type= "reset" name="reset" value="Reset Data">
	    <input style="background-color: lightgreen" type="submit" name="submit" value="Submit Data">
        </th>
    </tr>
   
    </table>
    </form>
	</body>
    </html>
<!--$id = $_POST['id'];
$item_code = $_POST['item_code'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$category = $_POST['category'];
$c_qty = $_POST['c_qty'];
$co_qty = $_POST['co_qty'];

if ( $quantity > 0 )
{
$co_qty = $quantity - $c_qty;
}

$query = "UPDATE stationary SET co_qty='$co_qty', description='$description', category='$category' where item_code='$id' ";
mysql_query($query) or die("not insert");-->
<html>
<head><body>


<td><form name="form1" method="post" action="dbView_Item.php">
                                <table width="80%"  border="1" align="center" cellpadding="0" cellspacing="1" bordercolor="#CCCCCC">
                                  <tr>
                                    <td width="18%" bgcolor="#E0E2EB">Description : </td>
                                    <td width="82%"><? echo $row['description']; ?></td>
                                      <input type="hidden" name="id" value="<? echo $row['item_code']; ?>">
                                  <tr>
                                    <td bgcolor="#E0E2EB">Category  : </td>
                                    <td width="82%"><? echo $row['category']; ?></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#E0E2EB">Item Code : </td>
                                   <td width="82%"><? echo $row['item_code']; ?></td>
                                      
                                  
                                  <tr>
                                    <td bgcolor="#E0E2EB">Current Quantity: </td>
                                    <td width="82%"><? echo $row['quantity']; ?></td>
                                  </tr>
                                
                                  <tr>
                                    <td bgcolor="#E0E2EB">Required Quantity  : </td>
                                    <td><input name="c_qty" type="text" id="ct_qty" size="10" maxlength="10"></td>
                                  </tr>
</table>
                                <br>
                                <table width="80%"  border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="67%"><div align="right">
                                        <input name="Cancel" type="button" id="Cancel" value="Cancel" onClick="history.go(-1)">
                                        <input name="Submit" type="submit" onClick="MM_validateForm('description','','R','quantity','','RisNum','item_code','','R');return document.MM_returnValue" value="Submit">
                                    </div></td>
                                  </tr>
                                </table>

</body></head></html>


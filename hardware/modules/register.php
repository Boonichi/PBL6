<script type="text/javascript">


function Xy_ly_dk()
{

       var email=document.dk.emailadd;
	   var pass=document.dk.pass;
	   var repass=document.dk.repass;
	   var diachi=document.dk.diachi;
	   var dienthoai=document.dk.dienthoai;
	   var hoten=document.dk.hoten;
       reg=/^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
       var testmail=reg.test(email.value);	
	   if(email.value == ""){
            alert("Bạn chưa nhập email!");
            email.focus();
            return false;
       }
	   if(testmail == false){
            alert("Địa chỉ email không hợp lệ!");
            emailadd.focus();
            return false;
       }
	   if(pass.value == "")
	   {	
	   		alert("Bạn chưa nhập mật khẩu");
            pass.focus();
            return false;
	   }
	   if(repass.value == "")
	   {	
	   		alert("Bạn chưa nhập lại mật khẩu");
            repass.focus();
            return false;
	   }
	   if(pass.value != repass.value)
	   {
	   		 alert("Password không trung khớp");
			 pass.focus();
             return false;
	   }
	   if(hoten.value =="")
	   {
	   			alert("Bạn chưa nhập họ tên");
				hoten.focus();
          	    return false;
	   }
	   for(i=0; i< document.dk.gt.length;i++)
	   {
	   		if(dk.gt[i].checked == true)
	   		{
				break;
			}
			else
			{
				alert("Bạn chưa chọn giới tính!");
				document.dk.gt[0].focus();
          	    return false;
			}
	   }
	   if(dienthoai.value =="")
	   {
	   			alert("Bạn chưa nhập số điện thoại");
				dienthoai.focus();
          	    return false;
	   }

	   else if(isNaN(dienthoai.value))
	   {
	   			alert("Số điện thoại không hợp lệ!");
				dienthoai.focus();
          	    return false;
	   }
	
}
//-->
</script>

		<table width='98%' border='0'  cellspacing='0' cellpadding='0'>
		  <tr>
			<td>
				<table border='0' cellpadding='0' cellspacing='0'  width='100%'>
							<tr>
								<td width='12'>
									<img border='0' height='25' src='images/img/but_left.jpg' width='12' /></td>
								<td background='images/img/but_center.jpg'>
									
										<b><font color='#ffff00'>ĐĂNG KÝ THÀNH VIÊN</font></b>
								</td>
								<td width='27'>
									<img border='0' height='25' src='images/img/but_right.jpg' width='27' />
								</td>
							</tr>
				</table>
			</td>
		 </tr>
		   <tr>
			<td colspan='3'>
	 <table  width='100%' border='1' align='center' cellpadding='0' cellspacing='0' class='table_border'>
		<tr> <td colspan="2" align="center" valign="top">
		

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#C5DDEB;">
  	<tr height="75px" >
    	<td style="padding-left:15px;">
        	Nhập các thông tin cần thiết (<font color="red">*</font>) vào bên dưới để đăng ký thành viên
        </td>
    </tr>
</table>


</td>

	 <tr>
     	 <td align="center">
           <table width="600" border="0" cellspacing="0" cellpadding="0">
        		<!-- noi dung bang dang ky -->		
        			<form action="modules/xu_ly_login.php?action=reg_success"  method="post" name="dk" onsubmit="return Xy_ly_dk();" >

    <tr>
      <td colspan="3" align="left" style="line-height:25px">Tên truy cập và mật khẩu<hr></td>
    </tr>
    <tr>
      <td width="104" height="30" align="right">Email đăng ký:</td>
      <td height="30"><label>
        <input name="emailadd" type="text" id="emailadd" value="<?php echo  $_POST['emailadd'];  ?>" size="30">
      </label></td>
      <td height="30">(<font color="#FF0000">*</font>)</td>
    </tr>
    <tr>
      <td height="30" align="right">Mật khẩu:</td>
      <td height="30"><input name="pass" type="password" id="pass" size="30"></td>
      <td height="30">(<font color="#FF0000">*</font>)</td>
    </tr>
    <tr>
      <td height="30" align="right">Nhập lại mật khẩu:</td>
      <td height="30"><input name="repass" type="password" id="repass" size="30"></td>
      <td height="30">(<font color="#FF0000">*</font>)</td>
    </tr>
    <tr>
      <td colspan="3" align="left"><hr>Thông tin liên lạc<hr></td>
    </tr>
    
    <tr>
      <td height="30" align="right">Họ và tên:</td>
      <td height="30"><input name="hoten" type="text" id="hoten" value="<?php echo  $_POST['hoten'];  ?>" size="30"></td>
      <td height="30">(<font color="#FF0000">*</font>)</td>
    </tr>
    <tr>
      <td height="30" align="right">Phái:</td>
      <td width="181" height="30">
    	<label><input type="radio" name="gt" id="radio" value="0"  />Nam</label> 
		  <label>
		  <input type="radio" name="gt" id="radio2" value="1" />
		  
		  Nữ</label></td>
	  <td width="315" height="30">(<font color="#FF0000">*</font>)</td>
    </tr>
    <tr>
      <td height="30" align="right">Địa chỉ:</td>
      <td height="30"><input name="diachi" type="text" id="diachi" value="<?php echo  $_POST['diachi'];  ?>" size="30"></td>
      <td height="30">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" align="right">Điện thoại:</td>
      <td height="30"><input name="dienthoai" type="text" id="dienthoai" value="<?php echo  $_POST['dienthoai'];  ?>" size="30"></td>
      <td height="30">(<font color="#FF0000">*</font>)</td>
    </tr>
    <tr>
      <td colspan="3" align="center"><hr><label>
        <input type="submit" name="dangky" id="dangky" value="  Đăng ký  ">
      </label></td>
    </tr>

</form>

                <!-- /noi dung bang dang ky -->
         </table>
        </td>
     </tr>			                
    </table>
 </td>
  </tr>
  <tr height='20px'>
  </tr>
</table>
<?PHP
	include("../ketnoi.php");
	if($_GET['del_id_qc'])
	{
		$del_id_qc = $_GET['del_id_qc'];
		// Xóa
		mysql_query("DELETE FROM quangcao WHERE Ma_qc = '$del_id_qc'");
	}
	$truyvan_qlqc = mysql_query("SELECT * FROM quangcao");
		// Phân trang
	$sodong = 6;
	$tongsodong = mysql_num_rows($truyvan_qlqc);
	$tongsotrang = ceil($tongsodong / $sodong);
	if(!isset($_GET["p"]))
	{
		$p = 1;
	}
	else
	{
		$p = intval($_GET["p"]);
	}
	$x = ($p -1)* $sodong;
	$truyvan_qlqc_page = mysql_query("SELECT * FROM quangcao limit $x, $sodong");
?>
<form id="ql_sp" name="ql_sp" method="post" action="">
  <table width="99%" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td height="23" colspan="8" align="center" bgcolor="#0066CC"><span class="style1">QUẢN LÝ QUẢNG CÁO</span></td>
    </tr>
    <tr>
      <td colspan="8">Trang:
       <?php  
                
                    echo "<a class='phantrang' href='?action=sua_qc&p=1'>Đầu  </a>";
                    for ($i = 1;$i<=$tongsotrang;$i++)
                    {
                        if($i==$p)
                        {
                            echo "<font color='red' size='3'>$i   </font>";
                        }
                        else
                        {
                
                            echo "<a  href='?action=sua_qc&p=$i'>$i  </a>";
                            
                        }
                        if($i == $tongsotrang)
                            {
                                echo "<a  href='?action=sua_qc&p=$tongsotrang'>Cuối  </a>";
                            }
                    }
                ?>
       <label>
        <select name="loai_sp" id="loai_sp">
        </select>
       </label>       <label>
        <input type="submit" name="chuyen" id="chuyen" value="Submit" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center" bgcolor="#0066CC">
      <td width="20"><span class="style2">
        <label>
        <input type="checkbox" name="checkall" id="checkall" />
        </label>
      </span></td>
      <td width="30"><span class="style2"></span></td>
      <td width="30"><span class="style2"></span></td>
      <td><span class="style2">Mã QC</span></td>
      <td><span class="style2">Tên QC</span></td>
      <td><span class="style2">Hiển thị</span></td>
      <td bgcolor="#0066CC"><span class="style2">Liên kết</span></td>
      <td> <span class="style2">Hình ảnh</span></td>
    </tr>
    <?php 
	$mau =1;
    while($r = mysql_fetch_array($truyvan_qlqc_page))
	{
		if($mau % 2 ==0)
		{
			echo "<tr bgcolor='#CCCCCC'>";
		}
		else
		{
			echo "<tr bgcolor='#FFF'>";
		}
		if($r['Hien_thi'] == 1)
		{
			$hienthi = "Có";
		}
		else
		{
			$hienthi = "Không";
		}	
     echo "<td><input type='checkbox' name='check' id='check' /></td>
      <td><a href='?action=sua_qc&id_qc=".$r['Ma_qc']."'>Sửa</a></td>
      <td><a href='?action=sua_qc&del_id_qc=".$r['Ma_qc']."'>Xóa</a></td>
      <td>".$r['Ma_qc']."</td>
      <td>".$r['Ten_qc']."</td>
      <td>".$hienthi."</td>
      <td>".$r['Lien_ket_qc']."</td>
      <td>".$r['Hinh_qc']."</td>
    </tr>";
	$mau++;
	}
	?>
  </table>
</form>

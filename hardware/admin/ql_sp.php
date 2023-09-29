<?PHP
	include("../ketnoi.php");
	if($_GET['del_id_sp'])
	{
		$del_id_sp = $_GET['del_id_sp'];
		// Xóa
		mysql_query("DELETE FROM thietbi WHERE Ma_tb = '$del_id_sp'");
	}
	$truyvan_qlsp = mysql_query("SELECT * FROM thietbi,loai_sp WHERE loai_sp.Ma_loai_sp = thietbi.Ma_loai");
		// Phân trang
	$sodong = 6;
	$tongsodong = mysql_num_rows($truyvan_qlsp);
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
	$truyvan_qlsp_page = mysql_query("SELECT * FROM thietbi,loai_sp WHERE loai_sp.Ma_loai_sp = thietbi.Ma_loai limit $x, $sodong");
?>
<form id="ql_sp" name="ql_sp" method="post" action="">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#0066CC">
    <tr>
      <td height="23" colspan="11" align="center" bgcolor="#0066CC"><span class="style1">QUẢN LÝ SẢN PHẨM</span></td>
    </tr>
    <tr>
      <td colspan="8">Trang:
       <?php  
                
                    echo "<a class='phantrang' href='?action=sua_sp&p=1'>Đầu  </a>";
                    for ($i = 1;$i<=$tongsotrang;$i++)
                    {
                        if($i==$p)
                        {
                            echo "<font color='red' size='3'>$i   </font>";
                        }
                        else
                        {
                
                            echo "<a  href='?action=sua_sp&p=$i'>$i  </a>";
                            
                        }
                        if($i == $tongsotrang)
                            {
                                echo "<a  href='?action=sua_sp&p=$tongsotrang'>Cuối  </a>";
                            }
                    }
                ?>
      
      </td>
      <td colspan="4"><label>
        <select name="loai_sp" id="loai_sp">
        </select>
      </label>        <label>
        <input type="submit" name="chuyen" id="chuyen" value="Submit" />
              </label></td>
    </tr>
    <tr align="center" bgcolor="#0066CC">
      <td width="20"><span class="style2">
        <label>
        <input type="checkbox" name="checkall" id="checkall" />
        </label>
      </span></td>
      <td width="30"><span class="style2"></span></td>
      <td width="30"><span class="style2"></span></td>
      <td><span class="style2">Mã TB</span></td>
      <td><span class="style2">Tên TB</span></td>
      <td><span class="style2">Tên loại</span></td>
      <td bgcolor="#0066CC"><span class="style2">Tên hiệu</span></td>
      <td><span class="style2">Giá bán</span></td>
      <td><span class="style2">Bảo hành</span></td>
      <td><span class="style2">Số lượng</span></td>
      <td> <span class="style2">Hình ảnh</span></td>
    </tr>
    <?php 
	$mau =1;
    while($r = mysql_fetch_array($truyvan_qlsp_page))
	{
		if($mau % 2 ==0)
		{
			echo "<tr bgcolor='#CCCCCC'>";
		}
		else
		{
			echo "<tr bgcolor='#FFF'>";
		}
     echo 
	 "<td><input type='checkbox' name='check' id='check' /></td>
      <td><a href='?action=sua_sp&id_sp=".$r['Ma_tb']."'>Sửa</a></td>
      <td><a href='?action=sua_sp&del_id_sp=".$r['Ma_tb']."'>Xóa</a></td>
      <td>".$r['Ma_tb']."</td>
      <td>".$r['Ten_tb']."</td>
      <td>".$r['Ma_loai']."</td>
      <td>".$r['Ten_hieu']."</td>
      <td>".$r['Gia_ban']."</td>
      <td>".$r['Bao_hanh']."</td>
      <td>".$r['So_luong']."</td>
      <td>".$r['Hinh_anh']."</td>
    </tr>";
	$mau++;
	}
	?>
  </table>
</form>

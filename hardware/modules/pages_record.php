	<?php
		// $self : url hiện tại, $p là số trang current, $tongsotrang : tổng số trang
		function page_record ($self,$p,$tongsotrang)
		{
					if($p > 1)
					{
						$page = $p -1;
						$prev = " <a href=\"$self"."p=$page\">[Trang trước]</a> ";
    					$first = " <a href=\"$self"."p=1\">[Trang đầu]</a> ";
					}
					else
					{
						$prev  = ' [Trước] ';       // we're on page one, don't enable 'previous' link
						$first = ' [Trang đầu] '; // nor 'first page' link
					}
					if ($p < $tongsotrang)
					{
						$page = $p + 1;
						$next = " <a href=\"$self"."p=$page\">[Trang sau]</a> ";
						$last = " <a href=\"$self"."p=$tongsotrang\">[Trang cuối]</a> ";
					} 
					else
					{
						$next = ' [Trang sau] ';      // we're on the last page, don't enable 'next' link
						$last = ' [Trang cuối] '; // nor 'last page' link
					}
				
				// print the page navigation link
				  echo $first . $prev ;
				   for ($i = 1;$i<=$tongsotrang;$i++)
                    {
					 	if($i==$p)
                        {
                            echo "<font class='phantrang p_curr'>$i  </font>";
                        }
                        else
                        {
                
                            echo "<a class='phantrang' href='$self"."p=$i'>$i  </a>";
                            
                        }
					
					}
				echo  $next . $last;
				echo  " Hiển thị trang <strong>$p</strong> trong <strong>$tongsotrang</strong> trang";
		}		
	?>
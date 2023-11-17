<br><br><br><br><br><br>
<div class="container" style="width: 80%; margin: 0 auto;">
<h3>QUẢN LÝ PHIM</h3>
<div class="container-home">

<table class="table-left-sp" border="1">
            <tr class="">
                <th>TÊN</th>
            </tr>
            <?php
            $suasp = "index.php?act=sualoai&id=".$idtl;
                foreach ($listtheloai as $theloai){
                    extract($theloai);
                    echo "<tr>
                    <td>".$name."</td>
                    <td><button><a href='index.php?act=sauloai></a>Sua</button></td>
                    ";
                
                }
            ?>
           </table>                    

</div>
</div>
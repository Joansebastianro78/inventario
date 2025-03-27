<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= entrada_vodafone_" . date('Y.m:d:m:s').".xls");
header("Pragma: no-cache");
header("Expires: 0")

?>
<table class="table" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ICCID</th>
                                            <th>FECHA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                     include ("../conexion.php");
                                     $sql=$conn ->query( "select * from entrada" );
                                     while($entrada=$sql->fetch_object()){?>
                                    <tr>     
                                <td><?php echo $entrada-> id?></td>       
                                <td><?php echo $entrada-> iccid?></td>
                                <td><?php echo $entrada-> fecha_nac?></td>
                                                                
                                
                                </tr>
                                <?php }
                                 ?>
                                
                                </tr>
                                    </tbody>
                                </table>



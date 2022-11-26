<?php
                $sql="Select * from `panier`";
                $result=mysqli_query($con,$sql);
                if($result){              
                  while($row=mysqli_fetch_assoc($result)){
                    $idProduit=$row['idProduit'];
                    $ipAddress=$row['ipAddress'];
                    $quantity=$row['quantity'];
                    echo '<tr>
                    <th scope="row"></th>
                    <td style="width: 10%; text-align: center;">'.$idProduit.'</td>
                    <td style="width: 10%; text-align: center;">'.$ipAddress.'</td>
                    <td style="width: 10%; text-align: center;">'.$quantity.'</td>
                    <td>
                    <button class="btn btn-success ml-xl-4"><a href="updateProduit.php?
                    updateidProduit='.$idProduit.'"
                    class="text-white">Update</a></button>
                    <button class="btn btn-danger ml-xl-4"><a href="deleteCart.php?deleteidProduit='.$idProduit.'"
                    class="text-white">Delete</a></button>
                    </td>
                  </tr>';
                  }
                }
              
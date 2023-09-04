<?php
    session_start();
    $pageTitle = 'Clients';
    include 'connect.php';
    include 'Includes/functions/functions.php';
    include 'Includes/templates/header.php';
    if(isset($_SESSION['username_beauty_salon_Xw211qAAsq4']) && isset($_SESSION['password_beauty_salon_Xw211qAAsq4']))
    {
?>
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Clients</h1>
            </div>

            <?php
                $stmt = $con->prepare("SELECT * FROM clients");
                $stmt->execute();
                $rows_clients = $stmt->fetchAll();
            ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Кліенти</h6>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID#</th>
                                    <th scope="col">Ім'я'</th>
                                    <th scope="col">Прізвище</th>
                                    <th scope="col">Номер телефону</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($rows_clients as $client)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $client['client_id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $client['first_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $client['last_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $client['phone_number'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $client['client_email'];
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php

        include 'Includes/templates/footer.php';
    }
    else
    {
        header('Location: login.php');
        exit();
    }

?>

<?php
    ob_start();
    session_start();

    $pageTitle = 'Employees';

    include 'connect.php';
    include 'Includes/functions/functions.php';
    include 'Includes/templates/header.php';

    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

    if(isset($_SESSION['username_beauty_salon_Xw211qAAsq4']) && isset($_SESSION['password_beauty_salon_Xw211qAAsq4']))
    {
?>
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Співробітники</h1>
            </div>

            <?php
                $do = '';

                if(isset($_GET['do']) && in_array($_GET['do'], array('Add','Edit')))
                {
                    $do = htmlspecialchars($_GET['do']);
                }
                else
                {
                    $do = 'Manage';
                }

                if($do == 'Manage')
                {
                    $stmt = $con->prepare("SELECT * FROM employees");
                    $stmt->execute();
                    $rows_employees = $stmt->fetchAll();

                    ?>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Співробітники</h6>
                            </div>
                            <div class="card-body">

                                <a href="employees.php?do=Add" class="btn btn-success btn-sm" style="margin-bottom: 10px;">
                                    <i class="fa fa-plus"></i>
                                    Додати співробітника
                                </a>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Ім'я</th>
                                                <th scope="col">Прізвище</th>
                                                <th scope="col">Номер телефону</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Керувати</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($rows_employees as $employee)
                                                {
                                                    echo "<tr>";
                                                        echo "<td>";
                                                            echo $employee['first_name'];
                                                        echo "</td>";
                                                        echo "<td>";
                                                            echo $employee['last_name'];
                                                        echo "</td>";
                                                        echo "<td>";
                                                            echo $employee['phone_number'];
                                                        echo "</td>";
                                                        echo "<td>";
                                                            echo $employee['email'];
                                                        echo "</td>";
                                                        echo "<td>";
                                                            $delete_data = "delete_employee_".$employee["employee_id"];
                                                    ?>
                                                        <ul class="list-inline m-0">


                                                            <li class="list-inline-item" data-toggle="tooltip" title="Edit">
                                                                <button class="btn btn-success btn-sm rounded-0">
                                                                    <a href="employees.php?do=Edit&employee_id=<?php echo $employee['employee_id']; ?>" style="color: white;">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                </button>
                                                            </li>


                                                            <li class="list-inline-item" data-toggle="tooltip" title="Delete">
                                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#<?php echo $delete_data; ?>" data-placement="top"><i class="fa fa-trash"></i></button>


                                                                <div class="modal fade" id="<?php echo $delete_data; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $delete_data; ?>" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Видалити співробітника</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                            Ви впевнені, що хочете видалити цього співробітника?                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Відмінити</button>
                                                                                <button type="button" data-id = "<?php echo $employee['employee_id']; ?>" class="btn btn-danger delete_employee_bttn">Видалити</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    <?php
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                elseif($do == 'Add')
                {
                    ?>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Додати нового співробітника</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="employees.php?do=Add">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="employee_fname">Ім'я</label>
                                            <input type="text" class="form-control" value="<?php echo (isset($_POST['employee_fname']))?htmlspecialchars($_POST['employee_fname']):'' ?>" placeholder="Ім'я" name="employee_fname">
                                            <?php
                                                $flag_add_employee_form = 0;
                                                if(isset($_POST['add_new_employee']))
                                                {
                                                    if(empty(test_input($_POST['employee_fname'])))
                                                    {
                                                        ?>
                                                            <div class="invalid-feedback" style="display: block;">
                                                                Необхідно вказати ім'я.
                                                            </div>
                                                        <?php

                                                        $flag_add_employee_form = 1;
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="employee_lname">Прізвище</label>
                                            <input type="text" class="form-control" value="<?php echo (isset($_POST['employee_lname']))?htmlspecialchars($_POST['employee_lname']):'' ?>" placeholder="Прізвище" name="employee_lname">
                                            <?php
                                                if(isset($_POST['add_new_employee']))
                                                {
                                                    if(empty(test_input($_POST['employee_lname'])))
                                                    {
                                                        ?>
                                                            <div class="invalid-feedback" style="display: block;">
                                                                Необхідно вказати прізвище.
                                                            </div>
                                                        <?php

                                                        $flag_add_employee_form = 1;
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="employee_phone">Номер телефону</label>
                                            <input type="text" class="form-control" value="<?php echo (isset($_POST['employee_phone']))?htmlspecialchars($_POST['employee_phone']):'' ?>" placeholder="Номер телефону" name="employee_phone">
                                            <?php
                                                if(isset($_POST['add_new_employee']))
                                                {
                                                    if(empty(test_input($_POST['employee_phone'])))
                                                    {
                                                        ?>
                                                            <div class="invalid-feedback" style="display: block;">
                                                                Необхідно вказати номер телефону.
                                                            </div>
                                                        <?php

                                                        $flag_add_employee_form = 1;
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="employee_email">Email</label>
                                            <input type="text" class="form-control" value="<?php echo (isset($_POST['employee_email']))?htmlspecialchars($_POST['employee_email']):'' ?>" placeholder="E-mail" name="employee_email">
                                            <?php
                                                if(isset($_POST['add_new_employee']))
                                                {
                                                    if(empty(test_input($_POST['employee_email'])))
                                                    {
                                                        ?>
                                                            <div class="invalid-feedback" style="display: block;">
                                                              Необхідно вказати Email.
                                                            </div>
                                                        <?php

                                                        $flag_add_employee_form = 1;
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="add_new_employee" class="btn btn-primary">Додати співробітника</button>

                            </form>

                            <?php


                                if(isset($_POST['add_new_employee']) && $_SERVER['REQUEST_METHOD'] == 'POST' && $flag_add_employee_form == 0)
                                {
                                    $employee_fname = test_input($_POST['employee_fname']);
                                    $employee_lname = $_POST['employee_lname'];
                                    $employee_phone = test_input($_POST['employee_phone']);
                                    $employee_email = test_input($_POST['employee_email']);

                                    try
                                    {
                                        $stmt = $con->prepare("insert into employees(first_name,last_name,phone_number,email) values(?,?,?,?) ");
                                        $stmt->execute(array($employee_fname,$employee_lname,$employee_phone,$employee_email));

                                        ?>
                                            <!-- SUCCESS MESSAGE -->

                                            <script type="text/javascript">
                                                swal("New Employee","The new employee has been inserted successfully", "success").then((value) =>
                                                {
                                                    window.location.replace("employees.php");
                                                });
                                            </script>

                                        <?php

                                    }
                                    catch(Exception $e)
                                    {
                                        echo "<div class = 'alert alert-danger' style='margin:10px 0px;'>";
                                            echo 'Error occurred: ' .$e->getMessage();
                                        echo "</div>";
                                    }

                                }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                elseif($do == 'Edit')
                {
                    $employee_id = (isset($_GET['employee_id']) && is_numeric($_GET['employee_id']))?intval($_GET['employee_id']):0;

                    if($employee_id)
                    {
                        $stmt = $con->prepare("Select * from employees where employee_id = ?");
                        $stmt->execute(array($employee_id));
                        $employee = $stmt->fetch();
                        $count = $stmt->rowCount();

                        if($count > 0)
                        {
                            ?>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Редагувати Співробітника</h6>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="employees.php?do=Edit&employee_id=<?php echo $employee_id; ?>">
                                        <!-- Employee ID -->
                                        <input type="hidden" name="employee_id" value="<?php echo $employee['employee_id'];?>">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="employee_fname">Ім'я</label>
                                                    <input type="text" class="form-control" value="<?php echo $employee['first_name'] ?>" placeholder="Ім'я" name="employee_fname">
                                                    <?php
                                                        $flag_edit_employee_form = 0;
                                                        if(isset($_POST['edit_employee_sbmt']))
                                                        {
                                                            if(empty(test_input($_POST['employee_fname'])))
                                                            {
                                                                ?>
                                                                    <div class="invalid-feedback" style="display: block;">
                                                                          Необхідно вказати ім'я.
                                                                    </div>
                                                                <?php

                                                                $flag_edit_employee_form = 1;
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="employee_lname">Прізвище</label>
                                                    <input type="text" class="form-control" value="<?php echo $employee['last_name'] ?>" placeholder="Прізвище" name="employee_lname">
                                                    <?php
                                                        if(isset($_POST['edit_employee_sbmt']))
                                                        {
                                                            if(empty(test_input($_POST['employee_lname'])))
                                                            {
                                                                ?>
                                                                    <div class="invalid-feedback" style="display: block;">
                                                                          Необхідно вказати прізвище.
                                                                    </div>
                                                                <?php

                                                                $flag_edit_employee_form = 1;
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="employee_phone">Номер телефону</label>
                                                    <input type="text" class="form-control" value="<?php echo $employee['phone_number'] ?>"  placeholder="Номер телефону" name="employee_phone">
                                                    <?php
                                                        if(isset($_POST['edit_employee_sbmt']))
                                                        {
                                                            if(empty(test_input($_POST['employee_phone'])))
                                                            {
                                                                ?>
                                                                    <div class="invalid-feedback" style="display: block;">
                                                                          Необхідно вказати номер телефону.
                                                                    </div>
                                                                <?php

                                                                $flag_edit_employee_form = 1;
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="employee_email">Email</label>
                                                    <input type="text" class="form-control" value="<?php echo $employee['email'] ?>" placeholder="E-mail" name="employee_email">
                                                    <?php
                                                        if(isset($_POST['edit_employee_sbmt']))
                                                        {
                                                            if(empty(test_input($_POST['employee_email'])))
                                                            {
                                                                ?>
                                                                    <div class="invalid-feedback" style="display: block;">
                                                                          Необхідно вказати Email.
                                                                    </div>
                                                                <?php

                                                                $flag_edit_employee_form = 1;
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="edit_employee_sbmt" class="btn btn-primary">
                                            Редуагувати співробітника
                                        </button>
                                    </form>
                                    <?php
                                        if(isset($_POST['edit_employee_sbmt']) && $_SERVER['REQUEST_METHOD'] == 'POST' && $flag_edit_employee_form == 0)
                                        {
                                            $employee_fname = test_input($_POST['employee_fname']);
                                            $employee_lname = $_POST['employee_lname'];
                                            $employee_phone = test_input($_POST['employee_phone']);
                                            $employee_email = test_input($_POST['employee_email']);
                                            $employee_id = $_POST['employee_id'];

                                            try
                                            {
                                                $stmt = $con->prepare("update employees set first_name = ?, last_name = ?, phone_number = ?, email = ? where employee_id = ? ");
                                                $stmt->execute(array($employee_fname,$employee_lname,$employee_phone,$employee_email,$employee_id));

                                                ?>
                                                    <!-- SUCCESS MESSAGE -->

                                                    <script type="text/javascript">
                                                        swal("Employee Updated","The employee has been updated successfully", "success").then((value) =>
                                                        {
                                                            window.location.replace("employees.php");
                                                        });
                                                    </script>

                                                <?php

                                            }
                                            catch(Exception $e)
                                            {
                                                echo "<div class = 'alert alert-danger' style='margin:10px 0px;'>";
                                                    echo 'Error occurred: ' .$e->getMessage();
                                                echo "</div>";
                                            }

                                        }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                        else
                        {
                            header('Location: employees.php');
                            exit();
                        }
                    }
                    else
                    {
                        header('Location: employees.php');
                        exit();
                    }
                }
            ?>
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

<?php
    session_start();

    $pageTitle = 'Employees Schedule';

    include 'connect.php';
    include 'Includes/functions/functions.php';
    include 'Includes/templates/header.php';

    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

    if(isset($_SESSION['username_beauty_salon_Xw211qAAsq4']) && isset($_SESSION['password_beauty_salon_Xw211qAAsq4']))
    {
?>
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Розклад майстрів</h1>
            </div>


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Графік майстрів</h6>
                </div>
                <div class="card-body">
                    <div class="sb-entity-selector" style="max-width:300px;">
                        <form action="employees-schedule.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="emloyee_schedule_select">
                                    Виберіть співробітника для налаштування графіку:
                                </label>
                                <div style="display:inline-block;margin-bottom: 10px;">
                                    <?php
                                        $stmt = $con->prepare('select * from employees');
                                        $stmt->execute();
                                        $employees = $stmt->fetchAll();

                                        echo "<select class='form-control' name='employee_selected'>";
                                            foreach ($employees as $employee)
                                            {
                                                echo "<option value=".$employee['employee_id']." ".((isset($_POST['employee_selected']) && $_POST['employee_selected'] == $employee['employee_id'])?'selected':'').">".$employee['first_name']." ".$employee['last_name']."</option>";
                                            }
                                        echo "</select>";
                                    ?>
                                </div>
                                <button type="submit" name="show_schedule_sbmt" class="btn btn-primary">Показати графік</button>
                            </div>
                        </form>
                    </div>

                    <div class="alert alert-info">
                      Зробіть налаштування тижня тут. Просто виберіть час початку та закінчення, щоб налаштувати робочий час співробітників.
                    </div>



                    <div class="sb-content" style="min-height: 500px;">
                        <?php


                            if(isset($_POST['show_schedule_sbmt']))
                            {
                        ?>
                                <form method="POST" action="employees-schedule.php">
                                    <input type="hidden" name="employee_id" value="<?php echo $_POST['employee_selected'];?>" hidden>
                                    <div class="worktime-days">
                                        <?php
                                            $employee_id = $_POST['employee_selected'];
                                            $stmt = $con->prepare('select * from employees e, employees_schedule es where es.employee_id = e.employee_id and e.employee_id = ?');
                                            $stmt->execute(array($employee_id));
                                            $employees = $stmt->fetchAll();

                                            $days = array("1"=>"Понеділок",
                                                "2"=>"Вівторок",
                                                "3"=>"Середа",
                                                "4"=>"Четвер",
                                                "5"=>"П'ятниця",
                                                "6"=>"Субота",
                                                "7"=>"Неділя") ;

                                            $av_days = array();
                                            foreach($employees as $employee)
                                            {
                                                $av_days[] = $employee['day_id'];
                                            }

                                            foreach($days as $key => $value)
                                            {
                                                echo "<div class='worktime-day row'>";

                                                if(in_array($key,$av_days))
                                                {
                                                    echo "<div class='form-group  col-md-4'>";
                                                        echo "<input name='".$value."' id='".$key."' class='sb-worktime-day-switch' type='checkbox' checked>";
                                                        echo "<span class='day-name'>";
                                                            echo $value;
                                                        echo "</span>";
                                                    echo "</div>";

                                                    foreach($employees as $employee)
                                                    {
                                                        if(in_array($key,$av_days) && $employee['day_id'] == $key)
                                                        {
                                                            echo "<div class='time_ col-md-8 row'>";
                                                            echo "<div class='form-group col-md-6'>";
                                                            echo "<input type='time' name='".$value."-from' value='".$employee['from_hour']."' class='form-control'>";
                                                            echo "</div>";
                                                            echo "<div class='form-group col-md-6'>";
                                                            echo "<input type='time' name='".$value."-to' value='".$employee['to_hour']."'  class='form-control'>";
                                                            echo "</div>";
                                                            echo "</div>";

                                                        }

                                                    }
                                                }
                                                else
                                                {
                                                    echo "<div class='form-group  col-md-4'>";
                                                    echo "<input name='".$value."' id='".$key."' class='sb-worktime-day-switch' type='checkbox'>";
                                                    echo "<span class='day-name'>";
                                                    echo $value;
                                                    echo "</span>";
                                                    echo "</div>";

                                                    echo "<div class='time_ col-md-8 row' style='display:none;'>";
                                                    echo "<div class='form-group col-md-6'>";
                                                    echo "<input type='time' name='".$value."-from' value = '09:00' class='form-control'>";
                                                    echo "</div>";
                                                    echo "<div class='form-group col-md-6'>";
                                                    echo "<input type='time' name='".$value."-to' value = '18:00' class='form-control'>";
                                                    echo "</div>";
                                                    echo "</div>";

                                                }

                                                echo "</div>";
                                            }
                                        ?>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" name="save_schedule_sbmt" class="btn btn-info">Зберегти графік</button>
                                    </div>
                                </form>
                        <?php
                            }
                        ?>
                    </div>

                    <?php


                        if(isset($_POST['save_schedule_sbmt']))
                        {
                            $days = array("1"=>"Понеділок",
                               "2"=>"Вівторок",
                               "3"=>"Середа",
                               "4"=>"Четвер",
                               "5"=>"П'ятниця",
                               "6"=>"Субота",
                               "7"=>"Неділя") ;
                            $stmt = $con->prepare("delete from employees_schedule where employee_id = ?");
                            $stmt->execute(array($_POST['employee_id']));

                            foreach($days as $key=>$value)
                            {
                                if(isset($_POST[$value]))
                                {
                                    $stmt = $con->prepare("insert into employees_schedule(employee_id,day_id,from_hour,to_hour) values(?, ?, ?,?)");
                                    $stmt->execute(array($_POST['employee_id'],$key,$_POST[$value.'-from'],$_POST[$value.'-to']));

                                    $message = "Ви успішно оновили графік роботи співробітників!";

                                    ?>

                                        <script type="text/javascript">
                                            swal("
Встановити розклад співробітників","Ви успішно встановили графік роботи співробітників!", "успіх").then((value) => {});
                                        </script>

                                    <?php
                                }
                            }
                        }
                    ?>
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

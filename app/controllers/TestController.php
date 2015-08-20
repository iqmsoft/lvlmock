<?php

class TesterController extends BaseController
{


    public function test1()
    {
        return View::Make('layoutTest.content');
    }

    public function test2()
    {
        return View::Make('apps.dailyPaperwork.critCountLanding');
    }

    public function test3()
    {
        return View::Make('apps.dailyPaperwork.critCount.critCountInsert');
    }

    public function test4()
    {
        return View::Make('apps.checklists.hospCompl');
    }

    public function testSybase()
    {

        //$dataTableArray = array();
        // $employees = EmpDef::all();
        //var_dump($employees);
        //die();

        /*$rConnection = odbc_connect('micros', 'custom', 'custom');
        if($rConnection === false) {
           throw new ErrorException(odbc_errormsg());
        }

        $rResult = odbc_prepare($rConnection, "SELECT * FROM micros.emp_status WHERE tm_clk_status = 'I';");
        if($rResult === false) {
            throw new ErrorException(odbc_errormsg());
        }

        if(odbc_execute($rResult, array('0001-01-01 00:00:00.000000')) === false) {
           throw new ErrorException(odbc_errormsg());
        }*/
        $rConnection = odbc_connect('micros', 'custom', 'custom');
        $query = "SELECT * FROM micros.emp_status WHERE tm_clk_status = 'I';";
        $rResult = odbc_exec($rConnection, $query);
        # fetch the data from the database
        while (odbc_fetch_row($rResult)) {
            $clockEmp = odbc_result($rResult, 1);
            $query2 = "SELECT first_name, last_name FROM micros.emp_def WHERE emp_seq = $clockEmp;";
            $rResult2 = odbc_exec($rConnection, $query2);
            $firstRow = odbc_fetch_array($rResult2, 0);
            print_r($firstRow['first_name'] . ' ' . $firstRow['last_name'] . ' <br> ');
        }
        die();
        $conn = odbc_connect('micros', 'custom', 'custom');
        $query = 'SELECT * FROM micros.emp_def';
        $results = odbc_prepare($conn, $query);
        $goTime = odbc_execute($results);
        foreach (odbc_result($results, 'first_name') as $result) {
            print_r($result);
        }
        die();
        $dataTableArray = array();
        $employees = EmpDef::all();
        //Construct Data Table
        foreach ($employees as $employee) {
            $dataTableArray['data'][] = array(
                'first' => $employee->name
            );
        }
        print_r(json_encode($dataTableArray));
        die();
        //return json_encode($dataTableArray);
    }

    public function testPhoto()
    {
        return View::Make('apps.photoTest');
    }


}

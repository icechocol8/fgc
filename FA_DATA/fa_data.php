<span id="search-result"></span>
<h3> FA DATA LIST</h3>
<div id="subcontent">
    <table id="data-list">
        <tr>
            <th>ID</th>
            <th>Movement Date</th>
            <th>Asset Tag</th>
            <th>Asset Type</th>
            <th>Workstation</th>
            <th>Site</th>
            <th>Assignee</th>
            <th>Account/Department</th>
            <th>Function</th>
            <th>Manager</th>
            <th>Designation</th>
            <th>WS Designation</th>
        </tr>
        <?php
        $count = 1;
        $fdata_list = $fdata->list_fdata();
        if ($fdata_list !== false) {
            foreach ($fdata_list as $value) {
              
                if (is_array($value)) {
                    $mvmntdate = $value['MovementDate'];
                    $assettag = $value['AssetTag'];
                    $assettype = $value['AssetType'];
                    $workstation = $value['Workstation'];
                    $site = $value['Site'];
                    $assignee = $value['Assignee'];
                    $acc = $value['AccountDepartment'];
                    $function = $value['Function'];
                    $manager = $value['Manager'];
                    $designation = $value['Designation'];
                    $wsdesignation = $value['WSDesignation'];
                ?>
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $mvmntdate; ?></td>
            <td><?php echo $assettag; ?></td>
            <td><?php echo $assettype; ?></td>
            <td><?php echo $workstation; ?></td>
            <td><?php echo $site; ?></td>
            <td><?php echo $assignee; ?></td>
            <td><?php echo $acc; ?></td>
            <td><?php echo $function; ?></td>
            <td><?php echo $manager; ?></td>
            <td><?php echo $designation; ?></td>
            <td><?php echo $wsdesignation; ?></td>
        </tr>
        <?php
                    $count++;
                }
            }
        } else {
            echo "<tr><td colspan='12'>No Record Found.</td></tr>";
        }
        ?>
    </table>
</div>
</span>

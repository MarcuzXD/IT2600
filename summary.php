<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Summary</title>
</head>
<body>
<div style="margin: 0 auto;width: 400px;border: 1px solid black;padding: 30px">
        <?php
                if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $major = $_POST['major'];
                        $fav_language = $_POST['fav_language'];
                        $environment = $_POST['environment'];
                        $environment_selected = '';
                        $othername = '';
                        if(!empty($environment)){
                                foreach($environment as $selected){
                                        if($selected != 'other'){
                                                $environment_selected .= $selected;
                                        }else{
                                                $othername = 'Other : '.$_POST['othername'];
                                        }
                                }
                        }
                }
        ?>
        <table width="100%">
                <tr>
                        <th colspan="2">Summary</th>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                        <th align="left">Name: </th>
                        <td><?php echo $name; ?></td>
                </tr>
                <tr>
                        <th align="left">Major :</th>
                        <td><?php echo $major; ?></td>
                </tr>
                <tr>
                        <th align="left">Favorite Web Language : </th>
                        <td><?php echo $fav_language; ?></td>
                </tr>
                <tr>
                        <th align="left">Development Environment :</th>
                        <td><?php echo $environment_selected; ?></td>
                </tr>
                <tr>
                        <th>&nbsp;</th>
                        <td><?php echo $othername; ?></td>
                </tr>
        </table>
</div>
</body>
</html>

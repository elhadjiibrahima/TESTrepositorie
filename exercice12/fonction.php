<?php
function testDeSaisie($n){
    if(isset($_POST['btn'])){
        if(empty($_POST['langue'])){
            header('location:index.php');
        }
        elseif($_POST['langue']=='francais' || $_POST['langue']=='Francais'){
            echo '<table>
            <tr>
                <td>janvier</td>
                <td>fevrier</td>
                <td>mars</td>
            </tr>
            <tr>
                <td>avril</td>
                <td>mai</td>
                <td>juin</td>
            </tr>
            <tr>
                <td>juillet</td>
                <td>aout</td>
                <td>septembre</td>
            </tr>
            <tr>
                <td>octobre</td>
                <td>novembre</td>
                <td>decembre</td>
            </tr>
        </table>';
        }
        elseif($_POST['langue']=='anglais' || $_POST['langue']=='Anglais'){
            echo  '  <table>
            <tr>
                <td>january</td>
                <td>february</td>
                <td>march</td>
            </tr>
            <tr>
                <td>april</td>
                <td>may</td>
                <td>june</td>
            </tr>
            <tr>
                <td>july</td>
                <td>august</td>
                <td>september</td>
            </tr>
            <tr>
                <td>october</td>
                <td>november</td>
                <td>december</td>
            </tr>
        </table>';
        }
        else{
            header('location:index.php');
        }

        
    }
}



?>
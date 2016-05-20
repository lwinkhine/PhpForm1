<?php


echo "姓名". $_POST['sirname'] ;
echo  $_POST['name'] ."<br />\n";
echo $_POST['address']."<br />\n";
echo $_POST['yourname']."<br />\n";
echo $_POST['com']."<br />\n";
echo $_POST['category']."<br />\n";
echo $_POST['question']."<br />\n";


if(isset($_POST['send'])){
$selected_radio = $_POST['gender'];
if ($selected_radio == 'male') {
                echo "男";
          }else if ($selected_radio == 'female') {
                echo "女";
          }
          else if ($selected_radio == 'unknown') {
              echo "不明";
        }


    }

$ks=array("セキュリティについて","アカウントの削除","利用方法");
foreach($ks as $k){
echo("<option value='".$k."'</option>");

    }

 ?>

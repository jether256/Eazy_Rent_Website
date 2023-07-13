<?php


header("Access-Control-Allow-Origin: *");

require('../dbconnection.php');

//$uid=mysqli_real_escape_string($con,$_POST['id']);


$list=array();
$po="select * from category";
$cat=mysqli_query($con,$po);

while ($row_category=mysqli_fetch_array($cat)) {
    // $id_category=$row_category['id'];
    // $key['id']=$id_category;
    // $name=$row_category['name'];
    // $key['namee']=$name;
    // $key['pic']=$row_category['pic'];


    $key['id']=$row_category['id'];
    $name=$row_category['name'];
    $key['name']=$name;
    $key['pic']=$row_category['pic'];


    $key['house']=array();


    $house="select * from house where  type='$name'";
    $ko=mysqli_query($con,$house);

    while ($row_house=mysqli_fetch_array($ko)) {

        $key['house'][]=array(
            'ID'=>$row_house['ID'],
            'user_id'=>$row_house['user_id'],
            'owner'=>$row_house['owner'],
            'phone'=>$row_house['phone'],
            'bizname'=>$row_house['bizname'],
            'num'=>$row_house['num'],
            'mail'=>$row_house['mail'],
            'image1'=>$row_house['image1'],
            'image2'=>$row_house['image2'],
            'image3'=>$row_house['image3'],
            'image4'=>$row_house['image4'],
            'image5'=>$row_house['image5'],
            'title'=>$row_house['title'],
            'price'=>$row_house['price'],
            'descc'=>$row_house['descc'],
            'adu'=>$row_house['adu'],
            'lat'=>$row_house['lat'],
            'lon'=>$row_house['lon'],
            'place'=>$row_house['place'],
            'bed'=>$row_house['bed'],
            'bath'=>$row_house['bath'],
            'fun'=>$row_house['fun'],
            'con'=>$row_house['con'],
            'bsqft'=>$row_house['bsqft'],
            'csqft'=>$row_house['csqft'],
            'floors'=>$row_house['floors'],
            'kitchen'=>$row_house['kitchen'],
            'paid'=>$row_house['paid'],
            'start'=>$row_house['start'],
            'end'=>$row_house['end'],
            'blocked'=>$row_house['blocked'],
            'type'=>$row_house['type'],
            'pro_id'=>$row_house['pro_id'],
        );
        // code...
    }

    array_push($list,$key);
    // code...
}

echo json_encode($list);

?>
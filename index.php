<?php
$team_1_data =["Canadian",3];
echo $team_1_data [0];
$team_1_data=[
    "name"=> "canadian",
    "score"=>3,
    "url" => "www.lionsIndomptables.com"
];
$team_2_data=[
    "name"=> "togo", 
    "score"=>2,
    "url"=>"www.Togo.com"
];

var_dump($team_2_data);
print_r($team_2_data);
echo $team_2_data["name"];
//var_dump($team_2_data[0]);
echo "<br><br>";
foreach($team_2_data as $data)
{
echo "<br><br>";
echo $data;
}
$team_3_data=[
    "name"=> "Mali", 
    "score"=>2,
    "url"=>"www.mali.com"
];
$teams=[$team_1_data,$team_2_data,$team_3_data];
var_dump($teams);
foreach($teams as $data)
var_dump ($data);
if ("score" ==2){
    var_dump($teams);
}
?>
<li> l equipe du <?php echo$data["name"]?>
a <?php echo$data["score"]?> points</li>
<?php
$team_4_data=[
    "name" => "Rwanda",
    "score"=>9,
    "url" => "www.rwanda.com"
];
array_push($teams,$team_4_data);
echo "<br>";
echo "<br>";



function showTeams($teams){
    //var_dump($teams);
?>

<table border=2>
    <thead>
        <td> nom</td>
        <td> score</td>
        <td>url</td>
</thead>
<tbody>
<?php


foreach($teams as $teamData){
    ?>
    <tr>
        <td><?php echo $teamData["name"];?></td>
        <td><?php echo $teamData["score"];?></td>
        <td><?php echo $teamData["url"];?></td>
    </tr>
    <?php
}
?>
</tbody>
</table>


<?php
}
showTeams($teams);





function addTeam($teams,$newTeams)
{
    array_push($teams,$newTeams);
    var_dump($teams);
   // showTeams($teams);
    return $teams;
}
$newTeams=[
    "name" => "senegal",
    "score"=>34,
    "url" => "www.senegal.com"
];

 $teams = addTeam($teams,$newTeams);
showTeams($teams);

//function delete($teams, $team_name){
    foreach($teams as $teamData){
        if($teamData['name']=='Mali'){
            unset($teamData['name'],$teamData['score'],$teamData['url']);
            echo("delete la team");
        showTeams($teams);
        var_dump($teams);
        }
        
    }
//echo("**************************************************************************************")
function delTeam(&$teams,$team_name){
    foreach($teams as $key => $team){
        if($team['name']==$team_name){
            unset($teams[$key]);
        }
    }
}
delTeam($teams,'Mali');
showTeams($teams);
var_dump($teams);

//echo(*****************************************************************);
function update(&$teams,$newInfo,$team_name){
    foreach($teams as $key => $team){
        if($team['name']==$team_name){
        $team=["name"=>$newInfo['newName'],
                "score"=>$newInfo['newScore'],
                "url"=>$newInfo['newUrl'],
        ];
        
            $teams[$key]=$team;
        }
    }
}
$newInfo=[
    "newName"=>"Rwanda",
    "newScore"=>12,
    "newUrl"=>"rwanda.com"
];
update($teams,$newInfo,'Rwanda');

showTeams($teams);
















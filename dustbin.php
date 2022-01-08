$stmt = $conn->prepare("insert into akash(first, last , email, password, address, contact ,city ,state ,zip)values(?, ?, ?, ?, ?, ?, ?, ?, ?)");

$conn = new mysqli('localhost','root','','database');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
$stmt->bind_param('sssssissi', $first, $last , $email, $password, $address, $contact, $city, $state, $zip);
$execval = $stmt->execute(); 
		echo $execval;
		echo "Order Succesfully Placed";
		$stmt->close();
		$conn->close();
<?php
 





  $sql = "INSERT INTO  (first, last, email, password, cpassword, address, contact, city, state) values ('akash', 'gaikwad', 'akg@gmail.com', 'asd', 'asd', 'asd123', '1234567890', 'pune', 'Maharashtra');";
  mysqli_query($conn, $sql);
?>
CREATE TABLE `akash` (
`id` int(12) AUTO_INCREMENT PRIMARY KEY not null
,`first` varchar(50)
,`last` varchar(35)
,`email` varchar(50)
,`password` varchar(40)
,`address` varchar(100)
,`contact` bigint(10)
,`city` varchar(10)
,`state` varchar(10)

);
CREATE TABLE `sendmail` (
`id` int(12) AUTO_INCREMENT PRIMARY KEY not null
,`first` varchar(50)

,`email` varchar(50)

,`problem` varchar(100)


);


TERMS AND CONDITIONS
Entry to the event commences at 12:30 PM.
This ticket admits only one person and shall be produced to exchange for a wristband.
Wristbands are non-transferable and must be worn at all times during the event. Wristbands removed or misplaced shall not be reissued under any circumstances.
Any person found to be attending the event without a valid wristband and ticket shall not be permitted.
Tickets once purchased shall not be refundable whatsoever.
Tickets shall be valid only if purchased through official agents. Tickets purchased through unauthorized agents shall not be valid and entry shall be denied to the event.
Person above the age of 12 years will need to purchase ticket. Persons below the age of 12 years may attend the event without purchasing a ticket but accompanied by an adult. The organizers strongly recommend NOT to bring children below the age of 12 years into the festival grounds for safety reasons. The festival does not provide facilities for young children.
There shall be no re-entry to festival grounds.
The event shall at all times be subject to Force Majeure events and for which the organizers shall not be responsible for in any manner whatsoever including without any limitation to its postponement, cancellation or changes in the schedule.
The event shall be subject to necessary security procedures as the organizers deem fit and which shall include checking of personal belonging and body frisking.
No alcohol will be served to persons below the Legal Drinking Age (LDA). Persons of LDA shall be provided with some form of authorization upon producing a valid photo ID. In the interest of the health and safety persons consuming alcoholic drinks at the event are advised to use public transport or assign a designated driver.
It’s not permitted for persons of the LDA to purchase alcoholic drinks for persons below the LDA. Any breach of such condition will result in removal of both from the event.
Artist programming and line-up is subject to change during the festival.
Carrying and consumption of banned articles, substances including bottled water, alcohol, cigarettes and outside food shall not be permitted at the event.
SulaFest is a drug-free event. Consumption and possession of any form of intoxicants will result in removal of the person consuming/carrying the same from the event and shall be handed over to the concerned authorities.
The organizers are not liable for any food/beverage liability claims.
Although the organizers shall have basic minimal first aid/medical facilities at the event, it shall not be responsible/liable for any serious ailments which may require hospitalization.
The organizers shall be recording the event through variety of AV means and which it may also telecast in the media. Persons attending the event hereby extend the consent to such recordings/telecast.
Only vendors authorized by the organizers shall be permitted to advertise/trade their goods/services at the event
Under no circumstances any person attending the event shall possess in any form/place any object/weapon that may have the potential to cause any bodily injury. No person attending the event shall in any manner vandalize/cause damage to any location/part of the event.
The organizers shall not be responsible for any theft/loss, harm, injury that may be caused to any person at the event in any manner.
The organizers shall in no manner be responsible for any theft/damage caused to their vehicles parked in the designated area.
Strobe lighting at this event may trigger epileptic fits. Likewise, the event shall use the amplified sound performances at high volumes. Persons attending the event are requested to safeguard themselves from such extreme forms of lighting/audio.
The organizers reserve the exclusive rights to decline entry to any person in breach of any terms and conditions of the event with or without refund of the ticket price.
Areas of the festival are built to capacity. Organizers reserve the rights to hold entry to certain areas within the festival to ensure a safe festival experience.
Persons attending the event shall abide by all the instructions of the organizers.
Cost of the ticket is inclusive of 28% GST (14% CGST and 14% SGST). GSTIN of Sula Vineyards Private Limited is 27AABCN7126Q1ZY
Any disputes arising out of or concerning the event shall be subject to the jurisdiction of the competent courts in Nashik










<?php 

    if(isset($_POST['submit']))

    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];
        

         $addition =  $number1*$number2; 

         $addition = $addition+109; 
echo "" .$addition;

	           
}

?> 
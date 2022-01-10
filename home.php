<?php
session_start();

if(isset($_SESSION['sesname']) && isset($_SESSION['sespass'])){
    } 
else {
    header('location: logout.php');
}
?>

<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="popover.js" type="text/javascript"></script>

	<title>HEALTH CENTERS MANAGEMENT SYSTEM</title>
    
    
<style>

* {
    margin: 0;
    padding: 0;
}


body{
    margin: 0px;
    padding: 0px;
}

#header{
  width: 100%;
  height: 120px;
  background: #424242; 
  color: white; 
  list-style-type: none;
}

#sidebar{
  width: 280px;
  height: 729px;
  background: rgba(0,0,0,.8);
  color: white;
  float: left;  
} 

#data{
  height: 760px; 
  background-image: url(images/pills.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}  

#adminLogo{
  background: white;
  border-radius: 55px;
  padding: 15px;
}

p{
    margin-left: 10px;
    font-family: sans-serif;
    font-size: 15px;
    color: khaki;
    padding: 10px;
}

ul li{
    padding: 20px;
    margin-left: 3px;
    border-bottom: 2px solid white;
    color: white;
    text-decoration: none;
    font-family: century gothic;
}

ul li:hover{
    background: #fff;
    color: black;
    display: block;
}

a{
   text-decoration: none;
   color: white; 
}

.pops a{
   text-decoration: none;
   color: blue; 
}

h2{
  position: absolute;
  top: 140px;
  left: 370px;
  font-family: century gothic;
  font-size: 25px;  
}

h1{
  position: absolute;
  top: 40px;
  left: 40px;
  font-family: serif;
  color: #fff;
  font-size: 25px;  
}

h4 {
    padding: 5px;
}

button  {
    position: absolute;
    top: 40px;
    left: 1080px;
    margin: 3px;
    padding: 10px 15px;
    background: #FF8C00;
    color: #000;
    border-radius: 6%;
	border: none;
    text-decoration: none;
	font-family: century gothic;
}

button:hover{
    cursor: pointer;
    background: #fff;
	color: #000;
}

.box {
	position: absolute;
	top: 35%;
	left: 45%;
	transform: translate(-50%,-50%);
	width: 390px;
	padding: 35px;
	background: #FF8C00;
	box-sizing: border-box;
	box-shadow: 0 8px 15px rgba(0,0,0,.5);
	border-radius: 10px;
}

.box h3 {
	margin: 0 0 5px;
	padding: 0;
	color: #000;
}

.box input[type="submit"]
{
	background: transparent;
	border: none;
	outline: none;
	background: rgba(0,0,0,.8);
  color: #fff;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 5px;
}

#box {
	position: absolute;
	top: 35%;
	left: 80%;
	transform: translate(-50%,-50%);
	width: 390px;
	padding: 35px;
	background: #228B22;
	box-sizing: border-box;
	box-shadow: 0 8px 15px rgba(0,0,0,.5);
	border-radius: 10px;
}

.row {
	position: absolute;
	top: 60%;
	left: 45%;
	transform: translate(-50%,-50%);
	width: 390px;
	padding: 35px;
	background: #228B22;
	box-sizing: border-box;
	box-shadow: 0 8px 15px rgba(0,0,0,.5);
	border-radius: 10px;
}

#box h3 {
	margin: 0 0 5px;
	padding: 0;
	color: #fff;
}

.box input:hover[type="submit"]
{
	background: #228B22;
    color: white;
}

#box input[type="submit"]
{
	background: transparent;
	border: none;
	outline: none;
	background: rgba(0,0,0,.8);
  color: #fff;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 5px;
}

#box input:hover[type="submit"]
{
	background: #FF8C00;
    color: #000;
}

.row input[type="submit"]
{
	background: transparent;
	border: none;
	outline: none;
	background: rgba(0,0,0,.8);
  color: #fff;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 5px;
}

.row input:hover[type="submit"]
{
	background: #FF8C00;
    color: #000;
}

.row h3 {
	margin: 0 0 5px;
	padding: 0;
	color: #fff;
}

#row {
	position: absolute;
	top: 60%;
	left: 78%;
	transform: translate(-50%,-50%);
	width: 555px;
	padding: 35px;
	background: #FF8C00;
	box-sizing: border-box;
	box-shadow: 0 8px 15px rgba(0,0,0,.5);
	border-radius: 10px;
}

div#footer {
    position: absolute;
    top: 849px;
    width: 100%;
    height: 4.5vh;
     background: #424242; 
    text-align: center;
    color: white;
}

.popover {
    position: absolute;
    display: none;
    z-index: 2;
    height: 520px;
    width: 1080px;
    padding: 40px;
    margin-left: 99px;
    color: #000;
    background-color: #fff;
    border-radius: 10px;
}

</style>
    
</head>

<body>

<div id="header">

<h1>HEALTH CENTERS MANAGEMENT SYSTEM</h1>

<a href="index.html"><button type="submit">Logout</button></a>

<center>

<img src="images/admin.jpg" width="50px" height="55px" alt="adminLogo" id="adminLogo"/><br />Welcome to Admin Panel
</center>

<a href="index.html"><button type="submit">Logout</button></a>

</div>

<div id="sidebar">
<p>COMMUNITY HEALTH DIVISIONS</p>

<ul>
<a href="javascript:showPopOver('pop1')"><li>Reproductive Health</li></a>
<a href="javascript:showPopOver('pop2')"><li>Child Health</li></a>
<a href="javascript:showPopOver('pop3')""><li>Environmental Health</li></a>
<a href="javascript:showPopOver('pop4')""><li>Veterinary Public Health</li></a>
<a href="javascript:showPopOver('pop5')""><li>Non Communicable Diseases</li></a>
<a href="javascript:showPopOver('pop6')""><li>Vector Borne Disease Control</li></a>
<a href="javascript:showPopOver('pop7')""><li>Health Education and Promotion</li></a>
<a href="javascript:showPopOver('pop8')""><li>Village Health Teams (VHTs)</li></a>
<a href="javascript:showPopOver('pop9')""><li>Control of Emergencies</li></a>
</ul><br />

    <div id="pop1" class="popover pops" align="left">
        <b>REPRODUCTIVE HEALTH</b><br /><br />
        One interpretation of reproductive health, or sexual health 
        implies that men and women ought to be informed of and to have access to safe, effective, affordable and acceptable methods of birth control; also access to appropriate health care services of sexual, reproductive medicine and implementation of health education programs to stress the importance of women to go safely through pregnancy and childbirth. This provides couples with the best chance of having a healthy infants. It is the policy of the Government of Uganda to enhance the reproductive health status of all Ugandans by increasing equitable access to reproductive health services and by improving the quality, efficiency and effectiveness of the services at all levels. <br />
        <b>Mandate:</b><br /> The Reproductive Health division  guides planning, standardization, implementation and monitoring and evaluation of reproductive health services provided by the Government, Non Governmental Organizations (NGOs), faith-based organizations (FBOs), community-based organizations (CBOs), private for-profit sectors and communities in Uganda.
        <br /><br />
    <a href="javascript:closePopOver('pop1');">CLOSE</a>
    </div> 

	<div id="pop2" class="popover pops" align="left">
        <b>CHILD HEALTH</b><br /><br />
        The Child Health division is majorly concerned with the health of newborns and children (0 to 5 years and below). Children represent the future, and ensuring their healthy growth and development ought to be a prime concern of all societies. Newborns are particularly vulnerable and children are vulnerable to malnutrition and infectious diseases, many of which can be effectively prevented or treated.<br /><br />
        <b>Mandate:</b><br /><br />
        To promote child and newborn survival, growth and development. To scale-up and sustain high effective coverage of a priority package of cost-effective child, newborn survival and development interventions through three service delivery modes at family-oriented, community-based services, population-oriented, schedulable services and individually-oriented clinical services. The Child Health department also works closely with integrated Community Case Management (iCCM) – part of the Integrated Management of Childhood Illness (IMCI) strategy, where Village Health Teams (VHTs) offer curative treatments for malaria, diarrhea and pneumonia to children (0-5 years and below) at community level. Village Health Teams (VHTs) are a non-statutory community structure where each village chooses people from their own communities to promote the health and wellbeing of that community. VHT members per village are trained in the VHT basic package, which includes disease prevention, health promotion, health education, community mobilization, and the promotion of good hygiene and sanitation practices. They also distribute condoms, an effort towards improving sexual and reproductive health in these communities as well as medicines. 
        <br /><br />
    <a href="javascript:closePopOver('pop2');">CLOSE</a>
    </div> 

    <div id="pop3" class="popover pops" align="left">
        <b>ENVIRONMENTAL HEALTH</b><br /><br />
        The improvement of environmental health aims to contribute to the reduction of morbidity, mortality and disability among the people of Uganda through improvements in housing, use of safe water, food hygiene promotion, waste management and control of vectors/vermin.<br />
        Considerable progress is made in the development of strategies, guidelines and legislation (notably on sanitation and food hygiene), and steps are taken to improve national and district-level monitoring of progress in environmental health, with proformas developed for monitoring household hygiene and sanitation practices. In addition, various categories of district staff are trained in water quality surveillance techniques and in information management. Emphasis is placed on capacity building support for environmental health and sanitation.<br /><br />
        <b>Specific Targets:</b><br />
          i) Improvement in safe waste disposal using latrine coverage as proxy from 57% to 80%.<br />
          ii) To increase the proportion of districts implementing Water quality surveillance and promotion of safe water consumption from 18% to 100%.<br /><br />
          <b>Core Interventions:</b><br />
          • Promotion of the Declaration on Sanitation in all districts<br />
          • Formulation of appropriate by-laws and regulation for improved environmental health<br />
          • Training extension workers engaged in hygiene promotion<br />
          • Water quality surveillance. 

        <br /><br />
        <a href="javascript:closePopOver('pop3');">CLOSE</a>
    </div> 

    <div id="pop4" class="popover pops" align="left">
        <b>VETERINARY PUBLIC HEALTH</b><br /><br />
        The mandate of Veterinary Public Health (VPH) unit is to prevent and mitigate the impact of zoonotic diseases thereby improving the health of the population of Uganda. The most notable are; highly Pathogenic Avian influenza (H5N1), pandemic influenza H1N1, Severe Acute Respiratory Syndrome (SARS), Bovine Spongiform Encephalopathy / variant-Creutzfeld-Jakob Disease (Mad Cow Disease).<br />
        In Uganda, outbreaks of Ebola Heamorrhagic fever (HF) and Marburg HF have occurred with increasing frequency in the last two decades. There has also been a re-emergency of anthrax and plague which occur sporadically in wildlife and domestic animals and they occasionally spill over and spread into the human populations. At the same time, long established zoonotic diseases such as rabies, bovine Tb, brucellosis, cysticercosis and hydatidosis have remained endemic among the population in most developing countries including Uganda.<br /><br />
        <b>Veterinary Public Health programme has the following indicators;</b><br />
        • Zoonotic diseases technical guidelines developed and disseminated by 2016/2017.<br />
        • The proportion of General Hospitals and Regional Referral Hospitals conducting proper laboratory diagnosis of brucellosis increased by 20% and 50% by 2017 respectively.

        <br /><br />
        <a href="javascript:closePopOver('pop4');">CLOSE</a>
    </div> 

    <div id="pop5" class="popover pops" align="left">
        <b>NON COMMUNICABLE DISEASES</b><br /><br />
        Non Communicable diseases (NCDs), also known as chronic or life style diseases are diseases that are not easily transferable from one person to another either through direct contact or vectors; they are increasingly becoming common in Uganda due to unhealthy lifestyles that we are adopting.<br /><br />
        <b>The common types of Non Communicable Diseases are:</b><br />
        • Diabetes<br />
        • Cancers<br />
        • Cardiovascular diseases ( like heart attacks and strokes)<br />
        • Chronic respiratory diseases ( such as chronic obstructed pulmonary disease and asthma)<br />
        • Sickle cell Anaemia</b><br /><br />
        <b>Behavioral / Modifiable Risk Factors include:</b><br />
        • Tobacco use<br />
        • Physical inactivity<br />
        • Unhealthy diet<br />
        • Harmful use of alcohol<br />
        • Stress
        <br /><br />
        <a href="javascript:closePopOver('pop5');">CLOSE</a>
    </div> 

    <div id="pop6" class="popover pops" align="left">
        <b>VECTOR BORNE DISEASE CONTROL</b><br /><br />
        <b>Mandate:</b><br />
        The mandate of the Vector Control Division is to provide a service for the protection of the health of the people of Uganda from vector borne diseases through the application of safe, effective, appropriate and sustainable vector control measures to the people of Uganda. This service is the control of vectors and vector borne diseases with special emphasis on Neglected Tropical Diseases.<br /><br /> 
        <b>Burden of vectors and vector borne diseases</b><br />
        The whole country is afflicted by disease vectors. Malaria is the most common vector-borne disease and is endemic throughout the country, with 95% of the population at risk. Schistosomiasis (Bilharzia) is endemic in 73 districts,  Onchocerciasis in 36 districts, Lymphatic Filariasis is endemic in 54 districts, Trachoma in 36 districts, Sleeping sickness in 40 districts Five hundred thousand people are at risk of plague in Northwestern Uganda whereas Kal Azar is endemic in Northeastern part of the country.
        <br /><br />
        <b>Key functions of the vector control Division:</b><br />
        • To develop policies, standards and guidelines related to vectors and vector borne disease control.<br />
        • Investigate, analyze and disseminate information on vectors and vector borne disease control.<br />
        • Resource mobilization for control of vectors and vector borne diseases.<br />
        • To control and/or eliminate vectors and vector borne diseases.<br />
        • Capacity building of other stakeholders in the control of vectors and vector borne diseases.<br />
        • Monitor and evaluate activities of vector and vector borne disease control programmes including pesticide efficacy.<br />
        • Collaborate with other institutions and sectors on training, operational research and surveillance on vectors and vector borne diseases.

        <br /><br />
        <a href="javascript:closePopOver('pop6');">CLOSE</a>
    </div> 

    <div id="pop7" class="popover pops" align="left">
        <b>HEALTH EDUCATION AND PROMOTION  </b><br /><br />
        Health Promotion and Education unit supports all other elements to achieve their objectives. Its main objective is to increase community awareness and health literacy on disease prevention and promotion, promote public participation and involvement in health care delivery, increase demand and utilization of the services provided by the sector. This should result in adoption of appropriate healthy lifestyles and health-seeking behaviour.<br />
        The implementation of health promotion and education was envisaged as cardinal to the attainment of the overall health sector mandate.
        The sector strategy for reaching the communities and households is the establishment of Village Health Teams (VHT) in all villages in Uganda. Community participation and empowerment is the strategy for enabling communities to take responsibility for their own health and well-being and to participate actively in the management of their local health services.<br /><br />
        <b>Specific Targets of the Health promotion and education unit include;</b><br />
        i) To increase the proportion of districts with trained VHTs from 31% to 100% by 2020
        <br />
        ii) To maintain the proportion of health facilities and community institutions with health promotion materials (IEC) at 100%<br />
        iii) To increase the proportion of political and religious and cultural institutions promoting health by 50%<br />
        iv) To increase the proportion of population seeking health services according to national standards by 30%<br />
        v)  80% of media institutions having own health promoting programmes.<br /><br />
        <b>Core interventions by the unit:</b><br />
        • Intensify health awareness and behaviour change for health promotion<br />
        • Strengthen community capacity for health promotion and improved health service delivery with emphasis on the roles of women and men.<br />
        • Advocate for participation of political, religious and cultural institutions in promoting health programmes<br />
        • Strengthen interface between service providers and consumers<br />
        • Monitor and evaluate health promotion interventions. 
 
 
        <br /><br />
        <a href="javascript:closePopOver('pop7');">CLOSE</a>
    </div> 

    <div id="pop8" class="popover pops" align="left">
        VHT / COMMUNITY HEALTH EXTENSION WORKERS<br /><br />
        Village Health Teams (VHTs) are a non-statutory community structure where each village chooses people from their own communities to promote the health and wellbeing of that community. VHT members per village are trained in the VHT basic package, which includes disease prevention, health promotion, health education, community mobilization, and the promotion of good hygiene and sanitation practices.<br /><br />
        <b>Mandate</b><br />
        The mandate of this section is to strengthen access to and provision of quality health services to individuals, households and communities through active engagement and participation of individuals and communities.<br /><br />
        <b>Objectives of the section</b><br />
        • Ensure training of VHTs in all the villages in Uganda<br />
        • Monitor and supervise community health services provided by the VHTs and Community Health Extension Workers (CHEWs)<br />
        • Participate in the development of electronic data registers for the CHEWs and VHTs
        • Develop, produce and distribute educational tools needed by the CHEWs and VHTs to perform their work<br />
        • Mobilize resources to procure equipment and tools for the CHEWs<br />
        • Coordinate with key stake holders involving provision of community health<br /> 
        •  Produce and disseminate reports on community health services provided by the VHTs and the CHEWs<br />
        • Village Health Teams (VHTs) are community volunteers who are identified by their community members and are given basic training on major health programs so that they can in turn mobilize and sensitize communities to actively participate in utilizing the available health services.<br />
        • The VHTs also act as n important link between the communities and health facilities. VHTs also provide treatment of uncomplicated diseases like Malaria, Pneumonia, Worm infestations, Diahhorea, Mass drug administration for Neglected Tropical Diseases, etc.
        <br />
        • They further participate in mobilizing communities during specific health campaigns and contribute to community disease surveillance through active data collection and reporting.
        <br /><br />
        <a href="javascript:closePopOver('pop8');">CLOSE</a>
    </div> 

    <div id="pop9" class="popover pops" align="left">
        <b>PUBLIC HEALTH EMERGENCIES (PHE)</b><br /><br />
        Uganda has witnessed a number of natural and human induced disasters many of which have an impact on health of the communities and are referred to as Public Health Emergencies (PHE). The PHE culminate into the loss of life, ill-health, destruction of property and population displacements.  Notable among the PHE are the disease epidemics (Ebola and other hemorrhagic fevers, cholera, yellow fever, epidemic meningitis, malaria epidemics, etc); internal displacements; floods; landslides and earthquakes.<br /><br />
        <b>Mandate</b><br />
        The mandate of PHE section is prevention, preparedness, mitigation and control of health related disasters such as epidemics and other PHE named above in collaboration with other departments of the MoH, other government sectors and health stakeholders.<br /> 
        <b>The section coordinates the implementation of the following tasks;</b><br />
        1. Before occurrence of the PHE or Health related disaster<br />
        • Participate in risk assessments to identify hazards, vulnerabilities, high risk groups and local capacities<br />
        • Development / update of the national health sector  public health emergency (disaster) risk management contingency plans<br />
        • Sharing early warning information on PHE with districts / communities<br />
        • Build capacity of the districts for prevention and preparedness planning for PHE with focus on the first level communities / households<br />
        • Prepositioning of PHE medical supplies and equipment in high risk districts/ communities<br />
        2. During PHE<br />
        • Conduct community needs assessments and continuous monitoring during a disaster<br />
        • Provide priority health care services including participating in rescue, treatment of the injured and the sick, referral of the victims / patients needing advanced care, behavior change communication, and health promotion and education.<br />
        • In collaboration with other departments and stakeholders monitor the environment and communities to ensure timely resource mobilization for priority interventions (health care including psychosocial services and community support)
        <br /><br />
        <a href="javascript:closePopOver('pop9');">CLOSE</a>
    </div> 

</div>


<div id="data"><br />

<h2>ADMIN | PANEL</h2>


<div class="box">
		<h3>District Health Centers</h3><br />
		<a href="hc_centers.php"><input type="submit" name="" value="Click here"></a>
        
</div>

<div id="box">
		<h3>Medical Officers</h3><br />
		<a href="medical_staff.php"><input type="submit" name="" value="Click here"></a>
</div>      

<div class="row">
		<h3>Patients' Records & Appointments</h3><br />
		<a href="patientspanel.php"><input type="submit" name="" value="Click here"></a>
</div>


<div id="footer">

<h4>&copy; HCMS by jessy 2021- All Rights Reserved</h4>

</div>  


</body>
</html>
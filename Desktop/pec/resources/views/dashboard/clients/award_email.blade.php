<html>
<head>

</head>
<body>
 <style>
    table {
      width: auto;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
<div class="container">


<h2>Project Details:</h2>
  <img src="https://egateway.pec.org.pk/public/assets_website/img/award.jpeg" alt="" style="text-align: center"> 

<div class="container">


<h5>Dear <?php echo $name ?>, </h5>
<p> We are delighted to inform you that the prestigious <?php echo $title; ?> has been awarded to you by PEC-E-Gateway! Congratulations on this well-deserved achievement.</p>
<p> Project Details: </p>

</div>

<table style="">
  <tr>
    <th>Project Title</th>
    <th><?php echo $title; ?></th>
    
  </tr>
  <tr>
    <td>Disciplines</td>
    <td><?php echo $disciplinies ?></td>
    
  </tr>
  <tr>
    <td>Summary</td>
    <td> <?php echo $summary ?> </td>
    
  </tr>
  <tr>
    <td>Country Assignment</td>
    <td><?php echo $country_assignment ?></td>
    
  </tr>
<tr>
    <td>Technical Queries</td>
    <td><?php echo $technical_queries ?></td>
    
  </tr>
<tr>
    <td> Specific Experience</td>
    <td><?php echo $specific_experience.''.($expert) ?></td>
    
  </tr>
<tr>
    <td> Schedule</td>
    <td><?php echo $schedule ?> </td>
    
  </tr>
<!--<tr>-->
<!--    <td>Total Inputs</td>-->
<!--    <td>  [to be provided by the client]</td>-->
    
<!--  </tr>-->
<tr>
    <td>Contract Type</td>
    <td> <?php echo $contract ?> </td>
    
  </tr>
<tr>
    <td> Consultant Services</td>
    <td><?php echo $consultant_services ?></td>
    
  </tr>
<tr>
    <td> Estimated Date</td>
    <td><?php echo $estimated_date ?> </td>
    
  </tr>
</table>
<p>The client is thoroughly impressed with your expertise and capabilities, making you the perfect fit for this challenging project.  </p>
<p> Now that the project has been awarded to you, visit our PEC-E-Gateway website to start a conversation with the client <h5>within the ____ working days. </h5> This is an excellent opportunity to establish a strong foundation for collaboration and to clarify any project-related queries.</p>
<h5> Please access our website using the following link: https://egateway.pec.org.pk/</h5>
<p> Once you log in, navigate to the project section, and you will find all the necessary details and documents related to the Smart Home Guardian project. We urge you to thoroughly review the terms and policies, along with the technical proposal (if provided), to ensure a smooth and successful project execution.</p>
<p>If you have any questions or need further assistance, our dedicated support team is just a call or email away. Feel free to reach out to us, and we will be more than happy to help. </p>
<p> We extend our heartfelt congratulations once again and look forward to witnessing your expertise shine as you embark on this exciting journey with us.</p>
<p>Wishing you the best of luck and success! </p>
<p> Warm regards,</p>
<p>PEC-E-Gateway Team </p>
<p>Contact: https://egateway.pec.org.pk/ </p>

</div>
</body>
</html>
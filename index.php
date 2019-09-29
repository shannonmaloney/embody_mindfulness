<?php
include_once('settings.php');
include_once('lib.php');

include('header.php');
?>
<div id ="header">
<div style="top:0px;float:right;margin-right:10px;color:#ccc"><a href="admin/index.php">Admin</a></div>
<h1><?php echo $title; ?></h1>
</div>

<div style="text-align:center;">
<form id="intro" method="GET" action="session.php">
<?php
$login=$pagetexts['login-dialog'];
$register=$pagetexts['register'];
?>
    <input style="font-size:12px;" name="userID" type="text" onclick="this.value=''" value="<?php echo $login;?>"> 
    <br><br><?php echo $register;?>

<div style="text-align:left;">
    <br><br>
    <h3>Section A. Privacy policy – Website</h3>
    <br>
This site is operated by the University of Oxford. We are committed to protecting the privacy and security of your personal information (‘personal data’).
This policy (together with our <a href="https://version.aalto.fi/gitlab/eglerean/embody/blob/master/LICENSE">terms of use</a>, together with any other documents referred to in it) describes how we collect and use your personal data during your use of our site, in accordance with the General Data Protection Regulation (GDPR) and associated data protection legislation. 
	<br><br>
	<h3>Section B. Who is using your personal data?</h3>
    <br>
The University of Oxford (The Chancellor, Masters and Scholars of the University of Oxford) is the “data controller" for the information that you provide to us when visiting this website. This means that we decide how to use it and are responsible for looking after it in accordance with the GDPR. Access to your personal data within the University will be provided to those staff who need to view it as part of their work in connection with the operation of this website. It will also be shared with the third parties described in Section G. 
    <br><br>
	<h3>Section C. Glossary</h3>
    <br>
Where we refer in this policy to your ‘personal data’, we mean any recorded information that is about you and from which you can be identified. It does not include data where your identity has been removed (anonymous data). On this site, you will be asked to shade two body silhouettes indicating where in the body you feel bodily sensations. You will be given a participant ID number to enter on the first page. Since your participant ID number is linked to your personal data (e.g. name, age, and gender) during the study, this is why we have this privacy notice. However, once the study is complete, this file that links your participant ID number to your personal data will be cleared from our system, unless you have consented to being contacted for future studies. Where we refer to the ‘processing’ of your personal data, we mean anything that we do with that information, including collection, use, storage, disclosure or retention. 
	<br><br>
	<h3>Section D. Types of data we collect about you</h3>
    <br>
We will collect, store, and use the following categories of data when you use our site:
<br>
Data you give us.  You may give us data about you including: 1. Participant ID number. 2. Location of bodily sensations. 3. Intensity of bodily sensation (by shading in the areas of the body silhouettes darker).
<br>
Data we collect about you.  If you consent to our use of cookies: 1. If you visit our site, we will automatically collect certain technical information, for example, the type of device (and its unique device identifier) you use to access our site, the Internet protocol (IP) address used to connect your device to the Internet, your login information, browser type and version, time zone setting, browser plug-in types and versions, operating system, mobile network information and platform. 2. We will automatically collect information about your visit to our site including the full Uniform Resource Locators (URL), clickstream to, through and from the Website (including date and time), pages you viewed, page response times, download errors, length of visits to certain pages, page interaction information (such as scrolling, clicks, and mouse-overs), and methods used to browse away from the page.
	<br><br>
	<h3>Section E. When we collect your data</h3>
    <br>
We will collect the vast majority of data about you when you enter in the webpage address when you complete the first and second lab-visit for the study. We ask that you do not access this webpage for any other purpose.  
When you visit our site we may also automatically collect technical information about your visit from your computer. Since this data will be collected during lab-visit, the computer you use should be offered by the Department of Psychiatry and should not be a personal computer. However, it is important to note that technical information is also being collected when this website is accessed.
	<br><br>
	<h3>Section F. How we use your data</h3>
    <br>
We process your data for one or more of the following reasons: The research is processed so that it may be published in academic publications, open-access journals, or websites.The University of Oxford is committed to the dissemination of its research for the benefit of society and the economy and, in support of this commitment, has established an online archive of research materials. This archive includes digital copies of student theses successfully submitted as part of a University of Oxford postgraduate degree programme. Holding the archive online gives easy access for researchers to the full text of freely available theses, thereby increasing the likely impact and use of that research. 

The research will be written up as a student’s thesis. On successful submission of the thesis, it will be deposited both in print and online in the University archives to facilitate its use in future research. If so, the thesis will be openly accessible.
We will only use your data for the purposes for which we collected it, unless we reasonably consider that we need to use it for another related reason and that reason is compatible with the original purpose. If we need to use your data for an unrelated purpose, we will seek your consent to use it for that new purpose. 
Please note that we may process your data without your knowledge or consent, in compliance with the above rules, where this is required or permitted by law.
	<br><br>
	<h3>Section G. Sharing your data with third parties</h3>
    <br>
We may share your data with third parties who provide services on our behalf, such as for administrative purposes or for data analysis.  All our third-party service providers are required to take appropriate security measures to protect your data in line with our policies. We do not allow them to use your data for their own purposes. We permit them to process your data only for specified purposes and in accordance with our instructions.
We may also share your personal data with third parties if we are under a duty to disclose or share your personal data in order to comply with any legal obligation, or in order to enforce or apply our site terms of use or to protect the rights, property or safety of our site, our users, and others.
Where your data is shared with third parties, we will seek to share the minimum amount necessary. 
	<br><br>
	<h3>Section H. Where we store or use your data</h3>
    <br>
We may store data collected by the website manually or electronically.  The data is stored on our secure servers and/or in our premises within the UK. 
 There may be occasions when we transfer your data outside the European Economic Area (EEA), for example, when we communicate with you using a cloud based service provider that operates outside the EEA such as Qualtrics. Such transfers will only take place if one of the following applies:
•	the country receiving the data is considered by the EU to provide an adequate level of data protection;
•	the organisation receiving the data is covered by an arrangement recognised by the EU as providing an adequate standard of data protection e.g. transfers to companies that are certified under the EU US Privacy Shield;
•	the transfer is governed by approved contractual clauses;
•	the transfer has your consent;
•	the transfer is necessary for the performance of a contract with you or to take steps requested by you prior to entering into that contract; or
•	the transfer is necessary for the performance of a contract with another person, which is in your interests. 

Unfortunately, the transmission of information via the internet is not completely secure.  Although we will do our best to protect your personal data, we cannot guarantee the security of data transmitted to the website and any transmission is at your own risk.
	<br><br>
	<h3>Section I. Where we store or use your data</h3>
    <br>
We will only retain your data for as long as we need it to fulfil our purposes, including any relating to legal, accounting, or reporting requirements.  
	<br><br>
	<h3>Section J. Your rights </h3>
    <br>
Under certain circumstances, by law you have the right to:
•	Request access to your data (commonly known as a "subject access request"). This enables you to receive a copy of your data and to check that we are lawfully processing it.
•	Request correction of your data. This enables you to ask us to correct any incomplete or inaccurate information we hold about you.
•	Request erasure of your data. This enables you to ask us to delete or remove your data where there is no good reason for us continuing to process it. You also have the right to ask us to delete or remove your data where you have exercised your right to object to processing (see below).
•	Object to processing of your data where we are relying on our legitimate interests (or those of a third party) and there is something about your particular situation which makes you want to object to processing on this ground. [You also have the right to object where we are processing your data for direct marketing purposes.]
•	Request the restriction of processing of your data. This enables you to ask us to suspend the processing of your data, for example if you want us to establish its accuracy or the reason for processing it.
•	Request the transfer of your data to another party. 
Depending on the circumstances and the nature of your request it may not be possible for us to do what you have asked, for example, where there is a statutory or contractual requirement for us to process your data and it would not be possible to fulfil our legal obligations if we were to stop.  However, where you have consented to the processing, you can withdraw your consent at any time by emailing us at Shannon.maloney@seh.ox.ac.uk. In this event, we will stop the processing as soon as we can.  However, this will not affect the lawfulness of any processing carried out before your withdrawal of consent and you may no longer be able to use the site in the same way as you did before. 
If you want to exercise any of the rights described above or are dissatisfied with the way we have used your information, you should contact the University’s Information Compliance Team at data.protection@admin.ox.ac.uk.   The same email address may be used to contact the University’s Data Protection Officer.  We will seek to deal with your request without undue delay, and in any event in accordance with the requirements of the GDPR. Please note that we may keep a record of your communications to help us resolve any issues which you raise.
If you remain dissatisfied, you have the right to lodge a complaint with the Information Commissioner’s Office at https://ico.org.uk/concerns/. 
	<br><br>
	<h3>Section L. Changes to this policy</h3>
    <br>
Any changes we may make to our privacy policy in the future will be posted on this page.  Please check back frequently to see any updates or changes to our privacy policy.
	<br><br>
	<h3>Section M. License for this online tool</h3>
    <br>
This website runs a unique topographical tool, called emBODY, that was developed by Nummenmaa and colleagues (2014) [see: Nummenmaa L., Glerean E., Hari R., Hietanen, J.K. (2014) Bodily maps of emotions, Proceedings of the National Academy of Sciences of United States of America doi:10.1073/pnas.1321664111 http://www.pnas.org/content/111/2/646.abstract]. This online tool has been adapted slightly, for the purpose of this study, and asks participants to shade two body silhouettes to indicate where in the body they are experiencing the most bodily sensation and the least bodily sensation before and after completing a brief mindfulness practice. This tool has silhouettes to indicate where in the body they feel the most sensation and least sensation. Perceived intensity of these sensations will also be measured (on a scale of strongest to moderate to minimal to no sensation) by asking participants to shade areas red to indicate strong, yellow to indicate moderate, purple to indicate minimal, and blue to indicate no sensation.
Here is the original licence of the emBODY tool: 
Copyright (c) 2015 Glerean
Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	<br><br>
	<h3>Section N. Contact</h3>
    <br>
If you wish to raise any queries or concerns about this privacy policy please contact us at shannon.maloney@seh.ox.ac.uk.








    <br><br>

</form>




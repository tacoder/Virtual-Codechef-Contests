<?php require("../../includes/header.php"); ?><h1>Selecting DreamSpark Volunteers</h1><div class="content">

<p> The DreamSpark Yatra is Microsoft India's initiative at driving wide-spread enthusiasm for, and awareness of the latest innovations and technology. Thousands of students across the country get to experience the latest in technology, sparking, we hope, ideas and innovation. It is also a forum that helps them decide what their career path could be. </p>
<p>DreamSpark Yatra is being carried out in 100 cities in a period of 100 days. Every MSP is trying to a host a DreamSpark Yatra in his city. To conduct a DSY MSPs need volunteers who’ll help in organizing the Sessions. Being Techno-geeks MSPs have decided to select the volunteer in an interesting way. At first all the interested volunteers will register their names with the respective MSPs. Then, the MSPs will use the following algorithm to select the team: </p>
<p> For every given name apply an StudentHashing() Function. The StudentHashing() Function produces an integer value. As a result a series of integers is obtained  corresponding to each name. The selected group of students will be a contiguous sub-group which has the maximum total value for the StudentHashing() Function. </p>
<p>The MSPHashing() Function is defined as – (((Sum of ASCII values of all characters) % 500)-250). You need to write a program that any MSP can use it to select the volunteers randomly. </p>
<p>Problem Setter: <a href="//www.facebook.com/Aasthik">Vishal Gupta</a></p>
<h3>Input:</h3>
<p> Input consists  of a and integer  ‘m’ (1&lt;=m&lt;=1000) – the number of interested candidates, followed by names of the candidates(separated by space) in new line. Each name can have a maximum of 50 characters.</p>
<h3>Ouput:</h3>
<p> Print the number of selected candidates ‘n’ (&gt;=0) in the group and the value of sum. This should be followed by the list of selected students in a new line. If more than two sub-groups are obtained with the same number of students and same sum value then print the list which comes first in the lexicographical order. Print 'Invalid' for any invalid entry. </p>
<pre>
<b>Sample Input:</b>
7
Ayush Azhar Shahzor Zeeshan Amritesh Kaustubh Akhil
20
Ayush Azhar Shahzor Zeeshan Amritesh Arjun Souptik Shahbaz Shradha Kaustubh  Akhil Prakhar Himanshu Vishal Abhinav Vishesh Sujeet Kunal Jayesh Kapil

<b>Sample Output:</b>
3 407
Amritesh Kaustubh Akhil
4 370
Kaustubh Akhil Prakhar Himanshu
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
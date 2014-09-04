<?php require("../../includes/header.php"); ?><h1>ARBITRARY PRECISION ARITHMETIC</h1><div class="content">

<p class="MsoNormal" align="center"><b><u><span>ARBITRARY PRECISION ARITHMETIC</span></u></b></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><span>Every<br />
Programming Language defines some <span class="SpellE">datatypes</span>. Most<br />
famous <span class="SpellE">datatypes</span> in the world of programming are the<br />
primitive <span class="SpellE">datatypes</span> such as Integer and Char.<br />
However, for implementation and memory management issues these sizes of these <span class="SpellE">datatypes</span> are fixed.</span></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><span>Though<br />
fixing the size of <span class="SpellE">datatypes</span> is simple, it has its own<br />
disadvantages. The two major disadvantages are Overflow and Precision-Compensation.<br />
<span> </span></span></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><span>In many<br />
Cryptographic applications and also in various mathematical applications such<br />
as calculation of values of irrational numbers such as π, it becomes<br />
necessary to override the fixed size of the <span class="SpellE">datatype</span>.<br />
This is done by the use of Arbitrary Precision Numbers, whose digits of<br />
precision are limited only by the available memory of the host system.</span></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><b><span>Your task is to write a program that adds two arbitrary precision signed<br />
numbers. </span></b></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><b><span>Note: The only allowed languages are C and C++</span></b></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><span>©Vishal Gupta</span></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><b><u><span>Input:</span></u></b></p>
<p class="MsoNormal"><span>First line contains number of test<br />
cases, integer n &lt; 20.Each test contains two signed integers on two lines of<br />
arbitrary length. Number of digits of the arbitrary precision numbers may<br />
extend <span class="SpellE">upto</span> 1000000.</span></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><b><u><span>Output:</span></u></b></p>
<p class="MsoNormal"><span>You need to print the sum of the two<br />
arbitrary precision signed numbers. </span></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><b><u><span>Sample Input:</span></u></b></p>
<p class="MsoNormal"><span>4</span></p>
<p class="MsoNormal"><span>43789743298749823748374982374</span></p>
<p class="MsoNormal"><span>-8349328423487287236483487236482734</span></p>
<p class="MsoNormal"><span>4382749374923749238749234982364</span></p>
<p class="MsoNormal"><span>-90834789348732648723</span></p>
<p class="MsoNormal"><span>-9878947468732648374</span></p>
<p class="MsoNormal"><span>48738479234239423840823</span></p>
<p class="MsoNormal"><span>-982347983479832748932748923</span></p>
<p class="MsoNormal"><span>-5664879843749837248972398472398</span></p>
<p class="MsoNormal"><span> </span></p>
<p class="MsoNormal"><b><u><span>Sample Output:</span></u></b></p>
<p class="MsoNormal"><span>-8349284633743988486659738861500360</span></p>
<p class="MsoNormal"><span>4382749374832914449400502333641</span></p>
<p class="MsoNormal"><span>48728600286770691192449</span></p>
<p class="MsoNormal"><span>-5665862191733317081721331221321</span></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>70000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
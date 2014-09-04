<?php require("../../includes/header.php"); ?><h1>Electricity Cutoff</h1><div class="content">

<p><html><br />
<body></body></html></p>
<h3>Background</h3>
<p>
During the  Electricity cutoff in United States  this winter (caused by low leves of  the hydro dams), a  scheme was developed to turn off the Electricity to areas of the country in a particular sequence, totally fair, manner. The country was divided into N regions (LA  was region number 1, and NYC number 13). A number ,k, would be picked `at random', and the Electricity would first be turned off in region 1 (clearly the fair at starting point) and then in every k'th region after that, wrapping around to 1 after N, and ignoring regions already turned off.<br />
The problem is that it is perfectly fair to turn off  electricity of NYC in  last (because, the Electricity headquarters are situated there), so for a given N, the `random' number k needs to be carefully chosen so that region 13 is the last region selected.<br />
Write a code that will take a input number of regions and then find out the smallest number k that will ensure that NYC (region 13) can have electricity  while the rest of the country is in electricity cutoff.
 </p>
<h3>Input</h3>
<p>In each line input consists of a integer N (greater than or equal to 13) and input will be terminated by a line containing 0.
</p>
<h3>Output</h3>
<p>
Output may have a single line or a series of lines, one for each line of the input. Each line will consist of the number k according to the above scheme.</p>
<h3>Constraints</h3>
<p>
Number of regions (13&lt;=N&lt;=100)
</p>
<h3>Sample Input</h3>
<pre>
17<br/>
18<br/>
0</br/></br/></pre><h3>Sample Output
<pre>7<br/>
17
</br/></pre><p>
</p>
</h3>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/opengeest">opengeest</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.013 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>5000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
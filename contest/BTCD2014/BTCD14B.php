<?php require("../../includes/header.php"); ?><h1>Irene and Fibonacci</h1><div class="content">

<p>"This is how I want you to remember me. The woman who beat you." ―Irene Adler<br />
<br /><br />
<br /><br />
Irene Adler knows very well that if there is something Sherlock isn’t good at, it is with the Fibonacci Numbers. She throws him an open challenge. She wants Sherlock to find the number of different ways in which a number <b>N</b> could be represented as sum of Fibonacci numbers, without using <b>K</b> in the representation where <b>K</b> is also a Fibonacci number.<br />
<br /><br />
<br />Two representations of a number <b>N</b> are same if the count of each distinct Fibonacci number in the representation is equal.<br />
<br /><br />
<br /></p>
<p>Sherlock now knows he is screwed. He doesn’t show it, but runs to Watson, that is you, for help. He wants you to help him out with this problem.<br />
<br /><br />
<br /> </p>
<p><b>Note</b>: The Fibonacci series does not include the number ‘0’. The series is (1,1,2,3,5,.....)</p>
<h3>Input</h3>
<p>
First line contains an integer T denoting the number of test cases.<br />
T lines follow each containing two spaced integers N and K.
 </p>
<h3>Output</h3>
<p>
For each test case, print the desired output modulo 10^9+7 in separate lines.
</p>
<h3>Constraints : </h3>
<p>
1 &lt;= T &lt;= 10^6<br />
<br /><br />
1 &lt;= N &lt;= 10^5<br />
<br /><br />
1 &lt;= K &lt;= N
</p>
<h3>Example : </h3>
<p>Input:<br />
<br /><br />
1<br />
<br /><br />
4 2<br />
 <br /><br />
<br /></p>
<p>Output :<br />
<br /><br />
2<br />
 <br /><br />
<br /></p>
<p><h3>Explanation : </h3>
</p><p>The 2 possible solutions are (1,1,1,1) and (1,3).
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vshriram93">vshriram93</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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
<?php require("../../includes/header.php"); ?><h1>Cooking Time</h1><div class="content">

<p>Chef Ali wants to cook many dishes, each of which can be cooked in a given time. So, he asked his assistant to cook those dishes which takes  minimum time to cook among the remaining dishes. Chef Ali will cook those dishes which will take maximum time to cook among the remaining dishes. You will be given the time of cooking. Your task is to find out the number of dishes cooked by Chef Ali and his assistant.</p>
<h3>Input</h3>
<p>First line contains T, the number of test cases.<br />
For each test case there are three lines, First line contains an integer n, the number of dishes to be cooked.<br />
Second line contains n integers ( d1,d2...di...dn )the cooking time of all the dishes.<br />
Third line gives the cooking time(ct).</p>
<h3>Output</h3>
<p>
For each test case output a single line containing two numbers ( space separated ), the number of dishes cooked by Ali and number of dishes cooked by Ali's assistant.</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=20<br />
1&lt;=n&lt;=1000<br />
1&lt;=di&lt;=1000<br />
0&lt;=ct&lt;=1000000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4
5 6 2 1
3
6
2 3 4 5 6 7
13


<b>Output:</b>
0 2
2 3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/deveshranjan">deveshranjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
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
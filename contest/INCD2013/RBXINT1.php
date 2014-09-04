<?php require("../../includes/header.php"); ?><h1>Communication Towers</h1><div class="content">

<p>You are given a network of wireless towers. Each tower has a range and can send data to neighboring towers as long as the distance is less than or equal to the sending tower's range.<br />
The towers are using an old communication protocol A, but there is a new, better protocol B available. We are thinking about upgrading some towers to send data using protocol B to achieve better bandwidth.<br />
There is one important restriction: if a tower T is using the new protocol B, every tower within T's range must also be running protocol B, so that they can understand the data sent from T. The reverse is not necessary — towers running the new protocol B can be sent data from towers using the old protocol A.<br />
Your task is to select the best set of towers to upgrade from protocol A to protocol B. There is some benefit to upgrading a tower, but there are also installation costs. So each tower will have a score, which can be positive or negative, which is the value of upgrading the tower. Choose the set of towers to upgrade in such a way that the total score of the upgraded towers is maximized.
</p>
<h3>Input</h3>
<p>The first line contains the number of test cases, T. Each test case starts with the number of towers, n. The following n lines each contain 4 integers: x, y, r, s. They describe a tower at coordinates x, y having a range of r and a score (value of updating to the new protocol) of s</p>
<h3>Output</h3>
<p>For each test case:<br/> Print the total score for the best choice of towers.</br/></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
0 1 7 10
0 -1 7 10
5 0 1 -15
10 0 6 10
15 1 2 -20
1
-18 81 29 22
<b>Output:</b>
5
22
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/codecheftsec">codecheftsec</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
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
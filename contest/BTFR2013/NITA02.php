<?php require("../../includes/header.php"); ?><h1>College Ground</h1><div class="content">

<p>At the function of Republic day at NIT Agartala the warden of hostel has to visit the ground and<br />
check the arrangement of the chairs for guests.<br />
In the ground of NIT Agartala all the chairs are arranged in N rows and M columns.</p>
<p>
Warden has to check that in each row all the chairs must have same color and adjacent rows have different colors chair.</p>
<h3>Input</h3>
<p>First line contains two integer N and M.<br />
Next N lines contains M values between 0 to 9 colors of chairs</p>
<h3>Output</h3>
<p>Print YES if the arrangement is good else print NO.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 6
0 0 0 0 0 0
1 1 1 1 1 1
2 2 2 2 2 2
1 1 1 1 1 1
3 3 3 3 3 3
<b>Output:</b>
YES
<b>Input:</b>
5 6
0 0 0 0 1 0
1 1 1 1 1 1
1 1 1 1 1 1
2 2 2 2 2 2
3 3 3 3 3 3
<b>Output:</b>
NO
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/upendra1234">upendra1234</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>500000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
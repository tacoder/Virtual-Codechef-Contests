<?php require("../../includes/header.php"); ?><h1>T-shirts</h1><div class="content">

<p>William works in a company producing good quality T-shirts. All different type of T-shirts has different IDs while similar T-shirts have same ID. William's task is to pack T-shirts as per the order and ship them out. One day, due to some emergency William had to leave and he realized that he wont be back until the end of the day. So he requested Bob to do the work on his behalf. But by mistake he gave Bob a wrong list of order. By chance William finished his work and noticed that he gave Bob a wrong list for packing. Now William can perform following operations :</p>
<p>ADD-Add arbitrary number of T-shirts, but the number of T-shirts added must not be more than number of T-shirts already present in the package before operation.</p>
<p>REMOVE-Remove arbitrary number of T-shirts, but the number of T-shirts that can be removed must not be more than half of the number of T-shirts already present before operation.</p>
<p>REPLACE-Replace arbitrary number of T-shirts,but the number of T-shirts that can be replaced must not be more than half the number of T-shirts already present.</p>
<p>Help William to minimize the number of operations that he has to perform to get the correct order packed and shipped.</p>
<h3>Input</h3>
<p>1st line contains number of test cases.</p>
<p>1st line of each test case will contain two integers N and M separated by spaces, where N=Number of T-shirts packed by Bob, M=Number of T-shirts to be packed as per the correct list.</p>
<p>2nd line of each test case contains N integers, each denoting the ID of T-shirts that are packed by Bob.</p>
<p>3rd line of each test case contains M integers, each denoting the ID of T-shirts to be packed as per the correct list.</p>
<h3>Output</h3>
<p>Output the minimum number of operations William has to perform to get the correct order packed and shipped out.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 1
1
0
10 10
5 2 7 65 1 1 84 8 8 11
1 1 7 2 5 8 11 8 65 84

<b>Output:</b>
2
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/illume">illume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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
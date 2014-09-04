<?php require("../../includes/header.php"); ?><h1>Secret Treasure</h1><div class="content">

<p>The treasure box is in front of you , but the problem is that it is locked with N locks .Each lock has<br />
some number written over it , say i .<br/> To get the treasure you have to find the keys of all the locks..<br />
The clue is in the series 1 , 1 , 1 , 1 , 1 , 9 , 17 , 25 , 57 , 113 , and so on.<br/> You have to find the ith<br />
number of the above series (mod 10^9+7).</br/></br/></p>
<h3>Input</h3>
<p>First Line contains the number of locks , N . Each of the following N lines contains one number i.<br />
<br/><br />
Constraints:<br/><br />
1&lt;=N&lt;=100<br/><br />
1&lt;=i&lt;=10^14<br/></br/></br/></br/></br/></p>
<h3>Output</h3>
<p>Each line should contain the ith number of the series (mod 10^9+7)<br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
1
2
3
6
8


<b>Output:</b>
1
1
1
9
25
<br/>
Explanation : 1st , 2nd and 3rd number in the series is 1,6th number in the series is 9 , 8th number is 25.<br/>
</br/></br/></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/jishnuunique">jishnuunique</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2012</td>
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
<?php require("../../includes/header.php"); ?><h1>Melisandre Hat</h1><div class="content">
<h3>Problem Statement</h3>
<p> Melisandre has got a new hat.She has <b>N</b>magic balls in front her with numbered from 1 to N. They are arranged randomly and she wants to sort it with the hat. The hat can  only span over <b>K</b> balls and she will place the hat over K balls in the arrangement. And the hat will reverse the numbers sequence on the balls , when the hat is over them . (Eg. If hat is placed over  3 balls and the hat has got 3 7 4 , then the balls will be with numbers 4 7 3 when the hat is taken) .Help her to find the minimum no of moves to make the entire sequence of the balls to be sorted in ascending order using the hat.</p>
<h3>Input</h3>
<p>The first Line contains T , the no of test cases.<br />
  Each test case has 2 lines .N and K in the first Line<br />
  N integers in the 2nd line denoting the current arrangement of balls</p>
<h3>Output</h3>
<p> Output has T lines ,with each line containing no of minimum no of moves with which she can sort the current arrangement.Print -1 , if not possible</p>
<h3>Example</h3>
<h3>Input</h3>
<pre>
4
5 4 
5 4 3 2 1
2 2
1 2	
2 2
2 1	
8 4
1 2 3 4 5 6 8 7		
</pre><h3>Output</h3>
<pre>
5
0
1
-1
</pre><h3>Constraints</h3>
<pre>
 1&lt;= N &lt;=8
 1&lt;= K &lt;= N
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arun08">arun08</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2014</td>
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
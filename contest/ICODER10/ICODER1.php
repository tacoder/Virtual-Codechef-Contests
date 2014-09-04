<?php require("../../includes/header.php"); ?><h1>A Numbers Game</h1><div class="content">

<p>Two kids John and Matthew are playing a game involving a grid of numbers where John must guess the number chosen by Matthew. The numbers are arranged in a grid. Now, inorder to predict the correct number, John asks Matthew to tell him the column number of the grid where his number lies. John then, keeping the same grid size, starts re-arranging the grid row-wise and keeps repeating the process of asking and arranging till he gets to the number. For example:
</p>
<p>
If the initial grid of numbers was:
</p>
<p>
  9     1      5<br />
  2     3      6<br />
  7    17    10<br />
13    20     4<br />
  8    11    15<br />
18    21    12<br />
14    16    19
</p>
<p>
Assuming that Matthew chose '15', which corresponds to the third column, implying that the number could be in the set { 5, 6, 10, 4, 15, 12, 19 }. To narrow down his result to one number, John arranges the numbers row-wise:
</p>
<p>
  9      2      7<br />
13     8     18<br />
14     1      3<br />
17    20    11<br />
21    16     5<br />
  6     10     4<br />
15    12    19
</p>
<p>
He again asks Matthew about the column his number corresponds to, i.e. the first column this time, this allows John to narrow down his result further to the set { 6, 15 }. He continues this column asking and row-wise arranging till he gets to the number.
</p>
<p>
Given rows and columns, what must be the number of column-asking that would assure that John is able to guess the number assuming that the initial position of the number was not known. Incase an answer is not possible print -1.
</p>
<p>
<b><br />
Notes</b></p>
<p>-	You must consider the worst position of the number i.e. the position which would require maximum number of steps.
</p>
<p>
<b><br />
Constraints</b></p>
<p>- 	Consider that the grid consists of all distinct numbers.
</p>
<h3>Input</h3>
<p>1. Number of test cases = 'T' ( 1 &lt;= T &lt;= 1000 ). T lines follow, one line for each test case.<br />
<br />
2. Each line( representing the size of the grid ) would contain rows = 'R' followed by columns = 'C'  (  1 &lt;= R &lt;= 10<sup>5</sup>, 1 &lt;= C &lt;= 10<sup>5</sup> ).
</p>
<h3>Output</h3>
<p>
1. Return the column-asking required, in order to get to the number, on a new line.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2

7 3
8 10

<b>Output:</b>
3
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/csirubix">csirubix</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
<?php require("../../includes/header.php"); ?><h1>Call Of Duty</h1><div class="content">
<h2>Problem Statement  </h2>
<p>8 snipers are present on a sniper field each out to get the other. The field can be thought of as an 8x8 grid. Hence each sniper must hide in a strategic position so as to not be seen by any other. The vision of a sniper is restricted, the sniper can see only horizontally, diagonally, and vertically.</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains two numbers separated by a blank. The numbers represent the square on which one of the eight snipers must be positioned. A valid square will be represented. It will not be necessary to validate the input. To standardize our notation, assume that the upper left-most corner of the grid is position (1,1).</p>
<ul>
<h3>Output</h3>
<p>Every solution numbered 1… N should consist of 8 numbers. These numbers represent the Row coordinate for a specific solution. The order in which these 8 numbers are printed will specify the column coordinate for the solution. That is, the first number represents the Row in which the sniper is positioned in column 1. The second number represents the Row in which the sniper is positioned in column 2, and so on.</p>
<p>(Note – Output should be strictly in the format given below. There are 6 blank spaces between the Solution number and first column. Print the solutions in lexicographical order.  )</p>
<h3>Example</h3>
<pre><b>Input:</b>
1 2

<b>Output:</b>
SOLN       COLUMN
 #      1 2 3 4 5 6 7 8

 1      3 1 7 5 8 2 4 6
 2      4 1 5 8 2 7 3 6
 3      4 1 5 8 6 3 7 2
 4      5 1 4 6 8 2 7 3
 5      5 1 8 4 2 7 3 6
 6      5 1 8 6 3 7 2 4
 7      6 1 5 2 8 3 7 4
 8      7 1 3 8 6 4 2 5

</pre><p>
<br />
<br />
<b>Note : The reference for this problem has been taken from : UVa online Judge </b>
</p>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/himanshuk123">himanshuk123</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
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
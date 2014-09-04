<?php require("../../includes/header.php"); ?><h1>Cinema Tickets</h1><div class="content">
<p>Chef likes to watch movies very much.A movie of his favorite actress has recently released and he wants to go to cinema hall with his friends to watch the movie.</p>
<p>But he will book tickets for him and his friends only if he gets the seats in his desired block size. eg. if he has 9 friends, then he has to book 10 tickets, and wants the seats to be in a rectangular block to 2 X 5. i.e if Chef has to book n number of seats, then the block of seats he would want is <b>p X q</b> where <b>p * q = n</b></p>
<p>You are given the status of all the seats(booked or not) and you have tell the Chef the number of blocks of exact size, in which all the seats in the block are not booked, and the seat number of the top left corner of the block, so that Chef could chose one of the them.(The seat number of the seats is same as the indices of  2D matrix with base index 0)</p>
<p>.</p>
<p>It might be possible that no such block of empty seats is available</p>
<p><b><br />
<h3>Input</h3>
<p></p></b></p>
<p>The first line contains the number of test cases ( 1 &lt;= t &lt;= 10).</p>
<p>First line of each test contains n and m( 1 &lt;= n,m &lt;= 1000) which is the size of cinema hall. Cinema hall contains <b>(n X m)</b> no. of seats. The next line contains by p and q separated by a space which tells the block size non-booked seats that Chef wants.</p>
<p>It is followed by n lines where each line contains m characters. A booked seat is denoted by '.' and an available seat is denoted by '#' . </p>
<p><b><br />
<h3>Output</h3>
<p></p></b></p>
<p>The first line of output of each test case should consist of the number of available blocks of empty seats( <b> e</b> ) i.e the number of blocks of p X q that have no booked seats.</p>
<p>It should be followed by <b>e</b> number of lines where each line contains a and b (0 &lt;= a &lt; n , 0 &lt;= b &lt; m) denoting the top left corner of the  block of size p X q having all seats non-booked. </p>
<p></p><p>Example</p>
<p>Input:<br />
1<br />
2 6<br />
2 3<br />
.####.<br />
.#####</p>
<p>Output:<br />
2<br />
0 1<br />
0 2
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/a_g2009">a_g2009</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2014</td>
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
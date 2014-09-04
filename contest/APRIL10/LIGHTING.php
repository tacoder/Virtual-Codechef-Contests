<?php require("../../includes/header.php"); ?><h1>Lighting the shop</h1><div class="content">

<p>The exciting World Cup 2010's summer is coming! And Johnny's family shop is busy preparing a colorful lighting board for the summer.</p>
<p>The board has a rectangular shape of size M x N. There are certain positions on the board which Johnny wants to put in light bulbs.</p>
<p>Johnny wants to decorate the board by colorful light bulbs. To make the board look attractive, he wants the bulbs in the same column or row to have different colors! On the other hand, to preserve the harmony look, Johnny doesn't want the bulbs to have many different colors.</p>
<p>Write a program to help Johnny decorate the boards in such a way that the number of color used is minimum.</p>
<h3>Input</h3>
<p>The first line contains a number t (about 15), the number of test cases. Each test case has the following form.</p>
<p>The first line contains two numbers m, n (1 ≤ m, n ≤ 700). Each line in the next m lines contains n characters<br />
'0' or '1' representing the board, in which '1' denotes a place which Johnny wants to put in a light bulb.</p>
<p>Each test case's input is separated by a blank line.</p>
<h3>Output</h3>
<p>For each test case, print the output in the following format.</p>
<p>The first line contains a number p which is the minimum number of used colors.</p>
<p>The ith line in the next m lines contain n integers, in which the jth number is the color index of the light bulb in the corresponding place, or 0 if the place does not need a light bulb. The colors are numbered from 1 to p. Your program can print any correct solution.</p>
<p>Print a blank line after each test case's output.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
1

4 4
1001
1101 
1011
1001

<b>Output</b>
4
1 0 0 2 
2 1 0 3 
3 0 1 4 
4 0 0 1 
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
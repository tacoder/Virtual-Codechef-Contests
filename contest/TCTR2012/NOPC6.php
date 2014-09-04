<?php require("../../includes/header.php"); ?><h1>Share chocolate</h1><div class="content">

<p>Chocolate in its many forms is enjoyed by millions of people around the world every day. It is a truly universal candy, available in virtually every country around the world.<br />
You find that the only thing better than eating chocolate is to share it with friends. Unfortunately, your friends are very picky and have different appetites: some would like more and others less of the chocolate that you offer them. You have found it increasingly difficult to determine whether their demands can be met. It is time to write a program that solves the problem once and for all!<br />
Your chocolate comes as a rectangular bar. The bar consists of same-sized rectangular pieces. To share chocolate, you may break one bar into two pieces along a division between rows or columns of the bar. You may then repeatedly break the resulting pieces in the same manner. Each of your friends insists on a getting a single rectangular portion of the chocolate that has a specified number of pieces. You are a little bit insistent as well: you will break up your bar only if all of it can be distributed to your friends, with none left over. </p>
<p>For example, Figure shows one way that a chocolate bar consisting of   3 &times; 4  pieces can be split into 4 parts that contain 6, 3, 2, and  11 pieces respectively, by breaking it 3 times. (This corresponds to the first sample input.) </p>
<pre>
 _ _ _ _
|_|_|_|_|
|_|_|_|_|
|_|_|_|_|

   |
   |
   v
	
 _ _ _      _
|_|_|_|     |_|
|_|_|_|     |_|
                           _ 
 _ _ _                 |_|
|_|_||_|


</pre><h3>Input</h3>
<p>
The input consists of multiple test cases, each describing a chocolate bar to share. Each description starts with a line containing a single integer n (1 &le;n &le;15), the number of parts into which the bar is supposed to be split.<br />
This is followed by a line containing two integers x and y(1 &le;x ,y  &le;&le;100), the dimensions of the chocolate bar.<br />
The next line contains n positive integers, giving the number of pieces that are supposed to be in each of the n parts.<br />
The input is terminated by a line containing the integer zero. </p>
<h3>Output</h3>
<p>For each test case, first display its case number. Then display whether it is possible to break the chocolate in the desired way: display &ldquo;Yes&rdquo; if it is possible, and &ldquo;No&rdquo;&rdquo; otherwise. Follow the format of the sample output. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
3 4
6 3 2 1
<b>Output:</b>
YES
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bestankur007">bestankur007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-03-2012</td>
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
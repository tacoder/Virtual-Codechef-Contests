<?php require("../../includes/header.php"); ?><h1>Microsoft DreamSpark Yatra Publicity</h1><div class="content">

<p>The success of an event depends deeply on the positive publicity it gets in other colleges. Some factors lead to positive publicity while others lead to the negative.Also many colleges are so tied up socially that a publicity in one spreads the news to others so it cannnot be publicized after a partner college is publicized.</p>
<p>Now, consider the fact that different colleges across India are carrying out <a href="http://www.dreamsparkyatra.com/">Microsoft DreamSpark Yatra 2011</a> in their respective campus auditoriums or townhalls.
</p><p>You have been provided with the publicity values of all the colleges as a matrix of MxN. The host college for DreamSpark Yatra to be at x,y. Each visit to publicity must be 4-connected to the current college, and the City block distance from the host college should increase by 1 at each step.</p>
<p>A City block distance is given by (|x-xi|+|y-yi|).<br/><br />
A 4-connected college in a matrix is directly adjacent to the college either up, down left or right.</br/></p>
<p>Your task is to find the maximum publicity that a DreamSpark Yatra team can get given the host college location and the publicity matrix.</p>
<p>Problem Setter: <a href= "http://www.facebook.com/shahzorkhan123">Shahzor Khan</a></p>
<h3>Input</h3>
<p>First line of Input gives T (1 &lt; T &lt; 1000), the number of test cases followed </p>
<p>by T Test Cases.<br/><br />
First line of each test case contains 4 numbers N,M(1&lt;=N,M&lt;=20) ,x(1&lt;=x&lt;=N),y</br/></p>
<p>(1&lt;=y&lt;=M) as in statement seperated by a single space.<br/><br />
The next N lines have M integers each describing the Publicity matrix. The first </br/></p>
<p>integer represents the publicity value at position (1,1).<br/></br/></p>
<h3>Output</h3>
<p>For each test case print the maximum possible value of Publicity that can be </p>
<p>done.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 4 2 2
1 5 2 7 
3 5 6 7
9 -5 3 1
7 8 0 0
2 2 1 1
5 8
9 1

<b>Output:</b>
25
15
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-04-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>